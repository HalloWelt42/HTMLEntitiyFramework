<?php


namespace HEF\model;


class HTMLAttribute
{
  /**
   * @var string
   */
  protected $attribute_name;

  /**
   * @var string
   */
  protected $attribute_value;

  public function get_value(){
      return $this->attribute_value;
  }

  public function get_attribute_name(){
      return $this->attribute_name;
  }

  public function set_value( $value ){
      $this->attribute_value=$value;
      return $this;
  }


}