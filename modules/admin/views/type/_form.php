<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Type */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="type-form">

    <?php $form = ActiveForm::begin(); ?>

<!--    --><?//= $form->field($model, 'parent_id')->dropDownList(['1' => 'Retro', '2' => 'Automobiles', '3' => 'Motorcycles', '4' => 'Other', ]) ?>

<!--    --><?php //echo $form->field($model, 'parent_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Type::find()->all(), 'id', 'name'))?>
    <div class="form-group field-type-parent_id has-success">
        <label class="control-label" for="type-parent_id">Вид транспорта</label>
        <select id="type-parent_id" class="form-control" name="Type[parent_id]">
            <option value="0">Независимый вид трансорта</option>
            <?= \app\components\MenuWidget::widget(['tpl' => 'select', 'model' => $model]) ?>
        </select>
    </div>
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
