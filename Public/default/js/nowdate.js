var week,day,month,year,currenty,currentm
 function initArray(){
 this.length = initArray.arguments.length
 for (var i = 0; i < this.length; i++)
 this[i+1] = initArray.arguments[i]
 }
 var LastModDate = new Date();
 var WeekArray = new initArray("星期日","星期一","星期二","星期三","星期四","星期五","星期六");
 var MonthArray = new initArray("1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月");
 day = LastModDate.getDate() +"日";
 year = LastModDate.getFullYear() +"年";
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