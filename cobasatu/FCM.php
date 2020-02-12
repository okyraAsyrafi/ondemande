<?php
/**
 * Created by PhpStorm.
 * User: Mahasiswa
 * Date: 12/02/2020
 * Time: 14:51
 */

class FCM
{
    function __construct()
    {
    }

//    send push notification

    public function send_notification($registration_ids, $notification){
//        url dari send notifcation
        $url = 'https://fcm.googleapis.com/fcm/send';
        $isifields = array(
            'to' => $registration_ids,
            'notification' => $notification
        );

//        firebase api key
        $headers = array(
            'Authorization:key=',
            'Content-Type:application/json'
        );

//        open connection
        $curl = curl_init();





    }
}