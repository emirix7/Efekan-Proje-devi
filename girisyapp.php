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
                <h2>Giriş Yap</h2>
                <form action="giris.php" method="POST">
                    <div class="form-group">
                        <label for="loginUsername">Kullanıcı Adı</label>
                        <input type="text" class="form-control" id="loginUsername" name="loginUsername">
                    </div>
                    <div class="form-group">
                        <label for="loginPassword">Şifre</label>
                        <input type="password" class="form-control" id="loginPassword" name="loginPassword">
                    </div>
                    <button type="submit" class="btn btn-primary">Giriş Yap</button>
                    <p>Hala Üye Değilmisin..? <a href="kayitol.php">Buraya Tıklayarak Kayıt Olabilirsin!</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php include'footer.php';?>