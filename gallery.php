
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


<body>
  
    </br>
<h1> Marinduque Tourist Spot Gallery </h1>
    <div class="htips-container">
        <div class="img">
          <img src="a.jpg" style="width:240px; height: 220px;">
          <div class="tips-container">
          <p>Maniwaya Island</p></div>
        </div>
                  
        <div class="img">
          <img src="b.jpg" style="width:240px; height: 220px;">
          <div class="tips-container">
          <p>Poctoy White Beach</p></div>
        </div>

        <div class="img">
          <img src="c.jpg" style="width:240px; height: 220px;">
          <div class="tips-container">
          <p>Bagumbayan Cave</p></div>
        </div>

        <div class="img">
          <img src="d.jpg" style="width:240px; height: 220px;">
          <div class="tips-container">
          <p>Malbog Sulfor Spring</p></div>
        </div>

		    <div class="img">
          <img src="e.jpg" style="width:240px; height: 220px;">
          <div class="tips-container">
          <p>Mongpong Island</p></div>
        </div>

        <div class="img">
          <img src="f.webp" style="width:240px; height: 220px;">
          <div class="tips-container">
          <p>Tres Reyes Islands </p></div>
        </div>

        <div class="img">
          <img src="j.jpg" style="width:240px; height: 220px;">
          <div class="tips-container">
          <p>Paadjao Falls</p></div>
        </div>

        <div class="img">
          <img src="g.jpg" style="width:240px; height: 220px;">
          <div class="tips-container">
          <p>Bathala Cave</p></div>
        </div>

        <div class="img">
          <img src="h.jpg" style="width:240px; height: 220px;">
          <div class="tips-container">
          <p>Mount Malindig</p></div>
        </div>

        <div class="img">
          <img src="i.jpg" style="width:240px; height: 220px;">
          <div class="tips-container">
          <p>Kawa-kawa Falls</p></div>
        </div>

        <div class="img">
          <img src="003.jpg" style="width:240px; height: 220px;">
          <div class="tips-container">
          <p>Balanacan Port</p></div>
        </div>

        <div class="img">
          <img src="z.jpg" style="width:240px; height: 220px;">
          <div class="tips-container">
          <p>Laylay Port</p></div>
        </div>

        <div class="img">
          <img src="x.jpg" style="width:240px; height: 220px;">
          <div class="tips-container">
          <p>Aroma Beach</p></div>
        </div>

        <div class="img">
          <img src="14.webp" style="width:240px; height: 220px;">
          <div class="tips-container">
          <p>Ocean View</p></div>
          </div>

        <div class="img">
          <img src="zz.jpg" style="width:240px; height: 220px;">
          <div class="tips-container">
          <p>View Deck</p></div>
        </div>

        <div class="img">
          <img src="aaa.jpg" style="width:240px; height: 220px;">
          <div class="tips-container">
          <p>Luzon Datum</p></div>
        </div>

        <div class="img">
          <img src="hakupan.jpg" style="width:240px; height: 220px;">
          <div class="tips-container">
          <p>Hakupan Island</p></div>
        </div>

        <div class="img">
          <img src="gaspar.jpg" style="width:240px; height: 220px;">
          <div class="tips-container">
          <p>Gaspar Island </p></div>
        </div>

    </div>

?>

</body>
<style>
  body{
     background-color: grey;
     background-size: cover;
     background-repeat: no-repeat;
    }
    
.htips{
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}
.htips-container{
  position: absolute;
  display:flex;
  justify-content: center;
  align-items: center;
  max-width: 100%;
  margin-top: 90px;
  flex-wrap: wrap;
}

div.img {
    height: 250px;
    padding: 60px;
    z-index: -2;
    float: left;
    margin: 20px 30px 65px;
    box-shadow: 20px 20px 50px rgba(0, 0, 0, 0.5);
    border-radius: 15px;
    background-color: rgba(255, 255, 255, 0.1);
    overflow: hidden;
    justify-content: center;
    backdrop-filter: blur(10px);
    align-items: center;
    text-align: center;
    box-shadow: 20px 20px 50px rgba(0, 0, 0, 0.5);
    border-top: 1px solid rgba(255, 255, 255, 0.5);
    border-left: 1px solid rgba(255, 255, 255, 0.5);
    backdrop-filter: blur(5px);
    margin-bottom: 50px;
    
}
.tips-container{

    width: 200px;
    position: absolute;
    
}
p{
  color: whitesmoke;
  text-align: center;
  font-size: 20px;
  font-family: 'David Libre', serif;
  line-height: 150%;
  color: whitesmoke;

  font-weight: 500;
}

h1{
    text-align: center;
    color: #232d60;
    font-size: 62px;
}


.nav-ul{
justify-content: flex-end;
flex: 1;
list-style: none;
display: flex;
text-align: center;
   
}
.nav-li a {
margin-left:10px;
font-size:25px;
text-decoration: none;
color:rgb(6, 12, 92);
padding-right: 50px;
text-align: center;

        
}
.nav-li a:hover {
border:1px solid white;
border-radius:10px;
background:rgba(187, 187, 182, 0.2);
box-shadow: 0 8px 32 0px  rgba(31, 38, 135, 0.37);
-webkit-backdrop-filter: blur(18px);
backdrop-filter: blur(18px);
color: lightskyblue;
text-align: center;
}
</style>
</html>