<?php
//hello();
$id ='';
$lastname ='';
$firstname ='';
$birthdate ='';
$phone ='';
$mail ='';
$action = form_open('patients/create');
$value_button = "Create patients item";
//echo 'ma page arborescence : views/patients/view.php ';
if (!empty($patients_item['id'])) {
    
    echo 'id patient = ' .$patients_item['id']. "<br>";
    echo 'modification possible !.... <br>';
    $id = $patients_item['id'];
    $lastname = $patients_item['lastname'];
    $firstname = $patients_item['firstname'];
    $birthdate = $patients_item['birthdate'];
    $phone = $patients_item['phone'];
    $mail = $patients_item['mail'];

    $action = form_open('patients/create/'.$patients_item['id']);
    $value_button = "Modify patients item";
}
echo ' depuis view.php patients par id <br><br><br>';
?>


<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?= $action; ?> 
<!-- //pour choix action  -->
     <input type="hidden" name="id" value="<?=$id?>"/>

    <label for="lastname">Nom</label>
    <input type="text" name="lastname" value="<?=$lastname?>"/><br /><br />

    <label for="firstname">Prénom</label>
    <input type="text" name="firstname" value="<?=$firstname?>" /><br /><br />

    <label for="birthdate">Dte naissance</label>
    <input type="date" name="birthdate" value="<?=$birthdate?>" /><br /><br />

    <label for="phone">Tel</label>
    <input type="tel" name="phone" value="<?=$phone?>" /><br /><br />
    
    <label for="email">mail</label>
    <input type="email" name="mail" value="<?=$mail?>" /><br /><br />

    <input type="submit" name="submit" value="<?=$value_button?>" /><br />

</form>

