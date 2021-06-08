<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace model;
/**
 * Description of Role
 *
 * @author esteb
 */
class Role {
    private $idRole;
    private $roleName;
    
    public function getIdRole() {
        return $this->idRole;
    }

    public function getRoleName() {
        return $this->roleName;
    }

    public function setIdRole($idRole): void {
        $this->idRole = $idRole;
    }

    public function setRoleName($roleName): void {
        $this->roleName = $roleName;
    }

    public function toString(){
        $arrayR = array("idRole"=> $this->getIdRole(),
            "roleName"=> $this->getRoleName());
        return $arrayR;
    }
}
