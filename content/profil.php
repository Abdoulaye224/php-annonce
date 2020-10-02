<?php include ('nav.php'); ?>

<style>

.content{
    display: flex;
}

#modified{
    margin: 10px;
    padding: 20px;
    border: 2px solid black;
    border-radius: 5px;
}

#form{
    margin: 20px 20px 20px;
}

</style>
<?php 
session_start();

require(__DIR__ . DIRECTORY_SEPARATOR . 'bdd.php');

$userId = $_SESSION['id'];
$query = $bdd->prepare("SELECT * FROM user WHERE id=$userId");
$query->execute();
$user = $query->fetchAll(PDO::FETCH_ASSOC);

?>
<h1 style="text-align: center; margin-top: 20px;"> Mon Profil</h1>

<div class = "content">

    <div id="modified" class = "col-md-3">
        <?php 
        foreach($user as $vrai):?>
        <label>Login :</label> 
        <input class="form-control" disabled value="<?php  echo $vrai['login']; ?>">
        <label>Email :</label> 
        <input class="form-control" disabled value="<?php  echo $vrai['email']; ?>"><br>

        <button class = "btn btn-primary">Modifier mon profil</button>
        <?php endforeach; ?>
    </div>

    <div id="form" class = "col-md-7">

        <form action="crudUser.php" method="POST">
            <label>Login :</label> 
            <input class="form-control" type="text" name="login" value=""><br>
            <label>Email :</label>
            <input class="form-control" type="email" name="mail"><br>
            <label>Mot de passe :</label>
            <input class="form-control" type="password" name="password"><br>
            <label>Confirmer mot de passe : </label>
            <input class="form-control" type="password" name="verif"><br>
            <input class = "btn btn-success" type="submit" name="validUpdate" value="Valider">
        </form>
    </div>

</div>









<script>
let form = document.getElementById("form");
let button = document.querySelector("button");
let hidden = true;

form.style.display="none";
                    button.addEventListener('click', () => {
                    if(hidden){
                        form.style.display="block";
                        form.style.width="70%";
                        button.textContent="Annuler la modification";
                        hidden = false;
                    }
                    else {
                        button.textContent="Modifier le profil"
                        form.style.display="none";
                hidden = true;

        }
                    });


</script>