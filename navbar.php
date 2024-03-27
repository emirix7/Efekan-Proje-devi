<?php session_start();
$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
?>
<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="favicon.ico" type="image/x-icon" />

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
            <img src="logotek.png" alt="Logo" style="height: 60px;">

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php if(isset($_SESSION['username'])) {
                echo "<li class='nav-item'><a class='nav-item'> $username </a></li>";
            }
            else{

            }
             ?>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php">Anasayfa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="hakkimda.php">Hakkımda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="girisyapp.php">Kayıt Ol/Giriş Yap</a>
                    </li>
                    <?php if(isset($_SESSION['username'])) {
                    echo'<li><a class="btn btn-sm btn-success" href="chatroom.php">Sohbet Odası</a></li>';
                    }
                    else{

                    } ?>
                    <?php if(isset($_SESSION['username'])){
                        echo '<li><a class="btn btn-sm btn-danger" href="cikis.php">Çıkış Yap</a></li>';
                    }
                    else{

                    }
                     ?>

                </ul>
            </div>
        </div>
    </nav>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>