<?php
namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class Download extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'download';
      $this->attribute_value = $value;

  }


}