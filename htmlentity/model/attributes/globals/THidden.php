
<?
namespace htmlentity\model\attributes\globals;

trait THidden 
{

    public function set_hidden( Hidden $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
