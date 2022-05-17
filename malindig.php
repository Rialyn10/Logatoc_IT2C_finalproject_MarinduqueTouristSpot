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
 <br> <center><h1>Mount Malindig</h1></center><br>
   <div class="box"> <br>
    <div class= "pic"><br><br><br><br><br><br>
      <img src="h.jpg">
    </div>
    <div class="info">
      
      <?php 
    echo "<p>   Mount Malindig is one of the beautiful tourist spots in Marinduque, a potentially active volcano standing 1,157 meters above sea level. It is a popular mountain climbing destination of the province categorized as an easy to moderate climb. The mountain features grasslands, farmlands, mossy and closed canopy forests where different species of wild orchids and endemic wildlife can be found. 

    The summit is mostly covered with verdant trees but along the trails, there are vantage points offering beautiful views of the coastlines, rolling mountains, Tres Reyes Islands, Elephant Island and a panorama encompassing Mindoro, Verde Island and Southern Luzon.
    <br><br>
    Location: Buenavista and Torrijos, Marinduque.
      
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
