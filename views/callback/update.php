<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model qwertyrrr\callback\models\Callback */

$this->title = 'Update Callback: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Callbacks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="callback-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
