function updateClock ( )
{
  var currentTime = new Date ( );
  
  var currentMonth = currentTime.getMonth( ); 
  //Convert the month component to text month
  currentMonth = ( currentMonth == 0 ) ? "Jan" : currentMonth;
  currentMonth = ( currentMonth == 1 ) ? "Feb" : currentMonth;
  currentMonth = ( currentMonth == 2 ) ? "Mar" : currentMonth;
  currentMonth = ( currentMonth == 3 ) ? "Apr" : currentMonth;
  currentMonth = ( currentMonth == 4 ) ? "May" : currentMonth;
  currentMonth = ( currentMonth == 5 ) ? "Jun" : currentMonth;
  currentMonth = ( currentMonth == 6 ) ? "Jul" : currentMonth;
  currentMonth = ( currentMonth == 7 ) ? "Aug" : currentMonth;
  currentMonth = ( currentMonth == 8 ) ? "Sept" : currentMonth;
  currentMonth = ( currentMonth == 9 ) ? "Oct" : currentMonth;
  currentMonth = ( currentMonth == 10) ? "Nov" : currentMonth;
  currentMonth = ( currentMonth == 11) ? "Dec" : currentMonth;
  
  var currentDate = currentTime.getDate( );
  var currentYear = currentTime.getFullYear( );
  var currentHours = currentTime.getHours ( );
  var currentMinutes = currentTime.getMinutes ( );
  var currentSeconds = currentTime.getSeconds ( );

  // Pad the minutes and seconds with leading zeros, if required
  currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;
  currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;

  // Choose either "AM" or "PM" as appropriate
  var timeOfDay = ( currentHours < 12 ) ? "AM" : "PM";

  // Convert the hours component to 12-hour format if needed
  currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;

  // Convert an hours component of "0" to "12"
  currentHours = ( currentHours == 0 ) ? 12 : currentHours;

  // Compose the string for display
  var currentTimeString = currentDate + " " + currentMonth + " " + currentYear + "\xa0\xa0" + currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;

  // Update the time display
  document.getElementById("clock").firstChild.nodeValue = currentTimeString;
}