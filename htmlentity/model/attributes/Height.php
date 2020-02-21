<?php
namespace htmlentity\model\attributes;

use htmlentity\model\HTMLAttribute;

class Height extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'height';
      $this->attribute_value = $value;

  }


}