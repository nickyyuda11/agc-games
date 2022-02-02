<?php
error_reporting(0);
include 'includes/functions.php';
if($_GET['page']) {
$page = $_GET['page'];
$url = ''.$spath.'?page='.$page.'';
} else {
$url = ''.$spath.'';
}
$title = "HackGen";
include 'includes/head.php';
$hot = strstr(grab($url), '<div class="section row">');
$urlhot = explode('<div class="row itemapp">', $hot);
var_dump($urlhot);
$count = count($urlhot);
$count = $count-1;
echo'
	<section class="site-section py-sm">
	<div class="container">
	<div class="row">
	<div class="col-md-6">
	<h2 class="mb-4">Latest Posts</h2>
	</div>
	</div>
	<div class="row blog-entries">
	<div class="col-md-12 col-lg-8 main-content">
	<div class="row">';
for($i=1; $i<=$count; $i++) {
	$url = potong($urlhot[$i], '<a href="https://apkplz.net/app/', '"');
	$nama = potong($urlhot[$i], 'title="', ' Apk"');
	$img = potong($urlhot[$i], 'data-original="', '"');
echo'
	<div class="col-sm-12 col-md-6">
	<a href="/app/'.$url.'.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
	<img style="width:100%;height:140px" src="'.$img.'" alt="'.$nama.'">
	<div class="blog-content-body">
	<div class="post-meta">
	<span class="author mr-2"><img src="assets/images/person_1.jpg" alt="Colorlib"> David Craig</span>
	</div>
	<h2>'.$nama.'</h2>
	</div>
	</a>
	</div>';
}
$pageNext = $page + 1;
$pagePrev = $page - 1;
$hot = strstr(grab('https://apkplz.net/category/games'), '<div class="section row">');
$maxpage = explode('<li class="page-item"', $hot);
$maxpages = potong($maxpage[9], '<a class="page-link" href="https://apkplz.net/category/games?page=', '"');

echo'
</div>
<div class="row mt-5">
<!--pagination-->
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
<li class="page-item">';     
        if( $page == 2 ) :
echo' 
             <a class="page-link" href="/" aria-label="Previous">
                                <i class="fas fa-angle-left"></i>
                                        <span class="sr-only">Previous</span>';
                            endif;                                                    
                    if( $page > 2 ) :
                        echo' 
             <a class="page-link" href="/?page='.$pagePrev.'" aria-label="Previous">
                                <i class="fas fa-angle-left"></i>
                                        <span class="sr-only">Previous</span>';
                    endif;
             echo'                                        
                                      </a>
                                    </li>
             ';     
                    if( $page < 1 ) :

                                echo'
                                    <li class="page-item"><a class="page-link" >1</a></li>';
                    endif;
                    if( $page > 1 ) :
                         echo'
                                    <li class="page-item"><a class="page-link" href="/">1</a></li>';
                    endif;
                                echo'
                                    <li class="page-item"><a class="page-link" href="/?page=2">2</a></li>
                                    <li class="page-item"><a class="page-link" href="/?page=3">3</a></li>';
                    if( $page > 3 ) :
                        echo'
                        <li class="page-item"><a class="page-link">...</a></li>
<li class="page-item"><a class="page-link">'.$page.'</a></li>
                        ';
                    endif; 
if( $page == $maxpages ){
echo'    
    <li class="page-item">
      <a class="page-link" aria-label="Next">
        <i class="fas fa-angle-right"></i>
        <span class="sr-only">Next</span>
      </a>
    </li>
    ';
}
elseif ( $page >= 1 ){                                	
echo' 
<li class="page-item">
      <a class="page-link" href="/?page='.$pageNext.'" aria-label="Next">
        <i class="fas fa-angle-right"></i>
        <span class="sr-only">Next</span>
      </a>
    </li>
';
}                                     
if( $page < 1 ) :
                        echo'
                                    <li class="page-item">
                                      <a class="page-link" href="/?page=2" aria-label="Next">
                                        <i class="fas fa-angle-right"></i>
                                        <span class="sr-only">Next</span>
                                      </a>
                                    </li>';
                                endif;                             
echo'                                            
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!--pagination-->
                    </div>
                    </div>                           
';
include 'includes/footer.php';
