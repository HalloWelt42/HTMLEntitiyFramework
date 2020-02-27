<?php
namespace HEF\model\attributes\eventhandler;

use HEF\model\HTMLAttribute;

class Ondurationchange extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'ondurationchange';
      $this->attribute_value = $value;

  }


}