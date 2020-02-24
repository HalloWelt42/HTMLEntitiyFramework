<?php


namespace htmlentity\model\attributes\globals;


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

    $this->html_element='area';

    $this->load_mozilla_attributlist([
           $this->html_element
            #'Globale Attribute' , 'Globales Attribut' , 'Globale Attribut' , 'Global attribute'
        ]
    );


#        $str = 'onabort, onautocomplete, onautocompleteerror, onblur, oncancel, oncanplay, oncanplaythrough, onchange, onclick, onclose, oncontextmenu, oncuechange, ondblclick, ondrag, ondragend, ondragenter, ondragexit, ondragleave, ondragover, ondragstart, ondrop, ondurationchange, onemptied, onended, onerror, onfocus, oninput, oninvalid, onkeydown, onkeypress, onkeyup, onload, onloadeddata, onloadedmetadata, onloadstart, onmousedown, onmouseenter, onmouseleave, onmousemove, onmouseout, onmouseover, onmouseup, onmousewheel, onpause, onplay, onplaying, onprogress, onratechange, onreset, onresize, onscroll, onseeked, onseeking, onselect, onshow, onsort, onstalled, onsubmit, onsuspend, ontimeupdate, ontoggle, onvolumechange, onwaiting';
#        $this->attributes=explode(', ',$str );
    #print_r($this->attributes);
    #exit;


    $this->render_attribute_list();
  }

  private function render_attribute_list()
  {
    if($this->attributes){
      foreach ($this->attributes as $this->attribute_name) {
        $this->save_file_when_exists($this->target_dir_name_traits . $this->get_trait_filename(), $this->get_phpcode_attribute_trait());
        $this->save_file_when_exists($this->target_dir_name_class . $this->get_class_filename(), $this->get_phpcode_attribute_class());
        $this->add_short_trait();
        $this->add_use_class();
      }
      $this->save_file_when_exists("{$this->main_dir}T{$this->get_classname_html()}Attributes.php", $this->get_phpcode_attributset_trait());
      $this->save_file_when_exists("{$this->main_dir}{$this->get_classname_html()}.php", $this->get_phpcode_htmlelements_class());
    }
  }

  /**
   * @param $file
   * @param $source
   */
  private function save_file_when_exists($file,$source){

    if( file_exists($file) ){
      print_r($file . ' not saved!'.PHP_EOL);
      return;
    }

    file_put_contents($file,$source);
  }

  private function get_phpcode_attribute_trait()
  {
    return <<<TRAIT
<?php
namespace htmlentity\\model\\attributes;

trait {$this->get_traitname()} 
{

  /**
   * 
   * 
   * 
   * @param {$this->get_classname()} \$obj
   * @return \$this
   */
    public function set_{$this->get_functionname()}( {$this->get_classname()} \$obj ){
        \$this -> set_attribute(\$obj);
        return \$this;
    }

}

TRAIT;
  }

  private function get_phpcode_attribute_class()
  {
    return <<<CLASS
<?php
namespace htmlentity\\model\\attributes;

use htmlentity\model\HTMLAttribute;

class {$this->get_classname()} extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null \$value
   */
  public function __construct ( \$value = NULL )
  {
      \$this->attribute_name = '{$this->get_attribute_name()}';
      \$this->attribute_value = \$value;

  }


}
CLASS;
  }

  private function get_phpcode_attributset_trait()
  {
    return <<<TRAIT
<?php

namespace htmlentity\model\attributesets;

{$this->list_long_trait}

trait T{$this->get_classname_html()}Attributes
{
{$this->list_short_trait}
}
TRAIT;

  }

  private function get_phpcode_htmlelements_class()
  {
    return <<<CLASS
<?php
namespace htmlentity\\model\\htmlelements;

use htmlentity\\model\\attributesets\\TGlobalAttributes;
use htmlentity\\model\\attributesets\\TEventHandlerAttributes;
use htmlentity\\model\\attributesets\\T{$this->get_classname_html()}Attributes;
use htmlentity\\model\\HTMLElement;
use htmlentity\\model\\HTMLElements;

class {$this->get_classname_html()} extends HTMLElement
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use T{$this->get_classname_html()}Attributes;

  public function __construct(HTMLElements \$html_elements = null)
  {
    \$this->element_name = '{$this->html_element}';
    \$this->html_elements = (\$html_elements === null) ? new HTMLElements() : \$html_elements;
  }

}

CLASS;

  }

  private function is_reserved_keyword(){
      if( in_array($this->attribute_name,$this->reserved_keywords) ){
        return true;
    }
    return false;
  }

  private function add_short_trait()
  {
    $this->list_short_trait .= "    use {$this -> get_traitname()};" . PHP_EOL;
  }

  private function add_use_class()
  {
    $this->list_long_trait .= "use htmlentity\\model\\attributes\\{$this->get_traitname()};" . PHP_EOL;
  }

  private function output_on_screen()
  {

    print_r($this->rendered);

    print_r(PHP_EOL);

  }

  /**
   * @param array $html_elements
   */
  private function load_mozilla_attributlist(array $html_elements)
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

  private function get_traitname()
  {
    return 'T' . $this->get_classname();

  }

  private function get_functionname()
  {
    return implode('_', array_map(function ($item) {
      return mb_strtolower($item);
    }, explode('-', $this->attribute_name)));
  }

  private function get_classname()
  {
    return
        implode('', array_map(function ($item) {
          return ucfirst($item);
          }, explode('-', $this->attribute_name))
        ).($this -> is_reserved_keyword() ? 'Type':'');
  }


  private function get_classname_html(){
    return ucfirst( $this->html_element );
  }

  private function get_trait_filename()
  {
    return $this->get_traitname() . '.php';
  }

  private function get_attribute_name()
  {
    return $this->attribute_name;
  }

  private function get_class_filename()
  {
    return $this->get_classname() . '.php';
  }


}