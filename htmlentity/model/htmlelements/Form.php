<?php


namespace htmlentity\model\htmlelements;


use htmlentity\model\attributesets\TFormTag;
use htmlentity\model\HTMLElement;

class Form extends HTMLElement
{
  use TFormTag;

  public function __construct()
  {
    $this->element_name='form';
  }
}