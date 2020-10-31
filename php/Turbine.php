<?php


class Turbine
{

    public $items;

    function _construct() {
        $this->items = range(1, 100);
    }

    /**
     * @return mixed
     */
    public function getItems()
    {
        return $this->items;
    }
}