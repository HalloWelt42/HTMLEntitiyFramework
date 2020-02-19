
<?
namespace htmlentity\model\attributes\globals;

trait TTitle 
{

    public function set_title( Title $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
