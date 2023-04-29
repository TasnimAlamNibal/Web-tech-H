function showStudent(str) 
{
  if (str == "") 
  {
    document.getElementById("hint").innerHTML = "Select student...";
    return;
  }
  const xvalue = new XMLHttpRequest();
  xvalue.onload = function() 
  {
    document.getElementById("hint").innerHTML = this.responseText;
  }
  xvalue.open("GET", "database.php?q="+str);
  xvalue.send();
}