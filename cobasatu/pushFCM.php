<?php
/**
 * Created by PhpStorm.
 * User: Mahasiswa
 * Date: 12/02/2020
 * Time: 14:07
 */
$tokenHp = "dQikCFdwODY:APA91bHTAb2o_xUqC8n79bxuoWRXDoANS8sgyLxabuMB1w-790qXmOdwK5HBRQC6MwTdy7U6r-GGgNbYgtY96a2-avYswP-U3SE4AHpPQa1YhTzItrq0gWFrZgCgtc_crw4vbaX1Ljc9";
include_once 'FCM.php';

//ambil data inputan
$titNotif = $_POST['titleNotifikasi'];
//$subNotif = $_POST['subNotifikasi'];
$isiNotif = $_POST['isiNotifikasi'];

$notification = array();
$arrData = array();
$arrNotification =array(
    'body' => $isiNotif,
    'title' => $titNotif,
    'sound' => 'default',
    'type' => '1'
);

$fcm = new FCM();
$result = $fcm->send_notification($tokenHp,$arrNotification);
