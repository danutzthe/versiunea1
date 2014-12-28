<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;

use frontend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <link rel="shortcut icon" href="<?php echo Yii::$app->request->baseUrl; ?>/assets/img/favicon.ico" type="image/x-icon" />
    <title><?= Html::encode("Medgame") ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
    <header class="header2">
        <div class="row" >
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 center" style="height: 125px; padding-left: 0; padding-right: 0;">
                <?php
                $img = Html::img(Yii::$app->request->baseUrl . "/assets/img/logo.png", array( "alt" => 'Medgame', "title" => 'Medgame'));
                echo Html::a($img, array('site/index'));
                ?>
                <p style="margin: 0; font-size: 12px; text-align: left; padding-left: 10px;">Programul parteneriat în domenii prioritare</p>
                <p style="margin: 0; font-size: 12px; font-style: italic; text-align: left; padding-left: 10px;">PN - II - PT - PCCA - 2013 - 4 - 1295</p>
                <p style="margin: 0; font-size: 12px; font-style: italic; text-align: left; padding-left: 10px;">Cod Proiect 106/2014</p>

            </div>
        </div>

        <div class="row" >
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 center" style=" padding-left: 0; padding-right: 0;">
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 center" style="padding-left: 0; padding-right: 0;">
                    <?php
                    NavBar::begin([
                        'options' => [
                            'class' => ' navbar-nav navbar-center',
                        ],
                    ]);
                    $menuItems = [

                        ['label' => 'ACASA', 'url' => ['/site/index'], 'options'=>['class'=>'first-menu']],
                        ['label' => 'PARTENERI','class'=>'asd', 'items' => [
                            ['label' => 'UNAp', 'url' => ['/site/partener-unap']],
                            ['label' => 'METEO', 'url' => ['/site/partener-meteo']],
                            ['label' => 'Ascendia', 'url' => ['/site/partener-ascendia']],
                            ['label' => 'ADL', 'url' => ['/site/partener-adl']]
                        ], 'options'=>['class'=>'inner-menu'],
                        ],
                        ['label' => 'DETALII PROIECT', 'url' => ['#'], 'items' => [
                            ['label' => 'DESCRIERE PROIECT', 'url' => ['site/descriere-proiect']],
                            ['label' => 'ETAPA 1', 'url' => ['/site/index']],
                            ['label' => 'ETAPA 2', 'url' => ['/site/index']],
                            ['label' => 'ETAPA 3', 'url' => ['/site/index']],
                            ['label' => 'ECHIPA DE CERCETARE', 'url' => ['/site/index']]
                        ],'options'=>['class'=>'inner-menu'],
                        ],
                        ['label' => 'RESURSE',  'items' => [
                            ['label' => 'LINKURI UTILIE', 'url' => ['/site/index']],
                            ['label' => 'INSTRUMENTE SI METODE', 'url' => ['/site/index']],
                            ['label' => 'CONFERINTE', 'url' => ['/site/index']]
                        ],'options'=>['class'=>'inner-menu'],
                        ],
                        ['label' => 'CONTACT', 'url' => ['/site/index'],'options'=>['class'=>'last-menu'],
                        ],
                    ];

                    echo Nav::widget([
                        'options' => ['class' => 'navbar-nav navbar-left'],
                        'items' => $menuItems,
                    ]);
                    NavBar::end();
                    ?>
                </div> </div> </div>
    </header>


    <div class="container" id="wrapper" style="padding-top: 148px">
        <?= $content ?>
    </div>
</div>

<footer>
    <div class="row" style="margin-left: 0; margin-right: 0;">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 center" style="height: 125px; padding-left: 0; padding-right: 0;">
            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 center" style="padding-left: 0; padding-right: 0;">
                <div class="contact-block">
                    <h3>Contact</h3>
                    <address>
                        <p><abbr title="Phone" ><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i></abbr> +40 213 110 985</p>
                        <p><abbr title="Email"><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i></abbr> medgame@adlunap.ro</p>
                        <p><abbr title="Address"><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i></abbr> Bucuresti, Sector 5, Soseaua Panduri, Nr. 68-72, Cod 050662</p>
                    </address>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
