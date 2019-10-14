<?php 
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=webprogrammierung', 'luis', 'dPfPuL69');
?>
<!DOCTYPE html> 
<html> 
<head>
<meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="formatierungProjekt.css">
    <title>Bikeshop Registrierung</title>
    <link rel="icon" href="rad.jpg" type="image/x-icon">  

</head> 
<body>
 
<?php
$showFormular = true; //Variable ob das Registrierungsformular anezeigt werden soll
 
if(isset($_GET['register'])) {
    $error = false;
    $email = $_POST['email'];
    $passwort = $_POST['passwort'];
    $passwort2 = $_POST['passwort2'];
  
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script type='text/javascript'>alert('Bitte eine gültige E-Mail-Adresse eingeben');</script>";
        $error = true;
    }     
    if(strlen($passwort) == 0 OR strlen($_POST['vorname']) == 0 OR strlen($_POST['nachname']) == 0 OR strlen($_POST['geburtsdatum']) == 0 OR strlen($_POST['username']) == 0){
        echo "<script type='text/javascript'>alert('Alle Felder müssen ausgefüllt sein');</script>";
        $error = true;
    }
    if($passwort != $passwort2) {
        echo "<script type='text/javascript'>alert('Die Passwörter müssen übereinstimmen');</script>";
        $error = true;
    }
    
    //Überprüfe, dass die E-Mail-Adresse noch nicht registriert wurde
    if(!$error) { 
        $statement = $pdo->prepare("SELECT * FROM user WHERE EMail = :email");
        $result = $statement->execute(array('email' => $email));
        $user = $statement->fetch();
        
        if($user !== false) {
            echo "<script type='text/javascript'>alert('Diese Email-Adresse ist bereits vergeben');</script>";
            $error = true;
        }    
    }
    
    //Keine Fehler, wir können den Nutzer registrieren
    if(!$error) {    
        $passwort_hash = md5($passwort);
        
        $statement = $pdo->prepare("INSERT INTO user (EMail, Vorname, Nachname, Geburtsdatum, Username, Passwort) 
                                    VALUES (:email, :vorname, :nachname, :geburtsdatum, :username, :passwort)");
        $result = $statement->execute(array('email' => $email, 'vorname' => $_POST['vorname'], 'nachname' => $_POST['nachname'], 'geburtsdatum' => $_POST['geburtsdatum'], 'username' => $_POST['username'], 'passwort' => $passwort_hash));
        
        if($result) {        
            echo 'Du wurdest erfolgreich registriert. <a href="Login.php">Zum Login</a>';
            $showFormular = false;
        } else {
            echo "<script type='text/javascript'>alert('Beim Abspeichern ist leider ein Fehler aufgetreten');</script>";
        }
    } 
}
 
if($showFormular) {
?>
 
<form action="?register=1" method="post">
E-Mail:<br>
<input type="email" size="40" maxlength="250" name="email"><br><br>

Vorname:<br>
<input type="text" size="40" maxlength="250" name="vorname"><br><br>

Nachname:<br>
<input type="text" size="40" maxlength="250" name="nachname"><br><br>

Geburtsdatum:<br>
<input type="date" size="40" maxlength="250" name="geburtsdatum"><br><br><br>

Username:<br>
<input type="text" size="40" maxlength="250" name="username"><br><br>
 
Dein Passwort:<br>
<input type="password" size="40"  maxlength="250" name="passwort"><br>
 
Passwort wiederholen:<br>
<input type="password" size="40" maxlength="250" name="passwort2"><br><br>
 
<input type="submit" value="Abschicken">
</form>
 
<?php
} //Ende von if($showFormular)
?>
 
</body>
</html>