void InitLCD()
{
	lcd.begin(16,2);
    lcd.clear();

    PrintLcd(3, 0, "SMART BUSS");
	PrintLcd(0, 1, "Initialising...");
}