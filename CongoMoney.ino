#include <LiquidCrystal.h> 
#include <SoftwareSerial.h>
#include "Sodaq_DS3231.h"
#include <SPI.h>
#include <Wire.h>
#include <MFRC522.h>

#define RST_PIN 5
#define SS_PIN 6
#define DEBUG true
#define led_red 12
#define led_gre 11
#define pin_buz 22

MFRC522 rfid(SS_PIN, RST_PIN);

MFRC522::MIFARE_Key key;

char weekDay[][4] = {"Lun", "Mar", "Mer", "Jeu", "Ven", "Sam","Dim" };
DateTime dt(2017, 04, 15, 12, 53, 0, 5);

String ssid    = "Smart House";
String pswd     = "chrisM1991";
String ip      = "192.168.1.200";
String broad   = "192.168.1.1";
String mask    = "255.255.255.0";
String server  = "192.168.1.150";

const int port = 80;
int cost = 300;

LiquidCrystal lcd(31, 33, 35, 37, 39, 41); 

SoftwareSerial gsm(9, 10); // RX, TX

void setup() 
{
	InitSystem();
    InitLCD();
    InitWifi();	
}

void loop() 
{
	SendUID();
}




	
