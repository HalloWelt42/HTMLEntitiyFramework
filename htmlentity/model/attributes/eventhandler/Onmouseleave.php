<?php
namespace htmlentity\model\attributes\eventhandler;

use htmlentity\model\HTMLAttribute;

class Onmouseleave extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'onmouseleave';
      $this->attribute_value = $value;

  }


}