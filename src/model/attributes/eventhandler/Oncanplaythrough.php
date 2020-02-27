<?php
namespace HEF\model\attributes\eventhandler;

use HEF\model\HTMLAttribute;

class Oncanplaythrough extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'oncanplaythrough';
      $this->attribute_value = $value;

  }


}