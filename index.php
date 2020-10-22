<?php
namespace App;
require "src/Autoloader.php";
Autoloader::register();

$db = new Database('restaurant');

$tabMenu=[
    "home" => "page/home.php",
    "presentation" => "page/presentation.php",
    "menu" => "page/menu.php",
    "contact" => "page/contact.php"
];
if(isset($_GET['page'])){
    if(array_key_exists($_GET['page'],$tabMenu)){
        $menu=$tabMenu[$_GET['page']];

    }else{
        $menu="page/404.php";
    }
}else{
    $menu="page/home.php";
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<?php
        include("page/header.php");
        
        include($menu);
        
        include("page/footer.php");
   ?>
        

</body>
</html>