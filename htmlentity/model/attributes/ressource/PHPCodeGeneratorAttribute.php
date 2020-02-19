<?php


namespace htmlentity\model\attributes\globals;

use SplFileObject;

#echo 'Remove exit declaration in line ' . __LINE__ . ' on FILE: ' . __FILE__ . PHP_EOL;
#exit;
new PHPCodeGeneratorAttribute;

class PHPCodeGeneratorAttribute
{

    private $mozilla_attribute_list;
    private $target_dir_name_traits;
    private $target_dir_name_class;
    private $target_dir_name_traitlist;

    private $exception_list_internal_properties;
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

    public function __construct ()
    {
        $this -> mozilla_attribute_list = [];
        #$this -> list_class = [];
        $this -> list_short_trait = '';
        $this -> list_long_trait = '';

        $this -> target_dir_name_traits = '/media/sf_sync/php_scripts/traits/';
        $this -> target_dir_name_class = '/media/sf_sync/php_scripts/classes/';
        $this -> target_dir_name_traitlist = '/media/sf_sync/php_scripts/TEventHandler.php';

        $this -> exception_list_internal_properties = [ 'class' => 'class_type' ];
        $this -> exception_list_attributes = [
            'data-*'
        ];


//        $this -> load_mozilla_attributlist( [ #'meta'
//            'Globale Attribute' , 'Globales Attribut' , 'Globale Attribut' , 'Global attribute' ] );

        $str = 'onabort, onautocomplete, onautocompleteerror, onblur, oncancel, oncanplay, oncanplaythrough, onchange, onclick, onclose, oncontextmenu, oncuechange, ondblclick, ondrag, ondragend, ondragenter, ondragexit, ondragleave, ondragover, ondragstart, ondrop, ondurationchange, onemptied, onended, onerror, onfocus, oninput, oninvalid, onkeydown, onkeypress, onkeyup, onload, onloadeddata, onloadedmetadata, onloadstart, onmousedown, onmouseenter, onmouseleave, onmousemove, onmouseout, onmouseover, onmouseup, onmousewheel, onpause, onplay, onplaying, onprogress, onratechange, onreset, onresize, onscroll, onseeked, onseeking, onselect, onshow, onsort, onstalled, onsubmit, onsuspend, ontimeupdate, ontoggle, onvolumechange, onwaiting';
        $this->attributes=explode(', ',$str );
        #print_r($this->attributes);
        #exit;
        $this -> render_attribute_list();
    }

    private function render_attribute_list ()
    {
        foreach ( $this -> attributes as $this -> attribute_name ) {
            #file_put_contents( $this -> target_dir_name_traits . $this -> get_trait_filename() , $this -> get_phpcode_trait() );
            #file_put_contents( $this -> target_dir_name_class . $this -> get_class_filename() , $this -> get_phpcode_class() );
            $this -> add_short_trait();
            $this -> add_long_class();
        }
        file_put_contents($this->target_dir_name_traitlist,$this->get_phpcode_attributset());
    }


    private function get_phpcode_trait ()
    {
        return <<<TRAIT
<?php
namespace htmlentity\\model\\attributes\\eventhandler;

trait {$this -> get_traitname()} 
{

    public function set_{$this -> get_functionname()}( {$this -> get_classname()} \$obj ){
        \$this -> set_attribute(\$obj);
        return \$this;
    }

}

TRAIT;
    }


    private function get_phpcode_class ()
    {
        return <<<CLASS
<?php
namespace htmlentity\\model\\attributes\\eventhandler;

use htmlentity\model\HTMLAttribute;

class {$this -> get_classname()} extends HTMLAttribute
{

  public function __construct ( \$value = NULL )
  {
      \$this->attribute_name = '{$this -> get_attribute_name()}';
      \$this->attribute_value = \$value;

  }


}
CLASS;
    }


    private function get_phpcode_attributset(){
        return <<<TRAIT
<?php

namespace htmlentity\model\attributesets;

{$this->list_long_trait}

trait TEventHandler
{
{$this->list_short_trait}
}
TRAIT;

    }


    private function add_short_trait(){
        $this -> list_short_trait .= "    use {$this -> get_traitname()};" . PHP_EOL;
    }

    private function add_long_class(){
        $this -> list_long_trait .= "use htmlentity\\model\\attributes\\eventhandler\\{$this->get_traitname()};" . PHP_EOL;
    }

    private function output_on_screen ()
    {

        print_r( $this -> rendered );

        print_r( PHP_EOL );

    }

    /**
     * @param array $select
     */
    private function load_mozilla_attributlist ( array $select )
    {

        $this -> attributes = [];

        $csv_file = new SplFileObject( __DIR__ . DIRECTORY_SEPARATOR . 'mozilla_html_attributes.csv' );
        while ( !$csv_file -> eof() ) {
            $csv_entry = $csv_file -> fgetcsv( ';' );

            if ( !$csv_entry[ 0 ] ) {
                continue;
            }

            foreach ( explode( ',' , $csv_entry[ 1 ] ) as $html_tag ) {
                if ( in_array( trim( $html_tag , " \t\n\r\0\x0B" . "<>" . "\x00..\x1F" . chr( 194 ) . chr( 160 ) ) , $select ) ) {
                    $this -> attributes[] = $csv_entry[ 0 ];
                }
            }

        }
    }

    private function get_traitname ()
    {
        return 'T' . $this -> get_classname();

    }

    private function get_functionname ()
    {
        return implode( '_' , array_map( function ( $item ) {
            return mb_strtolower( $item );
        } , explode( '-' , $this -> attribute_name ) ) );
    }

    private function get_classname ()
    {
        return implode( '' , array_map( function ( $item ) {
            return ucfirst( $item );
        } , explode( '-' , $this -> attribute_name ) ) );
    }

    private function get_trait_filename ()
    {
        return $this -> get_traitname() . '.php';
    }

    private function get_attribute_name ()
    {
        return $this -> attribute_name;
    }

    private function get_class_filename ()
    {
        return $this -> get_classname() . '.php';
    }


}