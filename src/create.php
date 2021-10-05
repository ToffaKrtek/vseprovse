<?php
    namespace app;
    require_once dirname (__DIR__) . '/vseprovse/configs/init.php';


    require_once ROOT . "/vendor/autoload.php";
    use app\controllers\AdController;

    if (isset($_POST['content']) && isset($_POST['contacts']))
    {
        $content = $_POST['content'];
        $contacts = $_POST['contacts'];
        $contr = new AdController;
        $contr->create($contacts, $content);
        echo "<script>alert('Yep'); window.location.replace(location.protocol + '//' + location.host );</script>";
        
    } else 
    {
        echo "<script>alert('Nope'); window.location.replace(location.protocol + '//' + location.host );</script>";
       
    }