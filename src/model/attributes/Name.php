<?php

namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class Name extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name='name';
      $this->attribute_value=$value;

  }


}