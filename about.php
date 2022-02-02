<?php
include 'includes/functions.php';
$url = 'https://apkplz.net/category/games';
$hot = strstr(grab($url), '<div class="section row">');
$urlhot = explode('<div class="row itemapp">', $hot);
$title = 'About us';
$deskripsi = 'About us';
include 'includes/head.php';
echo'
    <section class="site-section py-md" itemprop="blogPost" itemscope="itemscope" itemtype="http://schema.org/BlogPosting">
      <div class="container">
        <div class="row blog-entries element-animate">
          <div class="col-md-12 col-lg-8 main-content">	        
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">'.$title.'</li>
            </ol>
            </nav>
            <div class="post-meta">
            <span class="author mr-2"><img src="assets/images/person_1.jpg" alt="David Craig" class="mr-2"> David Craig</span>
            </div>
            <h1 class="mb-4">'.$title.'</h1>
            <hr>
            <div class="post-content-body" itemprop="articleBody">
            <p>This site about online tool hacking for all Games iOS and Android 100% Working
            free tools site.
            </p>        
			</div>
			</div>
          <!-- END main-content -->';

include 'includes/footer.php';
?>         