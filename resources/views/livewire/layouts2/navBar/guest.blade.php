
<nav class="navbar navbar-expand-md navbar-light text-dark bg-white sticky-top">
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <img src="images/signs.svg" style="width: 30px" >
    </button>
    <!-- Brand -->
    <a class="navbar-brand mr-auto" href="/">
      <img src="images/logo.png" title="Crestcredits" style="height: 45px"/>
    </a>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" href="/" class="active">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="/about">About Us</a></li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Legal</a>
              <div class="dropdown-menu">
                  <a href="info/terms.html" class="dropdown-item">Terms & Conditions</a>
                  <a href="faqs.html" class="dropdown-item">FAQ</a>
              <div>
          </li>
          <li class="nav-item"><a class="nav-link" href="/contact">Contact Us</a></li>
          <li class="nav-item pl-3 pl-md-2">
            <i class="fas fa-globe"></i>
            <select class="no-select" style="width: 60px; padding: 9px 0" id="language" onchange="changeLanguageByButtonClick()">
              <option value="af">Afrikanns</option>
              <option value="sq">Albanian</option>
              <option value="ar">Arabic</option>
              <option value="hy">Armenian</option>
              <option value="eu">Basque</option>
              <option value="bn">Bengali</option>
              <option value="bg">Bulgarian</option>
              <option value="ca">Catalan</option>
              <option value="km">Cambodian</option>
              <option value="zh-CN">Chinese (Mandarin)</option>
              <option value="hr">Croation</option>
              <option value="cs">Czech</option>
              <option value="da">Danish</option>
              <option value="nl">Dutch</option>
              <option value="en" selected>English</option>
              <option value="et">Estonian</option>
              <option value="fj">Fiji</option>
              <option value="fi">Finnish</option>
              <option value="fr">French</option>
              <option value="ka">Georgian</option>
              <option value="de">German</option>
              <option value="el">Greek</option>
              <option value="gu">Gujarati</option>
              <option value="he">Hebrew</option>
              <option value="hi">Hindi</option>
              <option value="hu">Hungarian</option>
              <option value="is">Icelandic</option>
              <option value="id">Indonesian</option>
              <option value="ga">Irish</option>
              <option value="it">Italian</option>
              <option value="ja">Japanese</option>
              <option value="jw">Javanese</option>
              <option value="ko">Korean</option>
              <option value="la">Latin</option>
              <option value="lv">Latvian</option>
              <option value="lt">Lithuanian</option>
              <option value="mk">Macedonian</option>
              <option value="ms">Malay</option>
              <option value="ml">Malayalam</option>
              <option value="mt">Maltese</option>
              <option value="mi">Maori</option>
              <option value="mr">Marathi</option>
              <option value="mn">Mongolian</option>
              <option value="ne">Nepali</option>
              <option value="no">Norwegian</option>
              <option value="fa">Persian</option>
              <option value="pl">Polish</option>
              <option value="pt">Portuguese</option>
              <option value="pa">Punjabi</option>
              <option value="qu">Quechua</option>
              <option value="ro">Romanian</option>
              <option value="ru">Russian</option>
              <option value="sm">Samoan</option>
              <option value="sr">Serbian</option>
              <option value="sk">Slovak</option>
              <option value="sl">Slovenian</option>
              <option value="es">Spanish</option>
              <option value="sw">Swahili</option>
              <option value="sv">Swedish </option>
              <option value="ta">Tamil</option>
              <option value="tt">Tatar</option>
              <option value="te">Telugu</option>
              <option value="th">Thai</option>
              <option value="bo">Tibetan</option>
              <option value="to">Tonga</option>
              <option value="tr">Turkish</option>
              <option value="uk">Ukranian</option>
              <option value="ur">Urdu</option>
              <option value="uz">Uzbek</option>
              <option value="vi">Vietnamese</option>
              <option value="cy">Welsh</option>
              <option value="xh">Xhosa</option>
            </select>
            </li>

             @guest
             <li class="nav-item">
             <a class="nav-link btn btn-danger" href="login">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn btn-primary" href="register">Register</a>
            </li>
             @endguest

             @auth

             @if (Auth::user()->username =='admin' || Auth::user()->level >= 3 )
             <li class="nav-item"><a class="nav-link" href="/admin/{{Auth::user()->username}}/dashboard">Admin Dashboard</a></li>

             @elseif (Auth::user()->username !='admin' || Auth::user()->level < 3)
             <li class="nav-item"><a class="nav-link" href="/user/{{Auth::user()->username}}/dashboard">Dashboard</a></li>
             @endif

             @endauth
            </ul>
  </div>
</nav>
