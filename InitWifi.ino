void InitWifi()
{
	SendData("AT+RST",     3000, DEBUG);
	SendData("AT",         1000, DEBUG);

	lcd.clear();
	PrintLcd(0, 0, "Reinitialising..");
	PrintLcd(0, 1, "Reloading");

	SendData("AT+CWMODE=1",1000, DEBUG);
	SendData("AT+CIPSTA=\""+ip+"\",\""+broad+"\",\""+mask+"\"",2000,DEBUG);

	lcd.clear();
	PrintLcd(0, 0, "Changing Mode");
	PrintLcd(0, 1, "Set Static ip");

	SendData("AT+CWLAP",   3000, DEBUG);
	SendData("AT+CWJAP=\""+ssid+"\",\""+pswd+"\"",2000, DEBUG);
	SendData("AT+CIPMUX=1",1000, DEBUG);

	lcd.clear();
	PrintLcd(0, 0, "Listing Access P");
	PrintLcd(0, 1, "Joining Access P");

	SendData("AT+CIFSR",   1000, DEBUG);
	SendData("AT+PING=\""+server+"\"",3000,DEBUG);

	lcd.clear();
	PrintLcd(0, 0, "IP is:");
	PrintLcd(0, 1, ip);

	delay(2000);
	lcd.clear();
	PrintLcd(0, 0, "Initialisation");
	PrintLcd(0, 1, "Done");

	delay(2000);
	lcd.clear();
}