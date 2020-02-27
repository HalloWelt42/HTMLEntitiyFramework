<?php
namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class Readonly extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'readonly';
      $this->attribute_value = $value;

  }


}