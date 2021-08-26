<?php

class Supervisor extends Employee
{
    
    private $employees;
    
    function _construct($employeeId, $firstName, $lastName, $employees){
        
        parent:: _construct($employeeId, $firstName, $lastName);
        $this->employees = $employees;
    }
        
    public function getEmployees()
    {
        return $this->employees;
    }

    public function setEmployees($employees)
    {
        $this->employees = $employees;
    }   
}
?>