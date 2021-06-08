<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace model;
/**
 * Description of Person
 *
 * @author esteb
 */
class Person {
    private $idPerson;
    private $documentPerson;
    private $Role_idRole;
    private $namePerson;
    private $address;
    private $phoneNumber;
    private $documentType;
    private $passwordPerson;
    private $emailPerson;
    
    public function getIdPerson() {
        return $this->idPerson;
    }

    public function getDocumentPerson() {
        return $this->documentPerson;
    }

    public function getRole_idRole() {
        return $this->Role_idRole;
    }

    public function getNamePerson() {
        return $this->namePerson;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getPhoneNumber() {
        return $this->phoneNumber;
    }

    public function getDocumentType() {
        return $this->documentType;
    }

    public function getPasswordPerson() {
        return $this->passwordPerson;
    }

    public function getEmailPerson() {
        return $this->emailPerson;
    }

    public function setIdPerson($idPerson): void {
        $this->idPerson = $idPerson;
    }

    public function setDocumentPerson($documentPerson): void {
        $this->documentPerson = $documentPerson;
    }

    public function setRole_idRole($Role_idRole): void {
        $this->Role_idRole = $Role_idRole;
    }

    public function setNamePerson($namePerson): void {
        $this->namePerson = $namePerson;
    }

    public function setAddress($address): void {
        $this->address = $address;
    }

    public function setPhoneNumber($phoneNumber): void {
        $this->phoneNumber = $phoneNumber;
    }

    public function setDocumentType($documentType): void {
        $this->documentTypee = $documentType;
    }

    public function setPasswordPerson($passwordPerson): void {
        $this->passwordPerson = $passwordPerson;
    }

    public function setEmailPerson($emailPerson): void {
        $this->emailPerson = $emailPerson;
    }

    
    public function toString(){
        $arrayR = array("idPerson"=> $this->getIdPerson(),
            "documentPerson"=> $this->getDocumentPerson(),
            "Role_idRole"=> $this->getRole_idRole(),
            "namePerson"=> $this->getNamePerson(),
            "address"=> $this->getAddress(),
            "phoneNumber"=> $this->getPhoneNumber(),
            "documentType"=> $this->getDocumentType(),
            "passwordPerson"=> $this->getPasswordPerson(),
            "emailPerson"=> $this->getEmailPerson());
        return $arrayR;
    }
}
