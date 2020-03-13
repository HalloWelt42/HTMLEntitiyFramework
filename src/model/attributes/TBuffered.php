<?php
namespace HEF\model\attributes;

trait TBuffered 
{

  /**
   * 
   * 
   * 
   * @param Buffered $obj
   * @return $this
   */
    public function sBuffered( Buffered $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
