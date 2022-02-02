<?php
error_reporting(0);
include 'includes/functions.php';
$q = $_GET['cat'];
$url = 'https://apkplz.net/category/game-'.$q.'';

$title='Category : '.$q.'';

include 'includes/head.php';

$hot = strstr(grab($url), '<div class="col-sm-12 col-md-8">');
$urlhot = explode('<div class="row itemapp">', $hot);
$count = count($urlhot);
$count = $count-1;
echo'
	<section class="site-section py-sm">
	<div class="container">
	<div class="row">
	<div class="col-md-6">
	<h2 class="mb-4">Category: '.$q.'</h2>
	</div>
	</div>
	<div class="row blog-entries">
	<div class="col-md-12 col-lg-8 main-content">
	<div class="section row">';
for($i=1; $i<=$count; $i++) {
	$url = potong($urlhot[$i], '<a href="https://apkplz.net/app/', '"');
	$nama = potong($urlhot[$i], 'title="', ' Apk"');
	$namas = substr($nama, 0, 14);
	$img = potong($urlhot[$i], 'data-original="', '"');
echo'
	
	<div class="col-sm-12 col-md-3">
	<div class="row itemapp">
	<div class="col-md-12 col-sm-3 vcenter">
	<div class="text-center">
	<div class="mx-auto">
	<a href="/app/'.$url.'.html" title="'.$nama.'">
	<img class="lazy" src="'.$img.'" data-original="'.$img.'" alt="'.$nama.'" style=""></a>
	</div> <div class="col-md-12 col-sm-9 vcenter apptitle">
	<a href="/app/'.$url.'.html" title="'.$nama.'">
	<p>'.$namas.'...</p>
	</a>
	</div>
	</div>
	</div>
	</div>
	</div>';
}
echo'
</div>
</div>
';
include 'includes/footer.php';
?>
