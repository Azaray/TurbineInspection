<?php


class Inspector
{

    public $turbine;


    public function __construct() {
        $this -> $turbine = Turbine::class;
    }

    public function damageReport()
    {
        foreach ($this->turbine->getItems() as $value) {
            echo $this::inspectTurbine($value);
        }
    }

    /**
     * @param $item
     * @return string
     */
    private function inspectTurbine($item) {
        if ($item % 3 === 0) {
            return "Coating Damage";
        }
        if ($item % 5 === 0) {
            return "Lightning Strike";
        }
        if ($item % 15 === 0) {
            return "Coating Damage & Lighting Strike";
        }
        return $item->toString();
    }

}