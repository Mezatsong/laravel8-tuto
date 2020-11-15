
<!DOCTYPE html>
<!--
Template Name: Wavefire
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Wavefire | @yield('title')</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="{{ asset('assets/wavefire/layout/styles/layout.css') }}" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <header id="header" class="hoc clear">
    <!-- ################################################################################################ -->
    <div id="logo" class="one_quarter first">
      <h1><a href="../index.html"><span>w</span>ave<span>f</span>ire</a></h1>
    </div>
    <div class="three_quarter">
      <ul class="nospace clear">
        <li class="one_third first">
          <div class="block clear"><a href="#"><i class="fas fa-phone"></i></a> <span><strong>Give us a call:</strong> +00 (123) 456 7890</span></div>
        </li>
        <li class="one_third">
          <div class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>Send us a mail:</strong> support@domain.com</span></div>
        </li>
        <li class="one_third">
          <div class="block clear"><a href="#"><i class="fas fa-clock"></i></a> <span><strong> Mon. - Sat.:</strong> 08.00am - 18.00pm</span></div>
        </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <section class="hoc clear">
    <!-- ################################################################################################ -->
    <nav id="mainav">
      <ul class="clear">
        <li><a href="{{ url('/') }}">Accueil</a></li>
        <li class="active"><a href="{{ route('test') }}">Bonjour</a></li>
        <li><a class="drop" href="#">Bonsoir</a>
          <ul>
            <li><a href="#">Level 2</a></li>
            <li><a class="drop" href="#">Level 2 + Drop</a>
              <ul>
                <li><a href="#">Level 3</a></li>
                <li><a href="#">Level 3</a></li>
                <li><a href="#">Level 3</a></li>
              </ul>
            </li>
            <li><a href="#">Level 2</a></li>
          </ul>
        </li>
        <li><a href="#">Link Text</a></li>
        <li><a href="#">Link Text</a></li>
        <li><a href="#">Link Text</a></li>
        <li><a href="#">Long Link Text</a></li>
      </ul>
    </nav>
    <!-- ################################################################################################ -->
    <div id="searchform">
      <div>
        <form action="#" method="post">
          <fieldset>
            <legend>Quick Search:</legend>
            <input type="text" placeholder="Enter search term&hellip;">
            <button type="submit"><i class="fas fa-search"></i></button>
          </fieldset>
        </form>
      </div>
    </div>
    <!-- ################################################################################################ -->
  </section>
</div>

@yield('content')


<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
    <footer id="footer" class="hoc clear">
      <!-- ################################################################################################ -->
      <div class="one_third first">
        <h6 class="heading">Nulla facilisi praesent</h6>
        <p>Diam libero interdum at fringilla id interdum eu ante phasellus nec mauris non risus fermentum condimentum in.</p>
        <p class="btmspace-30">Vulputate ante ut adipiscing egestas risus orci tincidunt nulla ac lacinia lacus felis et augue donec lacus [<a href="#"><i class="fas fa-arrow-right"></i></a>]</p>
        <ul class="faico clear">
          <li><a class="faicon-dribble" href="#"><i class="fab fa-dribbble"></i></a></li>
          <li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
          <li><a class="faicon-google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
          <li><a class="faicon-linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
          <li><a class="faicon-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
          <li><a class="faicon-vk" href="#"><i class="fab fa-vk"></i></a></li>
        </ul>
      </div>
      <div class="one_third">
        <h6 class="heading">Aenean lobortis quam at</h6>
        <ul class="nospace clear latestimg">
          <li><a href="#"><img src="{{ asset('assets/wavefire/images/demo/100x100.png') }}" alt=""></a></li>
          <li><a href="#"><img src="{{ asset('assets/wavefire/images/demo/100x100.png') }}" alt=""></a></li>
          <li><a href="#"><img src="{{ asset('assets/wavefire/images/demo/100x100.png') }}" alt=""></a></li>
          <li><a href="#"><img src="{{ asset('assets/wavefire/images/demo/100x100.png') }}" alt=""></a></li>
          <li><a href="#"><img src="{{ asset('assets/wavefire/images/demo/100x100.png') }}" alt=""></a></li>
          <li><a href="#"><img src="{{ asset('assets/wavefire/images/demo/100x100.png') }}" alt=""></a></li>
        </ul>
      </div>
      <div class="one_third">
        <h6 class="heading">Enim fusce venenatis laoreet</h6>
        <p class="nospace btmspace-15">Elit sed est tortor molestie in consectetuer fringilla suscipit ut odio in.</p>
        <form method="post" action="#">
          <fieldset>
            <legend>Newsletter:</legend>
            <input class="btmspace-15" type="text" value="" placeholder="Name">
            <input class="btmspace-15" type="text" value="" placeholder="Email">
            <button type="submit" value="submit">Submit</button>
          </fieldset>
        </form>
      </div>
      <!-- ################################################################################################ -->
    </footer>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row5">
    <div id="copyright" class="hoc clear">
      <!-- ################################################################################################ -->
      <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
      <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
  <!-- JAVASCRIPTS -->
  <script src="{{ asset('assets/wavefire/layout/scripts/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/wavefire/layout/scripts/jquery.backtotop.js') }}"></script>
  <script src="{{ asset('assets/wavefire/layout/scripts/jquery.mobilemenu.js') }}"></script>
  </body>
  </html>
