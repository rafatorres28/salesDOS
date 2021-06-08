<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace model;
/**
 * Description of Provider
 *
 * @author esteb
 */
class Provider {
    private $idProvider;
    private $phoneNumber;
    private $providerName;
    private $address;
    private $NIT;


    public function getIdProvider() {
        return $this->idProvider;
    }

    public function getPhoneNumber() {
        return $this->phoneNumber;
    }

    public function getProviderName() {
        return $this->providerName;
    }

    public function setIdProvider($idProvider): void {
        $this->idProvider = $idProvider;
    }

    public function setPhoneNumber($phoneNumber): void {
        $this->phoneNumber = $phoneNumber;
    }

    public function setProviderName($providerName): void {
        $this->providerName = $providerName;
    }
    
    public function getAddress() {
        return $this->address;
    }

    public function getNIT() {
        return $this->NIT;
    }

    public function setAddress($address): void {
        $this->address = $address;
    }

    public function setNIT($NIT): void {
        $this->NIT = $NIT;
    }

    
    public function toString(){
        $arrayR = array("idProvider"=> $this->getIdProvider(),
            "phoneNumber"=> $this->getPhoneNumber(),
            "providerName"=> $this->getProviderName(),
            "address"=> $this->getAddress(),
            "NIT"=> $this->getNIT());
        return $arrayR;
    }
}
