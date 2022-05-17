<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resort</title>
</head>
<body class="htips">
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
<link href="style.css" rel="stylesheet">

<body><br><br><div class= "amn"><br><br><br>
 <br> <center><h1>Bathala Cave</h1></center><br>
   <div class="box"> <br>
    <div class= "pic"><br><br><br><br><br><br>
      <img src="g.jpg">
    </div>
    <div class="info">
      
      <?php
     echo "<p>    Bathala Cave is a cave system on the jungle-clad mountain side of Marinduque comprises of 7 caves but only 4 are open for the general public namely: Church, Secret, Python and Cemetery Caves. Church Cave is the biggest cave with stalactites and stalagmites which resembles to the church’s interior.

      Python Cave is known for the pythons resting on the walls and hundreds of big bats at the ceilings. Cemetery Cave is where human bones can be found believed to be the remains of war soldiers. While Secret Cave features plenty of rock formations and unnoticeable exit hole, hence the name.

      <br><br>
      Location: Santa Cruz, Marinduque.
          </p>";
   
     ?>
      
    </body>
    <style>

body{
     background-color: grey;
     background-size: cover;
     background-repeat: no-repeat;
    }

h1{
  color: #232d60;
  align-items: center;

}
    .amn{
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
 
}

.amn .box {
  width: 800px;
  background:transparent;
  margin:15px;
  padding:10px;
  display: flex; 
 
}

.amn .box .pic{
  width:400px;
  float: right;
 
}
.amn .box .pic img{
  width:350px;
  height: 300px;
  float: left;

}
.info{

   color: whitesmoke;
   float: left;
   width: 500px;
   text-align: justify;
   font-size: 18px;
   font-family:Lucida;
   margin-left:20px;
   
}

p{
  color: whitesmoke;
}
    </style>
</html>
