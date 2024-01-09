<?php
    use yii\helpers\Html;
    use yii\bootstrap5\ActiveForm;

    $this->title = 'Авторизация';
    $this->params['breadcrumbs'][] = $this->title;
?>

<div class = "site-login">
    <div class = "admin-panel_name"><?= Html::encode($this->title) ?></div><br>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'fieldConfig' => [
            'template' => "{label}{input}{error}",
            
        ],
    ]); ?>

        <?= $form->field($model, 'login')->textInput() ?>
        <?= $form->field($model, 'password')->passwordInput() ?>
        <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "{input}{label}{error}",
        ]) ?>
        <?= Html::submitButton('Войти', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
    <?php ActiveForm::end(); ?>
</div>
<style>
.site-login {
            font-size: 20px;
    margin-bottom: 100px;
    margin-top: 50px;
    }

    #loginform-login {
        font-size: 10px;
    }

    #loginform-password {
        font-size: 10px;
    }
</style>