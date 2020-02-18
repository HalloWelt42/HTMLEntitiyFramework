<?php


namespace htmlentity\model\attributes;

use SplFileObject;

new PHPCodeGeneratorAttribute;

class PHPCodeGeneratorAttribute
{

    private $mozilla_attribute_list;
    private $target_dir_name;
    private $exception_list;
    private $attributes;
    private $attribute;
    private $rendered;

    public function __construct ()
    {
        $this -> target_dir_name= '/media/sf_sync/php_scripts/';
        $this -> mozilla_attribute_list = [];
        $this -> exception_list = [ 'class' => 'class_type' ];
        $this -> load_mozilla_attributlist( [
            'meta'
            #'Globale Attribute' , 'Globales Attribut' , 'Globale Attribut' , 'Global attribute'
        ] );
        $this -> render_attribute_list();
    }


    private function render_attribute_list ()
    {
        foreach ( $this -> attributes as $this -> attribute ) {
            file_put_contents(
                $this -> target_dir_name . $this -> class_filename(),
                $this -> get_phpcode_trait()
            );

        }
    }


    public function get_phpcode_trait ()
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

    public function output_on_screen ()
    {

        print_r( $this -> rendered );

        print_r( PHP_EOL );

    }

    /**
     * @param array $select
     */
    public function load_mozilla_attributlist ( array $select )
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
        } , explode( '-' , $this -> attribute ) ) );
    }

    private function get_classname ()
    {
        return implode('', array_map( function ( $item ) {
            return ucfirst( $item );
        } , explode( '-' , $this -> attribute ) ) );
    }

    private function class_filename ()
    {
        return $this->get_traitname().'.php';
    }


}