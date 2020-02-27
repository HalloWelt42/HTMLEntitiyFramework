<?php
namespace HEF\model\attributes\eventhandler;

use HEF\model\HTMLAttribute;

class Ondragover extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'ondragover';
      $this->attribute_value = $value;

  }


}