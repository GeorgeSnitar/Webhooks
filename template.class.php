<?php

class Template{
       
      

      public function set($data){
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://api.telegram.org/bot<access token>/method');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Content-Type' => 'application/x-www-form-urlencoded',
            ]);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            $response = curl_exec($ch);
            curl_close($ch);
      }
}