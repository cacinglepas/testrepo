<?=$this->extend('layout/tamplate-hero'); ?>
<?=$this->section('content'); ?>
    <main id="main">
      <!-- ======= Hero Section ======= -->
      <section id="hero" class="d-flex align-items-center">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
              <h1>Solusi Terbaik Untuk Kebutuhan Anda</h1>
              <h2>Memberikan Pelayanan Terbaik Dibidang Produk Maupun Jasa</h2>
              <div class="d-flex justify-content-center justify-content-lg-start">
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
                <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
              </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
              <img src="assets/img/hero-img.png" class="img-fluid animated" alt="" />
            </div>
          </div>
        </div>
      </section>
      <!-- End Hero -->

      <!-- ======= Clients Section ======= -->
      <section id="clients" class="clients section-bg">
        <div class="container">
          <div class="row" data-aos="zoom-in">
            <?php 
              foreach ($partners as $value) {
            ?>
              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="<?=base_url().$value['logo']?>" class="img-fluid" alt="<?=$value['link']?>" />
              </div>
            <?php } ?>
          </div>
        </div>
      </section>
      <!-- End Cliens Section -->

      <!-- ======= About Us Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Tentang Kami</h2>
          </div>

          <div class="row content">
            <div class="col-lg-6">
              <p>
                CV Gemilang Permata dirikan pada Oktober 2021, berdasarkan dengan berlatar belakang professionalisme talenta yang kami punya. Yang bertujuan memberikan pelayanan terbaik dibidang produk maupun jasa yang menyesuaikan
                kebutuhan pasar dengan pelayanan terbaik.
              </p>
              <!-- <ul>
                <li><i class="ri-check-double-line"></i> pelayanan ditangani dengan ahlinya</li>
                <li><i class="ri-check-double-line"></i> garansi pada tiap divisi yang menangani</li>
                <li><i class="ri-check-double-line"></i> kerja tuntas dan tepat</li>
              </ul> -->
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
              <p>Dengan ini kami hadir sebagai solusi atau fasilitator untuk memenuhi kebutuhan customer yang kami harapkan dapat bekerja sama dengan menjunjung tinggi professionalitas dan dapat berlangsung secara berkepanjangan.</p>
              <!-- <a href="#" class="btn-learn-more">Learn More</a> -->
            </div>
            <div class="col-lg-12 pt-4 pt-lg-0 text-center mt-5">
              <a href="#" class="btn-learn-more">Learn More</a>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Us Section -->

      <!-- ======= Why Us Section ======= -->
      <section id="why-us" class="why-us section-bg">
        <div class="container-fluid" >
          <div class="row">
            <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch order-2 order-lg-1">
              <div class="content mb-3">
                <h3>Kami bekerja melalui sistem, <strong>dimana kinerja adalah prioritas</strong></h3>
                <!-- <p>melalui sebuah sistem yang kami buat akan mempermudah setiap divisi untuk berinteraksi terhadap divisi lainya</p> -->
              </div>

              <div class="accordion-list">
                <ul>
                  <li>
                    <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"
                      ><span>01</span> Apa itu CV. Gemilang Permata? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i
                    ></a>
                    <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                      <p>CV. Gemilang Permata adallah sebuah perusahaan yang bergerak di berbagai bidang jasa & produk. Untuk memenuhi kebutuhan customer.kami memiliki berbagai produk jasa seperti Random String (Web Servicee), Permata Fresh (Pengadaan), Madeline (WO), dan Ekspedisi. </p>
                    </div>
                  </li>

                  <li>
                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"
                      ><span>02</span>Apa Produk & Jasa saja yang tersedia? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i
                    ></a>
                    <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                      <p>
                        Produk & jasa yang kami sediakan diantaranya bidang Pengadaan, Percetakan, Website Development, Wedding Orginazer, dan Kuliner.
                      </p>
                    </div>
                  </li>

                  <li>
                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"
                      ><span>03</span> Apa keuanggulan yang ditawarkan? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i
                    ></a>
                    <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                      <p>
                        Kami menjunjung tinggi profesionalisme serta menyediakan tenaga ahli dan produk yang terbaik.
                      </p>
                    </div>
                  </li>

                  <li>
                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapsed"
                      ><span>04</span> Bagaimana melakukan pesanan? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i
                    ></a>
                    <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                      <p>Hubungi Kami di info@gemilangpermata.com atau <a href="#contact">klik link berikut</a>
                      </p>
                    </div>
                  </li>

                </ul>
              </div>
            </div>

            <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style="background-image: url('assets/img/why-us.png')" data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
          </div>
        </div>
      </section>
      <!-- End Why Us Section -->

      <!-- ======= Skills Section ======= -->
      <!-- <section id="skills" class="skills">
        <div class="container" data-aos="fade-up">
          <div class="row">
            <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
              <img src="<?=base_url()?>/assets/img/skills.png" class="img-fluid" alt="" />
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
              <h3>Voluptatem dignissimos provident quasi corporis voluptates</h3>
              <p class="fst-italic">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

              <div class="skills-content">
                <div class="progress">
                  <span class="skill">HTML <i class="val">100%</i></span>
                  <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>

                <div class="progress">
                  <span class="skill">CSS <i class="val">90%</i></span>
                  <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>

                <div class="progress">
                  <span class="skill">JavaScript <i class="val">75%</i></span>
                  <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>

                <div class="progress">
                  <span class="skill">Photoshop <i class="val">55%</i></span>
                  <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <!-- End Skills Section -->

      <!-- ======= Services Section ======= -->
      <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Divisi</h2>
            <p>
              Kami menyediakan berbagai layanan dan jasa dengan tim ahli yang komperhensif serta berpengalaman pada bidangnya.  
            </p>
          </div>

          <div class="row">
            <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-code-alt"></i></div>
                <h4><a href="">Web Development</a></h4>
                <p>Jasa pembuatan web aplikasi dengan tenaga ahli dan servis yang komprehensif</p>
              </div>
            </div>

            <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-package"></i></div>
                <h4><a href="">Pengaadaan & Jasa</a></h4>
                <p>Menyediakan barang dan jasa yang dibutuhkan </p>
              </div>
            </div>

            <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-cake"></i></div>
                <h4><a href="">Event Organizer</a></h4>
                <p>Jasa penyelenggaraan berbagai kegiatan dan acara dengan tim yang handal pada bidangnya</p>
              </div>
            </div>

            <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="400">
              <div class="icon-box">
                <div class="icon"><i class="bx bxs-truck"></i></div>
                <h4><a href="">Ekspedisi</a></h4>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
              </div>
            </div>

            <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="400">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-restaurant"></i></div>
                <h4><a href="">Kuliner</a></h4>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
              </div>
            </div>

            <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="400">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-printer"></i></div>
                <h4><a href="">Percetakan</a></h4>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Services Section -->

      <!-- ======= Cta Section ======= -->
      <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">
          <div class="row">
              <div class="col-lg-12 text-center text-lg-start">
                <h3>Hubungi Kami</h3>
                <p>"Sleep Call by Erland"</p>
              </div>
              <div class="col-lg-3 cta-btn-container text-lg-start text-center">
                <a class="cta-btn align-middle" href="#contact">Hubungi Kami</a>
              </div>
            </div>
          </div>
      </section>
      <!-- End Cta Section -->

      <!-- ======= Portfolio Section ======= -->
      <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Portfolio</h2>
            <p>
              Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste
              officiis commodi quidem hic quas.
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

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-img"><img src="<?=base_url()?>/assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="" /></div>
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <a href="<?=base_url()?>/assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-img"><img src="<?=base_url()?>/assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="" /></div>
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <a href="<?=base_url()?>/assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-img"><img src="<?=base_url()?>/assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="" /></div>
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <a href="<?=base_url()?>/assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-img"><img src="<?=base_url()?>/assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="" /></div>
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <a href="<?=base_url()?>/assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-img"><img src="<?=base_url()?>/assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="" /></div>
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <a href="<?=base_url()?>/assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Portfolio Section -->

      <!-- ======= Team Section ======= -->
      <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Anggota</h2>
            <p>
              .
            </p>
          </div>

          <div class="row">
            <div class="col-lg-6 mt-4">
              <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                <div class="pic"><img src="<?=base_url()?>/assets/img/team/team-1.jpg" class="img-fluid" alt="" /></div>
                <div class="member-info">
                  <h4>Verry Rolli Veronika</h4>
                  <span>President Director</span>
                  <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                  <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mt-4 ">
              <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
                <div class="pic"><img src="<?=base_url()?>/assets/img/team/team-2.jpg" class="img-fluid" alt="" /></div>
                <div class="member-info">
                  <h4>Bahri</h4>
                  <span>General Manager</span>
                  <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                  <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mt-4">
              <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
                <div class="pic"><img src="<?=base_url()?>/assets/img/team/team-3.jpg" class="img-fluid" alt="" /></div>
                <div class="member-info">
                  <h4>Muhamad Yasin Fachruddin</h4>
                  <span>Commmissioner</span>
                  <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                  <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mt-4">
              <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
                <div class="pic"><img src="<?=base_url()?>/assets/img/team/team-4.jpg" class="img-fluid" alt="" /></div>
                <div class="member-info">
                  <h4>Faridh Maulana</h4>
                  <span>Product Manager</span>
                  <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                  <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Team Section -->

      <!-- ======= Pricing Section ======= -->
      <!-- <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Pricing</h2>
            <p>
              Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste
              officiis commodi quidem hic quas.
            </p>
          </div>

          <div class="row">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="box">
                <h3>Free Plan</h3>
                <h4><sup>$</sup>0<span>per month</span></h4>
                <ul>
                  <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                  <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                  <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                  <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
                  <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                </ul>
                <a href="#" class="buy-btn">Get Started</a>
              </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
              <div class="box featured">
                <h3>Business Plan</h3>
                <h4><sup>$</sup>29<span>per month</span></h4>
                <ul>
                  <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                  <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                  <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                  <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                  <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
                </ul>
                <a href="#" class="buy-btn">Get Started</a>
              </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
              <div class="box">
                <h3>Developer Plan</h3>
                <h4><sup>$</sup>49<span>per month</span></h4>
                <ul>
                  <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                  <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                  <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                  <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                  <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
                </ul>
                <a href="#" class="buy-btn">Get Started</a>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <!-- End Pricing Section -->

      <!-- ======= Frequently Asked Questions Section ======= -->
      <!-- <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Frequently Asked Questions</h2>
            <p>
              Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste
              officiis commodi quidem hic quas.
            </p>
          </div>

          <div class="faq-list">
            <ul>
              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-help-circle icon-help"></i>
                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                  <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-help-circle icon-help"></i>
                <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper
                    dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="300">
                <i class="bx bx-help-circle icon-help"></i>
                <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna
                    duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="400">
                <i class="bx bx-help-circle icon-help"></i>
                <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed"
                  >Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i
                ></a>
                <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis
                    blandit turpis cursus in.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="500">
                <i class="bx bx-help-circle icon-help"></i>
                <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed"
                  >Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i
                ></a>
                <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus
                    vulputate eu scelerisque.
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </section> -->
      <!-- End Frequently Asked Questions Section -->

      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Kontak</h2>
            <p>
              Hubungi kami untuk mendapatkan info lebih lanjut atau melakukan pemesanan.
            </p>
          </div>

          <div class="row">
            <div class="col-lg-5 d-flex align-items-stretch">
              <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Lokasi:</h4>
                  <p>
                    Jl. Hos Cokroaminoto, Karang Tengah <br />
                    Kota Tangerang, Banten Indonesia 15157<br />
                    Indonesia
                  </p>
                </div>

                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>info@gemilangpermata.com</p>
                </div>

                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>telepon:</h4>
                  <p>+62 899 9657 180</p>
                </div>

                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7932.547560957778!2d106.7137294994429!3d-6.227589463935746!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fb1e5f57aedb%3A0x50fde5e9c0fcc5d1!2sCV.%20GEMILANG%20PERMATA%2C%20Jalan%20H.%20Naba%20IV%2C%20RT.003%2FRW.009%2C%20East%20Karang%2C%20Tangerang%20City%2C%20Banten!5e0!3m2!1sen!2sid!4v1657197106242!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="name">Your Name</label>
                    <input type="text" name="name" class="form-control" id="name" required />
                  </div>
                  <div class="form-group col-md-6">
                    <label for="name">Your Email</label>
                    <input type="email" class="form-control" name="email" id="email" required />
                  </div>
                </div>
                <div class="form-group">
                  <label for="name">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject" required />
                </div>
                <div class="form-group">
                  <label for="name">Message</label>
                  <textarea class="form-control" name="message" rows="10" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact Section -->
    </main>
    <!-- End #main -->
<?=$this->endsection(); ?>
