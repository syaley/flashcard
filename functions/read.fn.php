<?php
// Fonction pour obtenir une flashcard
function getFlashcard($conn, $id) {
    $sql = "SELECT t.terms, d.definition FROM terms INNER JOIN definition ON terms.id = definition.terms_id WHERE terms.id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $flashcard = $result->fetch_assoc();
    return $flashcard;
  }
  
  // Utilisation de la fonction
  $flashcard = getFlashcard($conn, 1); // Obtenez la flashcard avec l'id 1
  echo "Question: " . $flashcard['question'];
  echo "Réponse: " . $flashcard['answer'];
  
  // Fermer la connexion
  $conn->close();
  ?>