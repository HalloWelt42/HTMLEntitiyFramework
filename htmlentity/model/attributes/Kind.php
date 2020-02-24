<?php
namespace htmlentity\model\attributes;

use htmlentity\model\HTMLAttribute;

class Kind extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'kind';
      $this->attribute_value = $value;

  }


}