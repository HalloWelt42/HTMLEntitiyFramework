<?php
namespace HEF\model\attributes\eventhandler;

use HEF\model\HTMLAttribute;

class Onprogress extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'onprogress';
      $this->attribute_value = $value;

  }


}