<?php
class fund
{
    public $fund;
    function __construct($initialFund = 0)
    {
        $this->fund = $initialFund;
    }
    public function addFund($money)
    {
        $this->fund += $money;
    }
    public function deductFund($money)
    {
        $this->fund -= $money;
    }
}
