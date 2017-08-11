void SendToServer(String data)
{
	String cmd = "AT+CIPSTART=4,\"TCP\",\""+server+"\","+port;
	String url = "/CongoMoney/src/App/php/operations.php?"+data+"";
	String cmdGET = "GET " + url + " HTTP/1.1\r\n"+
	"Host: "+server+"\r\nUser-Agent: Serial_HTTP_Client\r\nConnection: close\r\n\r\n";

	PrintLcd(0, 0, "                ");
	PrintLcd(0, 1, "                ");

	PrintLcd(0, 0, "Sending to");
	PrintLcd(0, 1, "Server ...");

	SendData(cmd, 500, DEBUG);
	SendData("AT+CIPSEND=4,"+String(cmdGET.length()), 10, DEBUG);
	SendData(cmdGET+"\r\n\r\n", 500, DEBUG);
	SendData("AT+CIPCLOSE=5",   500, DEBUG);
	SendData("AT+CIPSTATUS",    500, DEBUG);
	SendData("AT",              500, DEBUG);

	SendSms("+243994802444", cost);

	PrintLcd(1, 0, "Access Granted");
	PrintLcd(0, 1, "................");
	delay(500);
}