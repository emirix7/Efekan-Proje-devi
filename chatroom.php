<?php include'navbar.php';?>
<?php 

$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sohbet Odası</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #343a40; /* Arka plan rengi */
            color: white; /* Metin rengi */
        }
        .chat-container {
            background-color: #212529; /* Chatbox'un arka plan rengi */
            border-radius: 10px; /* Kenar yuvarlaklığı */
            padding: 15px; /* İç boşluk */
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3); /* Gölgelendirme */
        }
        .message {
            margin-bottom: 10px; /* Mesajlar arası boşluk */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2 chat-container">
                <div id="chat-box" style="height: 300px; overflow-y: scroll;"></div>
                <form id="message-form" action="" method="post">
                    <div class="input-group mt-3">
                        <input type="text" class="form-control" name="message" placeholder="Mesajınızı Yazın...">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary">Gönder</button>
                        </div>
                    </div>
                </form>
                <div class="mt-3">
                    <button id="clear-messages" class="btn btn-danger">Temizle</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function(){

            function updateChat() {
                $('#chat-box').load('get_messages.php');
                $('#chat-box').scrollTop($('#chat-box')[0].scrollHeight);
            }


            setInterval(updateChat, 1000);

            $('#message-form').submit(function(e) {
                e.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    url: 'send_message.php',
                    type: 'POST',
                    data: formData,
                    success: function() {
                        $('#message-form')[0].reset();
                        updateChat();
                    }
                });
            });


            $('#clear-messages').click(function() {
                $.ajax({
                    url: 'clear_messages.php',
                    success: function() {
                        updateChat(); 
                    }
                });
            });
        });
    </script>
</body>
</html>

<?php include'footer.php';?>