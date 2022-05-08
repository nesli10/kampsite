<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Overpass+Mono" rel="stylesheet">
    <link href="assets/css/giris.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
    <div id="wrapper">
        <div class="main-content">
            <div class="header">
                KULLANICI KAYIT SAYFASI
            </div>
              <form action="{{ url('userSave') }}" method="POST">
                @csrf
                <div class="xl-part">
                    <input type="text" placeholder="Ad" class="input-1" name="ad" required />
                    <input type="text" placeholder="Soyad" class="input-1" name="soyad" required />
                    <input type="email" placeholder="E-posta" class="input-1" name="eposta" required />
                        <input type="password" placeholder="şifre" class="input-2" name="sifre" required />
                    </div>
                    <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0" name="userSave">kayıt ol</button>
                </div>

            </form>
        </div>

    </div>
</body>

</html>