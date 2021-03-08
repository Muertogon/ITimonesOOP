<?php
namespace ImonesApp;
abstract class Employees{
    public $fName;
    public $lName;
    public $asmKodas;
    public $telNum;

    public function __constructor($fName, $lName, $asmKodas, $telNum){
        $this-> fName=$fName;
        $this-> lName=$lName;
        $this-> asmKodas=$asmKodas;
        $this-> telNum=$telNum;
    }
    abstract public function setFirstName($fName);
    abstract public function setLastName($lName);
    abstract public function setAsmName($asmKodas);
    abstract public function setTelNum($telNum);
    abstract public function getFirstName();
    abstract public function getLastName();
    abstract public function getAsmKodas();
    abstract public function getTelNum();
}