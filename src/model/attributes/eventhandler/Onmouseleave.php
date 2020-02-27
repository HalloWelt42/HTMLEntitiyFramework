<?php
namespace HEF\model\attributes\eventhandler;

use HEF\model\HTMLAttribute;

class Onmouseleave extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'onmouseleave';
      $this->attribute_value = $value;

  }


}