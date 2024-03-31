<!-- <?php 
require_once('functions/dbFormCreate.php');
?> -->
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<form action="dbFormCreate.php" method="post">
  Question: <input type="text" name="question">
  Réponse: <input type="text" name="reponse">
  <input type="submit" value="Ajouter Flashcard">
</form>

</body>
</html>
