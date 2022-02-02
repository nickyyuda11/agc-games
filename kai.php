<?php
error_reporting(0);
include 'includes/functions.php';
$url = 'https://registrasi-covidtest2.kai.id/sbi';
if ($_GET['bookcode']) {
    $page = $_GET['bookcode'];
    $url = '' . $url . '?bookcode=' . $page . '&st=sbi';
} else {
    $url = 'https://registrasi-covidtest2.kai.id/sbi/';
}
$hot = strstr(grab($url), '<div class="row justify-content-center">');
$urlhot = explode('<input type="text" name="', $hot);
// $potong = potong($urlhot, '<input type="text" name="name" id="name_0" class="form-control input_capital font-weight-bold" value="', '"');
// var_dump($urlhot);

$p1_nama = potong($urlhot[2], 'name" id="name_0" class="form-control input_capital font-weight-bold" value="', '"');
$p1_nik = potong($urlhot[6], 'idnum" id="idnum_0" class="form-control input_capital font-weight-bold hidden" hidden value="', '"');
$p1_nohp = potong($urlhot[8], 'phone" id="phone_0" class="form-control input_capital font-weight-bold" value="', '"');
$p2_nama = potong($urlhot[9], 'name" id="name_1" class="form-control input_capital font-weight-bold" value="', '"');
$p2_nik = potong($urlhot[13], 'idnum" id="idnum_1" class="form-control input_capital font-weight-bold hidden" hidden value="', '"');
$p2_nohp = potong($urlhot[15], 'phone" id="phone_1" class="form-control input_capital font-weight-bold" value="', '"');
$p3_nama = potong($urlhot[16], 'name" id="name_2" class="form-control input_capital font-weight-bold" value="', '"');
$p3_nik = potong($urlhot[20], 'idnum" id="idnum_2" class="form-control input_capital font-weight-bold hidden" hidden value="', '"');
$p3_nohp = potong($urlhot[22], 'phone" id="phone_2" class="form-control input_capital font-weight-bold" value="', '"');
$p4_nama = potong($urlhot[23], 'name" id="name_3" class="form-control input_capital font-weight-bold" value="', '"');
$p4_nik = potong($urlhot[27], 'idnum" id="idnum_3" class="form-control input_capital font-weight-bold hidden" hidden value="', '"');
$p4_nohp = potong($urlhot[29], 'phone" id="phone_3" class="form-control input_capital font-weight-bold" value="', '"');
var_dump($p1_nama);
var_dump($p1_nik);
var_dump($p1_nohp);
var_dump($p2_nama);
var_dump($p2_nik);
var_dump($p2_nohp);
var_dump($p3_nama);
var_dump($p3_nik);
var_dump($p3_nohp);
var_dump($p4_nama);
var_dump($p4_nik);
var_dump($p4_nohp);
