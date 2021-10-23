<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet" href="/sources/framy.webflow.ce5031a11.css"
    />
    <title>Pussy</title>
  </head>
  <body>
    <h1>Hi Mother Fucker</h1>


    <form action="Signup.php" method="post">
Name: <input type="text" name="name" placeholder="Kanichiwa"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit" value="send">
</form>
<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

            <!--FORM CONTENT SECTION -->
            <div class="two-column-contacts-wrapper">
                <div class="contact-us-content">
                    <div class="w-form">
                        <form id="wf-form-Contact-Us-Form" name="wf-form-Contact-Us-Form" data-name="Contact Us Form"><label for="name" class="field-label">Nombre Completo</label><input type="text" class="field w-input" maxlength="256" name="name" data-name="Name" placeholder="" required="" /><label for="Email" class="field-label">Correo Electronico</label><input
                                type="email" class="field w-input" maxlength="256" name="Email" data-name="Email" placeholder="" id="Email" required="" /><label for="Message" class="field-label">Su mensaje/comentario:</label><textarea name="Message" maxlength="5000"
                                data-name="Message" id="Message" class="field text w-input"></textarea><input type="submit" value="Enviar" data-wait="Please wait..." class="button-basic-one-outlined bg-accent-two w-button" /></form>
                        <div class="success-message dark w-form-done">
                            <div>Muchas Gracias! Su mensaje a sido enviado con exito</div>
                        </div>
                        <div class="w-form-fail">
                            <div>Maria purisima! Lo sentimos, ah ocurrido un error. Por favor intentelo denuevo</div>
                        </div>
                    </div>
                </div>
            </div>


    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
