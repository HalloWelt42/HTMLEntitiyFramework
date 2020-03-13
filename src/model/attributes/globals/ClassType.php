<?php

namespace HEF\model\attributes\globals;

use HEF\model\HTMLAttribute;

class ClassType extends HTMLAttribute
{

  private $class_list;

  public function __construct($value = NULL)
  {
    $this->class_list = [];
    $this->attribute_name = 'class';
    $this->set($value);
  }

  private function set($value)
  {
    $value = trim($value);
    $this->class_list = explode(' ', $value);
    return $this;
  }

  public function add( $value ){
    $this->class_list[] = $value;
    return $this;
  }

  public function clear(){
    $this->class_list=[];
    return $this;
  }

  public function gValue()
  {
    $this->attribute_value = trim(
        implode(' ', $this->class_list)
    );
    return parent::gValue();
  }


}