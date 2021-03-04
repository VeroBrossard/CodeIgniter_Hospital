<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('patients/create'); ?>

    <label for="lastname">Nom</label>
    <input type="text" name="lastname" /><br /><br />

    <label for="firstname">Prénom</label>
    <input type="text" name="firstname" /><br /><br />

    <label for="birthdate">Dte naissance</label>
    <input type="date" name="birthdate" /><br /><br />

    <label for="phone">Tel</label>
    <input type="tel" name="phone" /><br /><br />
    
    <label for="email">mail</label>
    <input type="email" name="mail" /><br /><br />

    <input type="submit" name="submit" value="Create patients item" /><br />

</form>