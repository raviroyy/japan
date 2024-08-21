@extends('layouts.app')
@section('content')


<main class="main">

<!-- Hero Section -->
<section id="hero" class="hero section dark-background">

  <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

  <div class="container">
    <div class="row">
      <div class="col-lg-10">
        <h2 data-aos="fade-up" data-aos-delay="100">Welcome to Our Website</h2>
        <p data-aos="fade-up" data-aos-delay="200">We are team of talented designers making websites with Bootstrap</p>
      </div>
      <div class="col-lg-5" data-aos="fade-up" data-aos-delay="300">
       
      </div>
    </div>
  </div>

</section><!-- /Hero Section -->

<!-- Clients Section -->
<section id="clients" class="clients section">

  <div class="container" data-aos="fade-up">

    <div class="row gy-4">

      <div class="col-xl-2 col-md-3 col-6 client-logo">
        <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
      </div><!-- End Client Item -->

      <div class="col-xl-2 col-md-3 col-6 client-logo">
        <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
      </div><!-- End Client Item -->

      <div class="col-xl-2 col-md-3 col-6 client-logo">
        <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
      </div><!-- End Client Item -->

      <div class="col-xl-2 col-md-3 col-6 client-logo">
        <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
      </div><!-- End Client Item -->

      <div class="col-xl-2 col-md-3 col-6 client-logo">
        <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
      </div><!-- End Client Item -->

      <div class="col-xl-2 col-md-3 col-6 client-logo">
        <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
      </div><!-- End Client Item -->

    </div>

  </div>

</section><!-- /Clients Section -->


<!-- Stats Section -->
<section id="stats" class="stats section dark-background">

  <img src="assets/img/stats-bg.jpg" alt="" data-aos="fade-in">

  <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">

      
      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
          <p>Workers</p>
        </div>
      </div><!-- End Stats Item -->

    </div>

  </div>

</section><!-- /Stats Section -->





    <div class="row gy-4 align-items-stretch justify-content-between features-item ">
      <div class="col-lg-6 d-flex align-items-center features-img-bg" data-aos="zoom-out">
        <img src="assets/img/features-light-3.jpg" class="img-fluid" alt="">
      </div>
      <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
        <h3>Sunt consequatur ad ut est nulla</h3>
        <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
        <ul>
          <li><i class="bi bi-check"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
          <li><i class="bi bi-check"></i><span> Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
          <li><i class="bi bi-check"></i> <span>Facilis ut et voluptatem aperiam. Autem soluta ad fugiat</span>.</li>
        </ul>
        <a href="#" class="btn btn-get-started align-self-start">Get Started</a>
      </div>
    </div><!-- Features Item -->

  </div>

</section><!-- /Features Section -->












</main>

@endsection