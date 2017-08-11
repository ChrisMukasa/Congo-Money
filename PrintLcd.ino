void PrintLcd(int c, int l, String msg)
{
	lcd.setCursor(c, l);
	lcd.print(msg);
}