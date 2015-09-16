<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \frontend\models\ContactForm */

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
    <br>
    <h4>
        Предоставляю вам свои контакты:
    </h4>

    <div class="row">
        <pre>
    Сайты: vk.com/dewi1

    Почта: roack@yandex.ru
           w.4.74@yandex.ru
        </pre>
    </div>

</div>
