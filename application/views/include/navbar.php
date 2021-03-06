
    <div class="py-2 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 d-none d-lg-block">
            <a class="small mr-3"><span class="icon-question-circle-o mr-2"></span>Punya pertanyaan atau Perlu bantuan ? Hubungi</a> 
            <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span> 10 20 123 456</a> 
            <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span> info@mydomain.com</a> 
          </div>
          <div class="col-lg-3 text-right">
            <a href="<?=site_url('home/login')?>" class="small mr-3"><span class="icon-unlock-alt"></span> Masuk</a>
            <a href="<?=site_url('home/register')?>" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> Daftar</a>
          </div>
        </div>
      </div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="<?=base_url()?>" class="d-block">
              <img src="<?=base_url()?>frontend/images/logo2.jpg" alt="Image" class="img-fluid">
            </a>
          </div>
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li>
                  <a href="<?=base_url()?>" class="nav-link text-left">Beranda</a>
                </li>
                <li class="has-children">
                  <a href="<?=site_url('home/ukm')?>" class="nav-link text-left">UKM</a>
                  <ul class="dropdown">
                    <li><a href="<?=site_url('home/ukm')?>">Our Teachers</a></li>
                    <li><a href="<?=site_url('home/ukm')?>">Our School</a></li>
                  </ul>
                </li>
                <li class="has-children">
                  <a href="about.html" class="nav-link text-left">Komunitas</a>
                  <ul class="dropdown">
                    <li><a href="teachers.html">Our Teachers</a></li>
                    <li><a href="about.html">Our School</a></li>
                  </ul>
                </li>
                <li>
                  <a href="<?=base_url('artikel/artikel_list')?>" class="nav-link text-left">Artikel</a>
                </li>
              </ul>                                                                                                                                                                                                                                                                                          </ul>
            </nav>

          </div>
          <div class="ml-auto">
            <div class="social-wrap">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-linkedin"></span></a>

              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>
            </div>
          </div>
         
        </div>
      </div>

    </header>

    
