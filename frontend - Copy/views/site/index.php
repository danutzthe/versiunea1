<?php
/* @var $this yii\web\View */
/* $this->title = 'Medgame'; */
use yii\helpers\Html;
?>

<div class="row" style="margin-left: 0; margin-right: 0;">
    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 center" style="padding-left: 0; padding-right: 0;">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 pull-left" style="padding-left: 0; padding-right: 0;">
            <h1 style="width: 100%;">Centrul Virtual pentru Educarea şi Instruirea cetăţeniilor în situaţii de
                dezastre naturale prin intermediul <strong>Serious Games</strong></h1>

            <div style="margin-top: 20px;">
                <h3 style="text-align: center;">Proiect <strong>MedGame</strong></h3>
                <p> <?php echo Html::a('Detalii proiect', array('site/descriere-proiect'), array('class' => 'btn btn-primary btn-lg center')); ?> </p>
            </div>
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 pull-left" style="padding: 10px 0;">
            <?php echo Html::img(Yii::$app->request->baseUrl . "/assets/img/slider1.jpg", array( 'class'=> "pull-right img-responsive")); ?>
        </div>
    </div>
</div>

<div class="row" style="margin: 10px 0;">
    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 center" style="background-color: #d7d7d7; padding: 10px;">
        <p style="text-align: center;">Proiect finanţat de către UEFISCDI prin Programul parteneriate în domenii prioritare</p>
    </div>
</div>

<div class="row" style="margin-left: 0; margin-right: 0;">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-left: 0; padding-right: 0;">
        <div class="center">
            <h2 class="center" style="width: 287px;">Parteneri <strong>MedGame</strong></h2>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-left: 0; padding-right: 0;">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 center" style="margin-bottom: 10px; padding-left: 0; padding-right: 0;">
            <?php
            $img = Html::img(Yii::$app->request->baseUrl . "/assets/img/unap.jpg", array( "style"=>"height: 80px; width: 116px;", "class"=>"center"));
            echo Html::a($img, array('site/about'), array("style"=>"margin: 10px;"));

            $img = Html::img(Yii::$app->request->baseUrl . "/assets/img/meteo.jpg", array( "style"=>"height: 57px; width: 180px;", "class"=>"center"));
            echo Html::a($img, array('site/about'), array("style"=>"line-height: 77px; margin: 10px;"));

            $img = Html::img(Yii::$app->request->baseUrl . "/assets/img/ascendia.png", array( "style"=>"height: 80px; width: 80px;", "class"=>"center"));
            echo Html::a($img, array('site/about'), array("style"=>"margin: 10px;"));

            $img = Html::img(Yii::$app->request->baseUrl . "/assets/img/adlnet.png", array( "style"=>"height: 80px; width: 102px;", "class"=>"center"));
            echo Html::a($img, array('site/about'), array("style"=>"margin: 10px;"));
            ?>

        </div>
    </div>
</div>


