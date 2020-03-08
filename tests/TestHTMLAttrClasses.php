<?php

use HEF\model\attributes\globals\ClassType;
use PHPUnit\Framework\TestCase;

require_once __DIR__.'/../vendor/autoload.php';

class TestHTMLAttrClasses extends TestCase
{

  /**
   * testet die Verwaltung von 0-n Klassen-Angaben in HTML-Tags
   * und einigen Eingabefehlern, wie leer-Zeichen
   */
  public function test_classes(){

    $this->assertEquals('def',$this->get_classes('def'));
    $this->assertEquals('def',$this->get_classes(' def'));
    $this->assertEquals('def',$this->get_classes(' def '));
    $this->assertEquals('abc def',$this->get_classes('abc def'));
    $this->assertEquals('abc def',$this->get_classes(' abc def '));
    $this->assertEquals('abc def',$this->get_classes('   abc def '));

    $this->assertEquals('ab bc' , $this->get_classes_by_setter(['ab','bc']));
    $this->assertEquals('bc' , $this->get_classes_by_setter(['bc']));
    $this->assertEquals('ab' , $this->get_classes_by_setter([' ',' ab ']));

  }

  private function get_classes($str){
    return (new ClassType(
        $str
    ))->get_value();
  }

  private function get_classes_by_setter($arr){
    $cls = (new ClassType());
    foreach ($arr as $val ){
      $cls->add($val);
    }
    return $cls->get_value();
  }

}