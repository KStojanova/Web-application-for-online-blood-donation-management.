<html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  <title>Е-крводарител</title>
  <link rel="shortcut icon" href="/img/logo.png" type="image/x-icon">
  <link rel="icon" href="img/logo.png" type="image/x-icon">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
  <?php
	include_once "navbar.html";
	?>
<div class="proba" id="proba">
<div class="row">
			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
  <form id="proba" method="post" action="mailto:stojanova.kiki@yahoo.com">
  <label><i class="fa fa-user" aria-hidden="true"></i> Име</label>
						 		<input type="text" name="name" class="form-control" placeholder="Внеси име">
						 	<br>
                 <label><i class="fa fa-envelope" aria-hidden="true"></i> Емаил</label>
                 <input type="email" name="email" class="form-control" placeholder="Внеси емаил адреса">
                 <br>
                 <label><i class="fa fa-comment" aria-hidden="true"></i> Порака/прашање</label>
						 		<textarea rows="3" name="message" class="form-control" placeholder="Напиши ја твојата порака"></textarea>
            <br>
            <button class="btn btn-raised btn-block btn-danger">Испрати →</button>
</form>
</div>
</div>
</div>
<!-- footer -->
<?php
include_once "footer.html";
?>
</html>
    