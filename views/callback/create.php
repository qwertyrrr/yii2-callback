<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model qwertyrrr\callback\models\Callback */

$this->title = 'Create Callback';
$this->params['breadcrumbs'][] = ['label' => 'Callbacks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="callback-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
