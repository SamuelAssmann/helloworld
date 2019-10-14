<!DOCTYPE html>
<html>
<head>
  

  <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="formatierungProjekt.css">
    <title>LikeBike Support</title>
    <link rel="icon" href="rad.jpg" type="image/x-icon">
    <script type="text/javascript" language="javascript">
      function toLogin(){
        window.open('Registration.php');
      }
    </script>


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="SVGrad.svg" alt="1" class="navbar-brand" height="40" width="50">
        <a class="navbar-brand" href="#" style="font-size:160%; color:maroon; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif">LikeBike</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="Projekt.php">Homepage <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="support.php">Bei Fragen</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="bikes.php">Räder</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Kontakt</a>
          </li>
          <li class="nav-item">
          <?php
                if(!isset($_SESSION['username'])) {
                    echo '<a class="button_login" href="Login.php">Login</a>';
                } else {
                    echo '<a class="button_login" href="Logout.php">Logout</a>';
                }
            ?>
          </li>
        </ul>
            <?php
                if(!isset($_SESSION['username'])) {
                    echo '<button class="btn btn-outline-success my-2 my-sm-0" type="submit" onclick="toLogin()">Registration</button>';
                } else {
                    $username = $_SESSION['username'];
                    echo "Logged in as: &nbsp<b>".$username."</b>";
                }
            ?>
        </div>
      </nav>

              <nav class="navbar navbar-light bg-light">
                        <form class="form-inline">
                          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Suche</button>
                        </form>
                      </nav>

             

                  <nav id="navbar-example3" style="display: flex; justify-content: left" class="navbar navbar-light bg-light">
                        <a class="navbar-brand" href="#"></a>
                        <nav class="nav nav-pills flex-column">
                          <b >Q&A</b>
                          <nav class="nav nav-pills flex-column">
                           
                            <div style="margin-top: 20px" onmouseover="loadDoc1()" onmouseout="loadDoc2()">
                              <a  class="nav-link" id="supp11" >Wie kann ich bezahlen?</a>
                              </div>
                            <script>
                            function loadDoc1() {
                              var xhttp = new XMLHttpRequest();
                              xhttp.onreadystatechange = function() {
                                if (this.readyState == 4 && this.status == 200) {
                                  document.getElementById("supp11").innerHTML = this.responseText;
                                }
                              };
                              xhttp.open("GET", "supp11.txt", true);
                              xhttp.send();
                            }
                            function loadDoc2() {
                              var xhttp2 = new XMLHttpRequest();
                              xhttp2.onreadystatechange = function() {
                                if (this.readyState == 4 && this.status == 200) {
                                  document.getElementById("supp11").innerHTML = this.responseText;
                                }
                              };
                              xhttp2.open("GET", "wie_bezahlen.txt", true);
                              xhttp2.send();
                            }
                            </script>
                          </div>





                          <div  style="margin-top: 20px" onmouseover="loadDoc3()" onmouseout="loadDoc4()">
                              <a  class="nav-link" id="supp12" style="margin-top: 1,5cm" >Reparieren Sie auch Fahrräder?</a>
                              </div>
                            <script>
                            function loadDoc3() {
                              var xhttp = new XMLHttpRequest();
                              xhttp.onreadystatechange = function() {
                                if (this.readyState == 4 && this.status == 200) {
                                  document.getElementById("supp12").innerHTML = this.responseText;
                                }
                              };
                              xhttp.open("GET", "reparieren1.txt", true);
                              xhttp.send();
                            }
                            function loadDoc4() {
                              var xhttp2 = new XMLHttpRequest();
                              xhttp2.onreadystatechange = function() {
                                if (this.readyState == 4 && this.status == 200) {
                                  document.getElementById("supp12").innerHTML = this.responseText;
                                }
                              };
                              xhttp2.open("GET", "reparieren0.txt", true);
                              xhttp2.send();
                            }
                            </script>
                          </div>

 
                            
                          </nav>
                          <a class="nav-link" style="margin-top:20px" href="contact.php" style="margin-bot:" >Brauchen Sie Hilfe?</a>
                          <nav class="nav nav-pills flex-column">
                          </nav>
                        </nav>
                      </nav>


                      <canvas id="canvasPicture" width="1600" height="400" style="border:1px solid #d3d3d3;">
                      Dieses Bild ist auf deinem Browser leider nicht verfügbar</canvas>

                      <script>
                      var c = document.getElementById("canvasPicture");
                      var ctx = c.getContext("2d");
                      // Create gradient
                      var grd = ctx.createLinearGradient(0,0,1600,0);
                      grd.addColorStop(0,"rgb(15, 39, 119)");
                      grd.addColorStop(1,"white");
                      // Fill with gradient
                      ctx.fillStyle = grd;
                      ctx.fillRect(0,0,1600,400);
                      ctx.beginPath();
                      ctx.arc(1400, 300, 80, 0, 2 * Math.PI);
                      ctx.moveTo(1390, 300);
                      ctx.lineTo(1390, 160);

                      ctx.moveTo(1410, 300);
                      ctx.lineTo(1410, 160);

                      ctx.moveTo(1380, 160);
                      ctx.lineTo(1410, 160);

                      ctx.moveTo(1380, 150);
                      ctx.lineTo(1365, 160);

                      ctx.moveTo(1380, 160);
                      ctx.lineTo(1365, 170);

                      ctx.moveTo(1365, 160);
                      ctx.lineTo(1365, 170);

                      ctx.moveTo(1390, 300);
                      ctx.lineTo(1350, 320);

                      ctx.moveTo(1400, 310);
                      ctx.lineTo(1360, 330);

                      ctx.moveTo(1365, 335);
                      ctx.lineTo(1345, 315);

                      ctx.moveTo(1355, 335);
                      ctx.lineTo(1335, 315);

                      ctx.moveTo(1365, 335);
                      ctx.lineTo(1355, 335);

                      ctx.moveTo(1345, 315);
                      ctx.lineTo(1335, 315);

                      ctx.moveTo(1380, 150);
                      ctx.lineTo(1410, 150);

                      ctx.arc(1400, 300, 10, 0, 2 * Math.PI);
                      ctx.stroke();
                      </script>
</body>

</html>