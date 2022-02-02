<?php $link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?= $title ?></title>
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">
<?php
echo'
<meta name="description" content="'.$deskripsi.'"/>
<link rel="canonical" href="'.$link.'" />
';
?>
<link rel="stylesheet" href="/assets/css/bootstrap.css">
<link rel="stylesheet" href="/assets/css/animate.css">
<link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="/assets/css/all.css">

<link rel="stylesheet" href="/assets/fonts/ionicons/css/ionicons.min.css">
<link rel="stylesheet" href="/assets/fonts/fontawesome/css/font-awesome.min.css">
<link rel="stylesheet" href="/assets/fonts/flaticon/font/flaticon.css">

<!-- Theme Style -->
<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body itemscope='itemscope' itemtype='http://schema.org/WebPage'>
<div class="wrap">

<header itemprop='mainEntity' itemscope='itemscope' itemtype='http://schema.org/WPHeader' role="banner">
<div class="top-bar">
  <div class="container">
    <div class="row">
      <div class="col-9 social">
        <a href="#"><span class="fa fa-twitter"></span></a>
        <a href="#"><span class="fa fa-facebook"></span></a>
        <a href="#"><span class="fa fa-instagram"></span></a>
        <a href="#"><span class="fa fa-youtube-play"></span></a>
      </div>
      <div class="col-3 search-top">
        <!-- <a href="#"><span class="fa fa-search"></span></a> -->
        <form action="search.php" class="search-top-form">
          <span class="icon fa fa-search"></span>
          <input type="text" method="get" name="q" id="q" placeholder="Type keyword to search...">
        </form>
      </div>
    </div>
  </div>
</div>

<div class="container logo-wrap">
  <div class="row pt-5">
    <div class="col-12 text-center">
      <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
      <h2 class="site-logo" itemprop='headline'><a href="/" itemprop='name'>HackGen</a></h2>
      <p itemprop='description'>Hack Online Tools</p>
    </div>
  </div>
</div>

<nav class="navbar navbar-expand-md  navbar-light bg-light" itemprop='mainEntity' itemscope='itemscope' itemtype='http://schema.org/SiteNavigationElement'>
  <div class="container">
    <div class="collapse navbar-collapse" id="navbarMenu">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link" href="/" itemprop='url'><span itemprop='name'>Home</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about.html" itemprop='url'><span itemprop='name'>About</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact.html" itemprop='url'><span itemprop='name'>Contact</span></a>
        </li>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" itemprop='url'>Categories</a>
		<div class="dropdown-menu" aria-labelledby="dropdown05">
			<a class="dropdown-item" href="/" itemprop='url'><span itemprop='name'>Lifestyle</span></a>
			<a class="dropdown-item" href="/" itemprop='url'><span itemprop='name'>Food</span></a>
			<a class="dropdown-item" href="/" itemprop='url'><span itemprop='name'>Adventure</span></a>
			<a class="dropdown-item" href="/" itemprop='url'><span itemprop='name'>Travel</span></a>
			<a class="dropdown-item" href="/" itemprop='url'><span itemprop='name'>Business</span></a>
		</div>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
</header>
<!-- END header -->
