<?php
namespace ImonesApp;
class Programmer extends Employees{
    public function __construct($fName, $lName, $asmKodas, $telNum) {
        $this->fName = $fName;
        $this->lName = $lName;
        $this->asmKodas = $asmKodas;
        $this->telNum = $telNum;
    }
    public function setFirstName($fName)
    {
        $this-> fName = $fName;
    }
    public function setLastName($lName)
    {
        $this-> lName = $lName;
    }
    public function setAsmName($asmKodas)
    {
        $this-> asmKodas = $asmKodas;
    }
    public function setTelNum($telNum)
    {
        $this-> telNum = $telNum;
    }

    public function getFirstName()
    {
        return $this->fName;
    }

    public function getLastName()
    {
        return $this->lName;
    }

    public function getAsmKodas()
    {
        return $this->asmKodas;
    }

    public function getTelNum()
    {
        return $this->telNum;
    }
    public function showDev(){
        return[
            $this->fName,
            $this->lName,
            $this->asmKodas,
            $this->telNum
        ];
    }
}