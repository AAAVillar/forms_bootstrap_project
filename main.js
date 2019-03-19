
/* this is how you leave multi-line comments in javascript 
   don't you know? */ 
 function _(x){
	return document.getElementById(x);
};
var myDate = new Date();

_('dateDemo').innerHTML = "Today is " + myDate.toDateString() + "<br><sub> courtesy of javascript</sub>"; 