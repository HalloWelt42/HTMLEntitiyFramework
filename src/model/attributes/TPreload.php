<?php
namespace HEF\model\attributes;

trait TPreload 
{

  /**
   * 
   * 
   * 
   * @param Preload $obj
   * @return $this
   */
    public function sPreload( Preload $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
