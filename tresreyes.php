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
 <br> <center><h1>Tres Reyes Island</h1></center><br>
   <div class="box"> <br>
    <div class= "pic"><br><br><br><br><br><br>
      <img src="f.webp">
    </div>
    <div class="info">
      
      <?php
     echo "<p>    Tres Reyes Islands is among the best tourist spots in Marinduque situated off the southwest coasts of the mainland. The name of the islands were derived from the Three Kings: Gaspar, Melchor and Baltazar Islands which comprises the Tres Reyes Islands. 

      Gaspar Island is the biggest and only with a short stretch of white sand beach where cottages are available. Melchor Island is mostly covered with trees with steep cliffs while Baltazar Island is the most famous dive site teeming with beautiful corals and wide variety of marine life. Island hopping can be organized in the resorts on the mainland.
      <br><br>
      Location: Gasan, Marinduque.
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
