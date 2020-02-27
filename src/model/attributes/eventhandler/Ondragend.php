<?php
namespace HEF\model\attributes\eventhandler;

use HEF\model\HTMLAttribute;

class Ondragend extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'ondragend';
      $this->attribute_value = $value;

  }


}