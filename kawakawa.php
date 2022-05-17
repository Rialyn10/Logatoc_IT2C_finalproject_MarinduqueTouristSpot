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
 <br> <center><h1> Kawa-kawa Falls</h1></center><br>
   <div class="box"> <br>
    <div class= "pic"><br><br><br><br><br><br>
      <img src="i.jpg">
    </div>
    <div class="info">
      
      <?php
    echo  "<p>       
        Kawa-kawa means basin because of its basin-like appearance. There are actually 2 basins, one from the top and the other at the lower part. Because there is a light rainfall before we went there, the water became a little dark but rest assured that it is clean since there are caretakers in the area and the water is flowing. 

        Kawa-Kawa falls is only around 15 feet high with a circular and deep catch basin. Try climbing the cliff and plunge or dive your way to the pool. Just make sure you know how to swim and you hit the deep part. The crystal-clear and cold waters will surely give you that soothing experience you’re after. Swim around the pool as you relish the lush surroundings.
        <br> <br>
        Location: Bangcuangan, Sta. Cruz, Marinduque.
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
