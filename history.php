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
              <li class="nav-li"><a href="home.php"class="">Home</a></li>
              <li class="nav-li"><a href="gallery.php" >Photos</a></li>
            
               <li class="nav-li"><a href="info.php" >Info</a></li>
              <li class="nav-li"><a href="history.php" >History</a></li>
              <li class="nav-li"><a href="reservation.php" >Book</a></li>
          </ul>
      </div>
</header> 
<link href="style.css" rel="stylesheet">

<body><br><br><div class= "amn"><br><br><br>
 <br> <center><h1>History of Marinduque</h1></center><br>
   <div class="box"> <br>
    <div class= "pic"><br><br><br><br><br><br>
      <img src="pic1.jpg">
    </div>
    <div class="info">
      
      <?php
      echo "<p>    Legend has it that the island of Marinduque was formed as a consequence of a tragic love affair between two people: Mariin and Gatduke. Mariin's father, a local chieftain, did not approve of this affair and ordered the beheading of Gatduke. Before this could be done, the couple sailed out to sea and drowned themselves, forming the island now called Marinduque.

      During the Spanish and early American occupations, Marinduque was part of Balayan Province (now Batangas) in the 16th century, Mindoro in the 17th century, and had a brief period as an independent province in 1901, when the Americans arrived.
      
          </p>";
?>

    </div>
  </div>
  <div>
  <br> <center><h1> Philippine American War</h1></center><br>
  <div class="box"> <br>
    <div class= "pic"><br><br><br><br>
      <img src="war.jpg">
      
    </div>
    <div class="info">
   
   <?php   
     echo "<p>During the Philippine-American War, Marinduque was the first island to have American concentration camps. Marinduque is the site of the Battle of Pulang Lupa, where 250 Filipino soldiers under Colonel Maximo Abad, defeated a smaller force of 54 American Infantrymen. In 1902, the US-Philippine Commission annexed the islands of Mindoro (now two separate provinces) and Lubang (now part of Occidental Mindoro) to the province.
        <br><br>
        Four months later, the province became part of the province of Tayabas (now Quezon). On February 21, 1920, Act 2280 was passed by the Philippine Congress, reestablishing Marinduque as a separate province. In 1942, the Japanese Imperial forces landed in Marinduque. In 1945, combined American and Philippine Commonwealth troops attacked from the Japanese Troops liberated to the Battle of Marinduque in the Second World War <br>
      
          </p>";
?>

  </div>
  </div>
  <div>
  <br> <center><h1> Putong or Tubong</h1></center><br>
  <div class="box"> <br>
    <div class= "pic"><br><br><br><br>
      <img src="images.jpg">
      
    </div>
    <div class="info">
      
      <?php
     echo "<p>Marinduqueños are said to be very hospitable in nature and are very welcoming. One such custom reflecting this is putong or tubong, which is a custom of welcoming and honoring friends and visitors. The honoree (or honorees) are seated and crowned with flowers while local women dance and sing for them. Other well-wishers throw coins and flower petals for long life. Marinduqueños are of Tagalog origin and speak Tagalog. The Moriones festival also plays a prominent role in Marinduque's culture.
     
      </p>";

?>

   </div>
  </div>
  <div>
  <br> <center><h1> Moriones Festival</h1></center><br>
  <div class="box"> <br>
    <div class= "pic"><br><br><br><br>
      <img src="m.jpg">
      
    </div>
    <div class="info">
      
      <?php
      echo "<p>Marinduque is famous for this annual Moriones Festival locally known as 'Moryonan'. During the month of March or April, parades and celebrations can be seen on the streets. In Santa Cruz, Gasan, Boac, and Mogpog, a parade of people dressed as 'Moryons' can be seen on the main road connecting the towns of the island. Boac and Sta. Cruz, the biggest town in the province, shows a reenactment in the evening of the actual event when Longinus, a blind soldier, punctures Jesus with his spear and blood droplets from the wound restores Longinus' sight.
     
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
