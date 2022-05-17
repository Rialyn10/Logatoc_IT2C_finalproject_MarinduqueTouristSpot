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
 <br> <center><h1>Bagumbayan Cave</h1></center><br>
   <div class="box"> <br>
    <div class= "pic"><br><br><br><br><br><br> <pp>
      <img src="c.jpg">
    </div>
    <div class="info">
      
      <?php
      echo "<p>  Bagumbungan Cave is one of the best tourist spots in Marinduque, a 1.9-kilometer long cave but it’s not fully explored. The cave is one of the best spelunking destination in the province along with Bathala Cave System. It features amazing stalactites and stalagmites, small waterfalls and diverse underworld creatures. 

      The exciting caving adventure may require physical fitness which visitors may climb, duck, squeeze and nearly crawl with some slippery and steep trails. Visitors may also notice owls, shrimps, crabs, eels and catfishes inside. There are 2 routes available, either finish up to the exit or finish halfway.

       <br/>
       <br/>
      Location: Barangay San Isidro, Santa Cruz, Marinduque.";
          echo "</p>";

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
