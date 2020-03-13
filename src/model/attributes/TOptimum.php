<?php
namespace HEF\model\attributes;

trait TOptimum 
{

  /**
   * 
   * 
   * 
   * @param Optimum $obj
   * @return $this
   */
    public function sOptimum( Optimum $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
