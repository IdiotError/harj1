<?php include "menu.php"; ?>

<h1>Php class esimerki</h1>
Opiskelijat ovat:<br>
<?php
  include "classOpiskelija.php";
  $opiskelijat=new Opiskelija();
  $nimet=$opiskelijat->get_names();
  foreach($nimet as $rivi){
    echo '<tr><td>'.$rivi['Etunimi'].'</td><td>'.$rivi['Sukunimi'].'</td></tr>';
  }
?>
<?php include "footer.php"; ?>
