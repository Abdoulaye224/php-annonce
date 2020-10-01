<head>
    <link rel="stylesheet" href="include/css/style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body style = "background: linear-gradient(to right, #87CEFA, pink);">


<div class = "contenu">

    <div class = "inscription">

        <h1 style="text-align: center;">Inscription</h1>
        <form action="content/createAccount.php" method="POST">
            <label>Login:</label> 
            <input class="form-control" type="text" name="login"><br>
            <label>Adresse email :</label> 
            <input class="form-control" type="email" name="mail"><br>
            <label> Password:</label> 
            <input class="form-control" type="password" name="password"><br>
            <label> Verifier password :</label> 
            <input class="form-control" type="password" name="verif"><br>
            <label>Description:</label> 
            <textarea class="form-control" name="description"></textarea><br>
            <input class="btn btn-success" type="submit" name="createAccount" value="S'inscrire">
        </form>

    </div>

    <div class = "connexion">
        <h1 style="text-align: center;">Connexion</h1>
        <form action="content/login.php" method="POST"><br>
            <label>Adresse email:</label> 
            <input  class="form-control" type="email" name="mail"><br>
            <label>Password:</label> 
            <input  class="form-control" type="password" name="password"><br>
            <input class="btn btn-success" type="submit" name="login" value="Se connecter">
        </form>
    </div>



<<<<<<< HEAD
</div>

</body>
<? include ('content/nav.php'); ?>
=======
<h1>Se connecter :</h1>
<form action="content/login.php" method="POST"><br>
    Adresse email: <input type="email" name="mail"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" name="login" value="Se connecter">
</form>

<h1>S'inscrire :</h1>
<form action="content/createAccount.php" method="POST">
    Login: <input type="text" name="login"><br>
    Adresse email : <input type="email" name="mail"><br>
    Password: <input type="password" name="password"><br>
    Verifier password : <input type="password" name="verif"><br>
    Description: <textarea name="description"></textarea><br>
    <input type="submit" name="createAccount" value="S'inscrire">
</form>
>>>>>>> 6771eebc3c3337c968bc30b36daa02457c5c3bd0
