<?php
namespace controllers;

use config\Conn;
use model\Role;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RoleController
 *
 * @author esteb
 */
class RoleController extends Conn{
    
    public function getAll() {

        $query = "SELECT r.idRole, r.roleName FROM Role r ";
        $resultado = mysqli_query($this->conn(), $query);
        $arrayFinal = array();
        while ($row = mysqli_fetch_array($resultado,MYSQLI_NUM)) {
            $objRole = new Role();
            $objRole->setIdRole($row[0]);
            $objRole->setRoleName($row[1]);

            $arrayFinal[$row[0]] = $objRole->toString();
        }
        return json_encode($arrayFinal);
    }

    public function getById($id){
        
        $query = "SELECT r.idRole, r.roleName FROM Role r WHERE idRole = $id";
        $resultado = mysqli_query($this->conn(), $query);
        $arrayFinal = array();
        while ($row = mysqli_fetch_array($resultado,MYSQLI_NUM)) {
            $objRole = new Role();
            $objRole->setIdRole($row[0]);
            $objRole->setRoleName($row[1]);

            $arrayFinal[$row[0]] = $objRole->toString();
        }
        return json_encode($arrayFinal);
    }
    public function delete($id) {
        $link = $this->conn();
        $query = "DELETE FROM Role WHERE idRole = $id";
        mysqli_query($link, $query);
        if(mysqli_affected_rows($link)==1){
            return json_encode("True");
        }else{
            return json_encode("False");
        }
        
    }
      public function create(Role $objRoleModel){
        $name= $objRoleModel->getRoleName();
        $link = $this->conn();
        $query = "INSERT INTO Role(roleName) VALUES ('$name') ";
        mysqli_query($link, $query);
        if(mysqli_affected_rows($link)==1){
            return json_encode("Se ha realizado el registro con exito, filas afectadas 1");
        }else{
            return json_encode("No se ha realizado ningun registro, filas afectadas 0 ");
        }
    }
    public function update(Role $objRoleModel){
        $name= $objRoleModel->getRoleName();
        $id = $objRoleModel->getIdRole();
        $link = $this->conn();
        $query = "UPDATE Role SET roleName= '$name'  WHERE idRole = $id";
        mysqli_query($link, $query);
        if(mysqli_affected_rows($link)==1){
            return json_encode("Se ha realizado el registro con exito, filas afectadas 1");
        }else{ 
            return json_encode("No se ha realizado ningun registro, filas afectadas 0 ");
        }
    }
}
