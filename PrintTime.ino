String PrintTime() 
{
    String time = "";
    DateTime now = rtc.now(); 
    time = ""+String(weekDay[now.dayOfWeek()])+" "
           ""+String(now.date())  +"/"
           ""+String(now.month()) +"/"
           ""+String(now.year())  +"\n A "
           ""+String(now.hour())  +":"
           ""+String(now.minute())+":"
           ""+String(now.second());

    return time;
}