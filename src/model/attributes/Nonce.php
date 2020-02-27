<?php


namespace HEF\model\attributes;


use HEF\model\HTMLAttribute;

class Nonce extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
    $this->attribute_name = 'nonce';
    $this->attribute_value = $value;

  }

}