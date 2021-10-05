<?php

namespace app;
require_once dirname (__DIR__) . '/vseprovse/configs/init.php';


require_once ROOT . "/vendor/autoload.php";

use app\controllers\AdController;

$adc = new AdController;

$ads = $adc->indexAction();
?>
<style>
    html {
        text-align: center;
    }
    .table {
        margin-top: 40px;
        display: inline-block;
    }
    .form {

        margin-top: 40px;
        display: inline-block;
    }
    .form input {

        margin: 5px;
        padding: 2px;
        min-width: 100px;
        }
</style>
<div class="table">
    <table border="2" cellpadding="7">
        <thead>
            <tr>
                <th>Контент</th>
                <th>Контакты</th>
                <th>Дата загрузки</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ads as $ad)
            {
                ?>
            <tr >
                <td><?= $ad['content'];?></td>
                <td><?= $ad['contacts'];?></td>
                <td><?= $ad['uploaded'];?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
<br>
<div class="form">
    <div style="margin:0;padding:15px; border: 4px solid gray; background-color:#c4e1ff; width: 100%;">
        <form action="create.php" method="post">
                <h3>Форма для добавления</h3>
                <label for="content">Контент</label>
                <input name="content"><br>
                <label for="contacts">Контакты</label>
                <input name="contacts"> <br>
                <input type="submit" value="Send">
        </form>
    </div>
</div>
<br>
<div class="form">
    <div style="margin:0;padding:15px; border: 4px solid gray; background-color:#c4e1ff; width: 100%;">
        <form action="file.php" method="post" enctype="multipart/form-data">
            <p>CSV-файл:</p>
            <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
            <input type="file" name="csv-file" accept=".csv" /><br>

            <input name="sep" value=";" style="width:10px">Разделитель </input><br>

            <input type="submit" value="Отправить файл" />
        </form>
    </div>
</div>