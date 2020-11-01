<?php

include "Turbine.php";

class Inspector
{

    public $turbine;


    public function __construct() {
        $this->turbine = new Turbine();
    }

    public function damageReport()
    {
        foreach ($this->turbine->getItems() as $value) {
            echo $this::inspectTurbine($value) . "\n";
        }
    }

    /**
     * @param $item
     * @return string
     */
    private function inspectTurbine($item) {
        if ($item % 15 === 0) {
            return "Coating Damage & Lighting Strike";
        }
        if ($item % 3 === 0) {
            return "Coating Damage";
        }
        if ($item % 5 === 0) {
            return "Lightning Strike";
        }
        return strval($item);
    }

}