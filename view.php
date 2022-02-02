<?php
error_reporting(0);
include 'includes/functions.php';
$id=$_GET['nama'];
$url = ''.$dpath.''.$id.'';

$hot = strstr(grab($url), '<div class="col-sm-12 col-md-8">');
$cat = bersihbesarawal(potong($hot, '<a href="https://apkplz.net/category/game-', '"'));
$cats = bersihkecil(potong($hot, '<a href="https://apkplz.net/category/game-', '"'));
$img = potong($hot, '<img src="', '"');
$nama = kotorbesarawal(potong($hot, 'alt="', ' Apk"'));
$desc = potong($hot, '<ul class="list-unstyled">', '</ul>');
$descs = potong($hot, '<div class="section app-content">', '<span class="read-more">Show More</span>');
$ver = explode('<ul class="list-unstyled">', $hot);
$versi = potong($ver[1], '<li>Version: ', '</li>');
$title = 'Online Generator '.$nama.' Unlimited Hack 100% Working on iOS & Android';
$deskripsi = '100% free Online tools hack to get unlimited money games for '.$nama.' V.'.$versi.' with the best Resources Tool. Learn how to get the free resources on your '.$nama.' game.';
include 'includes/head.php';
echo'
    <section class="site-section py-md" itemprop="blogPost" itemscope="itemscope" itemtype="http://schema.org/BlogPosting">
      <div class="container">
        <div class="row blog-entries element-animate">
          <div class="col-md-12 col-lg-8 main-content">	        
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/category/'.$cats.'">'.$cat.'</a></li>
            <li class="breadcrumb-item active" aria-current="page">'.$nama.'</li>
            </ol>
            </nav>
            <div class="post-meta">
            <span class="author mr-2"><img src="/assets/images/person_1.jpg" alt="David Craig" class="mr-2"> David Craig</span>
            </div>
            <h1 class="mb-4">'.$nama.' V.'.$versi.' Online Generator</h1>
            <hr>
            <div class="post-content-body" itemprop="articleBody">        
           	<div class="aimg">
	        <img class="rounded float-right" src="'.$img.'" itemprop="image" itemscope="itemscope" itemtype="https://schema.org/ImageObject"/>
            <ul class="list-unstyled">'.$desc.'</ul>
            </div>	 
            <hr>       
            <h3>Features:</h3>
            <ul>
                <li>Unlimited Coin, Gold, Gems, or Diamonds</li>
                <li>Automatically updated</li>
                <li>100% Undetectable and Safe (Anti Ban Protection)</li>
                <li>Easy to Use</li>
                <li>Works with all Android / iOS devices</li>
                <li>No ROOT or JAILBREAK required</li>
                <li>Free</li>
            </ul>
            <h3>Instructions:</h3>
            <ul>
                <li>Enter Required Details</li>
                <li>Enter amount of resources</li>
                <li>Click "Generate" and wait a few seconds</li>
                <li>Verify</li>
                <li>Done! Enjoy your Free Resources</li>
            </ul>
            <a href="/hack.php?nama='.$id.'">
            <div class="text-center">
          	<img class="mx-auto" src="/assets/images/Hack.png" alt="'.$nama.'"></a>
            </div>
            <hr>
            '.$descs.'
            <hr>
            </div>
            <div class="pt-5">
            <p>Categories:  <a href="/category/'.$cats.'">'.$cat.'</a></p>
            </div>    
			</div>

          <!-- END main-content -->';

include 'includes/footv.php';
?>
