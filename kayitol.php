<?php include'navbar.php'; ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Ol / Giriş Yap</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">        
            <div class="col-md-6">
                <h2>Kayıt Ol</h2>
                <form action="kayit.php" method="POST">
                    <div class="form-group">
                        <label for="username">Kullanıcı Adı</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Şifre</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Kayıt Ol</button>
                    <p>Sisteme Üyemisin..? <a href="girisyapp.php">Buraya Tıklayarak Giriş Yap!</a></p>
                </form>
            </div>
</body>
</html>

<?php include'footer.php';?>            