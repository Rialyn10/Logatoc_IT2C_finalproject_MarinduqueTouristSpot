<!DOCTYPE html>
<html>
  <header>
    <div class="nav">
      <ul class="nav-ul">
              <li class="nav-li"><a href="home.php" >Home</a></li>
              <li class="nav-li"><a href="gallery.php" >Photos</a></li>
             
               <li class="nav-li"><a href="info.php" >Info</a></li>
              <li class="nav-li"><a href="history.php" >History</a></li>
              <li class="nav-li"><a href="reservation.php" >Book</a></li>

          </ul>
      </div>
</header> 
<body >
<link href="style.css" rel="stylesheet">

<div class="main">
<form> <br><br><br>
    <h1 style="color: #f7f7f8; text-align: center; font-size: 50px;"> RESERVATION FORM</h1>
    <br>
<div id="name">
<h2 class="name">Name</h2>
<input class="firstname" type="text" name="first_name" placeholder="First Name, Middle Initial, Last Name">


</div>

<h2 class="name">Email</h2>
<input class="email" type="text" name="email">

<h2 class="name">Spot</h2>
<div class="resto" name="resto">
<select>
    <option value='1'>Maniwaya Island</option>
    <option value='2'>Poctoy White Beach</option>
    <option value='3'>Bagumbayan Cave </option>
    <option value='4'>Malbog Sulfur Spring</option>
    <option value='5'>Mongpong Island</option>
    <option value='6'>Tres Reyes Island</option>
     <option value='7'>Paadjao Falls</option>
     <option value='8'>Bathala Cave</option>
     <option value='9'>Mount Malindig</option>
     <option value='10'>Kawa-kawa Falls</option>
    
        </select> 



<h2 class="name">Check-in <br> Date</h2>
<div class="month" name="month">
<select>
    <option value='1'>January</option>
    <option value='2'>February</option>
    <option value='3'>March</option>
    <option value='4'>April</option>
    <option value='5'>May</option>
    <option value='6'>June</option>
     <option value='7'>July</option>
     <option value='8'>August</option>
     <option value='9'>September</option>
     <option value='10'>October</option>
     <option value='11'>November</option>
     <option value='12'>December</option>
        </select>   
<input class="day" type="text" name="day" placeholder="Day"></div>

<h2 class="name">Time <br> Check</h2>
<input class="innumber" type="text" name="innumber" placeholder="Check-in">
<input class="outnumber" type="text" name="outnumber" placeholder="Check-out">

<h2 class="name">No. of People</h2>
<input class="people" type="number" name="people" placeholder="Adult">

<input class="person" type="number" name="person" placeholder="Child">
<div class="btn">
<center><input type="button" onclick="reset()" value="Cancel"/>
<input type="button" onclick="pop()" value="Submit"/></center>
</div>
</form>
</div>
</body>
<script>
    function pop(){
      alert("Thank You! Your reservation is now being process");
    }
  </script>

  <style>
   body{ 
background-image: url("y.jpg");
background-size:cover;
background-repeat: no-repeat; }
  </style>
</html>
