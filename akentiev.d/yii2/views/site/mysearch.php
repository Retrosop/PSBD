    <?php

      /** @var yii\web\View $this */

      use yii\helpers\Html;
      use yii\bootstrap5\ActiveForm;
      use yii\bootstrap5\Breadcrumbs;
      use yii\bootstrap5\Button;

      $this->params['breadcrumbs'][] = $this->title;
    ?>

    <div class="site-about">      
        <?php $form = ActiveForm::begin(['method'=> 'post'])?>
        <label for="inputName" class="form-label">Название диплома</label>
        <?=Html::textInput('namediplom','',['placeholder' => 'Введите название диплома', 'size' => 25, 'class' => "form-control",'type'=>"text"])?>
        <label for="inputAuthor" class="form-label">Имя автора</label>
        <?=Html::textInput('authordiplom','',['placeholder' => 'Введите автора диплома', 'size' => 25,'class' => "form-control",'type'=>"text"])?>
        <label for="inputDate" class="form-label">Дата</label>
        <?=Html::textInput('datediplom','',['placeholder' => 'Введите дату диплома', 'size' => 25,'class' => "form-control",'type'=>"date"])?>
        <br>
        <?=
        Html::submitButton('Отправить', ['class' => 'btn btn-outline-danger'])
        ?>
        
        <?php ActiveForm::end()?>  
    </div>
