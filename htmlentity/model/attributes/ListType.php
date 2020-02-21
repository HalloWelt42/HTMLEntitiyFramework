<?php
namespace htmlentity\model\attributes;

use htmlentity\model\HTMLAttribute;

class ListType extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'list';
      $this->attribute_value = $value;

  }


}