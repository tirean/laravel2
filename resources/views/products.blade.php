@extends('layout')
@section('content')

<div class="jumbotron py-5 mt-5">
  <div class="container">
    <h1 class="display-3">Our Products</h1>
    <p>We’re here to help you sleep well, to benefit your health and wellbeing.</p>
  </div>
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
    <path d="M1979,462-155,446V106C251.8,20.2,576.6,15.9,805,30c167.4,10.3,322.3,32.9,680,56,207,13.4,378,20.3,494,24"
      class="d"></path>
  </g>
  <g fill="#ffffff" class="b">
    <path d="M1998,484H-243V100c445.8,26.8,794.2-4.1,1035-39,141-20.4,231.1-40.1,378-45,349.6-11.6,636.7,73.8,828,150"
      class="d"></path>
  </g>
</svg>

</section>





<main>
  <section class="product-gallery py-5 my-5">


    <div class="col-md-12">

      <section class="image-grid">
        <div class="container-xxl">
          <div class="row gy-4">
            <div class="col-12 col-sm-6 col-md-4">
              <figure>
                <a class="d-block" href="">
                  <img width="1920" height="1280" src="{{ asset('img/gallery1.png') }}" class="img-fluid"
                    alt="Product 9">
                </a>
              </figure>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
              <figure>
                <a class="d-block" href="">
                  <img width="1920" height="1280" src="{{ asset('img/gallery6.png') }}" class="img-fluid"
                    alt="Product 2">
                </a>
              </figure>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
              <figure>
                <a class="d-block" href="">
                  <img width="1920" height="1280" src="{{ asset('img/gallery2.png') }}" class="img-fluid"
                    alt="Product 3">
                </a>
              </figure>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
              <figure>
                <a class="d-block" href="">
                  <img width="1920" height="1280" src="{{ asset('img/gallery2.png') }}" class="img-fluid"
                    alt="Product 4">
                </a>
              </figure>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
              <figure>
                <a class="d-block" href="">
                  <img width="1920" height="1280" src="{{ asset('img/gallery3.png') }}" class="img-fluid"
                    alt="Product 5">
                </a>
              </figure>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
              <figure>
                <a class="d-block" href="">
                  <img width="1920" height="1280" src="{{ asset('img/gallery4.png') }}" class="img-fluid"
                    alt="Product 6">
                </a>
              </figure>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
              <figure>
                <a class="d-block" href="">
                  <img width="1920" height="1280" src="{{ asset('img/gallery5.png') }}" class="img-fluid"
                    alt="Product 7">
                </a>
              </figure>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
              <figure>
                <a class="d-block" href="">
                  <img width="1920" height="1280" src="{{ asset('img/gallery6.png') }}" class="img-fluid"
                    alt="Product 8">
                </a>
              </figure>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
              <figure>
                <a class="d-block" href="">
                  <img width="1920" height="1280" src="{{ asset('img/gallery7.png') }}" class="img-fluid"
                    alt="Product 9">
                </a>
              </figure>
            </div>
          </div>
        </div>
      </section>

      <div class="modal lightbox-modal" id="lightbox-modal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
          <div class="modal-content">
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
              <div class="container-fluid p-0">
                <!-- JS content here -->
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  @endsection