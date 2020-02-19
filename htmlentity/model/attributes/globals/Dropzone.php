<?php

namespace htmlentity\model\attributes\globals;

use htmlentity\model\HTMLAttribute;

class Dropzone extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'dropzone';
      $this->attribute_value = $value;

  }


}