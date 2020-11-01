<?php


class Turbine
{

    private $items;

    public function __construct() {
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