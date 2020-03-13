<?php

namespace HEF\model\htmlelements;


use HEF\model\HTMLContent;
use HEF\model\HTMLElement;

/**
 * Class Text
 * @package htmlentity\model\htmlelements
 *
 * TODO HTMLElement ggf. mit HTMLTextElement ersetzen, da man keine Verzweigung von Text erstellen kann
 */
class Text extends HTMLElement
{

  public function __construct( HTMLContent $obj = null )
  {
    $this->element_name = 'text';
    $this->sText(($obj===null ? new HTMLContent('') : $obj ) );
    $this->html_elements =  null;
  }


}