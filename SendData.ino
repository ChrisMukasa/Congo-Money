String SendData(String cmd, const int timeout, boolean debug)
{
	String response = "";
	Serial1.print(cmd+"\r\n");
	long int time = millis();

	while((time + timeout) > millis())
	{
		while(Serial1.available())
		{
			char c = Serial1.read();
			response += c;
		}
	}
	if(debug)
	{
		Serial.println(response);
	}
        return response;
}