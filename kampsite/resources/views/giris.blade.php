<!DOCTYPE html>
<html lang="en">

<head>

    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Overpass+Mono" rel="stylesheet">
    <link href="assets/css/giris.css" rel="stylesheet" type="text/css" media="all" />
    <div id="wrapper">
</head>

<body>
    <div class="main-content">
        <div class="header">

        </div>
        <div class="l-part">
            <form method="POST" action="{{ url('userLogin') }}">
                @csrf
                <label>e posta </label>
                <div class="overlap-text">
                    <input name="eposta" type="text" class="input-1" placeholder="Eposta" required>
                </div>
                <label>Şifre</label>
                <div class="overlap-text">
                    <input name="sifre" type="password" class="input-1" placeholder="Şifre" required>
                </div>
                <div class="text-center">
                    <button type="submit"   class="btn bg-gradient-info w-100 mt-4 mb-0" name="userGiris">Giriş
                        Yap</button>
                </div>
            </form>
        </div>
    </div>
    <div class="sub-content">
        <div class="s-part">
            hesabın yok mu?<a href="/kayit">kayıt ol</a>
        </div>
    </div>
    </div>
</body>

</html>