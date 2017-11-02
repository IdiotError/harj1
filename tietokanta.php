<?php include "menu.php"; ?>
<?php include "connect.php"; ?>
<?php
$opiskelijat=$db->query('SELECT etunimi,sukunimi,syntymavuosi FROM tOpiskelijat');
 ?>

<h1>Tietokanta esimerkki</h1>
<table class="table table-striped table-hover table-bordered">
  <tr class="bg-success"><th>Etunimi</th><th>Sukunimi</th><th>Syntymävuosi</th></tr>
<?php
foreach ($opiskelijat as $rivi) {
  echo '<tr><td>'.$rivi['etunimi'].'</td><td>'.$rivi['sukunimi'].'</td><td>'.$rivi['syntymavuosi'].'</td></tr>';
}
 ?>
</table>
<?php include "footer.php"; ?>
