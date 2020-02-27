<?php
namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class Keytype extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'keytype';
      $this->attribute_value = $value;

  }


}