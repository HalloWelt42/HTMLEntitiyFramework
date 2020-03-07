<?php


namespace HEF\model;


class HTMLContent
{

  private $text;
  private $nbsp;

  public function __construct($text)
  {
    $this->nbsp = false;
    $this->set($text);
  }

  public function set_nbsp(bool $val)
  {
    $this->nbsp = $val;
  }

  public function set($text)
  {
    $this->text = $this->nbsp ? str_replace(' ', '&nbsp;', $text) : $text;
    return $this;
  }

  public function get_text()
  {
    return $this->text;
  }

  public function __toString()
  {
    return (string)$this->get_text();
  }

}