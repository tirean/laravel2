@extends('layout')
@section('content')

</section>


<main>
  <section class="index">

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('img/banner1.png') }}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h2>10% OFF ! Colder Nights Are On The Way!</h2>
            <p>Time to invest in a warm cosy duvet!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('img/banner2.png') }}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h2>10% OFF ! Top Up For Winter!</h2>
            <p>Time to invest in a warm cosy duvet!1.5 Tog and 2.5 Tog Duvets for that extra layer of warmth!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('img/banner3.png') }}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h2>10% OFF ! Fresh Florals</h2>
            <p>Add a pop of colour to your bedroom with a beautiful traditional bedspread</p>

          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


    <svg fill="#ffffff" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"
      xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 75" class="wave d-none d-sm-block"
      style="pointer-events: none;">
      <g fill="#ffffff" class="b">
        <path
          d="M1963,327H-105V65A2647.49,2647.49,0,0,1,431,19c217.7,3.5,239.6,30.8,470,36,297.3,6.7,367.5-36.2,642-28a2511.41,2511.41,0,0,1,420,48"
          class="c"></path>
      </g>
      <g fill="#ffffff" class="b">
        <path
          d="M-127,404H1963V44c-140.1-28-343.3-46.7-566,22-75.5,23.3-118.5,45.9-162,64-48.6,20.2-404.7,128-784,0C355.2,97.7,341.6,78.3,235,50,86.6,10.6-41.8,6.9-127,10"
          class="d"></path>
      </g>
      <g fill="#ffffff" class="b">
        <path
          d="M1979,462-155,446V106C251.8,20.2,576.6,15.9,805,30c167.4,10.3,322.3,32.9,680,56,207,13.4,378,20.3,494,24"
          class="d"></path>
      </g>
      <g fill="#ffffff" class="b">
        <path
          d="M1998,484H-243V100c445.8,26.8,794.2-4.1,1035-39,141-20.4,231.1-40.1,378-45,349.6-11.6,636.7,73.8,828,150"
          class="d"></path>
      </g>
    </svg>


    <div class="texte py-5 my-5">
      <div class="container">
        <!-- START THE TEXTES -->

        <div class="row">
          <div class="col-md-7">
            <h2 class="texte-heading fw-normal lh-2 mb-4">Luxury Duvets & Pillows. <span class="secondary-color">Sleep
                well, be well.</span></h2>
            <p>Why choose Down & Feather duvet and pillows?</p>
            <p>We spend a third of our lives resting our heads on a pillow, we deserve a good one.</p>
            <p>What your pillow is filled with can make a great difference to the feel and comfort of one of the most
              important items you own that affects the quality of your sleep.</p>
            <p>Our pillows have been expertly handcrafted to achieve a luxurious, supportive and extremely comfortable
              range that will suit every sleeping style.</p>
            <p>All our pillows are made in the UK and Ireland to the highest quality standards.</p>
          </div>
          <div class="col-md-5">
            <img class="bd-placeholder-img bd-placeholder-img-lg texte-image img-fluid mx-auto"
              src="{{ asset('img/271262fca3281add0c3b82023205b7b4.jpg') }}">

          </div>
        </div>

        <hr class="texte-divider my-5">

        <div class="row">
          <div class="col-md-7 order-md-2">
            <h2 class="texte-heading fw-normal lh-2 mb-4">Discover a good night's sleep. <span
                class="secondary-color">Order Today.</span></h2>
            <p>A quality pillow will cushion your head and neck with gentle support whilst being very adaptable to the
              specific shape and weight of your head, neck and shoulders.</p>
            <p>The correct firmness of pillow will help give a comfortable, restful sleep, keeping your head, neck and
              spine aligned while sleeping.</p>
            <p>Nearly all of us switch sleeping positions through the night. However, we normally have a favourite. Your
              down and feather pillow will contour your individual head, neck and shoulders the way you choose. That's
              what makes them so comfortable.</p>
            <p>Your choice of firmness should be based on your preferred sleeping style.</p>
            <p>Our pillows come in a range of soft, medium and firm.</p>

          </div>
          <div class="col-md-5 order-md-1">
            <img class="bd-placeholder-img bd-placeholder-img-lg texte-image img-fluid mx-auto" src="{{ asset('img/img5.jpg') }}">

          </div>
        </div>

        <hr class="texte-divider my-5">



        <!-- /END THE TEXTES -->

      </div>
    </div>
  </section>

  @endsection