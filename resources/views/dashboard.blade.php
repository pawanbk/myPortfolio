<!DOCTYPE html>
<html lang="en">

<head>
  <title>My Portfolio</title>

  <!-- Favicons -->

  <!-- Vendor CSS Files -->
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <!-- csrf token -->
  <meta name="_token" content="{{csrf_token()}}"></meta>
  <!-- ajax jquery cdn -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Pawan B.K</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="hero route bg-image" style="background-image: url({{URL::asset('storage/hero_image/'.$sitedata->hero_img)}})">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h3 class="hero-title mb-4">{{$sitedata->title}}</h3>
          <p class="hero-subtitle">{{$sitedata->sub_title}}</p>
          <a href="{{asset('storage/resume/'.$sitedata->resume)}}" class="btn btn-outline-warning mt-2 w-30">Download resume</a>
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <img src="{{asset('storage/profile/'.$personaldata->profile_image)}}" class="img-fluid rounded b-shadow-a" alt="">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        <p><span class="title-s">Name: </span> <span>{{$personaldata->full_name}}</span></p>
                        <p><span class="title-s">Profile: </span> <span>{{$personaldata->profile}}</span></p>
                        <p><span class="title-s">Email: </span> <span>{{$personaldata->email}}</span></p>
                        <p><span class="title-s">Phone: </span> <span>(977) {{$personaldata->phone}}</span></p>
                      </div>
                    </div>
                  </div>
                  <div class="skill-mf">
                    <p class="title-s">Skill</p>
                    @foreach($skill as $data)
                    <span>{{$data->name}}</span> <span class="pull-right">{{$data->level}}%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: {{$data->level}}%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    @endforeach
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        About me
                      </h5>
                    </div>
                    <p class="lead">
                     {{$sitedata->about_desc1}}
                    </p>
                    <p class="lead">
                      {{$sitedata->about_desc2}}
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services-mf pt-5 route">
      <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                    <h3 class="title-a">
                        Services
                    </h3>
                    <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($services as $service)
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="service-ico">
                            <span class="ico-circle"><i class="{{$service->icon}}"></i></span>
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">{{$service->name}}</h2>
                            <p class="s-description text-center">
                            {{$service->description}}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Services Section -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <div class="col-md-6">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        Send Message Us
                      </h5>
                    </div>
                    <div>
                      <form class="php-email-form" id="contact_form">
                        <div class="row">
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                            </div>
                          </div>
                          <div class="col-md-12 my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message">
                                <ul></ul>
                            </div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                          </div>
                          <div class="col-md-12 text-center">
                            <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="title-box-2 pt-4 pt-md-0">
                      <h5 class="title-left">
                        Get in Touch
                      </h5>
                    </div>
                    <div class="more-info">
                      <ul class="list-ico">
                        <li><span class="bi bi-phone"></span> (977) {{$personaldata->phone}}</li>
                        <li><span class="bi bi-envelope"></span>{{$personaldata->email}}</li>
                      </ul>
                    </div>
                    <div class="socials">
                      <ul>
                          @foreach($links as $link)
                        <li><a href="{{$link->social_link}}"><span class="ico-circle"><i class="{{$link->icon}}"></i></span></a></li>
                        @endforeach
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; Copyright <strong>DevFolio</strong>. All Rights Reserved</p>
            <div class="credits">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
            -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('vendor/typed.js/typed.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('js/main.js')}}"></script>
  <script>
      jQuery(document).ready(function(){
        jQuery.ajaxSetup({
        headers:{
            'X_CSRF_TOKEN': jQuery("meta[name='_token']").attr('content')
        }
    });

        jQuery('#contact_form').submit(function(e){
            e.preventDefault();
            jQuery.ajax({
                url:"{{route('mail.send')}}",
                method: 'post',
                data:{
                    name: jQuery('#name').val(),
                    from: jQuery('#email').val(),
                    subject: jQuery('#subject').val(),
                    message: jQuery('#message').val()
                },
                beforeSend: function(){
                    jQuery('.loading').css('display','block')
                },
                success:function(data){
                    jQuery('.loading').css('display','none');
                    if(jQuery.isEmptyObject(data.error)){
                        jQuery('.sent-message').css('display','block')
                    } else{
                        printErrorMessage(data.error);
                    }
                }
            });
        });
        function printErrorMessage(msg){
            jQuery('.error-message').css('display','block');
            jQuery.each(msg,function(key,value){
                jQuery('.error-message').find('ul').append('<li>'+value+'</li>')
            });
        };
      });
  </script>

</body>

</html>