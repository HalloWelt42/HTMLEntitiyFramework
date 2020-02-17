<?php


namespace oti\model\attributes;


use oti\model\HTMLAttribute;

class Charset extends HTMLAttribute
{
  const UTF8 = 'utf-8';

  public function __construct ()
  {
      $this->attribute_name='charset';
      $this->attribute_value=null;

  }


}