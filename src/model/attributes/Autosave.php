<?php
namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class Autosave extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'autosave';
      $this->attribute_value = $value;

  }


}