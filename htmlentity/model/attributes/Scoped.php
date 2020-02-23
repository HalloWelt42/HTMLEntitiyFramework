<?php
namespace htmlentity\model\attributes;

use htmlentity\model\HTMLAttribute;

class Scoped extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'scoped';
      $this->attribute_value = $value;

  }


}