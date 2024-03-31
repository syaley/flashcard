
<?php

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Récupérer les données du formulaire
  $question = $_POST['question'];
  $reponse = $_POST['reponse'];

  // Préparer la requête SQL pour insérer la flashcard
  $stmt = $conn->prepare("INSERT INTO questions (question) VALUES (?)");
  $stmt->bind_param("s", $question);
  $stmt->execute();
  $last_id = $conn->insert_id; // Récupérer l'ID de la question insérée

  $stmt = $conn->prepare("INSERT INTO answers (answer, question_id) VALUES (?, ?)");
  $stmt->bind_param("si", $reponse, $last_id);
  $stmt->execute();

  echo "Nouvelle flashcard ajoutée avec succès.";
}

// Fermer la connexion
$conn->close();
