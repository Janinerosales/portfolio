<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Janine Rosales Portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">


      <h1 class="logo"><a href="index.html">Jnnrslsfolio</a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li class="dropdown"><a href="#"><span>Resume</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a href="#about">About</a></li>
              <li><a href="#skills">Skills</a></li>
              <li><a href="#educational">Educational</a></li>
              <li><a href="#experiences">Experience</a></li>
              <li><a href="#webinar">Webinar</a></li>
              <li><a href="#blog">Blog</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="{{route('login')}}">LogIn</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="hero route bg-image" style="background-image: url(assets/img/jrs-bg.jpg)">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
        
          <h1 class="hero-title mb-4">I am Janine Rosales</h1>
          <p class="hero-subtitle"><span class="typed" data-typed-items="Graphic Design,Photography"></span></p>
          
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route">
      <div class="container" style="background-color: skyblue;">
        <div class="row justify-content-center"> 
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <img src="assets/img/port.jpg" class="img-fluid rounded b-shadow-a" alt="">
                      </div>
                    </div>
                    @foreach($about as $abouts)
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        <p><span class="title-s">Name: </span> <span>{{$abouts->name}}</span></p>
                        <p><span class="title-s">Profile: </span> <span>{{$abouts->profile}}</span></p>
                        <p><span class="title-s">Birthday: </span> <span>{{$abouts->birthday}}</span></p>
                        <p><span class="title-s">Address: </span> <span>{{$abouts->address}}</span></p>
                        <p><span class="title-s">Zipcode: </span> <span>{{$abouts->zipcode}}</span></p>
                        <p><span class="title-s">Email: </span> <span>{{$abouts->email}}</span></p>
                        <p><span class="title-s">Phone: </span> <span>{{$abouts->phone}}</span></p>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h5 class="title-left">About me</h5>
                    </div>
                    <p class="lead">
                      Hi! I am Janine R. Rosales 
                    </p>
                    <p class="lead">
                      A dedicated and driven professional with a passion for designing, photography and web developer. 
                      I thrive in dynamic environments where creativity, critical thinking, and teamwork are valued. My journey in IT industry has equipped 
                      me with a diverse skill set and a penchant for excellence.
                    </p>
                  </div>
                </div>
              </div>
              <div class="section-title">
                <h2>Facts</h2>
                <p>Despite my years of experience as an IT student, I am still learning new skills and expanding my knowledge every day.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    

          
    <section id="skills" class="skill-mf sect-pt4 route">
      <div class="container" style="background-color: skyblue;">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="skill-mf">
                        <h4 class="title-left">Skills</h4>
                        @foreach($skills as $skill)
                        <span>{{$skill->expertise}}</span> <span class="pull-right">{{$skill->percentage}}%</span>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: {{$skill->percentage}}%;" aria-valuenow="{{$skill->percentage}}" aria-valuemax="100"></div>
                        </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    

          
    <!-- ======= Educational Section ======= -->
    <section id="educational" class="educational-mf sect-pt4 route">
      <div class="container" style="background-color: skyblue;">
        <div class="row justify-content-center"> 
          <div class="col-xl-10">
            <div class="box-shadow-full">
              <div class="section-title">
                <h2 class="title-left">EDUCATIONAL ATTAINMENT</h2>
              </div>
              <div class="row">
                <div class="col-lg-12" data-aos="fade-up">
                  <h3 class="educational-title">Summary</h3>
                  @foreach($educationals as $educational)
                  <div class="educational-item">
                    <h4>{{$educational->grade_level}}</h4>
                    <h5>{{$educational->school_year}}</h5>
                    <p><em>{{$educational->school_name}}</em></p>
                    <p>{{$educational->description}}</p>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    

    

    <section id="experiences" class="experiences-mf sect-pt4 route">
      <div class="container" style="background-color: skyblue;">
        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="box-shadow-full">
              <div class="section-title">
                <h2 class="title-left">EXPERIENCES</h2>
                <div class="row">
                  @foreach($experiences as $experience)
                  <div class="col-lg-6" data-aos="fade-up">
                    <div class="experiences-item">
                      <h4>{{ $experience->title }}</h4>
                      <h5>{{  $experience->year }}</h5>
                      <p><em>{{  $experience->details }}</em></p>
                      <img src="{{'storage/'. $experience->image }}" alt="Experience Image" style="width: 100%; height: 40%;">
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
                             
                 
    <section id="webinar" class="services-mf pt-5 route">
      <div class="container" style="background-color: skyblue;">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Webinar
              </h3>
              <p class="subtitle-a">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          @foreach($webinars as $webinar)
          <div class="col-md-4">
            <div class="webinar-box">
              <div class="webinar-ico">
               
              </div>

              <div class="webinar-content">
                <h4 class="s-description text-center">
                  {{ $webinar->title}}
                </h4>

                <p class="s-description text-center">
                  {{ $webinar->agenda}}
                </p>
                <p class="s-description text-center">
                  {{ $webinar->host_name }}
                </p>
                <p class="s-description text-center">
                  {{ $webinar->date }}
                </p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
   

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog-mf sect-pt4 route">
      <div class="container" style="background-color: skyblue;">
          <div class="row justify-content-center">
              <div class="col-sm-12">
                  <div class="title-box text-center">
                      <h3 class="title-a">
                          Blog
                      </h3>
                      <p class="subtitle-a">
                          Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                      </p>
                      <div class="line-mf"></div>
                  </div>
              </div>
          </div>
  
          @foreach($blogs->chunk(3) as $chunk)
          <div class="row">
              @foreach($chunk as $blog)
              <div class="col-md-4">
                  <div class="card card-blog">
                      <div class="card-body">
                          <p class="card-title">
                              {{ $blog->title }}
                          </p>
                      </div>
  
                      <div class="card-img">
                          <img src="{{'storage/'. $blog->image}}" alt="" class="img-fluid" style="width: 100%; height: auto;">
                      </div>
  
                      <div class="card-body">
                          <div class="card-content-box">
                              <div class="card-content">
                                  <h6 class="content">{{ $blog->content }}</h6>
                              </div>
                          </div>
                      </div>
  
                      <div class="post-date">
                          <span class="bi bi-date"></span> {{ $blog->date }}
                      </div>
                  </div>
              </div>
              @endforeach
          </div>
          @endforeach
  
      </div>
  </section>
  
    <!-- End Blog Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
          <div class="row justify-content-center align-items-center">
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
                                      <form action="{{ route('contacts.store') }}" method="POST" enctype="multipart/form-data" class="single-form quate-form wow fadeInUp" data-toggle="validator">
                                          @csrf
                                          <div id="msgSubmit" class="h3 text-center hidden"></div>
                                          <div class="row">
                                              <div class="col-md-12">
                                                  <label for="first_name">First Name</label>
                                                  <input name="first_name" class="contact-name form-control" id="name" type="text" placeholder="First Name" required>
                                              </div>
                                              <div class="col-md-12">
                                                  <label for="last_name">Last Name</label>
                                                  <input name="last_name" class="contact-email form-control" id="L_name" type="text" placeholder="Last Name" required>
                                              </div>
                                              <div class="col-md-12">
                                                  <label for="email">Email</label>
                                                  <input name="email" class="contact-subject form-control" id="email" type="email" placeholder="Your Email" required>
                                              </div>
                                              <div class="col-md-12">
                                                  <label for="message">Message</label>
                                                  <textarea name="message" class="form-control contact-message" id="message" rows="10" placeholder="Your Message" required></textarea>
                                              </div>
                                              <div class="btn-form col-md-12">
                                                  <div class="text-center">
                                                      <button type="submit" class="btn btn-fill btn-primary" id="form-submit">Send Message</button>
                                                  </div>
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
                                      <p class="lead">
                                        I hope this message finds you well. 
                                        I wanted to reach out and express my interest in connecting with you.
                                        I'm always open to new opportunities and conversations.
                                      </p>
                                      <ul class="list-ico">
                                          <li><span class="bi bi-geo-alt"></span>Brgy Sto.Nino Hilongos, Leyte</li>
                                          <li><span class="bi bi-phone"></span>09268261787</li>
                                          <li><span class="bi bi-envelope"></span>rhosalesj@gmail.com</li>
                                      </ul>
                                  </div>
                                  <div class="socials">
                                      <ul>
                                          <li><a href="https://www.facebook.com/janine.rosales.777"><span class="ico-circle"><i class="bi bi-facebook"></i></span></a></li>
                                          <li><a href="https://www.instagram.com/jnnrsls__/"><span class="ico-circle"><i class="bi bi-instagram"></i></span></a></li>
                                          <li><a href="https://twitter.com/rosales37519"><span class="ico-circle"><i class="bi bi-twitter"></i></span></a></li>
                                          <li><a href="https://www.linkedin.com/in/janine-rosales-a04b322bb/"><span class="ico-circle"><i class="bi bi-linkedin"></i></span></a></li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>