<?php


namespace SoPhp\Bundle\Sample\Calculator;


interface CalculatorServiceInterface {
    /**
     * @param number $a
     * @param number $b
     * @return number
     */
    public function add($a, $b);

    /**
     * @param number $a
     * @param number $b
     * @return number
     */
    public function subtract($a, $b);

    /**
     * @param $a
     * @param $b
     * @return number
     */
    public function multiply($a, $b);

    /**
     * @param $a
     * @param $b
     * @return number
     */
    public function divide($a, $b);
} 