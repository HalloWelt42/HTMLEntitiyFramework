<?php


namespace htmlentity\model\htmlelements;

use htmlentity\model\attributesets\TEventHandlerAttributes;
use htmlentity\model\attributesets\TGlobalAttributes;
use htmlentity\model\HTMLElement;
use htmlentity\model\HTMLElements;
use htmlentity\model\htmlelements\groupinginterfaces\IHTMLRoot;

/**
 * html ist der root-Knoten aller HTML-Elemente
 *
 * Class Body
 * @package htmlentity\model
 */
class Html extends HTMLElement implements IHTMLRoot
{
  use TGlobalAttributes;
  use TEventHandlerAttributes;

  /**
   *  $html_elements
   *      ist optional zum Einfügen von HTML-Zweig-Objekten
   *
   * Html constructor.
   * @param HTMLElements|null $html_elements
   */
  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'html';
    $this->html_elements = ($html_elements === null ? new HTMLElements() : $html_elements);
  }

}