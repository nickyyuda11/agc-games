<?php
include 'includes/functions.php';
$serve = $_SERVER['HTTP_HOST'];

header('Content-type: text/xml');
echo'<?xml version="1.0" encoding="UTF-8"?>
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
$hot = strstr(grab('https://apkplz.net/category/games'), '<div class="section row">');
$maxpage = explode('<li class="page-item"', $hot);
$maxpages = potong($maxpage[9], '<a class="page-link" href="https://apkplz.net/category/games?page=', '"');
$yy = ''.date("Y-m-d").'';
for($i=1; $i<=$maxpages; $i++) {
echo'
	<sitemap>
	<loc>http://'.$serve.'/sitemap-index-'.$i.'.xml</loc>
	<lastmod>'.$yy.'</lastmod>
	</sitemap>';
}
echo'
</sitemapindex>';
?>