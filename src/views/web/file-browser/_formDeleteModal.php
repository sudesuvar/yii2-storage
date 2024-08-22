<?php

use portalium\bootstrap5\Modal;
use yii\helpers\Html;
use kartik\file\FileInput;
use portalium\storage\models\Storage;
use portalium\storage\Module;

/* @var $this yii\web\View */
/* @var $model portalium\storage\models\Storage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="storage-form">


    <div class="">
        <label class="col-form-label" for="storage-title<?= $widgetName ?>" style=""><?= Module::t('Are you sure you want to delete all items ?') ?></label>
    </div>


    <?php
        Modal::begin([
            'id' => 'storage-error-modal' . $widgetName,
            'title' => Module::t('Error'),
            'footer' => '<a href="#" class="btn btn-primary" data-bs-dismiss="modal">' . Module::t('Close') . '</a>',
            'size' => 'modal-sm',
            'clientOptions' => ['backdrop' => 'static', 'keyboard' => false]
        ]);
        echo Html::tag('div', '', ['id' => 'storage-error' . $widgetName, 'class' => 'help-block float-start', 'style' => 'color:red;']);
        Modal::end();
    ?>
    <?php
        echo Html::beginTag('div', ['id' => 'view-file']);
        if (!$model->isNewRecord) {
            echo $this->render('_file', ['model' => $model, 'view' => 0, 'attributes' => [], 'isPicker' => $isPicker, 'isJson' => $isJson, 'widgetName' => $widgetName, 'multiple' => $multiple, 'callbackName' => $callbackName, 'fileExtensions' => $fileExtensions]);
        }
        echo Html::endTag('div');
    ?>
</div>