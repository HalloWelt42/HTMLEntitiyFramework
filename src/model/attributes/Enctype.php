<?php
namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class Enctype extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'enctype';
      $this->attribute_value = $value;

  }


}