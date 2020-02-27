<?php
namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class Checked extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'checked';
      $this->attribute_value = $value;

  }


}