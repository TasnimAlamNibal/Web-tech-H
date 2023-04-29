function Customerorder()
{
 setInterval (function()
 {
 const xvalue = new XMLHttpRequest();
 xvalue.onreadystatechange = function()
 {
 if (this.readyState == 4 && this.status == 200)
 {
 const data = JSON.parse(this.responseText);
 let t = "<tr>";

 t += "<th>";
 t += "No.";
 t += "</th>";

 t += "<th>";
 t += "Notification";
 t += "</th>";


 t += "</tr>"
  for (let i = 0; i < data.length; i++)
 {
 t += "<tr>";

 t += "<td>";
 t += i+1;
 t += "</td>";


t += "<td>";
 t += data[i].orderid;
 t += "</td>"; 



 t += "</tr>"
 }

 document.getElementById("table08").innerHTML = t;
 }
 };
 xvalue.open("GET", "../Control/Confirmorder.php");
 xvalue.send();
 },100);

}
Customerorder();