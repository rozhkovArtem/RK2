<html>
<head>
	<title>Рожков А.А., ИУ4 - 12Б, Вариант 9</title>
</head>
<body>
<strong>Рожков А.А., ИУ4 - 12Б, Вариант 9</strong><br>
<h2>Задание 1</h2>
<ol>
<p><?php
for ($i=1900; $i < 2101 ; $i++) { 
	echo '<li>', $i, 'г.',  '</li>';
}
?>
</p>
</ol>
<h2>Задание 2</h2>
<form action="" method="post">
Введите коэфициенты квадратного уравнения: <br>
A:<input type="number" name="koefa"> <br>
B:<input type="number" name="koefb"> <br>
C:<input type="number" name="koefc"> <br>
<input type="submit">
</form>
<h1>Корни квадратного уравнения</h1><br>
<p><?php
$koefa = $_POST["koefa"];
$koefb = $_POST["koefb"];
$koefc = $_POST["koefc"];
if ($koefb*$koefb-4*$koefa*$koefc<0) {echo "Корней нет";}
elseif ($koefb*$koefb-4*$koefa*$koefc==0) {
	echo "Единственный корень равный ", -$koefb/(2*$koefa); 
}
else {echo "Корни равны: ", "x1 = ", (-$koefb+sqrt($koefb*$koefb-4*$koefa*$koefc))/(2*$koefa),"<br>", 
	"x2 =", (-$koefb-sqrt($koefb*$koefb-4*$koefa*$koefc))/(2*$koefa);}
?></p>
</body>
</html>
