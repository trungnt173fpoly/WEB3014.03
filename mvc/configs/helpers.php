<?php 
// Hỗ trợ load ảnh
if(!function_exists('storage')){
    function storage($fileName){
         $path = str_replace(
            basename($_SERVER['SCRIPT_NAME']),'', $_SERVER['SCRIPT_NAME']
         );
         return !empty($fileName) 
         ? $path.'storage/upaload/'.$fileName 
         : '';
    }
}
// Hỗ trợ router
if(!function_exists('route')){
    function route($nameUrl, $param = []){
        if(count($param) > 0){
            foreach($param as $key => $value){
                $path = str_replace(
                    "{".$key."}", 
                    $value, 
                    $nameUrl);
            }
        }else{
            $path = $nameUrl;
        }
        $scriptPath = str_replace(
            basename($_SERVER['SCRIPT_NAME']),'', $_SERVER['SCRIPT_NAME']
         );
         return $_SERVER['REQUEST_SCHEME'].'://'
         .$_SERVER['HTTP_HOST'].$scriptPath.$path;
    }
}
// Thông báo

?>