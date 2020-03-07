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

  public function get_value()
  {
    $this->attribute_value = implode(' ', $this->class_list);
    parent::get_value();
  }


}