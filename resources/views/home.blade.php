@extends('layout')

@section('title', "Accueil")

@section('content')
<div class="wrapper bgded overlay" style="background-image:url('{{ asset("assets/wavefire/images/demo/backgrounds/01.png") }}');">
    <div id="pageintro" class="hoc clear">
      <!-- ################################################################################################ -->
      <article>
        <p>Mauris placerat sem hendrerit</p>
        <h3 class="heading">Risus aliquam vitae enim</h3>
        <p>Eu elit lacinia porta in eget risus duis pretium tellus ac odio</p>
        <footer><a class="btn" href="#">Nulla tristique ipsum <i class="fas fa-angle-right"></i></a></footer>
      </article>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row3">
    <main class="hoc container clear">
      <!-- main body -->
      <!-- ################################################################################################ -->
      <div class="sectiontitle">
        <h6 class="heading">In quam sed quis turpis vitae</h6>
        <p>Lectus vehicula tincidunt maecenas non dolor ac nunc malesuada</p>
      </div>
      <div class="group center btmspace-80">
        <article class="one_third first"><a class="ringcon btmspace-50" href="#"><i class="fas fa-cube"></i></a>
          <h6 class="heading">Elementum cras tempus</h6>
          <p>Dolor nec magna accumsan tempus mauris lectus enim luctus vitae viverra a pharetra mollis diam phasellus nec dolor sed ornare.</p>
        </article>
        <article class="one_third"><a class="ringcon btmspace-50" href="#"><i class="fas fa-chart-pie"></i></a>
          <h6 class="heading">Semper ipsum proin sapien</h6>
          <p>Nam rhoncus lacus at lorem fusce tempus ut vitae metus fusce hendrerit tempus sapien suspendisse condimentum mollis ligula.</p>
        </article>
        <article class="one_third"><a class="ringcon btmspace-50" href="#"><i class="fas fa-paw"></i></a>
          <h6 class="heading">Integer molestie sapien ac</h6>
          <p>Enim integer laoreet odio sed neque vestibulum vehicula neque et ornare congue lacus nisi pharetra nisl a pharetra urna metus.</p>
        </article>
      </div>
      <p class="center"><a class="btn" href="#">Consectetuer porttitor <i class="fas fa-angle-right"></i></a></p>
      <!-- ################################################################################################ -->
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row2">
    <section class="hoc container clear">
      <!-- ################################################################################################ -->
      <article class="one_third first">
        <h6 class="heading">Vel nunc nulla nunc metus tempor vitae eu diam</h6>
        <p>Sed placerat leo nec tincidunt aliquet ipsum mi ultrices magna eu tempor quam dolor eu sem nullam risus turpis rhoncus vel varius consequat laoreet ac neque pellentesque imperdiet sagittis velit vivamus urna ut dictum erat eu massa aliquam nunc urna ornare.</p>
        <p class="btmspace-30">Tincidunt quis posuere id justo aenean velit ipsum tincidunt aliquet lacinia nec pharetra in purus proin auctor justo ac sem.</p>
        <p><a class="btn" href="#">Donec rutrum justo at <i class="fas fa-angle-right"></i></a></p>
      </article>
      <figure class="one_third"><a class="imgover" href="#"><img src="{{ asset('assets/wavefire/images/demo/348x420.png') }}" alt=""></a></figure>
      <figure class="one_third"><a class="imgover" href="#"><img src="{{ asset('assets/wavefire/images/demo/348x420.png') }}" alt=""></a></figure>
      <!-- ################################################################################################ -->
    </section>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row3">
    <section class="hoc container clear">
      <!-- ################################################################################################ -->
      <div class="sectiontitle">
        <h6 class="heading">Libero morbi tincidunt nulla sit</h6>
        <p>Amet ipsum praesent at velit aliquam ullamcorper sem a auctor</p>
      </div>
      <ul class="nospace group btmspace-80 overview">
        <li class="one_third">
          <article><a href="#"><i class="fas fa-smile"></i></a>
            <h6 class="heading"><a href="#">Dapibus nisi nunc vehicula</a></h6>
            <p>Nunc quis mattis pede turpis at elit phasellus sed sem pellentesque nunc&hellip;</p>
            <footer><a href="#">View Details <i class="fas fa-angle-right"></i></a></footer>
          </article>
        </li>
        <li class="one_third">
          <article><a href="#"><i class="fas fa-trash"></i></a>
            <h6 class="heading"><a href="#">Dignissim consequat proin</a></h6>
            <p>Nec odio nam in lacus ac purus dapibus pretium sed ornare eleifend tellus&hellip;</p>
            <footer><a href="#">View Details <i class="fas fa-angle-right"></i></a></footer>
          </article>
        </li>
        <li class="one_third">
          <article><a href="#"><i class="fas fa-life-ring"></i></a>
            <h6 class="heading"><a href="#">Aliquam mollis neque ut</a></h6>
            <p>Ullamcorper tempor dolor tortor varius nisi id euismod risus neque curabitur&hellip;</p>
            <footer><a href="#">View Details <i class="fas fa-angle-right"></i></a></footer>
          </article>
        </li>
        <li class="one_third">
          <article><a href="#"><i class=" fas fa-low-vision"></i></a>
            <h6 class="heading"><a href="#">Sodales dui sit amet mi</a></h6>
            <p>Donec cursus sapien neque gravida nulla cursus lorem ut tempor massa &hellip;</p>
            <footer><a href="#">View Details <i class="fas fa-angle-right"></i></a></footer>
          </article>
        </li>
        <li class="one_third">
          <article><a href="#"><i class="fas fa-bug"></i></a>
            <h6 class="heading"><a href="#">Porta libero at scelerisque</a></h6>
            <p>Lorem ipsum et arcu mauris consequat semper vivamus lobortis consequat&hellip;</p>
            <footer><a href="#">View Details <i class="fas fa-angle-right"></i></a></footer>
          </article>
        </li>
        <li class="one_third">
          <article><a href="#"><i class="fas fa-bicycle"></i></a>
            <h6 class="heading"><a href="#">Purus fusce consectetuer</a></h6>
            <p>Nisl in massa phasellus feugiat arcu sed lacinia egestas augue lorem posuere&hellip;</p>
            <footer><a href="#">View Details</a> <i class="fas fa-angle-right"></i></footer>
          </article>
        </li>
      </ul>
      <footer class="center"><a class="btn" href="#">Vestibulum suspendisse <i class="fas fa-angle-right"></i></a></footer>
      <!-- ################################################################################################ -->
    </section>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row2">
    <section class="hoc container clear">
      <!-- ################################################################################################ -->
      <div class="sectiontitle">
        <h6 class="heading">Felis sed pretium tortor nunc quis</h6>
        <p>Dolor in fermentum ipsum vel mi mattis venenatis vivamus</p>
      </div>
      <div id="latest" class="group">
        <article class="one_third first"><a class="imgover" href="#"><img src="{{ asset('assets/wavefire/images/demo/348x261.png') }}" alt=""></a>
          <div class="excerpt">
            <h6 class="heading">Elementum laoreet lorem donec</h6>
            <p>Pede nam quis mauris nunc volutpat elementum sapien in hendrerit justo non nisl sed dictum libero et nisi.</p>
            <footer><a href="#">Read More <i class="fas fa-angle-right"></i></a></footer>
          </div>
        </article>
        <article class="one_third"><a class="imgover" href="#"><img src="{{ asset('assets/wavefire/images/demo/348x261.png') }}" alt=""></a>
          <div class="excerpt">
            <h6 class="heading">Vestibulum accumsan sagittis</h6>
            <p>Orci nulla purus pellentesque risus magna vulputate vitae sodales in aliquam at tortor praesent tincidunt.</p>
            <footer><a href="#">Read More <i class="fas fa-angle-right"></i></a></footer>
          </div>
        </article>
        <article class="one_third"><a class="imgover" href="#"><img src="{{ asset('assets/wavefire/images/demo/348x261.png') }}" alt=""></a>
          <div class="excerpt">
            <h6 class="heading">Lorem in odio pellentesque at</h6>
            <p>Donec faucibus lorem ut neque pellentesque quam donec imperdiet nisl sed euismod ullamcorper tortor cras.</p>
            <footer><a href="#">Read More <i class="fas fa-angle-right"></i></a></footer>
          </div>
        </article>
      </div>
      <footer class="center"><a class="btn" href="#">Pharetra pulvinar risus <i class="fas fa-angle-right"></i></a></footer>
      <!-- ################################################################################################ -->
    </section>
  </div>
@endsection
