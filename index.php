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
                  <h2>Hizmetler</h2>
                </div>
                <div class="page-content">
                  <!-- My Services -->
                  <div class="row">
                    <div class="col-sm-12 col-md-12">
                      <div class="block-title">
                        <h3>Sunduğum <span>Hizmetler</span></h3>
                      </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                      <div class="service-block">
                        <div class="service-info">
                          <!--<i class="service-icon fa fa-shopping-cart"></i>-->
                          <div class="service-image">
                            <img src="images/service/web_design_icon.png" alt="Responsive Design" class="mCS_img_loaded">
                          </div>
                          <h4>Web Tasarım</h4>
                          <p>4 yıldır kendimi geliştirmekte olduğum web tasarım alanında aktif olarak back-end rolü alıyorum.</p>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                      <div class="service-block">
                        <div class="service-info">
                          <div class="service-image">
                            <img src="images/service/photography_icon.png" alt="Photography" class="mCS_img_loaded">
                          </div>
                          <h4>Android Mobil Geliştirme</h4>
                          <p>Yaklaşık 2 yıldır Native(Java) olarak android uygulamalar geliştirmekteyim.</p>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                      <div class="service-block">
                        <div class="service-info">
                          <div class="service-image">
                            <img src="images/service/creativity_icon.png" alt="Creativity" class="mCS_img_loaded">
                          </div>
                          <h4>Unity Oyun Geliştirme</h4>
                          <p>1.5 - 2 yıldır Oyun geliştirme ve modelleme ile ilgili kurslar alıp GameJam seviyesinde kendimi geliştiriyorum.</p>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                      <div class="service-block">
                        <div class="service-info">
                          <div class="service-image">
                            <img src="images/service/advetising_icon.png" alt="Advetising" class="mCS_img_loaded">
                          </div>
                          <h4>Masaüstü Geliştirme</h4>
                          <p>C# veya NodeJS ile nesne tabanlı olarak masaüstü uygulamalar geliştiriyorum.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of My Services -->

                  <!-- Clients -->
                  <div class="row">
                    <div class="col-sm-12 col-md-12">
                      <div class="block-title">
                        <h3>Ürünlerim</h3>
                      </div>

                      <div class="col-sm-4 col-md-2 subpage-block">
                        <div class="client-block">
                          <a target="_blank" href="https://odevcin.com" target="_blank"><img title="Ödevcin.Com" src="https://media-exp1.licdn.com/dms/image/C4E0BAQETI7QyzVbdww/company-logo_100_100/0?e=1611792000&v=beta&t=TSAdKxRfyfDZO3S5mH6ud5nW1c4BsspdYwZtv_xboCE" alt="image" class="mCS_img_loaded"></a>
                        </div>
                      </div>

                      <div class="col-sm-4 col-md-2 subpage-block">
                        <div class="client-block">
                          <a target="_blank" href="https://instagram.com/nazliardatasarim" title="Nazlı Arda Tasarım" target="_blank"><img src="https://instagram.fist13-1.fna.fbcdn.net/v/t51.2885-19/s150x150/122536008_1627545847419012_4469653721060243604_n.jpg?_nc_ht=instagram.fist13-1.fna.fbcdn.net&_nc_ohc=xoc5Y5BM56cAX_G4uB4&oh=37ded26ec042b7b882b713999cfff0b1&oe=5FC05AE7" alt="image" class="mCS_img_loaded"></a>
                        </div>
                      </div>

                      <div class="col-sm-4 col-md-2 subpage-block">
                        <div class="client-block">
                          <a target="_blank" href="https://instagram.com/benhediyelik" target="_blank"><img src="https://instagram.fist13-1.fna.fbcdn.net/v/t51.2885-19/s150x150/122645463_371409710883470_6128543697753432288_n.jpg?_nc_ht=instagram.fist13-1.fna.fbcdn.net&_nc_ohc=ecP0VMu1YSIAX_8-Wze&oh=0fbc55a6a9b56613e3fa7d005e9e1776&oe=5FBE1962" alt="image" class="mCS_img_loaded"></a>
                        </div>
                      </div>

                      <div class="col-sm-4 col-md-2 subpage-block">
                        <div class="client-block">
                          <a href="javascript:void(0);" ><img title="TILANCE" src="https://media-exp1.licdn.com/dms/image/C4D0BAQHBxqPwV74HAQ/company-logo_100_100/0?e=1611792000&v=beta&t=zZWUR3MVB7OckUR_UROpeyZDL3nNICpK6I13T8dB6BU" alt="image" class="mCS_img_loaded"></a>
                        </div>
                      </div>
                      <div class="col-sm-4 col-md-2 subpage-block">
                        <div class="client-block">
                          <a href="javascript:void(0);" ><img title="BolFps" src="https://avatars2.githubusercontent.com/u/65625428?s=60&v=4" alt="image" class="mCS_img_loaded"></a>
                        </div>
                      </div>


                    </div>
                  </div>
                  <!-- End of Clients -->




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
                        <a class="filter btn btn-sm btn-link active" data-group="all">Hepsi</a>
                      </li>
                      <li>
                        <a class="filter btn btn-sm btn-link" data-group="webmobile">Web / Mobil</a>
                      </li>
                      <li>
                        <a class="filter btn btn-sm btn-link" data-group="game">Oyun</a>
                      </li>
                      <li>
                        <a class="filter btn btn-sm btn-link" data-group="design">Tasarım</a>
                      </li>
                    </ul>
                    <!-- End of Portfolio filter -->

                    <!-- Portfolio Grid -->
                    <div id="portfolio_grid" class="portfolio-grid portfolio-masonry masonry-grid-3">





                      <!-- Portfolio Item 3 -->
                      <figure class="item" data-groups='["all","design"]'>
                        <a href="images/1.PNG" class="lightbox" title="Nazlı Arda Kartvizit 1">
                          <img src="images/1.PNG" alt="img">
                          <div>
                            <h5 class="name">Nazlı Arda Kartvizit 1</h5>
                            <small>Photoshop</small>
                            <i class="fa fa-image"></i>
                          </div>
                        </a>
                      </figure>
                      <!-- /Portfolio Item 3 -->

                      <!-- Portfolio Item 3 -->
                      <figure class="item" data-groups='["all","design"]'>
                        <a href="images/2.PNG" class="lightbox" title="Nazlı Arda Kartvizit 2">
                          <img src="images/2.PNG" alt="img">
                          <div>
                            <h5 class="name">Nazlı Arda Kartvizit 2</h5>
                            <small>Photoshop</small>
                            <i class="fa fa-image"></i>
                          </div>
                        </a>
                      </figure>
                      <!-- /Portfolio Item 3 -->
                      <!-- Portfolio Item 3 -->
                      <figure class="item" data-groups='["all","design"]'>
                        <a href="images/ff.jpg" class="lightbox" title="B.E.N HEDİYELİK Logo">
                          <img src="images/ff.jpg" alt="img">
                          <div>
                            <h5 class="name">B.E.N HEDİYELİK Logo</h5>
                            <small>Photoshop</small>
                            <i class="fa fa-image"></i>
                          </div>
                        </a>
                      </figure>
                      <!-- /Portfolio Item 3 -->
                      <!-- Portfolio Item 3 -->
                      <figure class="item" data-groups='["all","design"]'>
                        <a href="images/logo.jpg" class="lightbox" title="Nazlı Arda Tasarım Logo">
                          <img src="images/logo.jpg" alt="img">
                          <div>
                            <h5 class="name">Nazlı Arda Tasarım Logo</h5>
                            <small>Photoshop</small>
                            <i class="fa fa-image"></i>
                          </div>
                        </a>
                      </figure>
                      <!-- /Portfolio Item 3 -->
                      <!-- Portfolio Item 3 -->
                      <figure class="item" data-groups='["all","design"]'>
                        <a href="images/logoo.png" class="lightbox" title="Nazlı Arda Tasarım Logo">
                          <img src="images/logoo.png" alt="img">
                          <div>
                            <h5 class="name">Nazlı Arda Tasarım Logo</h5>
                            <small>Photoshop</small>
                            <i class="fa fa-image"></i>
                          </div>
                        </a>
                      </figure>
                      <!-- /Portfolio Item 3 -->
                      <figure class="item" data-groups='["all","design"]'>
                        <a href="images/logo.png" class="lightbox" title="Odevcin.Com Logo">
                          <img src="images/logo.png" alt="img">
                          <div>
                            <h5 class="name">Odevcin.Com Logo</h5>
                            <small>Photoshop</small>
                            <i class="fa fa-image"></i>
                          </div>
                        </a>
                      </figure>

                      <figure class="item" data-groups='["all","game"]'>
                        <a href="images/game/1.png" class="lightbox" title="Game">
                          <img src="images/game/1.png" alt="img">
                          <div>
                            <h5 class="name">Minerale's</h5>
                            <small>Unity3D</small>
                            <i class="fa fa-image"></i>
                          </div>
                        </a>
                      </figure>

                      <figure class="item" data-groups='["all","game"]'>
                        <a href="images/game/2.png" class="lightbox" title="Game">
                          <img src="images/game/2.png" alt="img">
                          <div>
                            <h5 class="name">Minerale's</h5>
                            <small>Unity3D</small>
                            <i class="fa fa-image"></i>
                          </div>
                        </a>
                      </figure>

                      <figure class="item" data-groups='["all","game"]'>
                        <a href="images/game/3.png" class="lightbox" title="Game">
                          <img src="images/game/3.png" alt="img">
                          <div>
                            <h5 class="name">Minerale's</h5>
                            <small>Unity3D</small>
                            <i class="fa fa-image"></i>
                          </div>
                        </a>
                      </figure>

                      <figure class="item" data-groups='["all","game"]'>
                        <a href="images/game/4.png" class="lightbox" title="Game">
                          <img src="images/game/4.png" alt="img">
                          <div>
                            <h5 class="name">Minerale's</h5>
                            <small>Unity3D</small>
                            <i class="fa fa-image"></i>
                          </div>
                        </a>
                      </figure>

                      <figure class="item" data-groups='["all","game"]'>
                        <a href="images/game/5.png" class="lightbox" title="Game">
                          <img src="images/game/5.png" alt="img">
                          <div>
                            <h5 class="name">Minerale's</h5>
                            <small>Unity3D</small>
                            <i class="fa fa-image"></i>
                          </div>
                        </a>
                      </figure>

                      <figure class="item" data-groups='["all","game"]'>
                        <a href="images/game/6.png" class="lightbox" title="Game">
                          <img src="images/game/6.png" alt="img">
                          <div>
                            <h5 class="name">Minerale's</h5>
                            <small>Unity3D</small>
                            <i class="fa fa-image"></i>
                          </div>
                        </a>
                      </figure>

                      <figure class="item" data-groups='["all","game"]'>
                        <a href="images/game/7.png" class="lightbox" title="Game">
                          <img src="images/game/7.png" alt="img">
                          <div>
                            <h5 class="name">Minerale's</h5>
                            <small>Unity3D</small>
                            <i class="fa fa-image"></i>
                          </div>
                        </a>
                      </figure>

                      <figure class="item" data-groups='["all","game"]'>
                        <a href="images/game/8.png" class="lightbox" title="Game">
                          <img src="images/game/8.png" alt="img">
                          <div>
                            <h5 class="name">Minerale's</h5>
                            <small>Unity3D</small>
                            <i class="fa fa-image"></i>
                          </div>
                        </a>
                      </figure>

                      <figure class="item" data-groups='["all","game"]'>
                        <a href="images/game/9.png" class="lightbox" title="Game">
                          <img src="images/game/9.png" alt="img">
                          <div>
                            <h5 class="name">Minerale's</h5>
                            <small>Unity3D</small>
                            <i class="fa fa-image"></i>
                          </div>
                        </a>
                      </figure>

                      <figure class="item" data-groups='["all","game"]'>
                        <a href="images/game/0.png" class="lightbox" title="Game">
                          <img src="images/game/0.png" alt="img">
                          <div>
                            <h5 class="name">Minerale's</h5>
                            <small>Unity3D</small>
                            <i class="fa fa-image"></i>
                          </div>
                        </a>
                      </figure>
                      <figure class="item" data-groups='["all","webmobile"]'>
                        <a href="images/fa.png" class="lightbox" title="Odevcin Theme">
                          <img src="images/fa.png" alt="img">
                          <div>
                            <h5 class="name">Odevcin Theme</h5>
                            <small>Web</small>
                            <i class="fa fa-image"></i>
                          </div>
                        </a>
                      </figure>








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
