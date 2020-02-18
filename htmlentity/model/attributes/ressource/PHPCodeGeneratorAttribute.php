<?php


namespace htmlentity\model\attributes;

use SplFileObject;

new PHPCodeGeneratorAttribute;
echo 'Remove exit declaration in line ' . __LINE__ .' on FILE: '. __FILE__ . PHP_EOL;
exit;
class PHPCodeGeneratorAttribute
{

    private $mozilla_attribute_list;
    private $target_dir_name_traits;
    private $exception_list;
    private $attributes;
    private $attribute_name;
    private $rendered;

    public function __construct ()
    {
        $this -> target_dir_name_traits = '/media/sf_sync/php_scripts/traits/';
        $this -> target_dir_name_class = '/media/sf_sync/php_scripts/classes/';
        $this -> mozilla_attribute_list = [];
        $this -> exception_list = [ 'class' => 'class_type' ];
        $this -> load_mozilla_attributlist( [
            #'meta'
            'Globale Attribute' , 'Globales Attribut' , 'Globale Attribut' , 'Global attribute'
        ] );
        $this -> render_attribute_list();
    }


    private function render_attribute_list ()
    {
        foreach ( $this -> attributes as $this -> attribute_name ) {
            file_put_contents(
                $this -> target_dir_name_traits . $this -> get_trait_filename(),
                $this -> get_phpcode_trait()
            );

            file_put_contents(
                $this -> target_dir_name_class . $this -> get_class_filename(),
                $this -> get_phpcode_class()
            );

        }
    }


    private function get_phpcode_trait ()
    {

        return <<<RUN

<?
namespace htmlentity\model\attributes;

trait {$this -> get_traitname()} 
{

    public function set_{$this -> get_functionname()}( {$this->get_classname()} \$obj ){
        \$this -> set_attribute(\$obj);
        return \$this;
    }

}

RUN;


    }

    private function get_phpcode_class(){
        return <<<CODE
<?php

namespace htmlentity\model\attributes\global;

use htmlentity\model\HTMLAttribute;

class {$this->get_classname()} extends HTMLAttribute
{

  public function __construct ( \$value = NULL )
  {
      \$this->attribute_name = '{$this->get_attribute_name()}';
      \$this->attribute_value = \$value;

  }


}
CODE;
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
        return 'T' . $this->get_classname();

    }

    private function get_functionname ()
    {
        return implode('_', array_map( function ( $item ) {
            return mb_strtolower( $item );
        } , explode( '-' , $this -> attribute_name ) ) );
    }

    private function get_classname ()
    {
        return implode('', array_map( function ( $item ) {
            return ucfirst( $item );
        } , explode( '-' , $this -> attribute_name ) ) );
    }

    private function get_trait_filename ()
    {
        return $this->get_traitname().'.php';
    }

    private function get_attribute_name ()
    {
        return $this->attribute_name;
    }

    private function get_class_filename ()
    {
        return $this->get_classname().'.php';
    }


}