<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;


//во вьюхе
$this->registerJsFile('/js/js.js');

?>




<!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://api-maps.yandex.ru/2.1/?apikey=2381bd38-f57b-4ee7-b715-a8bf56445536&lang=ru_RU" type="text/javascript">
    </script>

        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>

    </head><!--/head-->

    <body>
<div id="map" style="width: 600px; height: 600px"></div>


</body>
    </html>