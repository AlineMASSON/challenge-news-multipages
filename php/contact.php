<?php
include 'inc/nicole.tpl.php';
?>

<main class="right">
  <h2 class="right__title">Nous contacter</h2>
  <div class="posts">
    <div class="post post--solo">
      <form action="index.php" method="post">
        <div class="identity">
          <h3>Identité</h3>
          <div class="sexe">
            <label>Je suis</label>
            <label for="name">Un homme</label>
            <input type="radio" id="male" name="name" value="Un homme">
            <label for="name">Une femme</label>
            <input type="radio" id="female" name="name" value="Une femme">
          </div>
          <div class="firstname">
            <label for="firstname">Mon prénom est</label>
            <input type="text" id="firstname" name="user_firstname" placeholder="Prénom">
          </div>
          <div class="lastname">
            <label for="lastname">Et mon nom,</label>
            <input type="text" id="lastname" name="user_lastname" placeholder="Nom">
          </div>
          <div class="discover">
            <label for="discover">J'ai connu ce site grâce à</label>
            <select name="discover" id="discover-select">
              <option value="">--Choisir une option--</option>
              <option value="facebook">Facebook</option>
              <option value="twitter">Twitter</option>
              <option value="google">Google</option>
              <option value="bouche">Bouche à oreille</option>
              <option value="JT">JT de 13h de JPP</option>
              <option value="autre">Autre</option>
            </select>
          </div>
          <div class="message">
            <h3>Message</h3>
            <div class="mail">
              <label for="mail">Répondez moi via</label>
              <input type="email" id="mail" name="user_mail" placeholder="Adresse e-mail">
            </div>
            <div class="text">
              <label for="text">Répondez moi via</label>
              <textarea name="text" id="user_text" cols="50" rows="5" placeholder="Votre message"></textarea>
            </div>
            <div class="file">
              <label for="file">Et vous montrer ça aussi</label>
              <input type="file" id="file" name="user_file" placeholder="No file selected.">
            </div>
          </div>
          <div class="infos">
            <label for="scales">Je certifie la véracité de ces informations</label>
            <input type="checkbox" id="scales" name="certify">
          </div>
          <button class="submit">Envoyer</button>
      </form>
    </div>
  </div>

<?php
include 'inc/footer.tpl.php';
?>