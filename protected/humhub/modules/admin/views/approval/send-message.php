<?php

use humhub\modules\admin\models\forms\ApproveUserForm;
use humhub\modules\content\widgets\richtext\RichTextField;
use humhub\modules\ui\form\widgets\ActiveForm;
use humhub\modules\user\models\User;
use humhub\widgets\Button;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $model User */
/* @var $approveFormModel ApproveUserForm */
?>

<div class="panel-body">
    <h4><?= Yii::t('AdminModule.user', 'Send a message to <strong>{displayName}</strong> ', ['{displayName}' => Html::encode($model->displayName)]); ?></h4>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($approveFormModel, 'subject')->textInput(['class' => 'form-control']); ?>

    <?= $form->field($approveFormModel, 'message')->widget(RichTextField::class, ['exclude' => ['oembed', 'upload']]); ?>

    <hr>
    <?= Button::save(Yii::t('AdminModule.user', 'Send'))->submit(); ?>
    <?= Button::primary(Yii::t('AdminModule.user', 'Cancel'))->link(Url::to(['index'])); ?>

    <?php ActiveForm::end(); ?>
</div>
