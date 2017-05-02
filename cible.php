<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
<link type="text/css" rel="stylesheet" href="style2.css"/>
    </head>

    <body>
      <p><?php
      $Name = $_POST['Name'];
      $Email = $_POST['Email'];
      $Message = $_POST['Message'];
// test si la chaine contient uniquement des caractères alphabétiques (a-z/A-Z) ou numériques (0-9)
      if((strlen($Name) <= 10) & preg_match('#^[a-zA-Z0-9]*$#', $Name)) {
        echo "Name : ", $Name;
      }
      else {
        echo "Nom invalide !";
      }
      ?></p>
      <hr>
    <p><?php
      if((strlen($Email) <= 30) & preg_match('#^[a-zA-Z0-9@.]*$#', $Email)) {
        echo "Email : ", $Email;
      }
      else {
        echo "Email invalide !";
      }
       ?></p>
       <hr>
       <p><?php
         if((strlen($Message) <= 240) & preg_match('#^[a-zA-Z0-9 @.,]*$#', $Message)) {
           echo "Message : ", $Message;
         }
         else {
           echo "Message invalide !";
         }
          ?></p>
          <hr>
          <p><?php
if(false === filter_var($Email, FILTER_VALIDATE_EMAIL)) {
echo "Mail invalide";
} else {
echo 'Mail OK !';
}
?></p>
    </body>
</html>
