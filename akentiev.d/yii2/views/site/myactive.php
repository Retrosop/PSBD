<?

	/** @var yii\web\View $this */

	//use yii\helpers\Html;
	use yii\bootstrap5\ActiveForm;
	use yii\bootstrap5\LinkPager;
	use yii\bootstrap5\Html;

	$this->title = 'Search';
?>
	
<div class="site-about">      
	<? $form = ActiveForm::begin(['method'=> 'get'])?>
		<label for="inputName" class="form-label">Название диплома</label>
			<?= Html::textInput('namediplom',$this->params['namediplom']==''?'': $this->params['namediplom'],['placeholder' => 'Введите название диплома', 'size' => 25, 'class' => "form-control",'type'=>"text"])?>
		<label for="inputAuthor" class="form-label">Имя автора</label>
			<?= Html::textInput('curatordiplom',$this->params['curatordiplom']==''?'': $this->params['curatordiplom'],['placeholder' => 'Введите автора диплома', 'size' => 25,'class' => "form-control",'type'=>"text"])?>
		<label for="inputDate" class="form-label">Дата</label>
			<?= Html::textInput('datediplom',$this->params['datediplom']==''?'': $this->params['datediplom'],['placeholder' => 'Введите дату диплома', 'size' => 25,'class' => "form-control",'type'=>"date"])?>
		<br>
			<?= Html::submitButton('Отправить', ['class' => 'btn btn-outline-danger']) ?>
	<? ActiveForm::end()?>  
</div>
<br>				
<div class="position-relative">
	<? foreach($models as $works): ?>     
	<center>
		<div style="display: inline-block;" class="col-lg-2; w-50 p-3;">
			<div class="p-3 mb-2 bg-dark text-dark bg-opacity-10">
				<strong><p class="fs-3">№<?=$works->id_works;?> <?=$works->name; ?></p></strong>
				<p class="fs-4"></p>				
				<p><?= $works->typew?> по направлению: <?= $works->id_specialty; ?>, Студента: <?= $works->id_student;?></p>
				<p>Руководитель: <?= $works->id_sotrudnik; ?></p>   
				<p>Оценка: <?= $works->ozenka; ?></p>                 
				<p><?= $works->datez; ?></p>
			</div>
			<p><a class="btn btn-outline-secondary" href="/web/site/contact">Подробнее</a></p>
		</div>
	</center> 
	<? endforeach ?>
</div>

<div class="pagination"> <? echo LinkPager::widget(['pagination' => $pages]); ?> </div>