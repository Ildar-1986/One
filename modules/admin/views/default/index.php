<?php

use yii\helpers\Html;
use yii\grid\GridView;


$this->title = 'Пользователи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

        <?= Html::a('Создать пользователя', ['create'], ['class' => 'btn btn-success']) ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'email:email',
            'password',
            'isadmin',
//            'isban',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
