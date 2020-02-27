<?php
namespace HEF\model\attributes\eventhandler;

use HEF\model\HTMLAttribute;

class Ontimeupdate extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'ontimeupdate';
      $this->attribute_value = $value;

  }


}