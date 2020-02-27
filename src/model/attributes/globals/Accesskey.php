<?php

namespace HEF\model\attributes\globals;


use HEF\model\HTMLAttribute;

class Accesskey extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'accesskey';
      $this->attribute_value = $value;

  }


}