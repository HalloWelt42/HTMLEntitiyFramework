<?php
namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class Media extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'media';
      $this->attribute_value = $value;

  }


}