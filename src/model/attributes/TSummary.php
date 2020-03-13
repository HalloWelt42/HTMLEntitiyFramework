<?php
namespace HEF\model\attributes;

trait TSummary 
{

  /**
   * 
   * 
   * 
   * @param Summary $obj
   * @return $this
   */
    public function sSummary( Summary $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
