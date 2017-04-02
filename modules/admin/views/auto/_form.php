<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
mihaildev\elfinder\Assets::noConflict($this);

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Auto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="auto-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

<!--    --><?//= $form->field($model, 'type_id')->textInput(['maxlength' => true]) ?>
<!--    --><?php //echo $form->field($model, 'type_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Type::find()->all(), 'id', 'name'))?>
    <div class="form-group field-auto-type_id has-success">
        <label class="control-label" for="auto-type_id">Вид транспорта</label>
        <select id="auto-type_id" class="form-control" name="Auto[type_id]">
            <?= \app\components\MenuWidget::widget(['tpl' => 'select_auto', 'model' => $model]) ?>
        </select>
    </div>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?php  ?>

    <?php echo $form->field($model, 'content')->widget(CKEditor::className(),
        [
            'editorOptions' => ElFinder::ckeditorOptions('elfinder',[]),
        ]); ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->fileInput() ?>

    <?= $form->field($model, 'hit')->checkbox([ '0', '1', ]) ?>

    <?= $form->field($model, 'new')->checkbox([ '0', '1', ]) ?>

    <?= $form->field($model, 'sale')->checkbox([ '0', '1', ]) ?>

    <?= $form->field($model, 'Availability')->checkbox([ '0', '1', ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
