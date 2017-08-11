void SendSms(String num, int cost)
{
	String txt = "CONGO MONEY SYSTEM ALERT";
	txt += "\n";
	txt += "Vous venez d'etre debité de: "+cost;
	txt += "\n";
	txt += "Le "+PrintTime();

    gsm.println("AT+CMGF=1");
    delay(100);
    gsm.println("AT+CMGS=\""+num+"\"");
    delay(100);
    gsm.println(txt);
    delay(100);
    gsm.println((char)26);
    delay(100);
    gsm.println();
}