<?php
namespace HEF\model\attributes;

trait TSrcdoc 
{

  /**
   * 
   * 
   * 
   * @param Srcdoc $obj
   * @return $this
   */
    public function sSrcdoc( Srcdoc $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
