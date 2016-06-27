<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model qwertyrrr\callback\models\CallbackSearch */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="callback-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php echo $form->field($model, 'id') ?>

    <?php echo $form->field($model, 'name') ?>

    <?php echo $form->field($model, 'phone') ?>

    <?php echo $form->field($model, 'message') ?>

    <?php echo $form->field($model, 'time') ?>

    <?php // echo $form->field($model, 'createdAt') ?>

    <div class="form-group">
        <?php echo Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?php echo Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
