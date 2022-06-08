<br>
<h1>Nous contacter</h1><br>
<form action="index.php?page=contactform" method="post" class='row flex-column align-items-center'>

  <div class="form-floating mb-3 col-md-4">
    <input type="email" name="emailAddress" class="form-control" id="floatingPassword" placeholder="Password">
    <label for="floatingemail">E-mail address</label>
  </div>

  <div class="form-floating mb-3 col-md-4">
    <input type="objet" name="objet" class="form-control" id="floatingmessage" placeholder="Password">
    <label for="floatingobjet">Objet du message</label>
  </div>

  <div class="form-floating mb-3 col-md-4">
    <textarea class="form-control" name="message" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
    <label for="floatingmessage">Votre message</label>
  </div>
  <br>
  <button type="submit" class="btn btn-info mb-3 col-2">Envoyer</button>
</form>