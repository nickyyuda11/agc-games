<?php
include 'includes/functions.php';
if($_GET['page']) {
$page = $_GET['page'];
$url = ''.$spath.'?page='.$page.'';
} else {
$url = ''.$spath.'';
}
$serve = $_SERVER['HTTP_HOST'];

header("Content-Type: text/xml");

echo'<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

$hot = strstr(grab($url), '<div class="section row">');
$urlhot = explode('<div class="row itemapp">', $hot);
$count = count($urlhot);
$count = $count-1;
$yy = ''.date("Y-m-d").'';

for($i=1; $i<=$count; $i++) {
	$url = potong($urlhot[$i], '<a href="https://apkplz.net/app/', '"');
echo'
<url>
    <loc>http://'.$serve.'/app/'.$url.'.html</loc>
    <priority>0.6</priority>
	<changefreq>weekly</changefreq>
    <lastmod>'.$yy.'</lastmod>
</url>';}
echo'
</urlset>';
?>
