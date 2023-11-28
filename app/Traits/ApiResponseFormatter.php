<?php

namespace app\Traits;

//UNTUK FORMATING RESPONSE
trait ApiResponseFormatter {
    public function apiResponse($code = 200, $message = "success", $data=[]){
        //DARI PARAMETER AKAN DI FORMAT MENJADI SEPERTI DI BAWAH INI 
        return json_encode([
            "code" => $code,
            "message" =>$message,
            "data" =>$data
        ]);
    }
}