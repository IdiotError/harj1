<?php include"menu.php"; ?>
    <h1>Assosiatiivinen array</h1>
    <p>PHP alkaa</p>
    <?php
    //kaksiulotteinen taulukko
    $nimet=array(
      array("Etunimi"=>'Ville',"Sukunimi"=>'Virta'),
      array("Etunimi"=>'Olavi',"Sukunimi"=>'Virta'),
      array("Etunimi"=>'Esa',"Sukunimi"=>'Pekkanen'),
      array("Etunimi"=>'Anna',"Sukunimi"=>'Niemi')
    );
    //print_r tulostaa koko taulukon
    //print_r($nimet);
    //ensimmäinen Etunimi
    echo 'ensimmäinen etunimi on '.$nimet[0]['Etunimi'];

    foreach ($nimet as $rivi) {
      echo $rivi['Etunimi'].'<br>';
    }
    ?>
    <p>PHP päättyy</p>
    <h2>Koko taulukko, mukana PHP</h2>
    <table border="1">
      <tr>
        <th>Etunimi</th><th>Sukunimi</th>
      </tr>

      <?php
      foreach ($nimet as $rivi) {
        echo '<tr><td>'.$rivi['Etunimi'].'</td><td>'.$rivi['Sukunimi'].'</td></tr>';
      }
      ?>
    </table>

<?php include "footer.php"; ?>
