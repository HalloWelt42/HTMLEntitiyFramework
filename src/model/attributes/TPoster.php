<?php
namespace HEF\model\attributes;

trait TPoster 
{

  /**
   * 
   * 
   * 
   * @param Poster $obj
   * @return $this
   */
    public function sPoster( Poster $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
