<?php
namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class Usemap extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'usemap';
      $this->attribute_value = $value;

  }


}