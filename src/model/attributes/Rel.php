<?php
namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class Rel extends HTMLAttribute
{

  const STYLESHEET = 'stylesheet';

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'rel';
      $this->attribute_value = $value;

  }


}