<?php
namespace htmlentity\model\attributes\eventhandler;

use htmlentity\model\HTMLAttribute;

class Onblur extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this -> attribute_name = 'onblur';
      $this -> attribute_value = $value;
  }



}