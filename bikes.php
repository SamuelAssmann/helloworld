<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"">
  <link rel="stylesheet" type="text/css" href="css1.css">
  <link rel="stylesheet" type="text/css" href="../formatierungProjekt.css">
  <title>LikeBike Räder</title>
  <link rel="icon" href="../rad.jpg" type="image/x-icon">

  <script type="text/javascript">
    function toLogin(){
      window.open('http://localhost/Registration.php');
    }
  </script>
  </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="../SVGrad.svg" alt="1" class="navbar-brand" height="40" width="50">
        <a class="navbar-brand" href="#" style="font-size:160%; color:maroon; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif">LikeBike</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="Projekt.php">Homepage</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="support.php">Bei Fragen</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Räder<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Kontakt</a>
            </li>
            <li class="nav-item">
                    <a class="button_login" href="http://localhost/Login.php">Login</a>
                </li>
              </ul>
                <form class="form-inline my-2 my-lg-0">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit" onclick="toLogin()">Registration</button>
                </form>
        </div>
    </nav>      
      <h1 style="justify-content: center; display:flex ; margin-top: 20px; margin-bottom: 20px">AUS UNSERER WEEEEERBUNG!!!</h1>

      <div id="gallery" style="justify-content: center">
                <figure> <img src="bike1.jpg" style="width:600px; height:500px" >
			<figcaption style="color: black">Supergeiles Megabike 1001</figcaption>
		</figure>
		<figure> <img src="bike2.jpg" style="width:600px; height:500px">
			<figcaption style="color: black">Bike</figcaption>
		</figure>
		<figure> <img src="bike3.jpg" style="width:600px; height:500px">
			<figcaption style="color: black">Luftpumpe</figcaption>
		</figure>
		<figure> <img src="bike4.jpg" style="width:600px; height:500px">
			<figcaption style="color: black">Bike</figcaption>
		</figure>
		<figure> <img src="bild5.jpg" style="width:600px; height:500px">
			<figcaption style="color: black">Kleines Mädelbike</figcaption>
		</figure>
		<figure> <img src="bike6.jpg" style="width:600px; height:500px">
			<figcaption style="color: black">E-Tandem für faule Pärchen</figcaption>
		</figure>
	</div>

</body>

</html>