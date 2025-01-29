<?php

use yii\helpers\Html;
// use yii\widgets\ActiveForm;
use yii\bootstrap5\ActiveForm;

?>
<?php $form = ActiveForm::begin(); ?>


<div class="col-3"> <!-- 2 из 12, что соответствует 1/6 -->
    <?= $form->field($model, 'name')->textInput(['class' => 'form-control']) ?>
</div>
<div class="col-3"> <!-- 2 из 12, что соответствует 1/6 -->
    <?= $form->field($model, 'email')->textInput(['class' => 'form-control']) ?>
</div>


<div class="form-group">
    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>