<?php
namespace HEF\model\attributes\eventhandler;

use HEF\model\HTMLAttribute;

class Oncuechange extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'oncuechange';
      $this->attribute_value = $value;

  }


}