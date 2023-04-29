<html>

<head>
    <title>
    ArchiConnect
</title>
<link rel="stylesheet" href="../Design/design.css">
</head>

<body style= "color : white;">
<?php //include 'layouts/header.php'; ?>
<br>
<?php   
$cookie_name = "last_visit";
$cookie_expire = time() + (60 * 60 * 24 * 30);
if(isset($_COOKIE[$cookie_name])) {
echo "Welcome back! Your last visit was " . $_COOKIE[$cookie_name] . ".";
} 
else { echo "Welcome! This is your first visit.";
}
setcookie($cookie_name, date("Y-m-d H:i:s"), $cookie_expire);?>
<h1>
    Home Page
</h1>

<a href="ADMIN/view/login.php">Admin</a>
<a href="customer/view/login.php">Customer</a>
<a href="Architect/view/login.php">Architect</a>
<br>
<br>
<br>
<hr>
</hr>
<table>
<tr>
     <td>
     <a href="order.php"> <img src='assets/Archidesign.jpg' width=300 height=300 alt="ArchiDesign-1">
        <figcaption>Design for sale.Price :50lac</figcaption></a>
    </td>
    <td>
    <a href="order.php"><img src='assets/Archidesign2.jpg' width=300 height=300 alt="ArchiDesign-2">
        <figcaption>Design for sale.Price :46lac</figcaption></a>
    </td>
    <td>
    <a href="order.php"> <img src='assets/Archidesign3.jpg' width=300 height=300 alt="ArchiDesign-3">
        <figcaption>Design for sale.Price :15lac</figcaption></a>
    </td>
    <td>
    <a href="order.php"> <img src='assets/Archidesign4.jpg' width=300 height=300 alt="ArchiDesign-3">
        <figcaption>Design for sale.Price :29lac</figcaption></a>
    </td>
    <td>
    <a href="order.php"> <img src='assets/Archidesign5.jpg' width=300 height=300 alt="ArchiDesign-4">
        <figcaption>Design for sale.Price :29.5lac</figcaption></a>
    </td>
</tr>
<tr>
    <td>
        <br>
        <hr>
    </td>
    <td>
        <br>
        <hr>
    </td>
    <td>
        <br>
        <hr>
    </td> 

</tr>
<tr>
     <td>
     <a href="order.php">  <img src='assets/Archidesign6.jpg' width=300 height=300 alt="ArchiDesign-5">
        <figcaption>Interior design for sale.Price :15.5lac</figcaption></a>
    </td>
    <td>
    <a href="order.php">  <img src='assets/duplexdesign1.jpg' width=300 height=300 alt="ArchiDesign-6">
        <figcaption>Interior design for sale.Price :19lac</figcaption></a>
    </td>
</tr>



</table>
</body>

<?php //include 'layouts/footer.php'; ?>
<html>

