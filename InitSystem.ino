void InitSystem()
{
	Serial1.begin(115200);
    Serial.begin(115200);
    gsm.begin(19200);
    rtc.begin();
    SPI.begin();
    Wire.begin();
    rfid.PCD_Init();

    gsm.println("AT");
    
    pinMode(led_red, OUTPUT);
    pinMode(led_gre, OUTPUT);
    pinMode(pin_buz, OUTPUT);

    digitalWrite(led_red, HIGH);
}