var week,day,month,year,currenty,currentm
 function initArray(){
 this.length = initArray.arguments.length
 for (var i = 0; i < this.length; i++)
 this[i+1] = initArray.arguments[i]
 }
 var LastModDate = new Date();
 var WeekArray = new initArray("������","����һ","���ڶ�","������","������","������","������");
 var MonthArray = new initArray("1��","2��","3��","4��","5��","6��","7��","8��","9��","10��","11��","12��");
 day = LastModDate.getDate() +"��";
 year = LastModDate.getFullYear() +"��";
 week = WeekArray[(LastModDate.getDay()+1)];
 month = MonthArray[(LastModDate.getMonth()+1)];
 currenty = LastModDate.getFullYear();
 currentm = LastModDate.getMonth()+1;
 function CurentTime(){
 var now = new Date();
 var hh = now.getHours();
 var mm = now.getMinutes();
 var ss = now.getTime() % 60000;
 ss = (ss - (ss % 1000)) / 1000;
 var clock = hh+':';
 if (mm < 10) clock += '0';
 clock += mm+':';
 if (ss < 10) clock += '0';
 clock += ss;
 return(clock);
 }
 function refreshCalendarClock(){
 document.getElementById("tt").innerHTML = CurentTime();
 }