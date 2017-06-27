
<?php
$n=$_POST["n"];
$m=$_POST["m"];
$count=1;
$summ_n=1;
$summ_m=1;
$summnm=1;
while ($count<$n)
{
	$summ_n=$summ_n*($count+1);
	$count++;
}
echo "Факториал n = " .$summ_n. "<br/>";

$count=1;
while ($count<$m)
{
	$summ_m=$summ_m*($count+1);
	$count++;
}
echo "Факториал m = " .$summ_m. "<br/>";

$count=1;
while ($count<($m+$n))
{
	$summnm=$summnm*($count+1);
	$count++;
}
echo "Факториал n+m = " .$summnm. "<br/>";
$f=($summ_n+$summ_m)/$summnm;
echo "Результат = ".$f. "<br/>";
?>


