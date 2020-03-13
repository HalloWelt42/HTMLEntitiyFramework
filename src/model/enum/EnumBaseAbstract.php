<?php


namespace HEF\model\enum;


use ReflectionClass;
use ReflectionException;

abstract class EnumBaseAbstract {


  /**
   * interner Cache
   *
   * @var array
   */
  private static $const_cache_array;


  /**
   * EnumBaseAbstract constructor.
   */
  private function __construct()
  {
    self::$const_cache_array = [];
  }


  /**
   * Eigene Konstanten der aktuellen Klasse zurückgeben
   *
   * @return array
   * @throws ReflectionException
   */
  public static function getConstants() {

    self::$const_cache_array = self::$const_cache_array !== NULL ?: [];
    if ( !array_key_exists( gCalled_class() , self::$const_cache_array ) ) {
      self::$const_cache_array[ gCalled_class() ] = (new ReflectionClass( gCalled_class() )) -> getConstants();
    }
    return self::$const_cache_array[ gCalled_class() ];
  }


  /**
   * @param $name
   * @param bool $strict
   * @return bool
   * @throws ReflectionException
   */
  public static function isValidName( $name , $strict = FALSE ) {

    if ( $strict ) {

      return
          array_key_exists( $name , self::getConstants() );

    }

    return
        in_array(
            strtolower( $name )
            ,array_map('strtolower'
                ,array_keys( self::getConstants() )
            )
        );
  }


  /**
   * Validierung der vergebenen Konstanten-Werte bei den anwendenden Klassen
   *
   * @param $value
   * @param bool $strict
   * @return bool
   * @throws ReflectionException
   */
  public static function isValidValue( $value , $strict = TRUE ) {

    return
        in_array(
            $value
            ,array_values( self::getConstants() )
            ,$strict
        );
  }


}