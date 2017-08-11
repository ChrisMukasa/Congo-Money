void SendUID()
{
	if (!rfid.PICC_IsNewCardPresent() || !rfid.PICC_ReadCardSerial())
  {
    Splash();
    return;
  }
  else
  {
    MFRC522::PICC_Type piccType = rfid.PICC_GetType(rfid.uid.sak);

    if (piccType != MFRC522::PICC_TYPE_MIFARE_MINI &&
      piccType != MFRC522::PICC_TYPE_MIFARE_1K &&
      piccType != MFRC522::PICC_TYPE_MIFARE_4K) 
    {
      Serial.println(F("Your tag is not of type MIFARE Classic."));
      PrintLcd(0, 0, "Invalid Card");
      PrintLcd(0, 1, "Try Again ...");

      Splash();
      return;
    }

    String strID = "";

    for (byte i = 0; i < 4; i++) 
    {
      strID += (rfid.uid.uidByte[i] < 0x10 ? "0" : "") + String(rfid.uid.uidByte[i], DEC) + (i!=3 ? "-" : "");
    }
    
    strID.toUpperCase();

    if(strID != "")
     {
      Serial.println(strID);

      PrintLcd(0, 0, "Card ID is: ");
      PrintLcd(0, 1, strID);
      SendToServer("flag=insert_retrait&uid_ret_cl="+strID+"&amount_ret="+cost);
     }

    rfid.PICC_HaltA();
    rfid.PCD_StopCrypto1();   
  }
} 

