<?php
/**
 *
 */
class Opiskelija
{
  function __construct()
  {
    # code...
  }

 private $nimet=array(
    array("Etunimi"=>'Ville',"Sukunimi"=>'Virta'),
    array("Etunimi"=>'Olavi',"Sukunimi"=>'Virta'),
    array("Etunimi"=>'Esa',"Sukunimi"=>'Pekkanen'),
    array("Etunimi"=>'Anna',"Sukunimi"=>'Niemi')
  );

  public function get_names(){
    return $this->nimet;
  }
}

?>
