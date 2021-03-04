<div>


<span><h2><a href="<?php echo site_url('patients/create'); ?>">Add NEW Patient</a></h2></span>
</div>

<br>
<table>
 <thead>
        <tr>
           <th>Nom</th>
            <th>Prénom</th>
            <th>Tél</th>
            <th> voir Détails</th>
         </tr>
        </thead>
        <tbody>
 <?php 
//echo 'ici  page arborescence : views/patients/index.php ';

foreach ($patients as $patients_item): ?>
<!-- <div class="main"> -->

        <tr>
                <td><?php echo $patients_item['lastname']; ?></td>
                <td><?php echo $patients_item['firstname'] .'by VB'; ?></td>
                <td><?php echo $patients_item['phone']; ?></td>
            <!-- <td><?php echo $patients_item['birthdate']; ?></td>
                <td><?php echo $patients_item['mail']; ?></td> -->
                <td><a href="<?php echo site_url('patients/'.$patients_item['phone']); ?>">détails</a></td>
        </tr>   
<?php endforeach; ?>

        </tbody>
        <tfoot>
          <td colspan="5"> nombre de patients /td>
        </tfoot>
      </table>
    </p>
  </section><br /><br />
  <hr />
