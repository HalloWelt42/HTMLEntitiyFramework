<?php
namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class Cite extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'cite';
      $this->attribute_value = $value;

  }


}