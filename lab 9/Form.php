<!DOCTYPE html>
<html>
<style>
th,td {
  padding: 5px;
}
</style>
<body>

<h2>Student List : </h2>

<form action=""> 
  <select name="student" onchange="showStudent(this.value)">
    <option value="">Select a Student:</option>
    <option value="19-39302-1">19-39302-1</option>
    <option value="20-44444-1">20-44444-1</option>
  </select>
</form>
<br>
<div id="hint">Student Info.......</div>
<script src="Ajexfun.js"></script>
</body>
</html>