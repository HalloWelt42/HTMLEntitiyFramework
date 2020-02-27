<?php
namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class Src extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'src';
      $this->attribute_value = $value;

  }


}