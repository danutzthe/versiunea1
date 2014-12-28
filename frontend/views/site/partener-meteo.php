<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 center" style="padding-left: 0; padding-right: 0;">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-left: 0; padding-right: 0;">
        <h1 class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="padding-left: 0; padding-right: 0; text-align: left;">
            Partener<br><strong>Administratia Nationala de Meteorologie</strong>
        </h1>

        <a href="http://www.meteoromania.ro/anm/?lang=ro_ro" target="_blank"><img src="<?php echo Yii::$app->request->baseUrl . "/assets/img/meteo.jpg" ?>" style="float: right; margin-top: 20px; width: 128px; height: 100px;"></a>

        <p style="margin: 145px 0 10px 0; text-align: justify; text-indent: 30px; padding-left: 0; padding-right: 0;">
            <b>Administrația Naționala de Meteorologie din România (Meteo România)</b> a fost înfiinţată în
            luna iulie a anului 1884. Principalele responsabilităţi sunt de a asigura servicii de
            protecţie a vieţii şi a proprietăţii prin informaţii cu privire la evoluţia timpului
            probabil şi climei, inclusiv avertizări de fenomene meteorologice severe.
        </p>
        <p style="margin: 10px 0; text-align: justify; text-indent: 30px; padding-left: 0; padding-right: 0;">
            Direcţii de cercetare ştiinţificǎ:
        </p><ul style="margin-left: 10px; text-align: left;">
            <li>proiecţii regionale şi locale ale schimbării climatice în România;</li>
            <li>clima prezentă;</li>
            <li>analiza datelor de observaţie şi identificarea semnalului observat al schimbării climatice prezente;</li>
            <li>proiectarea de experimente numerice folosind un model climatic regional (RegCM) şi analiza
                rezultatelor pentru identificarea mecanismelor care modulează local şi regional variabilitatea şi
                schimbarea climatică;</li>
            <li>
                proiecții viitoare având la baza:
                <ul>
                    <li>rezultate ale experimentelor climatice realizate de comunitatea științifică
                        internațională (CMIP3 și CMIP5);</li>
                    <li>experimente realizate cu un model climatic regional adaptat pentru teritoriul României (RegCM);</li>
                    <li>fundamentarea climatică a estimǎrilor prognostice cu mai multe termene de anticipaţie;</li>
                    <li>estimarea potenţialului predictiv al unor fenomene climatice;</li>
                    <li>experimente de tip hindcast cu modele statistice multivariate (CCA, analogi) folosind date
                        observate.</li>
                </ul>
            </li>
        </ul>
        <p></p>
        <p style="margin: 10px 0; text-align: justify; text-indent: 30px; padding-left: 0; padding-right: 0;">
            Echipele de Teledetectie si GIS Lab au câştigat experienţă în monitorizarea inundaţiilor
            începând din anul 2005 până în prezent. Produsele obţinute din prelucrarea imaginilor prin
            satelit (optic şi radar) au furnizat date operaţionale pentru Comitetul Naţional pentru
            Situaţii de Urgenţă, Ministerul Mediului şi al Schimbărilor Climatice, Inspectoratul
            General pentru Situaţii de Urgenţă, etc. Personalul este compus din cercetători cu
            înaltă calificare, cu calificări interdisciplinare: fizică, geografie, topografie,
            hidrologie, şi teledetecţie, cu studii de masterat sau doctorale.
        </p>
        <p style="margin: 10px 0; text-align: justify; text-indent: 30px; padding-left: 0; padding-right: 0;">
            Meteo România deţine experienţă pentru activităţi de cercetare complexe, dobândite în cadrul:
        </p><ol style="margin-left: 10px; text-align: left;">
            <li>programe naţionale, cum ar fi:
                <ul>
                    <li>AEROSPATIAL (ex. "MONRISC - Elaborarea de metodologii pentru prelucrarea şi
                        utilizarea de imagini satelit pentru probarea, supravegherea şi managementul
                        dezastrelor" -);</li>
                    <li>CEEX (ex. "SPIM - sistem pilot integrat pentru monitorizarea şi determinarea
                        efectelor inundaţiilor în bazinul Siretului inferior");</li>
                    <li>PNCDI II (ex. "GEODIM - Platforma geoinformatică pentru Managementul
                        Dezastrelor", "CLIMHYDEX - Modificari ale extremelor climaterice şi
                        impactul asociat pentru evenimente hidrologice din România")</li>
                </ul>
            </li>
            <li>programe internaţionale, cum ar fi:
                <ul>
                    <li>NATO Stiinta pentru Pace (ex. "Monitorizarea inundaţiilor mari în România
                        şi Ungaria folosind date EO");</li>
                    <li>FP 5 (ex. "EFFS - Sistemul european de prognoza a viiturilor");</li>
                    <li>FP6 (ex. "Hidrat - date hidrometeorologice şi tehnologii eficiente pentru
                        prognozarea instantanee a inundaţiilor ");</li>
                    <li>FP7 (ex. "MACC - Monitorizarea compoziţiei atmosferice si climatice");</li>
                    <li>LIFE (ex. "CLEANWATER - Sistem integrat pentru a protecţia, analiza situaţiei
                        şi tendinţele apei contaminate de poluarea cu azot").</li>
                </ul>
            </li>
        </ol>
        <p></p>
        <p style="margin: 10px 0; text-align: justify; padding-left: 0; padding-right: 0;">
            <a href="http://www.meteoromania.ro/anm/?lang=ro_ro" target="_blank">
                <span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span> mai multe informații ...
            </a>
        </p>
    </div>
</div>