<h2>Choisissez votre classe</h2>

<form action="index.php?page=personnages" method="post">
  <label for="name">Votre pseudo</label>
  <input type="text" id="name" name="name" required>

  <label for="classes_id">Classe</label>
  <select name="classes_id" id="classes_id" required>
    <option value="" disabled selected>— Sélectionner —</option>
    <option value="1">Archer</option>
    <option value="2">Guerrier</option>
    <option value="3">Mage</option>
    <option value="4">Voleur</option>
  </select>

  <button type="submit">Valider</button>
</form>

