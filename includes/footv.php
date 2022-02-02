          <div class="col-md-12 col-lg-4 sidebar">
            <div class="sidebar-box search-form-wrap">
              <form action="search.php" class="search-form">
                <div class="form-group">
                  <span class="icon fa fa-search"></span>
                  <input type="text" class="form-control" method="get" name="q" id="q" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <!-- END sidebar-box -->
            <div class="sidebar-box">
              <div class="bio text-center">
                <img src="/assets/images/person_1.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="bio-body">
                  <h2>David Craig</h2>
                  <p>Nope</p>
                  <p><a href="#" class="btn btn-primary btn-sm rounded">Read my bio</a></p>
                  <p class="social">
                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                  </p>
                </div>
              </div>
            </div>
            <!-- END sidebar-box -->  
            <div class="sidebar-box">
              <h3 class="heading">Popular Posts</h3>
              <div class="post-entry-sidebar">
                <ul>
                    <?php
                    $urlhot = explode('<div class="row itemapp">', $hot);
                    for ($i = 1; $i <= 3; $i++) {
                      $url = potong($urlhot[$i], '<a href="https://apkplz.net/app/', '"');
                      $nama = potong($urlhot[$i], 'title="', ' Apk"');
                      $img = potong($urlhot[$i], '<img src="', '"');
                    echo'
                    <li>
                      <a href="/app/'.$url.'.html">
                        <img src="'.$img.'" alt="Image placeholder" class="mr-4">
                        <div class="text">
                          <h4>'.$nama.'</h4>
                        </div>
                      </a>
                    </li>';
                    }

                    ?>
                </ul>
              </div>
            </div>
            <!-- END sidebar-box -->
            <div class="sidebar-box">
              <h3 class="heading">Tags</h3>
              <ul class="tags">
                  <li><a href="/category/action">Action</a></li>
                  <li><a href="/category/adventure">Adventure</a></li>
                  <li><a href="/category/arcade">Arcade</a></li>
                  <li><a href="/category/board">Board</a></li>
                  <li><a href="/category/card">Card</a></li>
                  <li><a href="/category/casino">Casino</a></li>
                  <li><a href="/category/casual">Casual</a></li>
                  <li><a href="/category/educational">Educational</a></li>
                  <li><a href="/category/music">Music</a></li>
                  <li><a href="/category/puzzle">Puzzle</a></li>
                  <li><a href="/category/racing">Racing</a></li>
                  <li><a href="/category/role-playing">Role Playing</a></li>
                  <li><a href="/category/simulation">Simulation</a></li>
                  <li><a href="/category/sports">Sports</a></li>
                  <li><a href="/category/strategy">Strategy</a></li>
                  <li><a href="/category/trivia">Trivia</a></li>
                  <li><a href="/category/word">Word</a></li>
              </ul>
            </div>
          </div>
          <!-- END sidebar -->

        </div>
      </div>
    </section>
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="mb-3 ">Related Post</h2>
          </div>
        </div>
        <div class="row">
            <?php
                    $urlhot = explode('<div class="row itemapp">', $hot);
                    for ($i = 3; $i < 9; $i++) {
                      $url = potong($urlhot[$i], '<a href="https://apkplz.net/app/', '"');
                      $nama = potong($urlhot[$i], 'title="', ' Apk"');
                      $img = potong($urlhot[$i], '<img src="', '"');
            echo'

          <div class="col-md-6 col-lg-4">
            <a href="/app/'.$url.'.html" class="a-block sm d-flex align-items-center height-md" style="background-image: url('.$img.');">
              <div class="text">
                <h3>'.$nama.'</h3>
              </div>
            </a>
          </div>';}
          ?>
        </div>
      </div>


    </section>
    <!-- END section -->
    <footer class="site-footer">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-4">
              <h3>About Us</h3>
              <p>Nope. <a href="#">Read More</a></p>
            </div>
            <div class="col-md-6 ml-auto">
              <div class="row">
                <div class="col-md-7">
                  <h3>Latest Post</h3>
                  <div class="post-entry-sidebar">
                    <ul>
                      <?php
                    $urlhot = explode('<div class="row itemapp">', $hot);
                    for ($i = 10; $i < 15; $i++) {
                      $url = potong($urlhot[$i], '<a href="https://apkplz.net/app/', '"');
                      $nama = potong($urlhot[$i], 'title="', ' Apk"');
                      $img = potong($urlhot[$i], '<img src="', '"');
                      echo'
                      <li>
                        <a href="/'.$url.'">
                          <img src="'.$img.'" alt="'.$nama.'" class="mr-4 rounded">
                          <div class="text">
                            <h4>'.$nama.'</h4>
                          </div>
                        </a>
                      </li> ';              
                    }
                      ?>
                    </ul>
                  </div>
                </div>
                <div class="col-md-1"></div>
                
                <div class="col-md-4">

                  <div class="mb-5">
                    <h3>Quick Links</h3>
                    <ul class="list-unstyled">
                      <li><a href="#">Home</a></li>
                      <li><a href="#">About Us</a></li>
                      <li><a href="#">Contact Us</a></li>
                    </ul>
                  </div>
                  
                  <div class="mb-5">
                    <h3>Social</h3>
                    <ul class="list-unstyled footer-social">
                      <li><a href="#"><span class="fa fa-twitter"></span> Twitter</a></li>
                      <li><a href="#"><span class="fa fa-facebook"></span> Facebook</a></li>
                      <li><a href="#"><span class="fa fa-instagram"></span> Instagram</a></li>
                      <li><a href="#"><span class="fa fa-pinterest"></span> Pinterest</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
              <p class="small">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All Rights Reserved | This template is made with <i class="fa fa-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>
        </div>
      </footer>
      <!-- END footer -->

    </div>
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="/assets/js/jquery-3.2.1.min.js"></script>
    <script src="/assets/js/jquery-migrate-3.0.0.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/jquery.waypoints.min.js"></script>
    <script src="/assets/js/jquery.stellar.min.js"></script>
    <script src="/assets/js/main.js"></script>
  </body>
</html>        
<?php
$tambah = fopen($tempatfile, 'w');
fwrite($tambah, ob_get_contents());
fclose($tambah);
ob_end_flush();

?>
