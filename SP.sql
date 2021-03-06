CREATE PROCEDURE SP_C_CLIENT(IN UID VARCHAR(30), IN FIRST_NAME VARCHAR(30), IN LAST_NAME VARCHAR(30), IN GENDER VARCHAR(10), IN DOB DATE, IN PHONE VARCHAR(13), IN ADDRESS VARCHAR(255))

    BEGIN
        INSERT INTO client (UID, FIRST_NAME, LAST_NAME, GENDER, DOB, PHONE, ADDRESS) 
        VALUES (UID, FIRST_NAME, LAST_NAME, GENDER, DOB, PHONE, ADDRESS);
    END;

CREATE PROCEDURE SP_U_CLIENT(IN UID VARCHAR(30), IN FIRST_NAME VARCHAR(30), IN LAST_NAME VARCHAR(30), IN GENDER VARCHAR(10), IN DOB DATE, IN PHONE VARCHAR(13), IN ADDRESS VARCHAR(255))

    BEGIN
        UPDATE client 
        SET FIRST_NAME = FIRST_NAME, LAST_NAME = LAST_NAME, GENDER = GENDER, DOB = DOB, PHONE = PHONE, ADDRESS = ADDRESS         
        WHERE UID = UID;
    END;

CREATE PROCEDURE SP_D_CLIENT(IN UID VARCHAR(30))

    BEGIN
        DELETE FROM client 
        WHERE UID = UID;
    END;

CREATE PROCEDURE SP_C_RETRAIT(IN UID_RET_CL VARCHAR(30), IN ID_RET_ACC VARCHAR(30), IN AMOUNT_RET FLOAT(255, 2))

    BEGIN
        INSERT INTO retrait(UID_RET_CL, ID_RET_ACC, AMOUNT_RET) 
        VALUES (UID_RET_CL, ID_RET_ACC, AMOUNT_RET);
    END;

CREATE PROCEDURE SP_U_RETRAIT(IN ID_RET INT(11),IN UID_RET_CL VARCHAR(30), IN ID_RET_ACC VARCHAR(30), IN AMOUNT_RET FLOAT(255, 2))

    BEGIN
        UPDATE retrait 
        SET UID_RET_CL = UID_RET_CL, ID_RET_ACC = ID_RET_ACC, AMOUNT_RET = AMOUNT_RET 
        WHERE ID_RET = ID_RET;
    END;

CREATE PROCEDURE SP_D_RETRAIT(IN ID_RET INT(11))

    BEGIN
        DELETE FROM retrait 
        WHERE ID_RET = ID_RET;
    END;

CREATE PROCEDURE SP_C_DEPOT(IN UID_DEP_CL VARCHAR(30), IN ID_DEP_ACC VARCHAR(30), IN AMOUNT_DEP FLOAT(255, 2))

    BEGIN
        INSERT INTO depot(UID_DEP_CL, ID_DET_ACC, AMOUNT_DEP) 
        VALUES (UID_DEP_CL, ID_DET_ACC, AMOUNT_DEP);
    END;

CREATE PROCEDURE SP_U_DEPOT(IN ID_DEP INT(11),IN UID_DEP_CL VARCHAR(30), IN ID_DEP_ACC VARCHAR(30), IN AMOUNT_DEP FLOAT(255, 2))

    BEGIN
        UPDATE depot 
        SET UID_DEP_CL = UID_DEP_CL, ID_DEP_ACC = ID_DET_ACC, AMOUNT_DEP = AMOUNT_DEP 
        WHERE ID_DEP = ID_DEP;
    END;

CREATE PROCEDURE SP_D_DEPOT(IN ID_DEP INT(11))

    BEGIN
        DELETE FROM depot 
        WHERE ID_DEP = ID_DEP;
    END;

CREATE PROCEDURE SP_C_ACCOUNT(IN ID_ACC VARCHAR(30),IN BALANCE FLOAT(255, 2))

    BEGIN
        INSERT INTO account(ID_ACC, BALANCE) 
        VALUES (ID_ACC, BALANCE);
    END;

CREATE PROCEDURE SP_U_ACCOUNT(IN ID_ACC VARCHAR(30),IN BALANCE FLOAT(255, 2))

    BEGIN
        UPDATE account 
        SET BALANCE = BALANCE
        WHERE ID_ACC = ID_ACC;
    END;

CREATE PROCEDURE SP_D_ACCOUNT(IN ID_ACC VARCHAR(30))

    BEGIN
        DELETE FROM account 
        WHERE ID_ACC = ID_ACC;
    END;