<?php
namespace htmlentity\model\attributes\eventhandler;

use htmlentity\model\HTMLAttribute;

class Ondblclick extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'ondblclick';
      $this->attribute_value = $value;

  }


}