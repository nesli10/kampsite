<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Overpass+Mono" rel="stylesheet">
<link href="assets/css/giris.css" rel="stylesheet" type="text/css" media="all" />
<div id="wrapper">
  <div class="main-content">
    <div class="header">

    </div>
    <div class="l-part">
      <form method="POST" action="{{url('adminlogin')}}">
        @csrf
        <label>Admin No</label>
        <div class="overlap-text">
          <input name="id" type="number" class="input-1" placeholder="Admin Id">
        </div>
        <label>Şifre</label>
        <div class="overlap-text">
          <input name="password" type="password" class="input-1" placeholder="Şifre" aria-label="Password" aria-describedby="password-addon">
        </div>
        <div class="text-center">
          <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0" name="adminlogin">Giriş Yap</button>
        </div>
      </form>
    </div>
  </div>
</div>