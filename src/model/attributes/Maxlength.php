<?php
namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class Maxlength extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'maxlength';
      $this->attribute_value = $value;

  }


}