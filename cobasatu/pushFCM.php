<?php
/**
 * Created by PhpStorm.
 * User: Mahasiswa
 * Date: 12/02/2020
 * Time: 14:07
 */
include_once 'FCM.php';

//ambil data inputan
//bagian notifikasi
$judulNotif = $_POST['judulNotifikasi'];
$textNotif = $_POST['textNotif'];

//targetnya
$target = $_POST['target'];

//data
$halamanTuj = $_POST['halamanTuj'];


$notification = array();
$arrData = array(
    'click_action'=>'FLUTTER_NOTIFICATION_CLICK',
    'halaman' => $halamanTuj,
    'sound' => 'default',
);
$arrNotification =array(
    'body' => $textNotif,
    'title' => $judulNotif,
);

$fcm = new FCM();
$fcm->send_notification($tokenHp,$arrNotification,$arrData);
