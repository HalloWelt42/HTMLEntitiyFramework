<?php
namespace htmlentity\model\attributes;

trait TSpan 
{

  /**
   * 
   * 
   * 
   * @param Span $obj
   * @return $this
   */
    public function set_span( Span $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
