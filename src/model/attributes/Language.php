<?php
namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class Language extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'language';
      $this->attribute_value = $value;

  }


}