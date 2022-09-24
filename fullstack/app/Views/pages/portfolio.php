<?=$this->extend('layout/tamplate'); ?>
<?=$this->section('content'); ?>

     <main id="main" class="portfolio">
        <section class="breadcrumbs">
             <div class="container">
                 <ol>
                     <li><a href="home.html">Home</a></li>
                     <li><a href="portfolio.html">Portfolio</a></li>
                 </ol>
                 <h2>Porftolio</h2>
             </div>
        </section>

        <!-- <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>portfolio</h2>
                <p>isi paragraph</p>
            </div>

            <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">app</li>
                <li data-filter=".filter-card">card</li>
                <li data-filter=".filter-web">web</li>

            </ul>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img"><img src="<?base_url()?>/assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt=""/></div>
                            <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>App</p>
                            <a href="<?base_url() ?>/assets/img/portfolio/portfolio-1.jpg" data-gallery="porfolioGallery"class="portfolio-ligthbox preview-link" tittle="App 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="more details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            
                <div class="row portfolio-container" data-aos="fade-up">
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web"> 
                        <div class="portfolio-img"><img src="<?base_url()?>/assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt=""/></div>
                            <div class="portfolio-info"></div>
                            <h4>web 1</h4>
                            <p>Web</p>
                            <a href="<?base_url() ?>/assets/img/portfolio/portfolio-1.jpg" data-gallery="porfolioGallery"class="portfolio-ligthbox preview-link" tittle="Web 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="more details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            
                <div class="row portfolio-container" data-aos="fade-up">
                    <div class="col-lg-4 col-md-6 potfolio-item filter-card"> 
                        <div class="portfolio-img"><img src="<?base_url()?>/assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt=""/></div>
                            <div class="portfolio-info"></div>
                            <h4>Card 1</h4>
                            <p>Card</p>
                            <a href="<?base_url() ?>/assets/img/portfolio/portfolio-1.jpg" data-gallery="porfolioGallery"class="portfolio-ligthbox preview-link" tittle="Card 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="more details"><i class="bx bx-link"></i></a>
                    </div>                
                </div>

                <div class="row portfolio-container" data-aos="fade-up">
                    <div class="col-lg-4 col-md-6 potfolio-item filter-app">
                        <div class="portfolio-img"><img src="<?base_url()?>/assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt=""/></div>
                            <div class="portfolio-info"></div>
                            <h4>App 2</h4>
                            <p>App</p>
                            <a href="<?base_url() ?>/assets/img/portfolio/portfolio-1.jpg" data-gallery="porfolioGallery"class="portfolio-ligthbox preview-link" tittle="App 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="more details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>
        </div>   
    </section>
    </main> -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Portfolio</h2>
            <p>
              penjelasan portfolio
            </p>
          </div>

          <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
          </ul>

          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-img"><img src="<?=base_url()?>/assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="" /></div>
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <a href="<?=base_url()?>/assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-img"><img src="<?=base_url()?>/assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="" /></div>
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <a href="<?=base_url()?>/assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-img"><img src="<?=base_url()?>/assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="" /></div>
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <a href="<?=base_url()?>/assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-img"><img src="<?=base_url()?>/assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="" /></div>
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <a href="<?=base_url()?>/assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>
    </section>

<?=$this->endsection(); ?>