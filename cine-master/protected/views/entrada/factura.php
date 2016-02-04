<?php


$data=Yii::app()->db->createCommand('select * from sala_funcion where id='.$idSalaFuncion)->queryAll();
$total=0;
$iva=0;
$totalapagar=0;
echo '<table class="table">';
echo '<thead>';
echo '<th>Numero de Boletos </th>';
echo '<th>Precio Unitario </th>';
echo '<th>Total </th>';
echo '</thead>';
echo '<tbody>';
foreach ($data as $attr) {
	echo '<tr>';
	echo '<td>'.$numBoletos.'</td>';
	echo '<td>'.$attr['precio'].'</td>';
	$total=$attr['precio']*$numBoletos;
	echo '<td>'.$total.'</td>';
	echo '</tr>';

}
	echo '<tr>';
	echo '<td></td>';
	echo '<td>Subtotal </td>';
	echo '<td>'.$total.'</td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td></td>';
	echo '<td>Iva 12% </td>';
	$iva=($total*12)/100;
	echo '<td>'.$iva.'</td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td></td>';
	echo '<td>Total A pagar </td>';
	$totalapagar=$total+$iva;
	echo '<td>'.$totalapagar.'</td>';
	echo '</tr>';
echo '</tbody>';
echo '</table>';

?>