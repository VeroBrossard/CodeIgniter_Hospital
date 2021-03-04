<div>


<span><h2><a href="<?php echo site_url('patients/create'); ?>">Add NEW Patient</a></h2></span>

</div>

<br>

Vers PAGE ajout articles à la table... <br>
        <!-- CodeIgniterHospital/index.php/news/create  -->
        <!-- <p><a href="<?php echo site_url('patients/create'); ?>">ADD NEW PATIENT PLEASE</a></p> -->
<?php 
echo 'ici  page arborescence : views/patients/index.php ';

foreach ($patients as $patients_item): ?>

        <h3><?php echo $patients_item['firstname'] .'by VB'; ?></h3>
        <div class="main">
                <?php echo $patients_item['lastname']; ?>
                <?php echo $patients_item['phone']; ?>
                <?php echo $patients_item['birthdate']; ?>
                <?php echo $patients_item['mail']; ?>
        </div>
       <!--  essai bis  CodeIgniterHospital/index.php/news/article1  -->
        <p><a href="<?php echo site_url('patients/'.$patients_item['phone']); ?>">View patient détails</a></p>


<?php endforeach; ?>

