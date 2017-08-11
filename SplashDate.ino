String SplashDate()
{
    String date = "";
    DateTime now = rtc.now(); 
    date = ""+String(weekDay[now.dayOfWeek()])+" "
           ""+String(now.date())  +"/"
           ""+String(now.month()) +"/"
           ""+String(now.year());

    return date;
}