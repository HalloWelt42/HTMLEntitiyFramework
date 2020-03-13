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

    $this->assertEquals('def',$this->gClasses('def'));
    $this->assertEquals('def',$this->gClasses(' def'));
    $this->assertEquals('def',$this->gClasses(' def '));
    $this->assertEquals('abc def',$this->gClasses('abc def'));
    $this->assertEquals('abc def',$this->gClasses(' abc def '));
    $this->assertEquals('abc def',$this->gClasses('   abc def '));

    $this->assertEquals('ab bc' , $this->gClassesBySetter(['ab','bc']));
    $this->assertEquals('bc' , $this->gClassesBySetter(['bc']));
    $this->assertEquals('ab' , $this->gClassesBySetter([' ',' ab ']));

  }

  private function gClasses($str){
    return (new ClassType(
        $str
    ))->gValue();
  }

  private function gClassesBySetter($arr){
    $cls = (new ClassType());
    foreach ($arr as $val ){
      $cls->add($val);
    }
    return $cls->gValue();
  }

}