String SplashTime()
{
    String time = "";
    DateTime now = rtc.now(); 
    time = ""+String(now.hour())  +":"
           ""+String(now.minute())+":"
           ""+String(now.second());

    return time;
}