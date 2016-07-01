<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel qwertyrrr\callback\models\CallbackSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Callbacks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="callback-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <p>
        <?= qwertyrrr\callback\widgets\Callbackform::widget(); ?>
    </p>
    <p>
        <?php echo Html::a('Create Callback', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'phone',
            'message',
            'time',
            // 'createdAt',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
