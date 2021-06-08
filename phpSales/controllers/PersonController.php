<?php
namespace controllers;

use config\Conn;
use model\Person;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PersonController
 *
 * @author esteb
 */
class PersonController extends Conn{
    
    public function getAll() {

        $query = "SELECT p.idPerson, p.documentPerson, p.Role_idRole, p.namePerson, p.address, p.phoneNumber, p.documentType, p.passwordPerson, p.emailPerson FROM Person p ";
        $resultado = mysqli_query($this->conn(), $query);
        $arrayFinal = array();
        while ($row = mysqli_fetch_array($resultado,MYSQLI_NUM)) {
            $objPerson = new Person();
            $objPerson->setIdPerson($row[0]);
            $objPerson->setDocumentPerson($row[1]);
            $objPerson->setRole_idRole($row[2]);
            $objPerson->setNamePerson($row[3]);
            $objPerson->setAddress($row[4]);
            $objPerson->setPhoneNumber($row[5]);
            $objPerson->setDocumentType($row[6]);
            $objPerson->setPasswordPerson($row[7]);
            $objPerson->setEmailPerson($row[8]);

            $arrayFinal[$row[0]] = $objPerson->toString();
        }
        return json_encode($arrayFinal);
    }

   public function getById($id){
        
        $query = "SELECT p.idPerson, p.documentPerson, p.Role_idRole, p.namePerson, p.address, p.phoneNumber, p.documentType, p.passwordPerson, p.emailPerson FROM Person p WHERE idPerson = $id";
        $resultado = mysqli_query($this->conn(), $query);
        $arrayFinal = array();
        while ($row = mysqli_fetch_array($resultado,MYSQLI_NUM)) {
            $objPerson = new Person();
            $objPerson->setIdPerson($row[0]);
            $objPerson->setDocumentPerson($row[1]);
            $objPerson->setRole_idRole($row[2]);
            $objPerson->setNamePerson($row[3]);
            $objPerson->setAddress($row[4]);
            $objPerson->setPhoneNumber($row[5]);
            $objPerson->setDocumentType($row[6]);
            $objPerson->setPasswordPerson($row[7]);
            $objPerson->setEmailPerson($row[8]);

            $arrayFinal[$row[0]] = $objPerson->toString();
        }
        return json_encode($arrayFinal);
    }
    public function delete($id) {
        $link = $this->conn();
        $query = "DELETE FROM Person WHERE idPerson = $id";
        mysqli_query($link, $query);
        if(mysqli_affected_rows($link)==1){
            return json_encode("True");
        }else{
            return json_encode("False");
        }
        
    }
      public function create(Person $objPersonModel){
        $docume = $objPersonModel->getDocumentPerson();
        $RolId = $objPersonModel->getRole_idRole();
        $name = $objPersonModel->getNamePerson();
        $address = $objPersonModel->getAddress();
        $phone = $objPersonModel->getPhoneNumber();
        $documty = $objPersonModel->getDocumentType();
        $password = $objPersonModel->getPasswordPerson();
        $email = $objPersonModel->getEmailPerson();
        $link = $this->conn();
        $query = "INSERT INTO Person(documentPerson, Role_idRole, namePerson, address, phoneNumber, documentType, passwordPerson, emailPerson) VALUES ('$docume' , '$RolId', '$name', '$address', '$phone', '$documty', '$password', '$email') ";
        mysqli_query($link, $query);
        if(mysqli_affected_rows($link)==1){
            return json_encode("Se ha realizado el registro con exito, filas afectadas 1");
        }else{
            return json_encode("No se ha realizado ningun registro, filas afectadas 0 ");
        }
    }
    public function update(Person $objPersonModel){
        $docu= $objPersonModel->getDocumentPerson();
        $RolId = $objPersonModel->getRole_idRole();
        $name = $objPersonModel->getNamePerson();
        $address = $objPersonModel->getAddress();
        $phone = $objPersonModel->getPhoneNumber();
        $documty = $objPersonModel->getDocumentType();
        $password = $objPersonModel->getPasswordPerson();
        $email = $objPersonModel->getEmailPerson();
        $idPerson= $objPersonModel->getIdPerson();
        $link = $this->conn();
        $query = "UPDATE Person SET documentPerson= '$docu' , Role_idRole = '$RolId', namePerson = '$name', address = '$address', phoneNumber = '$phone', documentType = '$documty', passwordPerson = '$password', emailPerson = '$email'  WHERE idPerson = $idPerson ";
        mysqli_query($link, $query);
        if(mysqli_affected_rows($link)==1){
            return json_encode("Se ha realizado el registro con exito, filas afectadas 1");
        }else{ 
            return json_encode("No se ha realizado ningun registro, filas afectadas 0 ");
        }
    }
}
