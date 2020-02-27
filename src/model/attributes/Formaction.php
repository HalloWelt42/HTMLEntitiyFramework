<?php
namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class Formaction extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'formaction';
      $this->attribute_value = $value;

  }


}