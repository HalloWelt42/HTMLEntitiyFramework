<?php

namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class Charset extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name='charset';
      $this->attribute_value=$value;

  }


}