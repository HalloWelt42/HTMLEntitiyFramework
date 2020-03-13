<?php


namespace HEF\model\attributes\globals;


use SplFileObject;


new PHPCodeGeneratorAttribute;

class PHPCodeGeneratorAttribute
{

  private $mozilla_attribute_list;
  private $target_dir_name_traits;
  private $target_dir_name_class;
  private $target_dir_name_traitlist;

  private $exception_list_attributes;

  private $attributes;
  private $attribute_name;

  /**
   * use T{Traitname};
   *
   * @var array
   */
  private $list_short_trait;

  /**
   * use {namespace}\{ns}\T{Traitname};
   *
   * @var
   */
  private $list_long_trait;
  private $rendered;
  /**
   * @var array
   */
  private $reserved_keywords;
  /**
   * @var array
   */
  private $html_element;
    /**
     * @var string
     */
    private $main_dir;


    public function __construct()
  {
    $this->mozilla_attribute_list = [];
    #$this -> list_class = [];
    $this->list_short_trait = '';
    $this->list_long_trait = '';

    #$this->main_dir = '/media/sf_sync/php_scripts/';
    $this->target_dir_name_traits = $this->main_dir . 'traits/';
    $this->target_dir_name_class = $this->main_dir . 'classes/';


    $this->exception_list_attributes = [
        'data-*'
    ];

    $this->reserved_keywords = [
        'abstract', 'array', 'as', 'break', 'callable', 'case', 'catch', 'class',
        'clone', 'const', 'continue', 'declare', 'default', 'die', 'do', 'echo',
        'else', 'elseif', 'empty', 'enddeclare', 'endfor', 'endforeach', 'endif',
        'endswitch', 'endwhile', 'eval', 'exit', 'extends', 'final', 'finally',
        'global', 'goto', 'if', 'implements', 'include', 'include_once', 'instanceof',
        'insteadof', 'interface   isset', 'list', 'namespace', 'new', 'or', 'print',
        'private', 'protected', 'public', 'require', 'require_once', 'return', 'static',
        'switch', 'throw', 'trait', 'try', 'unset', 'use', 'var', 'while', 'xor', 'yield',
        'yield', 'from', '__CLASS__', '__DIR__', '__FILE__', '__FUNCTION__', '__LINE__',
        '__METHOD__', '__NAMESPACE__', '__TRAIT__'
    ];

    $this->html_element='menu';

    $this->loadMozillaAttributList([
           $this->html_element
            #'Globale Attribute' , 'Globales Attribut' , 'Globale Attribut' , 'Global attribute'
        ]
    );


#        $str = 'onabort, onautocomplete, onautocompleteerror, onblur, oncancel, oncanplay, oncanplaythrough, onchange, onclick, onclose, oncontextmenu, oncuechange, ondblclick, ondrag, ondragend, ondragenter, ondragexit, ondragleave, ondragover, ondragstart, ondrop, ondurationchange, onemptied, onended, onerror, onfocus, oninput, oninvalid, onkeydown, onkeypress, onkeyup, onload, onloadeddata, onloadedmetadata, onloadstart, onmousedown, onmouseenter, onmouseleave, onmousemove, onmouseout, onmouseover, onmouseup, onmousewheel, onpause, onplay, onplaying, onprogress, onratechange, onreset, onresize, onscroll, onseeked, onseeking, onselect, onshow, onsort, onstalled, onsubmit, onsuspend, ontimeupdate, ontoggle, onvolumechange, onwaiting';
#        $this->attributes=explode(', ',$str );
    #print_r($this->attributes);
    #exit;


    $this->renderAttributeList();
  }

  private function renderAttributeList()
  {
    if($this->attributes){
      foreach ($this->attributes as $this->attribute_name) {
        $this->saveFileWhenExists($this->target_dir_name_traits . $this->gTraitFileName(), $this->gPhpCodeAttributeTrait());
        $this->saveFileWhenExists($this->target_dir_name_class . $this->gClassFileName(), $this->gPhpCodeAttributeClass());
        $this->addShortTrait();
        $this->addUseClass();
      }
      $this->saveFileWhenExists("{$this->main_dir}T{$this->gClassnameHtml()}Attributes.php", $this->gPhpCodeAttributsetTrait());
      $this->saveFileWhenExists("{$this->main_dir}{$this->gClassnameHtml()}.php", $this->gPhpCodeHtmlElementsClass());
    }
  }

  /**
   * @param $file
   * @param $source
   */
  private function saveFileWhenExists($file, $source){

    if( file_exists($file) ){
      print_r($file . ' not saved!'.PHP_EOL);
      return;
    }

    file_put_contents($file,$source);
  }

  private function gPhpCodeAttributeTrait()
  {
    return <<<TRAIT
<?php
namespace HEF\\model\\attributes;

trait {$this->gTraitname()} 
{

  /**
   * 
   * 
   * 
   * @param {$this->gClassname()} \$obj
   * @return \$this
   */
    public function set_{$this->gFunctionname()}( {$this->gClassname()} \$obj ){
        \$this -> sAttribute(\$obj);
        return \$this;
    }

}

TRAIT;
  }

  private function gPhpCodeAttributeClass()
  {
    return <<<CLASS
<?php
namespace HEF\\model\\attributes;

use HEF\model\HTMLAttribute;

class {$this->gClassname()} extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null \$value
   */
  public function __construct ( \$value = NULL )
  {
      \$this->attribute_name = '{$this->gAttributeName()}';
      \$this->attribute_value = \$value;

  }


}
CLASS;
  }

  private function gPhpCodeAttributsetTrait()
  {
    return <<<TRAIT
<?php

namespace HEF\model\attributesets;

{$this->list_long_trait}

trait T{$this->gClassnameHtml()}Attributes
{
{$this->list_short_trait}
}
TRAIT;

  }

  private function gPhpCodeHtmlElementsClass()
  {
    return <<<CLASS
<?php
namespace HEF\\model\\htmlelements;

use HEF\\model\\attributesets\\TGlobalAttributes;
use HEF\\model\\attributesets\\TEventHandlerAttributes;
use HEF\\model\\attributesets\\T{$this->gClassnameHtml()}Attributes;
use HEF\\model\\HTMLElement;
use HEF\\model\\HTMLElements;

class {$this->gClassnameHtml()} extends HTMLElement
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use T{$this->gClassnameHtml()}Attributes;

  public function __construct(HTMLElements \$html_elements = null)
  {
    \$this->element_name = '{$this->html_element}';
    \$this->html_elements = (\$html_elements === null) ? new HTMLElements() : \$html_elements;
  }

}

CLASS;

  }

  private function isReservedKeyword(){
      if( in_array($this->attribute_name,$this->reserved_keywords) ){
        return true;
    }
    return false;
  }

  private function addShortTrait()
  {
    $this->list_short_trait .= "    use {$this -> gTraitname()};" . PHP_EOL;
  }

  private function addUseClass()
  {
    $this->list_long_trait .= "use HEF\\model\\attributes\\{$this->gTraitname()};" . PHP_EOL;
  }

  private function output_on_screen()
  {

    print_r($this->rendered);

    print_r(PHP_EOL);

  }

  /**
   * @param array $html_elements
   */
  private function loadMozillaAttributList(array $html_elements)
  {

    $this->attributes = [];

    $csv_file = new SplFileObject(__DIR__ . DIRECTORY_SEPARATOR . 'mozilla_html_attributes.csv');
    while (!$csv_file->eof()) {
      $csv_entry = $csv_file->fgetcsv(';');

      if (!$csv_entry[0]) {
        continue;
      }

      foreach (explode(',', $csv_entry[1]) as $html_tag) {
        if (in_array(trim($html_tag, " \t\n\r\0\x0B" . "<>" . "\x00..\x1F" . chr(194) . chr(160)), $html_elements)) {
          $this->attributes[] = $csv_entry[0];
        }
      }

    }
  }

  private function gTraitname()
  {
    return 'T' . $this->gClassname();

  }

  private function gFunctionname()
  {
    return implode('_', array_map(function ($item) {
      return mb_strtolower($item);
    }, explode('-', $this->attribute_name)));
  }

  private function gClassname()
  {
    return
        implode('', array_map(function ($item) {
          return ucfirst($item);
          }, explode('-', $this->attribute_name))
        ).($this -> isReservedKeyword() ? 'Type':'');
  }


  private function gClassnameHtml(){
    return ucfirst( $this->html_element );
  }

  private function gTraitFileName()
  {
    return $this->gTraitname() . '.php';
  }

  private function gAttributeName()
  {
    return $this->attribute_name;
  }

  private function gClassFileName()
  {
    return $this->gClassname() . '.php';
  }


}