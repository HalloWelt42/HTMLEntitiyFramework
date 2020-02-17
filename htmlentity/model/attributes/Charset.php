<?php


namespace htmlentity\model\attributes;


use htmlentity\model\HTMLAttribute;

class Charset extends HTMLAttribute
{
  const UTF8 = 'utf-8';

  public function __construct ( $value = NULL )
  {
      $this->attribute_name='charset';
      $this->attribute_value=$value;

  }


}