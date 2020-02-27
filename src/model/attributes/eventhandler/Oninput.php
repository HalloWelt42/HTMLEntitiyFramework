<?php
namespace HEF\model\attributes\eventhandler;

use HEF\model\HTMLAttribute;

class Oninput extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'oninput';
      $this->attribute_value = $value;

  }


}