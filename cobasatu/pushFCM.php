<?php
/**
 * Created by PhpStorm.
 * User: Mahasiswa
 * Date: 12/02/2020
 * Time: 14:07
 */
$tokenHp = "dHGr5Y3RXAo:APA91bHuW4LkWfbd6hY0oY-aPSx8Ugefwi4gdHb1Pm6BPSYYl6QBPxMqTSoYP3iw6g53OkdRHSUkVJj28iEVBEkCXYCS-v3SgUyyBSBp2BnEGC3KgpSBRDF0LSG-12XKVPJV3dsVZ-u5";
include_once 'FCM.php';

//ambil data inputan
$titNotif = $_POST['titleNotifikasi'];
//$subNotif = $_POST['subNotifikasi'];
$isiNotif = $_POST['isiNotifikasi'];
$rute = $_POST['rute'];
$id = $_POST['id'];

$notification = array();
$arrData = array(
    'click_action'=>'FLUTTER_NOTIFICATION_CLICK',
    'status'=>$rute,
    'id'=>$id,
    'sound' => 'default',
);
$arrNotification =array(
    'body' => $isiNotif,
    'title' => $titNotif,
);

$fcm = new FCM();
$result = $fcm->send_notification($tokenHp,$arrNotification,$arrData);
