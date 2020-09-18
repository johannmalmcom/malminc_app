<?php

class Server {
    
    private function call($method, $path, $data, $header, $callback) {
        $url_path = $path;
        
        $headerString = "";
        $header["Content-type"] = "application/json; charset=utf-8;"
        foreach($header as $key => $value) {
            $headerString .= $key . ": ". $value . "\r\n";
        }

        $options = array( 
            'http' => array( 
                'method' => strtoupper($method),
                "header" => $headerString, 
                'content' => mb_convert_encoding(json_encode($data, JSON_UNESCAPED_UNICODE),"UTF-8","auto")
            ) 
        );
        
        $stream = stream_context_create($options); 
        $result = file_get_contents($url_path, false, $stream);
        
        return $callback($result);
    }
    
}

?>