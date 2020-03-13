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

  public function gValue(){
      return $this->attribute_value;
  }

  public function gAttributeName(){
      return $this->attribute_name;
  }

  public function sValue( $value ){
      $this->attribute_value=$value;
      return $this;
  }


}