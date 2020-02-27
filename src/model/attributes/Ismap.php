<?php
namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class Ismap extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'ismap';
      $this->attribute_value = $value;

  }


}