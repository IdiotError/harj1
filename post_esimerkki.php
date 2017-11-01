<?php include "menu.php" ?>
<h1>Get esimerkki</h1>
<form action="post_esimerkki.php" method="post">
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
  <input type="submit" name="btnSend" value="Lähetä">
</form>
<?php

if(isSet($_POST['btnSend'])){
  $etu=$_POST['en'];
  $suku=$_POST['sn'];
  echo 'Hei ' .$etu.' '.$suku;
}
?>
<?php include "footer.php" ?>
