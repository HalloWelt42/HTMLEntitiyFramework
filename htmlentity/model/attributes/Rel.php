<?php
namespace htmlentity\model\attributes;

use htmlentity\model\HTMLAttribute;

class Rel extends HTMLAttribute
{

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