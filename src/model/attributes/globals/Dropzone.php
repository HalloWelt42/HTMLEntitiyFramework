<?php

namespace HEF\model\attributes\globals;

use HEF\model\HTMLAttribute;

class Dropzone extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'dropzone';
      $this->attribute_value = $value;

  }


}