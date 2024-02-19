@extends('front.layouts.layout')
@section('content')  
  <!--================ Hero sm Banner start =================-->        
  <section class="mb-30px">
    <div class="container">
      <div class="hero-banner hero-banner--sm">
        <div class="hero-banner__content">
          <h1>Category Page</h1>
          <nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Category Page</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--================ Hero sm Banner end =================-->      
  

  <!--================ Start Blog Post Area =================-->
  <section class="blog-post-area section-margin">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="row">
            <div class="col-md-6">
              <div class="single-recent-blog-post card-view">
                <div class="thumb">
                  <img class="card-img rounded-0" src="{{ url('front/img/blog/thumb/thumb-card1.png') }}" alt="">
                 
                </div>
                <div class="details mt-20">
                  <a href="blog-single.html">
                    <h3>ABC catgory - abc we  etc etc</h3>
                  </a>
                  <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="single-recent-blog-post card-view">
                <div class="thumb">
                  <img class="card-img rounded-0" src="{{ url('front/img/blog/thumb/thumb-card2.png') }}" alt="">
                  
                </div>
                <div class="details mt-20">
                  <a href="blog-single.html">
                    <h3>EFG catgory - etc etc etc etc </h3>
                  </a>
                  <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="single-recent-blog-post card-view">
                <div class="thumb">
                  <img class="card-img rounded-0" src="{{ url('front/img/blog/thumb/thumb-card3.png') }}" alt="">
                  
                </div>
                <div class="details mt-20">
                  <a href="blog-single.html">
                    <h3>HIJ catgory - etc etc etc etc etc</h3>
                  </a>
                  <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="single-recent-blog-post card-view">
                <div class="thumb">
                  <img class="card-img rounded-0" src="{{ url('front/img/blog/thumb/thumb-card4.png') }}" alt="">
                  
                </div>
                <div class="details mt-20">
                  <a href="blog-single.html">
                    <h3>KLM catgory - etc etc etc etc etc etc</h3>
                  </a>
                  <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="single-recent-blog-post card-view">
                <div class="thumb">
                  <img class="card-img rounded-0" src="{{ url('front/img/blog/thumb/thumb-card5.png') }}" alt="">
                  
                </div>
                <div class="details mt-20">
                  <a href="blog-single.html">
                    <h3>NOP catgory - etc etc etc etc etc</h3>
                  </a>
                  <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="single-recent-blog-post card-view">
                <div class="thumb">
                  <img class="card-img rounded-0" src="{{ url('front/img/blog/thumb/thumb-card6.png') }}" alt="">
                  
                </div>
                <div class="details mt-20">
                  <a href="blog-single.html">
                    <h3>QRS catgory - etc etc etc etc etc etc</h3>
                  </a>
                  <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="single-recent-blog-post card-view">
                <div class="thumb">
                  <img class="card-img rounded-0" src="{{ url('front/img/blog/thumb/thumb-card7.png') }}" alt="">
                 
                </div>
                <div class="details mt-20">
                  <a href="blog-single.html">
                    <h3>TUV catgory - etc etc etc etc etc etc </h3>
                  </a>
                  <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="single-recent-blog-post card-view">
                <div class="thumb">
                  <img class="card-img rounded-0" src="{{ url('front/img/blog/thumb/thumb-card8.png') }}" alt="">
                  
                </div>
                <div class="details mt-20">
                  <a href="blog-single.html">
                    <h3>WXYZ catgory - etc etc etc etc</h3>
                  </a>
                  <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>

          

          

          <div class="row">
            <div class="col-lg-12">
                <nav class="blog-pagination justify-content-center d-flex">
                    <ul class="pagination">
                        <li class="page-item">
                            <a href="#" class="page-link" aria-label="Previous">
                                <span aria-hidden="true">
                                    <i class="ti-angle-left"></i>
                                </span>
                            </a>
                        </li>
                        <li class="page-item active"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item">
                            <a href="#" class="page-link" aria-label="Next">
                                <span aria-hidden="true">
                                    <i class="ti-angle-right"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
          </div>
        </div>

        <!-- Start Blog Post Siddebar -->
        @include('front.layouts.sidebar')
        <!-- End Blog Post Siddebar -->
      </div>
  </section>
  <!--================ End Blog Post Area =================-->
@endsection