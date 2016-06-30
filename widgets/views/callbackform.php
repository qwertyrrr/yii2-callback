<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

use qwertyrrr\callback\Module;
use qwertyrrr\callback\models\Callback;
$model = new Callback();
$module = \Yii::$app->getModule('callback');
?>
<a data-toggle="modal" data-target="#modal-callback"><?=$module->openButtonTitle?></a>

<div class="modal fade" id="modal-callback" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title"><?=$module->formTitle;?></h4>
      </div>
	    <?php $form = ActiveForm::begin([
	    	'id' => 'callback-form',
	        'fieldConfig' => [
	        'template' => "{label}\n{beginWrapper}\n{input}\n{error}\n{hint}\n{endWrapper}",
	    	],
	    ]); ?>
      <div class="modal-body">
        <div class="row">
        	<div class="col-md-12">
                        <div class="col-sm-12 form-box">
	                            <div class="col-md-6">   
				                    	<div class="form-group">
				                        	<?php echo $form->field($model, 'name')->textInput([
				                        		'maxlength' => true,
				                        		'placeholder' => $module->namePlaceholder,
				                        	]) ?>
				                        </div>
				                        <div class="form-group">
				                        	<?php echo $form->field($model, 'phone')->textInput([
				                        		'maxlength' => true,
				                        		'placeholder' => $module->phonePlaceholder,
				                        	]) ?>
				                        </div>
				                        
				                        <div class="form-group">
				                        	<?php echo $form->field($model, 'time')->dropDownList($module->times) ?>
				                        	
				                        </div>
			                    </div>
			                    <div class="col-md-6">
			                    	<div class="form-group">
				                        	<?php echo $form->field($model, 'message')->textArea([
				                        		'rows' => 7,
				                        		'placeholder' => $module->messagePlaceholder,
				                        	]) ?>
				                        </div>
			                    </div>
                        </div>
                    </div>
                   </div>
      </div>
      <div class="modal-footer">
      	<div class="col-md-12 text-center">
        	<div class="form-group">
       			<?php echo Html::submitButton($module->buttonTitle, ['class' => 'btn btn-secondary', 'id' => 'callbackSubmit']) ?>
    </div>
        </div>

      </div>
    <?php ActiveForm::end(); ?>
    </div>
  </div>
</div>