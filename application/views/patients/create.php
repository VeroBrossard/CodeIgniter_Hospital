<?php
//hello();
// $id ='';
// $lastname ='';
// $firstname ='';
// $birthdate ='';
// $phone ='';
// $mail ='';
// $action = form_open('patients/create');
// $value_button = "Create patients item";
// //echo 'ma page arborescence : views/patients/view.php ';
if (!empty($patients_item['id'])) {
    
 echo 'id patient = ' .$patients_item['id']. "<br>";
 echo 'modification possible !.... <br>';
//     //$id = $patients_item['id'];
//     //$lastname = $patients_item['lastname'];
//     $firstname = $patients_item['firstname'];
//     $birthdate = $patients_item['birthdate'];
//     $phone = $patients_item['phone'];
//     $mail = $patients_item['mail'];

//     $action = form_open('patients/create/'.$patients_item['id']);
//     $value_button = "Modify patients item";
 }
echo ' depuis create.php patients par id <br><br><br>';
?>


<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<!-- <?= $action; ?>  -->
<?= !empty($patients_item['id']) ? form_open('patients/create/'.$patients_item['id']) : form_open('patients/create'); ?>
<!-- , array('onsubmit' => "return confirm('Etes vous sûr de valider?')" ) -->

<!-- //pour choix action  -->
     <input type="hidden" name="id" value="<?= !empty($patients_item['id']) ? $patients_item['id'] : '' ?>"/>

    <label for="lastname">Nom</label>
    <input type="text" name="lastname" value="<?= !empty($patients_item['id']) ? $patients_item['lastname'] : '' ?>"/><br /><br />

    <label for="firstname">Prénom</label>
    <input type="text" name="firstname" value="<?= !empty($patients_item['id']) ? $patients_item['firstname'] : '' ?>"/><br /><br />

    <label for="birthdate">Dte naissance</label>
    <input type="date" name="birthdate" value="<?= !empty($patients_item['id']) ? $patients_item['birthdate'] : '' ?>"/><br /><br />

    <label for="phone">Tel</label>
    <input type="tel" name="phone" value="<?= !empty($patients_item['id']) ? $patients_item['phone'] : '' ?>"/><br /><br />
    
    <label for="email">mail</label>
    <input type="email" name="mail" value="<?= !empty($patients_item['id']) ? $patients_item['mail'] : '' ?>"/><br /><br />

    <input type="submit" name="submit" value="<?= !empty($patients_item['id']) ? "Modify patients item" : "Create patients item" ?>" /><br />

<?php hello(); ?>
    
</form>

<!-- La méthode confirm() affiche une boîte de dialogue avec un message et deux boutons (OK et Annuler). Cette méthode renvoie true si l’utilisateur clique sur OK, sinon false. -->
<!-- <script> 
function confirmer(){
var res = confirm("Êtes-vous sûr de vouloir supprimer?");
if(res){
    // Mettez ici la logique de suppression
}
}
 </script> -->

<!-- <script type="text/javascript">

function confirmvb()
{
rep = confirm('Etes vous sûr de valider?');
 
if(rep)
{ // SI LA PERSONNE A APPUYER SUR OUI
 return true;
}
else
{ // SI LA PERSONNE N'A PAS APPUYER SUR OUI
return false;
}
 
}

</script> -->
onclick="return confirm('Etes vous sûre de vouloir supprimer ce patient ?');"