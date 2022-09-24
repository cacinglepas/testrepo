<?=$this->extend('layout/tamplate'); ?>
<?=$this->section('content'); ?>

    <main id="main">
        
      <section class="breadcrumbs-blog">
        <div class="container">
  
          <ol>
            <li><a href="home.html">Home</a></li>
            <li><a href="blog.html">Blog</a></li>
          </ol>
          <h2>Blog</h2>
  
        </div>
      </section><!-- End Breadcrumbs -->

       <!-- ======= Blog Section ======= -->
       <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
  
          <div class="row">
  
            <div class="col-lg-8 entries">
  
              <!-- <article class="entry">
  
                <div class="entry-img">
                  <img src="<?=base_url()?>/assets/img/cta-bg.jpg" alt="" class="img-fluid">
                </div>
  
                <h2 class="entry-title">
                  <a href="blog-single.php">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</a>
                </h2>
  
                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.php">John Doe</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.php"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.php">12 Comments</a></li>
                  </ul>
                </div>
  
                <div class="entry-content">
                  <p>
                    Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                    Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.
                  </p>
                  <div class="read-more">
                    <a href="blog-single.php">Read More</a>
                  </div>
                </div>
  
              </article> -->
              <!-- End blog entry -->
              <?php 
                foreach ($blogs as $value) { 
              ?>
                <article class="entry">
                  <div class="entry-img">
                    <img src="<?=base_url()?>/assets/img/<?=$value['sampul']?>" alt="" class="img-fluid">
                  </div>

                  <h2 class="entry-title">
                    <a href="blog-single.php"><?=$value['judul']?></a>
                  </h2>

                  <div class="entry-meta">
                    <ul>
                      <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.php">John Doe</a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.php"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.php">12 Comments</a></li>
                    </ul>
                  </div>

                  <div class="entry-content">
                    <p>
                    <?=$value['konten']?></p>
                    <div class="read-more">
                      <a href="<?=base_url("/blog/blogsingle")?>">Read More</a>
                    </div>
                  </div>

                </article><!-- End blog entry -->
              <?php } ?>
              <div class="blog-pagination">
                <ul class="justify-content-center">
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                </ul>
              </div>
  
            </div><!-- End blog entries list -->
  
            <div class="col-lg-4">
  
              <div class="sidebar">
  
                <h3 class="sidebar-title">Search</h3>
                <div class="sidebar-item search-form">
                  <form action="">
                    <input type="text">
                    <button type="submit"><i class="bi bi-search"></i></button>
                  </form>
                </div><!-- End sidebar search formn-->
  
                <h3 class="sidebar-title">Categories</h3>
                <div class="sidebar-item categories">
                  <ul>
                    <li><a href="#">General <span>(25)</span></a></li>
                    <li><a href="#">Lifestyle <span>(12)</span></a></li>
                    <li><a href="#">Travel <span>(5)</span></a></li>
                    <li><a href="#">Design <span>(22)</span></a></li>
                    <li><a href="#">Creative <span>(8)</span></a></li>
                    <li><a href="#">Educaion <span>(14)</span></a></li>
                  </ul>
                </div><!-- End sidebar categories-->
  
                <h3 class="sidebar-title">Recent Posts</h3>
                <div class="sidebar-item recent-posts">
                  <div class="post-item clearfix">
                    <img src="<?=base_url()?>/assets/img/blog/blog-recent-1.jpg" alt="">
                    <h4><a href="blog-single.php">Nihil blanditiis at in nihil autem</a></h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                  </div>
  
                  <div class="post-item clearfix">
                    <img src="<?=base_url()?>/assets/img/blog/blog-recent-2.jpg" alt="">
                    <h4><a href="blog-single.php">Quidem autem et impedit</a></h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                  </div>
  
                  <div class="post-item clearfix">
                    <img src="<?=base_url()?>/assets/img/blog/blog-recent-3.jpg" alt="">
                    <h4><a href="blog-single.php">Id quia et et ut maxime similique occaecati ut</a></h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                  </div>
  
                  <div class="post-item clearfix">
                    <img src="<?=base_url()?>/assets/img/blog/blog-recent-4.jpg" alt="">
                    <h4><a href="blog-single.php">Laborum corporis quo dara net para</a></h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                  </div>
  
                  <div class="post-item clearfix">
                    <img src="<?=base_url()?>/assets/img/blog/blog-recent-5.jpg" alt="">
                    <h4><a href="blog-single.php">Et dolores corrupti quae illo quod dolor</a></h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                  </div>
  
                </div><!-- End sidebar recent posts-->
  
                <h3 class="sidebar-title">Tags</h3>
                <div class="sidebar-item tags">
                  <ul>
                    <li><a href="#">App</a></li>
                    <li><a href="#">IT</a></li>
                    <li><a href="#">Business</a></li>
                    <li><a href="#">Mac</a></li>
                    <li><a href="#">Design</a></li>
                    <li><a href="#">Office</a></li>
                    <li><a href="#">Creative</a></li>
                    <li><a href="#">Studio</a></li>
                    <li><a href="#">Smart</a></li>
                    <li><a href="#">Tips</a></li>
                    <li><a href="#">Marketing</a></li>
                  </ul>
                </div><!-- End sidebar tags-->
  
              </div><!-- End sidebar -->
  
            </div><!-- End blog sidebar -->
  
          </div>
  
        </div>
      </section><!-- End Blog Section -->
  
    </main>
    <!-- End #main -->
    <?=$this->endsection(); ?>