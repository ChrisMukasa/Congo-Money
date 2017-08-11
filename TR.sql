CREATE TRIGGER TR_UP_ACC_ON_RET
    AFTER INSERT 
    ON retrait
    FOR EACH ROW 
    BEGIN
        SET @MAT    = NEW.ID_RET_ACC;
        SET @AM_RET = NEW.AMOUNT_RET;
        SET @BAL    = (SELECT BALANCE FROM account WHERE ID_ACC = @MAT);
        IF @BAL >= @AM_RET THEN
            UPDATE account 
            SET BALANCE = BALANCE - @AM_RET 
            WHERE ID_ACC = @MAT;
        END IF;
    END;

CREATE TRIGGER TR_UP_ACC_ON_DEP
    AFTER INSERT 
    ON depot 
    FOR EACH ROW 
    BEGIN
        SET @MAT = NEW.ID_DEP_ACC;
        SET @QTE = NEW.AMOUNT_DEP; 
        UPDATE account 
        SET BALANCE = BALANCE + @QTE
        WHERE ID_ACC = @MAT;
    END;


CREATE TRIGGER TR_CLIENT_ACCOUNT 
    AFTER INSERT 
    ON client
    FOR EACH ROW 
    BEGIN
        SET @UID = NEW.UID;
            INSERT INTO account(ID_ACC) 
            VALUES(@UID);
    END;