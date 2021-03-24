function updateTime(){
    var dt = new Date();
    document.getElementById("datetime").innerHTML = dt.toLocaleString();
   };
setInterval(updateTime, 1);
// updateTime();
function dayTime(){
var d = new Date();
console.log(d.getDay());
var dayNames = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
document.getElementById("datetime").innerHTML = dayTime();
// console.log(dayNames[d.getDay()]);
}


