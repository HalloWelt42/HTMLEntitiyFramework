<?php
namespace HEF\model\attributes\globals;

trait TDraggable 
{

    public function set_draggable( Draggable $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
