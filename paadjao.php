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
 <br> <center><h1> Paadjao Falls </h1></center><br>
   <div class="box"> <br>
    <div class= "pic"><br><br><br><br><br><br>
      <img src="j.jpg">
    </div>
    <div class="info">
      
      <?php
     echo "<p>    Paadjao Falls is located in Barangay Bocboc. This roughly 100 feet waterfall cascades into a 6 feet basin surrounded by tall trees. Its water remains cold throughout the year feeding Mogpog River. It can be reached within a thirty-minute hike from Barangay Bocboc.

      It is the most accessible waterfall in the province and the locals can easily give direction when needed. If hesitant to hike without a guide, better hire one. This waterfall is considered as an underrated tourist spot in Mogpog, Marinduque but a favorite place for local families and groups on their picnics and nature getaways.
      <br><br>
       Location: Sitio Paadjao, Barangay Bokbok, Mogpog, Marinduque.
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
