<?php
interface digram
{
    function Details();
}

class calcSalary implements digram
{
    private $departments = [
        'chemistry' => 50,
        'physical' => 60,
        'network' => 70,
        'it' => 80,
        'frontEndDeveloper' => 90,
        'backEndDeveloper' => 100
    ];
    private $department;
    private $hourCost;
    private $hour;
    private $totalSalary;
    private $netSalary;
    private $dicount;
    
    public function __construct($department, $hour)
    {
        $this->department = $department;
        $this->hour = $hour;
        $this->calcHourCost();
        $this->TotalSalary();
        $this->discount();
        $this->netSalary();
    }
    private function calcHourCost()
    {
        if ($this->departments[$this->department]) {
            $this->hourCost = $this->departments[$this->department];
        }
    }
    private function TotalSalary()
    {
        $this->totalSalary = $this->hourCost * $this->hour;
    }
    private function discount()
    {
        $this->dicount = ($this->totalSalary * 14) / 100;
    }
    private function netSalary()
    {
        $this->netSalary = $this->totalSalary - $this->dicount;
    }
    public function Details()
    {
        $returnValue = [
            'totalSalary' => $this->totalSalary,
            'netSalary' => $this->netSalary,
            'discount' => $this->dicount
        ];
        return ($returnValue);
    }
}
