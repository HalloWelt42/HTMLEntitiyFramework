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
    public function set_srcdoc( Srcdoc $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
