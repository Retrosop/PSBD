<table class="table">
<tr><th>ID</th><th>Сотрудник</th><th>Специальность</th><th>Имя</th><th>Дата</th><th>Еда</th></tr>
<?php   
foreach($rows as $row) 
{
    echo "<tr><td> {$row['id works']}</td><td> {$row['id sotrudnik']}</td><td> {$row['id specialty']}</td><td> {$row['id podpis']}</td><td> {$row['datez']}</td><td> {$row['food']}</td></tr>";
}
?>
</table>