<?php


namespace htmlentity\model;


class HTMLContent
{

  private $text;

  public function __construct( $text )
  {
    $this->text = $text;
  }

  public function set( $text ){
    $this->text=$text;
    return $this;
  }

  public function get_text(){
    return $this->text;
  }

  public function __toString()
  {
    return (string)$this->get_text();
  }

}