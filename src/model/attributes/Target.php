<?php
namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class Target extends HTMLAttribute
{

  const BLANK = '_blank';
  const PARENT = '_parent';
  const SELF = '_self';
  const TOP = '__top';

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'target';
      $this->attribute_value = $value;

  }


}