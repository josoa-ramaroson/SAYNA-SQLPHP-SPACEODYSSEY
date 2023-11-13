<?php
use  Core\Response;

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs($value) 
{
    return $_SERVER['REQUEST_URI'] === $value;
}

function authorize($condition, $status = Response::FORBIDDEN) 
{
    if (! $condition) {
        abort($status);
    }
}
function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path,$attributes = [] )
{
    extract($attributes);
    require base_path('views/' . $path);
}

function abort($code = 404)
{
    http_response_code($code);

    require base_path("views/{$code}.php") ;

    die();
}

function redirect($path){
    header("location: $path");
    exit();
}

function logout(){
    $_SESSION = [];
    session_destroy();

    $cookieParams = session_get_cookie_params();

    setcookie("PHPSESSID", '',  time() - 7200, $cookieParams['path'], $cookieParams['domain']);

    header('location: /');
}

function old($key){

    return Core\Session::get("old")[$key] ?? '';
}

function asset($path){
    return base_path("views/partials/".$path);
}

function inAstr($array,$e){
    foreach($array as $ar){
        if($ar["nom"] == $e){
            return true;
        }
    }   
    return false;
}

function cached_pod(){

    $image_path = base_path("public/img/pod.png");
    $cacheDuration = 24 * 60 * 60; 

    if (!(file_exists($image_path) && (time() - filemtime($image_path)) < $cacheDuration)) {
        // Download the file from the API
        $url = 'https://api.nasa.gov/planetary/apod?api_key=DEMO_KEY';

        // request to the API
        $curl = curl_init($url);
        // Set optioin parameters
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        // get the json strings result
        $response = curl_exec($curl);
        // close connexion
        curl_close($curl);

        // retrieve image url
        $image_url = Json_decode($response)->hdurl;

        // put the 
        $image = file_get_contents($image_url);
    
        $image = file_put_contents($image_path, $image);
        
        // Update the file's download time
        touch($image_path);
    
    }
    
    return $image_path;
}