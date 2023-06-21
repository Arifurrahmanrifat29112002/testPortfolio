<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Efty.me</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Sunshine - Responsive vCard Template">
    <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Sunshine, portfolio">
    <meta name="author" content="lmtheme">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/normalize.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/transition-animations.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/owl.carousel.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/animate.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/main.css" type="text/css">




    <script src="{{ asset('assets') }}/js/jquery-2.1.3.min.js"></script>
    <script src="{{ asset('assets') }}/js/modernizr.custom.js"></script>

  </head>

  <body>
    <!-- Loading animation -->
    <div class="preloader">
      <div class="preloader-animation">
        <div class="dot1"></div>
        <div class="dot2"></div>
      </div>
    </div>
    <!-- /Loading animation -->

    <div id="page" class="page">
      <!-- Header -->
      <header id="site_header" class="header">
        <div class="my-photo">
          <img src="{{ asset($profile->profile) }}" alt="image">
          <div class="mask"></div>
        </div>

        <div class="site-title-block">
          <h1 class="site-title">{{ $profile->name }}</h1>
          <p class="site-description">{{ $profile->designation }}</p>
        </div>

        <a class="menu-toggle mobile-visible">
          <i class="fa fa-bars"></i>
        </a>
      </header>
      <!-- /Header -->

      <!-- Main Content -->
      <div id="main" class="site-main">
        <!-- Page changer wrapper -->
        <div class="pt-wrapper">
          <!-- Navigation & Social buttons -->
          <div class="site-nav mobile-menu-hide">
            <!-- Main menu -->
            <ul id="nav" class="site-main-menu">
              <!-- About Me Subpage link -->
              <li>
                <a class="pt-trigger" href="#about_me" data-animation="58" data-goto="1">About me</a><!-- href value = data-id without # of .pt-page -->
              </li>
              <!-- /About Me Subpage link -->
              <li>
                <a class="pt-trigger" href="#resume" data-animation="59" data-goto="2">Resume</a>
              </li>
              <li>
                <a class="pt-trigger" href="#portfolio" data-animation="60" data-goto="3">Portfolio</a>
              </li>
              <li>
                <a class="pt-trigger" href="#contact" data-animation="58" data-goto="5">Contact</a>
              </li>
            </ul>
            <!-- /Main menu -->

            <!-- Social buttons -->
            <ul class="social-links">
              <li><a class="tip social-button" href="#" title="Github"><i class="fa fa-github"></i></a></li> <!-- Full list of social icons: http://fontawesome.io/icons/#brand -->
              <li><a class="tip social-button" href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a class="tip social-button" href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
              <!--<li><a class="tip social-button" href="#" title="Youtube"><i class="fa fa-youtube"></i></a></li>-->
              <!--<li><a class="tip social-button" href="#" title="last.fm"><i class="fa fa-lastfm"></i></a></li>-->
              <!--<li><a class="tip social-button" href="#" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>-->
            </ul>
            <!-- /Social buttons -->
          </div>
          <!-- Navigation & Social buttons -->

          <!-- Subpages -->
          <div class="subpages">
            <!-- About Me Subpage -->
            <section class="pt-page pt-page-1" data-id="about_me">
              <div class="section-title-block">
                <h2 class="section-title">About Me</h2>
                <h5 class="section-description">{{ $about->title }}</h5>
              </div>

              <div class="row">
                <div class="col-sm-12 col-md-12 mobile-visible subpage-block">
                  <div class="my-photo-small">
                    <img src="{{ asset('assets') }}/images/photo_small.jpg" alt="image">
                  </div>
                </div>
                <div class="col-sm-6 col-md-6 subpage-block">
                  <div class="general-info">
                    <h3>{{ $about->header }}</h3>
                    <p>{{ $about->description }}</p>
                  </div>
                </div>

                <!--<div class="col-sm-4 col-md-4 subpage-block">
                  <div class="block end">
                    <ul class="info-list">
                      <li><span class="title">Name</span><span class="value">Alex Smith</span></li>
                      <li><span class="title">Age</span><span class="value">29</span></li>
                      <li><span class="title">Address</span><span class="value">88 Street - State, Town</span></li>
                      <li><span class="title">e-mail</span><span class="value"><a href="mailto:email@addres.com">email@addres.com</a></span></li>
                      <li><span class="title">Phone</span><span class="value">+0123 123 456 789</span></li>
                      <li><span class="title">Freelance</span><span class="value available">Available</span></li>
                    </ul>
                  </div>
                </div>-->

                <div class="col-sm-6 col-md-6 subpage-block">
                  <div class="block-title">
                    <h3>Testimonials</h3>
                  </div>
                  <div class="testimonials owl-carousel">

                    <!-- Testimonial 1 -->
                    @foreach ($testimonials as $testimonial)
                        <div class="testimonial-item">
                        <!-- Testimonial Content -->
                            <div class="testimonial-content">
                                <div class="testimonial-text">
                                <p>"{{ $testimonial->testimonial }}."</p>
                                </div>
                            </div>

                        <!-- /Testimonial Content -->
                        <!-- Testimonial Author -->
                        <div class="testimonial-credits">
                            <!-- Picture -->
                            <div class="testimonial-picture">
                            <img src="{{ asset($testimonial->testimonial_img) }}" alt="">
                            </div>
                            <!-- /Picture -->
                            <!-- Testimonial author information -->
                            <div class="testimonial-author-info">
                            <p class="testimonial-author">{{ $testimonial->testimonial_name }}</p>
                            <p class="testimonial-firm">{{ $testimonial->testimonial_title }}</p>
                            </div>
                        </div>
                        <!-- /Testimonial author information -->
                        </div>
                    @endforeach
                  </div>
                </div>
              </div>

              <!-- Services block -->
              <div class="block-title">
                <h3>Services</h3>
              </div>

              <div class="row">
                @foreach ($services as $service)
                    <div class="col-sm-6 col-md-3 subpage-block">
                    <div class="service-block">
                        <div class="service-info">
                        <img src="{{ asset($service->service_img) }}" alt="Responsive Design">
                        <h4>{{ $service->service_title }}</h4>
                        <p>{{ $service->service_dec }}</p>
                        </div>
                    </div>
                    </div>
                @endforeach
              </div>
              <!-- End of Services block -->

              <!-- Clients block -->
              <div class="block-title">
                <h3>Clients</h3>
              </div>

              <div class="row">
                @foreach ($clients as $client)
                <div class="col-sm-4 col-md-2 subpage-block">
                  <div class="client_block">
                    <a href="{{ $client->client_link }}" target="_blank"><img src="{{ asset($client->client_img) }}" alt="image"></a>
                  </div>
                </div>
                @endforeach
              </div>
              <!-- End of Clients block -->

              <!-- Fun facts block -->
              <div class="block-title">
                <h3>Fun Facts</h3>
              </div>

              <div class="row">
                @foreach ($facts as $fact)
                    <div class="col-sm-6 col-md-3 subpage-block">
                    <div class="fun-fact-block">
                        <i class="{{ $fact->icon }}"></i>
                        <h4>{{ $fact->icon_title }}</h4>
                        <span class="fun-value">{{ $fact->icon_time }}</span>
                    </div>
                    </div>
                @endforeach

              </div>
              <!-- End of Fun fucts block -->
            </section>
            <!-- End of About Me Subpage -->

            <!-- Resume Subpage -->
            <section class="pt-page pt-page-2" data-id="resume">
              <div class="section-title-block">
                <h2 class="section-title">Resume</h2>
                <h5 class="section-description">{{ $profile->title }}</h5>
              </div>

              <div class="row">
                <div class="col-sm-6 col-md-4 subpage-block">
                  <div class="block-title">
                    <h3>Education</h3>
                  </div>
                  <div class="timeline">
                    <!-- Single event -->
                    @foreach ($educations as $resume)
                        <div class="timeline-event te-primary">
                        <h5 class="event-date">{{ $resume->year }}</h5>
                        <h4 class="event-name">{{ $resume->qualification }}</h4>
                        <span class="event-description">{{ $resume->university }}</span>
                        <p>{{ $resume->description }}.</p>
                        </div>
                    @endforeach
                  </div>
                </div>

                <div class="col-sm-6 col-md-4 subpage-block">
                  <div class="block-title">
                    <h3>Experience</h3>
                  </div>
                  <div class="timeline">
                    <!-- Single event -->
                    @foreach ($experiences as $experience)
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">{{ $experience->year }}</h5>
                      <h4 class="event-name">{{ $experience->qualification }}</h4>
                      <span class="event-description">{{ $experience->university }}</span>
                      <p>{{ $experience->description }}.</p>
                    </div>
                    @endforeach
                  </div>
                </div>

                <div class="col-sm-6 col-md-4 subpage-block">
                  <div class="block-title">
                    <h3>Design Skills</h3>
                  </div>
                  <div class="skills-info">
                    <h4>Web Design</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-1"></div>
                    </div>

                    <h4>Graphic Design</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-2"></div>
                    </div>

                    <h4>Print Design</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-3"></div>
                    </div>
                  </div>

                  <div class="block-title">
                    <h3>Coding Skills</h3>
                  </div>
                  <div class="skills-info">
                    <h4>HML5</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-4"></div>
                    </div>

                    <h4>CSS3</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-5"></div>
                    </div>

                    <h4>jQuery</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-6"></div>
                    </div>

                    <h4>Wordpress</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-7"></div>
                    </div>

                    <h4>PHP</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-8"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12 col-md-12">
                  <div class="download-cv-block">
                    <a class="button" target="_blank" href="{{ $profile->resume }}">Download CV</a>
                  </div>
                </div>
              </div>
            </section>
            <!-- End Resume Subpage -->


            <!-- Portfolio Subpage -->
            <section class="pt-page pt-page-3" data-id="portfolio">
              <div class="section-title-block">
                <h2 class="section-title">Portfolio</h2>
                <h5 class="section-description">My Best Works</h5>
              </div>

              <!-- Portfolio Content -->
              <div class="portfolio-content">

                <!-- Portfolio filter -->
                <ul id="portfolio_filters" class="portfolio-filters">
                  <li class="active">
                    <a class="filter btn btn-sm btn-link active" data-group="all">All</a>
                  </li>
                    @php
                        $categories=DB::table('categories')->get();
                    @endphp

                     @foreach ($categories as $cat)
                        <li>
                            <a class="filter btn btn-sm btn-link" data-group="{{$cat->id}}">{{ $cat->name }}</a>
                        </li>
                    @endforeach
                </ul>
                <!-- End of Portfolio filter -->





                <!-- Portfolio Grid -->
                <div id="portfolio_grid" class="portfolio-grid portfolio-masonry masonry-grid-3">

                  <!-- Portfolio Item 1 -->
                  <figure class="item" data-groups='["all", "media"]'>
                    <a class="ajax-page-load" href="{{ route('frontend.portfolio') }}">
                      <img src="{{ asset('assets') }}/images/portfolio/1.jpg" alt="">
                      <div>
                        <h5 class="name">Project Name</h5>
                        <small>Media</small>
                        <i class="fa fa-image"></i>
                      </div>
                    </a>
                  </figure>
                  <!-- /Portfolio Item 1 -->

                  <!-- Portfolio Item 2 -->
                  <figure class="item" data-groups='["all", "video"]'>
                    <a class="ajax-page-load" href="{{ route('frontend.portfolio') }}" title="Praesent Dolor Ex" class="lightbox mfp-iframe">
                      <img src="{{ asset('assets') }}/images/portfolio/2.jpg" alt="">
                      <div>
                        <h5 class="name">Project Name</h5>
                        <small>Video</small>
                        <i class="fa fa-video-camera"></i>
                      </div>
                    </a>
                  </figure>
                  <!-- /Portfolio Item 2 -->

                  <!-- Portfolio Item 3 -->
                  <figure class="item" data-groups='["all","illustration"]'>
                    <a class="ajax-page-load" href="{{ route('frontend.portfolio') }}" href="portfolio-1.html" class="lightbox" title="Duis Eu Eros Viverra">
                      <img src="{{ asset('assets') }}/images/portfolio/3.jpg" alt="">
                      <div>
                        <h5 class="name">Project Name</h5>
                        <small>Illustration</small>
                        <i class="fa fa-image"></i>
                      </div>
                    </a>
                  </figure>
                  <!-- /Portfolio Item 3 -->

                  <!-- Portfolio Item 4 -->
                  <figure class="item" data-groups='["all", "media"]'>
                    <a class="ajax-page-load" href="{{ route('frontend.portfolio') }}">
                      <img src="{{ asset('assets') }}/images/portfolio/4.jpg" alt="">
                      <div>
                        <h5 class="name">Project Name</h5>
                        <small>Media</small>
                        <i class="fa fa-file-text-o"></i>
                      </div>
                    </a>
                  </figure>
                  <!-- /Portfolio Item 4 -->

                </div>
                <!-- /Portfolio Grid -->

              </div>
              <!-- /Portfolio Content -->

            </section>
            <!-- /Portfolio Subpage -->

            <!-- Blog Subpage -->
            <section class="pt-page pt-page-4" data-id="blog">

            </section>
            <!-- End Blog Subpage -->

            <!-- Contact Subpage -->
            <section class="pt-page pt-page-5" data-id="contact">
              <div class="section-title-block">
                <h2 class="section-title">Contact</h2>
                <h5 class="section-description">Get in Touch</h5>
              </div>

              <div class="row">
                <div class="col-sm-6 col-md-6 subpage-block">
                  <div class="block-title">
                    <h3>Get in Touch</h3>
                  </div>
                  <p>{{ $profile->get_in_touch }}.</p>
                  <div class="contact-info-block">
                    <div class="ci-icon">
                      <i class="pe-7s-icon pe-7s-map-marker"></i>
                    </div>
                    <div class="ci-text">
                      <h5>{{ $profile->location }}</h5>
                    </div>
                  </div>
                  <div class="contact-info-block">
                    <div class="ci-icon">
                      <i class="pe-7s-icon pe-7s-mail"></i>
                    </div>
                    <div class="ci-text">
                      <h5>{{ $profile->email }}</h5>
                    </div>
                  </div>
                  <div class="contact-info-block">
                    <div class="ci-icon">
                      <i class="pe-7s-icon pe-7s-call"></i>
                    </div>
                    <div class="ci-text">
                      <h5>{{ $profile->number }}</h5>
                    </div>
                  </div>
                  <div class="contact-info-block">
                    <div class="ci-icon">
                      <i class="pe-7s-icon pe-7s-check"></i>
                    </div>
                    <div class="ci-text">
                      <h5>{{ $profile->Freelance }}</h5>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-6 subpage-block">
                  <div class="block-title">
                    <h3>Contact Form</h3>
                  </div>
                  <form method="post" action="{{ route('contact.store') }}">
                    @csrf
                    <div class="messages"></div>

                    <div class="controls">
                      <div class="form-group">
                          <input id="name" type="text" name="name" class="form-control" placeholder="Full Name" required="">
                          <div class="form-control-border"></div>
                          <i class="form-control-icon fa fa-user"></i>
                          <div class="help-block with-errors"></div>
                      </div>

                      <div class="form-group">
                          <input id="email" type="email" name="email" class="form-control" placeholder="Email Address" required>
                          <div class="form-control-border"></div>
                          <i class="form-control-icon fa fa-envelope"></i>
                          <div class="help-block with-errors"></div>
                      </div>

                      <div class="form-group">
                          <textarea id="message" name="message" class="form-control" placeholder="Message for me" rows="4" required="" ></textarea>
                          <div class="form-control-border"></div>
                          <i class="form-control-icon fa fa-comment"></i>
                          <div class="help-block with-errors"></div>
                      </div>

                      <input type="submit" name="submit" class="button btn-send" value="Send message">
                    </div>
                  </form>
                </div>
              </div>
              @include('/../admin.alert')
            </section>
            <!-- End Contact Subpage -->

          </div>
        </div>
        <!-- /Page changer wrapper -->
      </div>
      <!-- /Main Content -->
    </div>

    <!-- /Demo Color changer -->


    <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/js/page-transition.js"></script>
    <script src="{{ asset('assets') }}/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('assets') }}/js/validator.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.shuffle.min.js"></script>
    <script src="{{ asset('assets') }}/js/masonry.pkgd.min.js"></script>
    <script src="{{ asset('assets') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.hoverdir.js"></script>
    <script src="{{ asset('assets') }}/js/main.js"></script>


</body>
</html>
