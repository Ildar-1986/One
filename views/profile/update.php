<?php
/*
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin([]); */?><!--

<?/*= $form->field($model, 'name')->input('name', ['maxlength' => true]) */?>
<?/*= $form->field($model, 'email')->input('email', ['maxlength' => true]) */?>

    <div class="form-group">
        <?/*= Html::submitButton(Yii::t('app', 'BUTTON_SAVE'), ['class' => 'btn btn-primary']) */?>
    </div>

--><?php /*ActiveForm::end(); */?>

<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;



$this->title = Yii::t('app', 'Редактирование');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Профиль'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-profile-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="user-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Сохранить'), ['class' => 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

</div>
