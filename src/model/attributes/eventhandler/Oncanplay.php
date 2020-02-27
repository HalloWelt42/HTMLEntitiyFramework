<?php
namespace HEF\model\attributes\eventhandler;

use HEF\model\HTMLAttribute;

class Oncanplay extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'oncanplay';
      $this->attribute_value = $value;

  }


}