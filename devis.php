<html>
  <head>
    <title>Web-G&eacute;n&eacute;ration</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="script.js"></script>
	<style>
		body {
  background: #efefef;
  font-size: 62.5%;
  font-family: 'Lato', sans-serif;
  font-weight: 300;
  color: #B6B6B6;
}
body section {
  background: white;
  margin: 60px auto 120px;
  border-top: 15px solid #313A3D;
  text-align: center;
  padding: 50px 0 110px;
  width: 80%;
  max-width: 1100px;
}
body section h1 {
  margin-bottom: 40px;
  font-size: 4em;
  text-transform: uppercase;
  font-family: 'Lato', sans-serif;
  font-weight: 100;
}

form {
  width: 58.33333%;
  margin: 0 auto;
}
form .field {
  width: 100%;
  position: relative;
  margin-bottom: 15px;
}
form .field label {
  text-transform: uppercase;
  position: absolute;
  top: 0;
  left: 0;
  background: #313A3D;
  width: 100%;
  padding: 18px 0;
  font-size: 1.45em;
  letter-spacing: 0.075em;
  -webkit-transition: all 333ms ease-in-out;
  -moz-transition: all 333ms ease-in-out;
  -o-transition: all 333ms ease-in-out;
  -ms-transition: all 333ms ease-in-out;
  transition: all 333ms ease-in-out;
}
form .field label + span {
  font-family: 'SSStandard';
  opacity: 0;
  color: white;
  display: block;
  position: absolute;
  top: 12px;
  left: 7%;
  font-size: 2.5em;
  text-shadow: 1px 2px 0 #cd6302;
  -webkit-transition: all 333ms ease-in-out;
  -moz-transition: all 333ms ease-in-out;
  -o-transition: all 333ms ease-in-out;
  -ms-transition: all 333ms ease-in-out;
  transition: all 333ms ease-in-out;
}
form .field input[type="text"],
form .field textarea {
  border: none;
  background: #E8E9EA;
  width: 80.5%;
  margin: 0;
  padding: 18px 0;
  padding-left: 19.5%;
  color: #313A3D;
  font-size: 1.4em;
  letter-spacing: 0.05em;
  text-transform: uppercase;
}
form .field input[type="text"]#msg,
form .field textarea#msg {
  height: 18px;
  resize: none;
  -webkit-transition: all 333ms ease-in-out;
  -moz-transition: all 333ms ease-in-out;
  -o-transition: all 333ms ease-in-out;
  -ms-transition: all 333ms ease-in-out;
  transition: all 333ms ease-in-out;
}
form .field input[type="text"]:focus, form .field input[type="text"].focused,
form .field textarea:focus,
form .field textarea.focused {
  outline: none;
}
form .field input[type="text"]:focus#msg, form .field input[type="text"].focused#msg,
form .field textarea:focus#msg,
form .field textarea.focused#msg {
  padding-bottom: 150px;
}
form .field input[type="text"]:focus + label, form .field input[type="text"].focused + label,
form .field textarea:focus + label,
form .field textarea.focused + label {
  width: 18%;
  background: #FD9638;
  color: #313A3D;
}
form .field input[type="text"].focused + label,
form .field textarea.focused + label {
  color: #FD9638;
}
form .field:hover label {
  width: 18%;
  background: #313A3D;
  color: white;
}
form input[type="submit"] {
  background: #FD9638;
  color: white;
  -webkit-appearance: none;
  border: none;
  text-transform: uppercase;
  position: relative;
  padding: 13px 50px;
  font-size: 1.4em;
  letter-spacing: 0.1em;
  font-family: 'Lato', sans-serif;
  font-weight: 300;
  -webkit-transition: all 333ms ease-in-out;
  -moz-transition: all 333ms ease-in-out;
  -o-transition: all 333ms ease-in-out;
  -ms-transition: all 333ms ease-in-out;
  transition: all 333ms ease-in-out;
}
form input[type="submit"]:hover {
  background: #313A3D;
  color: #FD9638;
}
form input[type="submit"]:focus {
  outline: none;
  background: #cd6302;
}

	</style>
  </head>
  <body>
	<?php include 'header.php';?>
		<section id="hire">
    <h1>Demande de devis</h1>
    
    <form action="mail.php" method="post">
	
		<?php if($_GET["choix"] == "s"){ ?>
			<input type="hidden" name="type" value="s" />
		<?php }elseif($_GET["choix"] == "p"){?>
			<input type="hidden" name="type" value="p" />
		<?php }elseif($_GET["choix"] == "r"){?>
			<input type="hidden" name="type" value="r" />
		<?php }elseif($_GET["choix"] == "c"){?>
			<input type="hidden" name="type" value="c" />
		<?php } ?>
		
		
		
	      <div class="field name-box">
		        <input type="text" id="name" name="name" placeholder="Votre nom prénom ou entreprise"/>
        		<label for="name">Nom</label>
		        <span class="ss-icon">check</span>
	      </div>

	      <div class="field email-box">
		        <input type="text" id="email" name="email" placeholder="Votre adresse mail"/>
		        <label for="email">Email</label>
		        <span class="ss-icon">check</span>
	      </div>

	      <div class="field msg-box">
		        <textarea id="msg" rows="4" name="msg" placeholder="Dites-moi en quelques ligne le site que vous desirez."/></textarea>
		        <label for="msg">Message</label>
		        <span class="ss-icon">check</span>
	      </div>
	      <input class="button" type="submit" value="Send" />
  </form>
</section>
  </body>
</html>