<script src='https://www.google.com/recaptcha/api.js'></script>
<form action="mail.php" method="post">
  <label for="nom">Nom :</label><br>
  <input type="text" id="nom" name="nom"><br>
  <label for="email">Adresse email :</label><br>
  <input type="email" id="email" name="email"><br>
  <label for="sujet">Sujet :</label><br>
  <input type="text" id="sujet" name="sujet"><br><br>
  <label for="message">Message :</label><br>
  <textarea id="message" name="message" rows="5" cols="30"></textarea><br><br>
  <div class="g-recaptcha" data-sitekey="6LfVkJgjAAAAAMr9PmMvA8YMEOZxhQavI0Dba6_A"></div>
  <input type="submit" value="Envoyer">
</form> 


