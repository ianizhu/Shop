<?php
session_start();

$url = $_SERVER['REQUEST_URI']; //это уникальный идентификатор ресурса; массив
$url = explode("/", $_SERVER['REQUEST_URI']);
require_once("php/db.php");
require_once("php/classes/User.php");

if($url[1] == "blog") {
    $content = file_get_contents("pages/blog.html");
}else if ($url[1] == "register") {
    $content = file_get_contents("pages/register.html");
} else if($url[1] == "contact") {
    $content = file_get_contents("pages/contact.php");
} else if($url[1] == "auth") {
    $content = file_get_contents("pages/login.html");
} else if(($url[1] == "users")) {
    require_once("pages/users/index.html");
} else if($url[1] == "addUser") {
    echo User::addUser($_POST["name"], $POST["lastname"], $_POST["email"], $_POST["password"]);
} else if($url[1] == "authUser") {
    echo User::authUser($_POST["email"], $POST["password"]);
} else{
    $content = file_get_contents("pages/index.php");
}
if (!empty($content))require_once("template.php");




// for ($i = 0; $i < count($url); $i++) {
//     echo $url[$i] . "<hr>";
// }

?>