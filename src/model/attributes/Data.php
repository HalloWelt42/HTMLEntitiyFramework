<?php
namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class Data extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'data';
      $this->attribute_value = $value;

  }


}