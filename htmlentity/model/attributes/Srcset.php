<?php
namespace htmlentity\model\attributes;

use htmlentity\model\HTMLAttribute;

class Srcset extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'srcset';
      $this->attribute_value = $value;

  }


}