<?php


namespace HEF\model\htmlelements;

use HEF\model\attributesets\TEventHandlerAttributes;
use HEF\model\attributesets\TGlobalAttributes;
use HEF\model\HTMLElement;
use HEF\model\HTMLElements;
use HEF\model\htmlelements\groupinginterfaces\IHTMLRoot;

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