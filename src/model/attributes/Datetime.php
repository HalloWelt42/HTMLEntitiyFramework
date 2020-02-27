<?php
namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class Datetime extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'datetime';
      $this->attribute_value = $value;

  }


}