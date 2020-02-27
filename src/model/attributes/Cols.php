<?php
namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class Cols extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'cols';
      $this->attribute_value = $value;

  }


}