<?php
namespace HEF\model\attributes;

trait TForm 
{

  /**
   * 
   * 
   * 
   * @param Form $obj
   * @return $this
   */
    public function sForm( Form $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
