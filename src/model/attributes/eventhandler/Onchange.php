<?php
namespace HEF\model\attributes\eventhandler;

use HEF\model\HTMLAttribute;

class Onchange extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'onchange';
      $this->attribute_value = $value;

  }


}