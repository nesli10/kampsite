 @php 
	use Illuminate\Support\Facades\Cache;
	$loginedUser = Cache::get("loginedUser", "");
@endphp
 
 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
     <div class="container">
         <a class="navbar-brand" href="/">Kamp Alanları</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
             aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
             <span class="oi oi-menu"></span> Menu
         </button>

         <div class="collapse navbar-collapse" id="ftco-nav">
             <ul class="navbar-nav ml-auto">
                 <li class="nav-item active"><a href="/" class="nav-link">Anasayfa</a></li>
                   @if(!empty($loginedUser))
							
									<li class="nav-item"><a href="#" class="nav-link">{{$loginedUser->ad}} {{$loginedUser->soyad}}</a></li>
									
										<li class="nav-item"><a href="/kullanicibilgi/{{ $loginedUser->kullaniciid }}"class="nav-link">Profilim</a></li>
										<li class="nav-item"><a href="/logout"class="nav-link">Çıkış yap</a></li>
									
							
							@else 
							 <li class="nav-item active"><a href="/giris" class="nav-link">giriş</a></li> 
							@endif
                
                 <li class="nav-item"><a href="adminlogin" class="nav-link">Admin</a></li>
                 <li class="nav-item"><a href="iletisim" class="nav-link">iletişim</a></li>

             </ul>
         </div>
     </div>
 </nav>
