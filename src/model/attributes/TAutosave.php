<?php
namespace HEF\model\attributes;

trait TAutosave 
{

  /**
   * 
   * 
   * 
   * @param Autosave $obj
   * @return $this
   */
    public function sAutosave( Autosave $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
