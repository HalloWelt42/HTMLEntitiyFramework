<?php
namespace HEF\model\attributes;

trait TChecked 
{

  /**
   * 
   * 
   * 
   * @param Checked $obj
   * @return $this
   */
    public function sChecked( Checked $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
