<html>
    <style>
    body {font-family: Arial, Helvetica, sans-serif;}
    form {
        border: 3px solid #f1f1f1;
        padding: 20px 10px;
        position: absolute;
}

    /* Full-width input fields */
    input[type=text], input[type=password], input[type=email] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
    }

    input[type=text]:focus, input[type=password]:focus, input[type=email]:focus {
        background-color: #ddd;
        outline: none;
    }

    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }

    /* Set a style for all buttons */
    .button {
        background-color: #0449af;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }

    .button:hover {
        opacity:1;
    }
    .buttoncancel {
        background-color: #f44336;
        color: white;
        padding: 12px 18px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }

    .buttoncancel:hover {
        opacity:1;
    }

    /* Float cancel and signup buttons and add an equal width */
    .cancelbtn, .signupbtn {
      float: left;
      width: 50%;
    }

    /* Add padding to container elements */
    .container {
        padding: 40px;
        width: 40%;
    }

    /* Clear floats */
    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }

    /* Change styles for cancel button and signup button on extra small screens */
    @media screen and (max-width: 300px) {
        .cancelbtn, .signupbtn {
           width: 100%;
        }
    }
    </style>
    <body>
        <form method="post" class="inscription" action="sinscrire_valide.php" style="border:1px solid #ccc">
          <div class="container">
            <h1>S'inscrire</h1>
            <p>Veuillez remplir le formulaire pour créer un nouveau compte</p>
            <hr>
            <label for="nom"><b>Nom</b></label>
            <input name="nom" value="<?php isset($_POST['nom']);?>" type="text" required="required" placeholder="Entrez votre nom">

            <label for="prenom"><b>Prénom</b></label>
            <input name="prenom" value="<?php isset($_POST['prenom']);?>"type="text" required="required" placeholder="Entrez votre prénom">

            <label for="email"><b>Email</b></label>
            <input name="mail" value="<?php isset($_POST['mail']);?>" type="email" required="required" placeholder="Entrez votre mail">

            <label for="psw"><b>Password</b></label>
            <input name ="mdp" value="" type="password" required="required" placeholder="Entrez votre mot de passe">
            <label>
              <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px">Se souvenir de moi
            </label>
            <div class="clearfix">
                <input class="button" type="submit" value="S'inscrire"><br/><br/>
                <a class="buttoncancel" href="javascript:history.go(-1)">Retour</a>
            </div>

          </div>
          <?php include('sinscrire_valide.php'); ?>
        </form>
    </body>
</html>
