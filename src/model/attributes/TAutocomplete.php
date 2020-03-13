<?php
namespace HEF\model\attributes;

trait TAutocomplete 
{

    public function sAutocomplete( Autocomplete $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
