<?php
namespace HEF\model\attributes;

trait TDirname 
{

  /**
   * 
   * 
   * 
   * @param Dirname $obj
   * @return $this
   */
    public function sDirname( Dirname $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
