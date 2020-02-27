<?php
namespace HEF\model\attributes;

trait TAutocomplete 
{

    public function set_autocomplete( Autocomplete $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
