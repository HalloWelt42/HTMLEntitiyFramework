<?php
namespace htmlentity\model\attributes\eventhandler;

use htmlentity\model\HTMLAttribute;

class Oninput extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'oninput';
      $this->attribute_value = $value;

  }


}