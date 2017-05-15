<?php include('cabeza.php');?>
<section>
<?php
$datos = array_map('str_getcsv', file('portafolio-academico.csv'));
// pero debo hacer un pequeño ajuste, para eliminar del arreglo el encabezado del imdb-movies.csv
array_walk($datos, function(&$a) use ($datos) {$a = array_combine($datos[0], $a);});
array_shift($datos);
?>
<h2>Sobre el proyecto</h2>
<p>El proyecto a tratar, </p>

</section>
<?php include('pie.php');?>
