<?php
namespace htmlentity\model\attributes;

use htmlentity\model\HTMLAttribute;

class Dirname extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'dirname';
      $this->attribute_value = $value;

  }


}