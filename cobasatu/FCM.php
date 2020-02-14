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

    public function send_notification($registration_ids, $notification,$dataNotification){
//        url dari send notifcation
        $url = 'https://fcm.googleapis.com/fcm/send';
        $isifields = array(
            'to' => $registration_ids,
            'notification' => $notification,
            'data'=>$dataNotification
        );

//        firebase api key
        $headers = array(
            'Authorization:key=AAAAZR7ydec:APA91bHJJpmI15oA3NaytcjnBfne_j5P-wKzKV7Vln5snZEg3c50utyupMJFhr-khWkx1UCzsnbr10myzaWAXFPKIgKwy7KshvFPw4tCK1o4TpzCyoVSTjp9i-5lbbOybNbaUWka7J_i',
            'Content-Type:application/json'
        );

//        open connection
        $curl = curl_init();
//        set the url, number of POST vars, POST data
        curl_setopt($curl,CURLOPT_URL,$url);
        curl_setopt($curl,CURLOPT_POST,true);
        curl_setopt($curl,CURLOPT_HTTPHEADER,$headers);
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
//        disable sertificate support temporary SSL
        curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
        curl_setopt($curl,CURLOPT_POSTFIELDS,json_encode($isifields));

        $result = curl_exec($curl);
        if ($result == FALSE){
            die('Curl Failed : '.curl_error($curl));
        }
        curl_close($curl);
    }
}