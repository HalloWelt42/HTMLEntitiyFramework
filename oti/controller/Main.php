<?php

namespace oti\controller;



use oti\model\Body;
use oti\model\HTMLElements;


class Main{

  public function __construct(){

      $html_obj = (new HTMLElements());
      $html_obj[]= new Body();

      print_r(
          $html_obj
      );

      print_r(PHP_EOL);



  }

}