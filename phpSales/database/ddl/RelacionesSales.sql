ALTER TABLE Product
  ADD CONSTRAINT fk_Product_Provider1
    FOREIGN KEY (Provider_idProvider)
    REFERENCES salesdb.Provider (idProvider)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  ADD CONSTRAINT fk_Product_Enterprise1
    FOREIGN KEY (Enterprise_idEnterprise)
    REFERENCES salesdb.Enterprise (idEnterprise)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  ADD CONSTRAINT fk_Product_productType1
    FOREIGN KEY (productType_idproductType)
    REFERENCES salesdb.productType (idproductType)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION;

ALTER TABLE Tax_Product
  ADD CONSTRAINT fk_Tax_Product_Product
    FOREIGN KEY (Product_idProduct)
    REFERENCES salesdb.Product (idProduct)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  ADD CONSTRAINT fk_Tax_Product_Tax1
    FOREIGN KEY (Tax_idTax)
    REFERENCES salesdb.Tax (idTax)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION;

ALTER TABLE Person
  ADD CONSTRAINT fk_Person_Role1
    FOREIGN KEY (Role_idRole)
    REFERENCES salesdb.Role (idRole)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION;

ALTER TABLE Ticket
  ADD CONSTRAINT fk_Ticket_Person1
    FOREIGN KEY (Person_idPerson)
    REFERENCES salesdb.Person (idPerson)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION;

ALTER TABLE Ticket_Tax_Product
ADD CONSTRAINT fk_Ticket_Tax_Product_Tax_Product1
    FOREIGN KEY (Tax_Product_idTax_Product)
    REFERENCES salesdb.Tax_Product (idTax_Product)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  ADD CONSTRAINT fk_Ticket_Tax_Product_Ticket1
    FOREIGN KEY (Ticket_idTicket)
    REFERENCES salesdb.Ticket (idTicket)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION;

