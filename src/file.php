<?php

namespace app;
require_once dirname (__DIR__) . '/vseprovse/configs/init.php';


require_once ROOT . "/vendor/autoload.php";
use app\controllers\AdController;

require_once(ROOT.'/app/Functions.php');

$contr = new AdController;
$sep = $_POST['sep'];
$newdata = csv_to_array($_FILES['csv-file']['tmp_name'], $sep);
// echo "<pre>";
// print_r($newdata);
// echo "</pre>";
foreach ($newdata as $newrow)
{
    if(isset($newrow['contacts']) && isset($newrow['content']))
    {
        $contr->create($newrow['contacts'], $newrow['content']);
    }
    
}
echo "<script>alert('Yep'); window.location.replace(location.protocol + '//' + location.host );</script>";


