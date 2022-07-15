@extends('layouts.default')

@section('container')
    <!-- Hero Section-->
    <section style="background: url(img/it1.jpg); background-size: cover; background-position: center center" class="hero">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <h1>Wellcome To My Blog Posts</h1><a href="{{ route('posts') }}" class="hero-link">Read More</a>
            </div>
          </div>
        </div>
      </section>
      <!-- Intro Section-->
      <section class="intro">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <h2 class="h3">Some great intro here</h2>
              <p class="text-big">Place a nice <strong>introduction</strong> here <strong>to catch reader's attention</strong>. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderi.</p>
            </div>
          </div>
        </div>
      </section>
      <section class="featured-posts no-padding-top">
        <div class="container">
          <!-- Post 1-->
          <div class="row bg-light">
              <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
              <div class="text-inner d-flex align-items-center">
                  <div class="content">
                      <header class="post-header">
                        <div class="category"><a href="#">Business</a><a href="#">Technology</a></div><a href="post.html">
                          <h2 class="h4">Alberto Savoia Can Teach You About Interior</h2></a>
                      </header>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrude consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                      <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                          <div class="avatar"><img src="img/avatar-1.jpg" alt="..." class="img-fluid"></div>
                          <div class="title"><span>John Doe</span></div></a>
                        <div class="date"><i class="icon-clock"></i> 2 months ago</div>
                      </footer>
                    </div>
                  </div>
              </div>
              <div class="col-lg-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                <img src="img/featured-pic-1.jpeg" class="img-fluid" alt="">
              </div>
            </div>
  
          <!-- Post   2     -->
          <div class="row">
              <div class="col-lg-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                  <img src="img/featured-pic-2.jpeg" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
              <div class="text-inner d-flex align-items-center">
                  <div class="content">
                      <header class="post-header">
                          <div class="category"><a href="#">Business</a><a href="#">Technology</a></div><a href="post.html">
                            <h2 class="h4">Alberto Savoia Can Teach You About Interior</h2></a>
                        </header>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrude consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                        <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                            <div class="avatar"><img src="img/avatar-2.jpg" alt="..." class="img-fluid"></div>
                            <div class="title"><span>John Doe</span></div></a>
                          <div class="date"><i class="icon-clock"></i> 2 months ago</div>
                        </footer>
                    </div>
                  </div>
              </div>
            </div>
          </div>
  
          <!-- Post      3                -->
          <div class="row bg-light">
              <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
              <div class="text-inner d-flex align-items-center">
                  <div class="content">
                      <header class="post-header">
                          <div class="category"><a href="#">Business</a><a href="#">Technology</a></div><a href="post.html">
                            <h2 class="h4">Alberto Savoia Can Teach You About Interior</h2></a>
                        </header>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrude consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                        <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                          <div class="avatar"><img src="img/avatar-3.jpg" alt="..." class="img-fluid"></div>
                          <div class="title"><span>John Doe</span></div></a>
                        <div class="date"><i class="icon-clock"></i> 2 months ago</div>
                      </footer>
                    </div>
                  </div>
              </div>
              <div class="col-lg-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                <img src="img/featured-pic-3.jpeg" class="img-fluid" alt="">
              </div>
            </div>
         
      </section> 
      
      <!-- Latest Posts -->
      <section class="latest-posts"> 
        <div class="container">
          <header> 
            <h2>Latest from the blog</h2>
            <p class="text-big">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </header>
          <div class="row">
            <div class="post col-md-4">
              <div class="post-thumbnail"><a href="post.html"><img src="img/blog-1.jpg" alt="..." class="img-fluid"></a></div>
              <div class="post-details">
                <div class="post-meta d-flex justify-content-between">
                  <div class="date">20 May | 2016</div>
                  <div class="category"><a href="#">Business</a></div>
                </div><a href="post.html">
                  <h3 class="h4">Ways to remember your important ideas</h3></a>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
              </div>
            </div>
            <div class="post col-md-4">
              <div class="post-thumbnail"><a href="post.html"><img src="img/blog-2.jpg" alt="..." class="img-fluid"></a></div>
              <div class="post-details">
                <div class="post-meta d-flex justify-content-between">
                  <div class="date">20 May | 2016</div>
                  <div class="category"><a href="#">Technology</a></div>
                </div><a href="post.html">
                  <h3 class="h4">Diversity in Engineering: Effect on Questions</h3></a>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
              </div>
            </div>
            <div class="post col-md-4">
              <div class="post-thumbnail"><a href="post.html"><img src="img/blog-3.jpg" alt="..." class="img-fluid"></a></div>
              <div class="post-details">
                <div class="post-meta d-flex justify-content-between">
                  <div class="date">20 May | 2016</div>
                  <div class="category"><a href="#">Financial</a></div>
                </div><a href="post.html">
                  <h3 class="h4">Alberto Savoia Can Teach You About Interior</h3></a>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <!-- Gallery Section-->
      <section class="gallery no-padding">    
        <div class="row">
          <div class="mix col-lg-3 col-md-3 col-sm-6">
            <div class="item"><a href="img/gallery-1.jpg" data-fancybox="gallery" class="image"><img src="img/gallery-1.jpg" alt="..." class="img-fluid">
                <div class="overlay d-flex align-items-center justify-content-center"><i class="icon-search"></i></div></a></div>
          </div>
          <div class="mix col-lg-3 col-md-3 col-sm-6">
            <div class="item"><a href="img/gallery-2.jpg" data-fancybox="gallery" class="image"><img src="img/gallery-2.jpg" alt="..." class="img-fluid">
                <div class="overlay d-flex align-items-center justify-content-center"><i class="icon-search"></i></div></a></div>
          </div>
          <div class="mix col-lg-3 col-md-3 col-sm-6">
            <div class="item"><a href="img/gallery-3.jpg" data-fancybox="gallery" class="image"><img src="img/gallery-3.jpg" alt="..." class="img-fluid">
                <div class="overlay d-flex align-items-center justify-content-center"><i class="icon-search"></i></div></a></div>
          </div>
          <div class="mix col-lg-3 col-md-3 col-sm-6">
            <div class="item"><a href="img/gallery-4.jpg" data-fancybox="gallery" class="image"><img src="img/gallery-4.jpg" alt="..." class="img-fluid">
                <div class="overlay d-flex align-items-center justify-content-center"><i class="icon-search"></i></div></a></div>
          </div>
        </div>
      </section>
@endsection