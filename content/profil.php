<?php include ('nav.php'); ?>

<style>
#modified{
    display: flex;
    margin: 3px 3px 3px;
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
<H1> VOTRE PROFILE</H1>
<div id="modified">
<div>
    <?php 
    foreach($user as $vrai):?>
    <p>Login : <?php  echo $vrai['login']; ?></p>
    <p> email : <?php echo $vrai['email']; ?> </p>

    <button>Modifier mon profil</button>
    <?php endforeach; ?>
</div>
<div id="form">

<form action="crudUser.php" method="POST">
    Login: <input type="text" name="login" value=""><br>
    Adresse email : <input type="email" name="mail"><br>
    password: <input type="password" name="password"><br>
    Confirm password : <input type="password" name="verif"><br>
    <input type="submit" name="validUpdate" value="Valider">
</form>
</div>

<?php  
    
?>
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