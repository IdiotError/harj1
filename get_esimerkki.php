<?php include "menu.php" ?>
<h1>Get esimerkki</h1>
<form action="get_esimerkki.php" method="get">
  <table border="0">
    <tr>
      <td><label for="en">Etunimi</label></td>
      <td><input type="text" id="en" name="en"></td>
    </tr>
    <tr>
      <td><label for="sn">Sukunimi</label></td>
      <td><input type="text" id="sn" name="sn"></td>
    </tr>
  </table>
  <input type="submit" class="button" name="btnSend" value="Lähetä">
</form>
<?php

if(isSet($_GET['btnSend'])){
  $etu=$_GET['en'];
  $suku=$_GET['sn'];
  echo 'Hei ' .$etu.' '.$suku;
}
?>
<?php include "footer.php"; ?>
