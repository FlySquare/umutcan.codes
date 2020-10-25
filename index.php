<?php include 'komutlar.php'; ?>
<!DOCTYPE html>
<html lang="tr" class="no-js">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $ayarcek['ayar_title']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="<?php echo $ayarcek['ayar_description']; ?>" />
    <meta name="keywords" content="<?php echo $ayarcek['ayar_keywords']; ?>" />
    <meta name="author" content="<?php echo $ayarcek['ayar_author']; ?>" />
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/normalize.css" type="text/css">
    <link rel="stylesheet" href="css/animate.css" type="text/css">
    <link rel="stylesheet" href="css/transition-animations.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">

    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/modernizr.custom.js"></script>

    <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>

  <body class="material-template">
    <!-- Loading animation -->
    <div class="preloader">
      <div class="preloader-animation">
        <div class="preloader-spinner">
        </div>
      </div>
    </div>
    <!-- /Loading animation -->

    <div id="page" class="page">
      <!-- Header -->
      <?php include 'header.php'; ?>
      <!-- /Header -->

      <!-- Mobile Header -->
      <div class="mobile-header mobile-visible">
        <div class="mobile-logo-container">
          <div class="mobile-site-title">Umut Can Arda</div>
        </div>

        <a class="menu-toggle mobile-visible">
          <i class="fa fa-bars"></i>
        </a>
      </div>
      <!-- /Mobile Header -->

      <!-- Main Content -->
      <div id="main" class="site-main">
        <!-- Page changer wrapper -->
        <div class="pt-wrapper">
          <!-- Subpages -->
          <div class="subpages">

            <!-- Home Subpage -->
            <section class="pt-page" data-id="home">
              <div class="section-inner start-page-content">
                <div class="page-header">
                  <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4">
                      <div class="photo">
                        <img src="images/ben.jpg" alt="fotografim">
                      </div>
                    </div>

                    <div class="col-sm-8 col-md-8 col-lg-8">
                      <div class="title-block">
                        <h1>Umut Can Arda</h1>
                        <div class="owl-carousel text-rotation">
                          <div class="item">
                            <div class="sp-subtitle">Software Developer</div>
                          </div>
                          <div class="item">
                            <div class="sp-subtitle">Backend-developer</div>
                          </div>
                          <div class="item">
                            <div class="sp-subtitle">Game-developer</div>
                          </div>
                        </div>
                      </div>

                      <div class="social-links">
                        <a target="_blank" href="https://twitter.com/flysquare0"><i class="fa fa-twitter"></i></a>
                        <a target="_blank" href="https://www.instagram.com/fly.square/"><i class="fa fa-instagram"></i></a>
                        <a target="_blank" href="https://github.com/flysquare"><i class="fa fa-github"></i></a>
                        <a target="_blank" href="https://www.linkedin.com/in/flysquare/"><i class="fa fa-linkedin"></i></a>
                        <a target="_blank" href="https://itch.io/profile/flysquaree"><i class="fa fa-magic"></i></a>
                        <a target="_blank" href="mailto:umutkonurinso@gmailcom"><i class="fa fa-envelope"></i></a>

                      </div>
                    </div>
                  </div>
                </div>

                <div class="page-content">
                  <div class="row">

                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="about-me">
                        <div class="block-title">
                          <h3>Benim <span>Hakkımda</span></h3>
                        </div>
                        <p>2002 Yalova doğumluyum. Tutkum beni buraya getirdi. Yaratma arzumu durduramadığım için her donanım ve yazılım dalından bilgi topladım. Unity3D, Grafik Tasarım, Veritabanı, Web Tasarım ve Masaüstü Programlarında aktif olarak kendimi geliştirmeye çalışıyorum.</p>
                      </div>
                      <div class="download-resume">
                        <a href="" class="btn btn-secondary">CV İndir</a>
                      </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <ul class="info-list">
                        <li><span class="title">Yaş</span><span class="value">18</span></li>
                        <li><span class="title">Uyruk</span><span class="value">Türkiye</span></li>
                        <li><span class="title">Adres</span><span class="value">Yalova, Türkiye</span></li>
                        <li><span class="title">e-mail</span><span class="value"><a href="mailto:umutkonurinso@gmail.com">umutkonurinso@gmail.com</a></span></li>
                        <li><span class="title">Freelance</span><span class="value available">Açık</span></li>
                      </ul>
                    </div>

                  </div>
                </div>
              </div>
            </section>
            <!-- End of Home Subpage -->

            <!-- Resume Subpage -->
            <section class="pt-page" data-id="resume">
              <div class="section-inner custom-page-content">
                <div class="page-header color-1">
                  <h2>Özgeçmişim</h2>
                </div>
                <div class="page-content">

                  <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="block">
                        <div class="block-title">
                          <h3>Eğitim</h3>
                        </div>

                        <div class="timeline">


                          <!-- Education 2 -->
                          <div class="timeline-item">
                            <h4 class="item-title">Lisans Derecesi, Bilgisayar Programlama</h4>
                            <span class="item-period">2020 - 2022(devam ediyor)</span>
                            <span class="item-small">Yalova Üniversitesi</span>
                            <p class="item-description">Yalova Üniversitesi Github sayfasını oluşturdum ve burada öğrencilerin üniversite adına proje geliştirebilecekleri bir topluluk hazırladım.</p>
                          </div>
                          <!-- / Education 2 -->

                          <!-- Education 3 -->
                          <div class="timeline-item">
                            <h4 class="item-title">Lise Öğrencisi</h4>
                            <span class="item-period">2016 - 2020</span>
                            <span class="item-small">Aksa Mesleki Ve Teknik Anadolu Lisesi</span>
                            <p class="item-description">77.8 ortalama ile "Veritabanı Programcılığı" bölümünü bitirdim.</p>
                          </div>
                          <!-- / Education 3 -->
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="block">
                        <div class="block-title">
                          <h3>Deneyim</h3>
                        </div>

                        <div class="timeline">


                          <!-- Experience 2 -->
                          <div class="timeline-item">
                            <h4 class="item-title">Back End Developer</h4>
                            <span class="item-period">Nisan 2020 - Ekim 2020</span>
                            <span class="item-small">TILANCE</span>
                            <p class="item-description">REST API ve RESTful hakkında deneyim geliştirdim. NodeJS üzerinde yeni kütüphaneler ve geliştirme araçları kullandım.</p>
                          </div>
                          <!-- / Experience 2 -->

                          <!-- Experience 3 -->
                          <div class="timeline-item">
                            <h4 class="item-title">Sistem Destek Stajyeri</h4>
                            <span class="item-period">Eylül 2019 - Nisan 2020</span>
                            <span class="item-small">Aktek Bilgi Iletisim Teknolojisi Sanayi A.S.</span>
                            <p class="item-description">Sistem Destek Stajerliğimi Tamamladım. Fabrika ortamı, otomasyonlarını, işleyişlerini ve kullanıcı odaklı çözüm sunmayı deneyimledim</p>
                          </div>
                          <!-- / Experience 3 -->
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="block">
                        <div class="block-title">
                          <h3>Tasarım <span>Yteneklerim</span></h3>
                        </div>

                        <div class="skills-info">
                          <h4>Web Tasarım</h4>
                          <div class="skill-container">
                            <div class="skill-percentage skill-1"></div>
                          </div>

                          <h4>Grafik Tasarım</h4>
                          <div class="skill-container">
                            <div class="skill-percentage skill-2"></div>
                          </div>


                        </div>

                      </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="block">
                        <div class="block-title">
                          <h3>Yazılım <span>Yetenekleri</span></h3>
                        </div>

                        <div class="skills-info">
                          <h4>PHP</h4>
                          <div class="skill-container">
                            <div class="skill-percentage skill-4"></div>
                          </div>

                          <h4>HTML/CSS3</h4>
                          <div class="skill-container">
                            <div class="skill-percentage skill-4"></div>
                          </div>

                          <h4>C# / OYUN GELİŞTİRME</h4>
                          <div class="skill-container">
                            <div class="skill-percentage skill-6"></div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>

                  <!-- Download Resume Button -->
                  <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <div class="block">
                        <div class="center download-resume">
                          <a href="#" class="btn btn-secondary">CV Indir</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Download Resume Button -->

                </div>
              </div>
            </section>
            <!-- End of Resume Subpage -->


            <!-- Services Subpage -->
            <section class="pt-page" data-id="services">
              <div class="section-inner custom-page-content">
                <div class="page-header color-1">
                  <h2>Services</h2>
                </div>
                <div class="page-content">
                  <!-- My Services -->
                  <div class="row">
                    <div class="col-sm-12 col-md-12">
                      <div class="block-title">
                        <h3>My <span>Services</span></h3>
                      </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                      <div class="service-block">
                        <div class="service-info">
                          <!--<i class="service-icon fa fa-shopping-cart"></i>-->
                          <div class="service-image">
                            <img src="images/service/web_design_icon.png" alt="Responsive Design" class="mCS_img_loaded">
                          </div>
                          <h4>Web Design</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                      <div class="service-block">
                        <div class="service-info">
                          <div class="service-image">
                            <img src="images/service/photography_icon.png" alt="Photography" class="mCS_img_loaded">
                          </div>
                          <h4>Photography</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                      <div class="service-block">
                        <div class="service-info">
                          <div class="service-image">
                            <img src="images/service/creativity_icon.png" alt="Creativity" class="mCS_img_loaded">
                          </div>
                          <h4>Management</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                      <div class="service-block">
                        <div class="service-info">
                          <div class="service-image">
                            <img src="images/service/advetising_icon.png" alt="Advetising" class="mCS_img_loaded">
                          </div>
                          <h4>Advetising</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of My Services -->

                  <!-- Clients -->
                  <div class="row">
                    <div class="col-sm-12 col-md-12">
                      <div class="block-title">
                        <h3>Clients</h3>
                      </div>

                      <div class="col-sm-4 col-md-2 subpage-block">
                        <div class="client-block">
                          <a href="#" target="_blank"><img src="images/clients/client_1.png" alt="image" class="mCS_img_loaded"></a>
                        </div>
                      </div>

                      <div class="col-sm-4 col-md-2 subpage-block">
                        <div class="client-block">
                          <a href="#" target="_blank"><img src="images/clients/client_2.png" alt="image" class="mCS_img_loaded"></a>
                        </div>
                      </div>

                      <div class="col-sm-4 col-md-2 subpage-block">
                        <div class="client-block">
                          <a href="#" target="_blank"><img src="images/clients/client_3.png" alt="image" class="mCS_img_loaded"></a>
                        </div>
                      </div>

                      <div class="col-sm-4 col-md-2 subpage-block">
                        <div class="client-block">
                          <a href="#" target="_blank"><img src="images/clients/client_4.png" alt="image" class="mCS_img_loaded"></a>
                        </div>
                      </div>

                      <div class="col-sm-4 col-md-2 subpage-block">
                        <div class="client-block">
                          <a href="#" target="_blank"><img src="images/clients/client_5.png" alt="image" class="mCS_img_loaded"></a>
                        </div>
                      </div>

                      <div class="col-sm-4 col-md-2 subpage-block">
                        <div class="client-block">
                          <a href="#" target="_blank"><img src="images/clients/client_6.png" alt="image" class="mCS_img_loaded"></a>
                        </div>
                      </div>

                    </div>
                  </div>
                  <!-- End of Clients -->

                  <!-- Testimonials -->
                  <div class="row">
                    <div class="col-sm-12 col-md-12">
                      <div class="block-title">
                        <h3>Testimonials</h3>
                      </div>


                      <div class="testimonials owl-carousel block">
                        <!-- Testimonial 1 -->
                        <div class="testimonial-item">
                          <!-- Testimonial Author -->
                          <div class="testimonial-credits">
                            <!-- Picture -->
                            <div class="testimonial-picture">
                              <img src="images/testimonials/testimonial_photo_1.jpg" alt="">
                            </div>
                            <!-- /Picture -->
                            <!-- Testimonial author information -->
                            <div class="testimonial-author-info">
                              <p class="testimonial-author">Maria Richardson</p>
                              <p class="testimonial-firm">Lindsley's Lumber</p>
                            </div>
                          </div>
                          <!-- /Testimonial author information -->
                          <!-- Testimonial Content -->
                          <div class="testimonial-content">
                            <div class="testimonial-text">
                              <p>"Phasellus eu nunc tincidunt, ultricies elit vitae, pretium eros. Sed sed ipsum sed massa."</p>
                            </div>
                          </div>
                          <!-- /Testimonial Content -->
                        </div>
                        <!-- End of Testimonial 1 -->

                        <!-- Testimonial 2 -->
                        <div class="testimonial-item">
                          <!-- Testimonial Author -->
                          <div class="testimonial-credits">
                            <!-- Picture -->
                            <div class="testimonial-picture">
                              <img src="images/testimonials/testimonial_photo_2.jpg" alt="">
                            </div>
                            <!-- /Picture -->
                            <!-- Testimonial author information -->
                            <div class="testimonial-author-info">
                              <p class="testimonial-author">John Doe</p>
                              <p class="testimonial-firm">Apple Inc.</p>
                            </div>
                          </div>
                          <!-- /Testimonial author information -->
                          <!-- Testimonial Content -->
                          <div class="testimonial-content">
                            <div class="testimonial-text">
                              <p>"Vivamus porta dapibus tristique. Suspendisse et arcu eget nisi convallis eleifend nec ac lorem.</p>
                            </div>
                          </div>
                          <!-- /Testimonial Content -->
                        </div>
                        <!-- End of Testimonial 2 -->

                        <!-- Testimonial 3 -->
                        <div class="testimonial-item">
                          <!-- Testimonial Author -->
                          <div class="testimonial-credits">
                            <!-- Picture -->
                            <div class="testimonial-picture">
                              <img src="images/testimonials/testimonial_photo_3.jpg" alt="">
                            </div>
                            <!-- /Picture -->
                            <!-- Testimonial author information -->
                            <div class="testimonial-author-info">
                              <p class="testimonial-author">George McQueen</p>
                              <p class="testimonial-firm">Harmony House</p>
                            </div>
                          </div>
                          <!-- /Testimonial author information -->
                          <!-- Testimonial Content -->
                          <div class="testimonial-content">
                            <div class="testimonial-text">
                              <p>"Aliquam congue auctor lectus sed fermentum. Nulla ultricies tellus quis sapien lacinia egestas."</p>
                            </div>
                          </div>
                          <!-- /Testimonial Content -->
                        </div>
                        <!-- End of Testimonial 3 -->
                      </div>
                    </div>
                  </div>
                  <!-- End of Tesimonials -->

                  <!-- Pricing -->
                  <div class="row">
                    <div class="col-sm-12 col-md-12">
                      <div class="block-title">
                        <h3>Pricing</h3>
                      </div>

                      <div class="lm-pricing row clearfix">
                        <div class="lm-package-wrap col-md-4 default-col">
                          <div class="lm-package">
                            <div class="lm-heading-row">
                              <span>Plan 1</span>
                            </div>
                            <div class="lm-pricing-row">
                              <span>$64</span>
                              <small>per month</small>
                            </div>

                            <div class="lm-button-row">
                              <a href="#" target="_self" class="btn btn-primary">Free Trial</a>
                            </div>
                            <div class="lm-default-row">
                              Lorem ipsum dolor
                            </div>
                            <div class="lm-default-row">
                              Pellentesque scelerisque
                            </div>
                            <div class="lm-default-row">
                              Morbi eu sagittis
                            </div>
                            <div class="lm-default-row">
                            </div>
                          </div>
                        </div>

                        <div class="lm-package-wrap col-md-4 highlight-col ">
                          <div class="lm-package">
                            <div class="lm-heading-row">
                              <span>Plan 2</span>
                            </div>
                            <div class="lm-pricing-row">
                              <span>$128</span>
                              <small>per month</small>
                            </div>

                            <div class="lm-button-row">
                              <a href="#" target="_self" class="btn btn-primary">Free Trial</a>
                            </div>
                            <div class="lm-default-row">
                              Lorem ipsum dolor
                            </div>
                            <div class="lm-default-row">
                              Pellentesque scelerisque
                            </div>
                            <div class="lm-default-row">
                              Morbi eu sagittis
                            </div>
                            <div class="lm-default-row">
                              Donec non diam
                            </div>
                            <div class="lm-default-row">
                            </div>
                          </div>
                        </div>

                        <div class="lm-package-wrap col-md-4 default-col ">
                          <div class="lm-package">
                            <div class="lm-heading-row">
                              <span>Plan 3</span>
                            </div>

                            <div class="lm-pricing-row">
                              <span>$256</span>
                              <small>per month</small>
                            </div>

                            <div class="lm-button-row">
                              <a href="#" target="_self" class="btn btn-primary">Free Trial</a>
                            </div>

                            <div class="lm-default-row">
                              Lorem ipsum dolor
                            </div>
                            <div class="lm-default-row">
                              Pellentesque scelerisque
                            </div>
                            <div class="lm-default-row">
                              Morbi eu sagittis
                            </div>
                            <div class="lm-default-row">
                              Donec non diam
                            </div>
                            <div class="lm-default-row">
                              Aenean nec libero
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Pricing -->
                </div>
              </div>
            </section>
            <!-- End of Services Subpage -->


            <!-- Portfolio Subpage -->
            <section class="pt-page" data-id="portfolio">
              <div class="section-inner custom-page-content">
                <div class="page-header color-1">
                  <h2>Portfolio</h2>
                </div>
                <div class="page-content">

                  <!-- Portfolio Content -->
                  <div class="portfolio-content">

                    <!-- Portfolio filter -->
                    <ul id="portfolio_filters" class="portfolio-filters">
                      <li class="active">
                        <a class="filter btn btn-sm btn-link active" data-group="all">All</a>
                      </li>
                      <li>
                        <a class="filter btn btn-sm btn-link" data-group="media">Media</a>
                      </li>
                      <li>
                        <a class="filter btn btn-sm btn-link" data-group="illustration">Illustration</a>
                      </li>
                      <li>
                        <a class="filter btn btn-sm btn-link" data-group="video">Video</a>
                      </li>
                    </ul>
                    <!-- End of Portfolio filter -->

                    <!-- Portfolio Grid -->
                    <div id="portfolio_grid" class="portfolio-grid portfolio-masonry masonry-grid-3">

                      <!-- Portfolio Item 1 -->
                      <figure class="item" data-groups='["all", "media"]'>
                        <a class="ajax-page-load" href="portfolio-1.html">
                          <img src="images/portfolio/1.jpg" alt="">
                          <div>
                            <h5 class="name">Project Name</h5>
                            <small>Media</small>
                            <i class="fa fa-file-text-o"></i>
                          </div>
                        </a>
                      </figure>
                      <!-- /Portfolio Item 1 -->

                      <!-- Portfolio Item 2 -->
                      <figure class="item" data-groups='["all", "video"]'>
                        <a href="https://player.vimeo.com/video/97102654?autoplay=1" title="Praesent Dolor Ex" class="lightbox mfp-iframe">
                          <img src="images/portfolio/2.jpg" alt="">
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
                        <a href="images/portfolio/full/3.jpg" class="lightbox" title="Duis Eu Eros Viverra">
                          <img src="images/portfolio/3.jpg" alt="">
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
                        <a class="ajax-page-load" href="portfolio-2.html">
                          <img src="images/portfolio/4.jpg" alt="">
                          <div>
                            <h5 class="name">Project Name</h5>
                            <small>Media</small>
                            <i class="fa fa-file-text-o"></i>
                          </div>
                        </a>
                      </figure>
                      <!-- /Portfolio Item 4 -->

                      <!-- Portfolio Item 5 -->
                      <figure class="item" data-groups='["all", "illustration"]'>
                        <a href="images/portfolio/full/5.jpg" class="lightbox" title="Aliquam Condimentum Magna Rhoncus">
                          <img src="images/portfolio/5.jpg" alt="">
                          <div>
                            <h5 class="name">Project Name</h5>
                            <small>Illustration</small>
                            <i class="fa fa-image"></i>
                          </div>
                        </a>
                      </figure>
                      <!-- /Portfolio Item 5 -->

                      <!-- Portfolio Item 6 -->
                      <figure class="item" data-groups='["all", "media"]'>
                        <a class="ajax-page-load" href="portfolio-3.html">
                          <img src="images/portfolio/6.jpg" alt="">
                          <div>
                            <h5 class="name">Project Name</h5>
                            <small>Media</small>
                            <i class="fa fa-file-text-o"></i>
                          </div>
                        </a>
                      </figure>
                      <!-- /Portfolio Item 6 -->

                      <!-- Portfolio Item 7 -->
                      <figure class="item" data-groups='["all", "video"]'>
                        <a href="https://player.vimeo.com/video/97102654?autoplay=1" title="Nulla Facilisi" class="lightbox mfp-iframe">
                          <img src="images/portfolio/7.jpg" alt="">
                          <div>
                            <h5 class="name">Project Name</h5>
                            <small>Video</small>
                            <i class="fa fa-video-camera"></i>
                          </div>
                        </a>
                      </figure>
                      <!-- /Portfolio Item 7 -->

                      <!-- Portfolio Item 8 -->
                      <figure class="item" data-groups='["all",  "media"]'>
                        <a class="ajax-page-load" href="portfolio-4.html">
                          <img src="images/portfolio/8.jpg" alt="">
                          <div>
                            <h5 class="name">Project Name</h5>
                            <small>Media</small>
                            <i class="fa fa-file-text-o"></i>
                          </div>
                        </a>
                      </figure>
                      <!-- /Portfolio Item 8 -->

                      <!-- Portfolio Item 9 -->
                      <figure class="item" data-groups='["all","illustration"]'>
                        <a href="images/portfolio/full/9.jpg" class="lightbox" title="Mauris Neque Dolor">
                          <img src="images/portfolio/9.jpg" alt="">
                          <div>
                            <h5 class="name">Project Name</h5>
                            <small>Illustration</small>
                            <i class="fa fa-image"></i>
                          </div>
                        </a>
                      </figure>
                      <!-- /Portfolio Item 9 -->

                      <!-- Portfolio Item 10 -->
                      <figure class="item" data-groups='["all", "video"]'>
                        <a href="https://player.vimeo.com/video/97102654?autoplay=1" title="Donec Lectus Arcu" class="lightbox mfp-iframe">
                          <img src="images/portfolio/10.jpg" alt="">
                          <div>
                            <h5 class="name">Project Name</h5>
                            <small>Video</small>
                            <i class="fa fa-video-camera"></i>
                          </div>
                        </a>
                      </figure>
                      <!-- /Portfolio Item 10 -->

                      <!-- Portfolio Item 11 -->
                      <figure class="item" data-groups='["all","illustration"]'>
                        <a href="images/portfolio/full/11.jpg" class="lightbox" title="Duis Eu Eros Viverra">
                          <img src="images/portfolio/11.jpg" alt="">
                          <div>
                            <h5 class="name">Project Name</h5>
                            <small>Illustration</small>
                            <i class="fa fa-image"></i>
                          </div>
                        </a>
                      </figure>
                      <!-- /Portfolio Item 11 -->

                      <!-- Portfolio Item 12 -->
                      <figure class="item" data-groups='["all","media"]'>
                        <a class="ajax-page-load" href="portfolio-5.html">
                          <img src="images/portfolio/12.jpg" alt="">
                          <div>
                            <h5 class="name">Project Name</h5>
                            <small>Media</small>
                            <i class="fa fa-file-text-o"></i>
                          </div>
                        </a>
                      </figure>
                      <!-- /Portfolio Item 12 -->
                    </div>
                    <!-- /Portfolio Grid -->

                  </div>
                  <!-- /Portfolio Content -->
                </div>
              </div>
            </section>
            <!-- /Portfolio Subpage -->

            <!-- Blog Subpage -->
            <section class="pt-page" data-id="blog">
              <div class="section-inner custom-page-content">
                <div class="page-header color-1">
                  <h2>Blog</h2>
                </div>
                <div class="page-content">

                  <!-- Blog Posts Grid -->
                  <div class="blog-masonry two-columns">
                    <!-- Blog Post 1 -->
                    <div class="item">
                      <div class="blog-card">
                        <div class="media-block">
                          <a href="blog-post-1.html">
                            <img class="post-image img-responsive" src="images/blog/blog_post_1.jpg" alt="blog-post-1" />
                            <div class="mask"></div>
                            <div class="post-date"><span class="day">6</span><span class="month">Dec</span><!--<span class="year">2016</span>--></div>
                          </a>
                        </div>
                        <div class="post-info">
                          <ul class="category">
                            <li><a href="#">Travel</a></li>
                          </ul>
                          <a href="blog-post-1.html"><h4 class="blog-item-title">Bootstrap is the Most Popular Framework</h4></a>
                        </div>
                      </div>
                    </div>
                    <!-- End of Blog Post 1 -->

                    <!-- Blog Post 2 -->
                    <div class="item">
                      <div class="blog-card">
                        <div class="media-block">
                          <a href="blog-post-1.html">
                            <img class="post-image img-responsive" src="images/blog/blog_post_2.jpg" alt="blog-post-2" />
                            <div class="mask"></div>
                            <div class="post-date"><span class="day">3</span><span class="month">Nov</span><!--<span class="year">2016</span>--></div>
                          </a>
                        </div>
                        <div class="post-info">
                          <ul class="category">
                            <li><a href="#">jQuery</a></li>
                          </ul>
                          <a href="blog-post-1.html"><h4 class="blog-item-title">One Framework, Every Device</h4></a>
                        </div>
                      </div>
                    </div>
                    <!-- End of Blog Post 2 -->

                    <!-- Blog Post 3 -->
                    <div class="item">
                      <div class="blog-card">
                        <div class="media-block">
                          <a href="blog-post-1.html">
                            <img class="post-image img-responsive" src="images/blog/blog_post_3.jpg" alt="blog-post-3" />
                            <div class="mask"></div>
                            <div class="post-date"><span class="day">12</span><span class="month">Oct</span><!--<span class="year">2016</span>--></div>
                          </a>
                        </div>
                        <div class="post-info">
                          <ul class="category">
                            <li><a href="#">Sport</a></li>
                          </ul>
                          <a href="blog-post-1.html"><h4 class="blog-item-title">Designed for Everyone, Everywhere</h4></a>
                        </div>
                      </div>
                    </div>
                    <!-- End of Blog Post 3 -->

                    <!-- Blog Post 4 -->
                    <div class="item">
                      <div class="blog-card">
                        <div class="media-block">
                          <a href="blog-post-1.html">
                            <img class="post-image img-responsive" src="images/blog/blog_post_4.jpg" alt="blog-post-4" />
                            <div class="mask"></div>
                            <div class="post-date"><span class="day">18</span><span class="month">Aug</span><!--<span class="year">2016</span>--></div>
                          </a>
                        </div>
                        <div class="post-info">
                          <ul class="category">
                            <li><a href="#">CSS</a></li>
                          </ul>
                          <a href="blog-post-1.html"><h4 class="blog-item-title">An Introduction To PostCSS</h4></a>
                        </div>
                      </div>
                    </div>
                    <!-- End of Blog Post 4 -->

                    <!-- Blog Post 5 -->
                    <div class="item">
                      <div class="blog-card">
                        <div class="media-block">
                          <a href="blog-post-1.html">
                            <img class="post-image img-responsive" src="images/blog/blog_post_5.jpg" alt="blog-post-5" />
                            <div class="mask"></div>
                            <div class="post-date"><span class="day">2</span><span class="month">Jul</span><!--<span class="year">2016</span>--></div>
                          </a>
                        </div>
                        <div class="post-info">
                          <ul class="category">
                            <li><a href="#">CSS3</a></li>
                          </ul>
                          <a href="blog-post-1.html"><h4 class="blog-item-title">Original and Innovative Web Layouts</h4></a>
                        </div>
                      </div>
                    </div>
                    <!-- End of Blog Post 5 -->

                    <!-- Blog Post 6 -->
                    <div class="item">
                      <div class="blog-card">
                        <div class="media-block">
                          <a href="blog-post-1.html">
                            <img class="post-image img-responsive" src="images/blog/blog_post_6.jpg" alt="blog-post-6" />
                            <div class="mask"></div>
                            <div class="post-date"><span class="day">8</span><span class="month">May</span><!--<span class="year">2016</span>--></div>
                          </a>
                        </div>
                        <div class="post-info">
                          <ul class="category">
                            <li><a href="#">HTML5</a></li>
                          </ul>
                          <a href="blog-post-1.html"><h4 class="blog-item-title">Creative and Innovative Navigation Designs</h4></a>
                        </div>
                      </div>
                    </div>
                    <!-- End of Blog Post 6 -->

                    <!-- Blog Post 7 -->
                    <div class="item">
                      <div class="blog-card">
                        <div class="media-block">
                          <a href="blog-post-1.html">
                            <img class="post-image img-responsive" src="images/blog/blog_post_7.jpg" alt="blog-post-7" />
                            <div class="mask"></div>
                            <div class="post-date"><span class="day">7</span><span class="month">Apr</span><!--<span class="year">2016</span>--></div>
                          </a>
                        </div>
                        <div class="post-info">
                          <ul class="category">
                            <li><a href="#">Design</a></li>
                          </ul>
                          <a href="blog-post-1.html"><h4 class="blog-item-title">Navigation for Mega-Sites</h4></a>
                        </div>
                      </div>
                    </div>
                    <!-- End of Blog Post 7 -->

                    <!-- Blog Post 8 -->
                    <div class="item">
                      <div class="blog-card">
                        <div class="media-block">
                          <a href="blog-post-1.html">
                            <img class="post-image img-responsive" src="images/blog/blog_post_8.jpg" alt="blog-post-8" />
                            <div class="mask"></div>
                            <div class="post-date"><span class="day">21</span><span class="month">Mar</span><!--<span class="year">2016</span>--></div>
                          </a>
                        </div>
                        <div class="post-info">
                          <ul class="category">
                            <li><a href="#">CSS3</a></li>
                          </ul>
                          <a href="blog-post-1.html"><h4 class="blog-item-title">Front-End Challenge Accepted: CSS 3D Cube</h4></a>
                        </div>
                      </div>
                    </div>
                    <!-- End of Blog Post 8 -->
                  </div>
                  <!-- Blog Posts Grid -->
                </div>
              </div>
            </section>
            <!-- /Blog Subpage -->

            <!-- Contact Subpage -->
            <section class="pt-page" data-id="contact">
              <div class="section-inner custom-page-content">
                <div class="page-header color-1">
                  <h2>Contact</h2>
                </div>
                <div class="page-content">

                  <div class="row">
                    <div class="col-sm-6 col-md-6">
                      <div class="block-title">
                        <h3>Get in <span>Touch</span></h3>
                      </div>
                      <!-- Google Map -->
                      <div id="map" class="map"></div>
                      <!-- End of Google Map -->

                      <div class="contact-info-block">
                        <div class="ci-icon">
                          <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="ci-text">
                          <h5>Los Angeles, USA</h5>
                        </div>
                      </div>
                      <div class="contact-info-block">
                        <div class="ci-icon">
                          <i class="fa fa-envelope"></i>
                        </div>
                        <div class="ci-text">
                          <h5>alexsmith@example.com</h5>
                        </div>
                      </div>
                      <div class="contact-info-block">
                        <div class="ci-icon">
                          <i class="fa fa-phone"></i>
                        </div>
                        <div class="ci-text">
                          <h5>+123 654 78900</h5>
                        </div>
                      </div>
                      <div class="contact-info-block">
                        <div class="ci-icon">
                          <i class="fa fa-check"></i>
                        </div>
                        <div class="ci-text">
                          <h5>Freelance Available</h5>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-6 col-md-6">
                      <div class="block-title">
                        <h3>Contact <span>Form</span></h3>
                      </div>
                      <form id="contact-form" method="post" action="contact_form/contact_form.php">

                        <div class="messages"></div>

                        <div class="controls">
                          <div class="form-group form-group-with-icon">
                            <i class="fa fa-user"></i>
                            <label>Full Name</label>
                            <input id="form_name" type="text" name="name" class="form-control" placeholder required="required" data-error="Name is required.">
                            <div class="form-control-border"></div>
                            <div class="help-block with-errors"></div>
                          </div>

                          <div class="form-group form-group-with-icon">
                            <i class="fa fa-envelope"></i>
                            <label>Email Address</label>
                            <input id="form_email" type="email" name="email" class="form-control" placeholder required="required" data-error="Valid email is required.">
                            <div class="form-control-border"></div>
                            <div class="help-block with-errors"></div>
                          </div>

                          <div class="form-group form-group-with-icon">
                            <i class="fa fa-comment"></i>
                            <label>Message for Me</label>
                            <textarea id="form_message" name="message" class="form-control" placeholder rows="4" required="required" data-error="Please, leave me a message."></textarea>
                            <div class="form-control-border"></div>
                            <div class="help-block with-errors"></div>
                          </div>

                          <div class="g-recaptcha" data-sitekey="6LdqmCAUAAAAAMMNEZvn6g4W5e0or2sZmAVpxVqI"></div>

                          <input type="submit" class="button btn-send" value="Send message">
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- End Contact Subpage -->

          </div>
        </div>
        <!-- /Page changer wrapper -->
      </div>
      <!-- /Main Content -->
    </div>
    <footer>
      <div class="copyrights">© 2017 All rights reserved. Material template by LMPixels</div>
    </footer>

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/pages-switcher.js"></script>
    <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="js/validator.js"></script>
    <script type="text/javascript" src="js/jquery.shuffle.min.js"></script>
    <script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/jquery.hoverdir.js"></script>
    <!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR-API-KEY"></script>-->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript" src="js/jquery.googlemap.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>
