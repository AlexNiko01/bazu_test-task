<?php

class Calc
{
    /**
     * @var int
     */
    private $result = 0;

    /**
     * @param int $var
     * @return int
     */
    public function add(int $var): int
    {
        return $this->result = $this->result + $var;
    }

    /**
     * @param int $var
     * @return int
     */
    public function subtraction(int $var): int
    {
        return $this->result = $this->result - $var;
    }

    /**
     * @param int $var
     * @return int
     */
    public function division(int $var): int
    {
        return $this->result = $this->result * $var;
    }

    /**
     * @param $var
     * @return float|int
     */
    public function multiplication(int $var): int
    {
        return $this->result = $this->result * $var;
    }

    /**
     * @param int $var
     * @return int
     */
    public function round(int $var): int
    {
        return $this->result = round($var);
    }

    /**
     * @return int
     */
    public function getResult(): int
    {
        return $this->result;
    }
}
