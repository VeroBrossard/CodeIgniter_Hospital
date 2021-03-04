<?php
//echo 'ma page arborescence : views/patients/view.php ';
echo ' depuis view.php patients par id <br><br><br>';
echo 'id patient = ' .$patients_item['id']. "<br>";
?>
<table>
  <thead>
    <tr>
      <th>Nom</th>
      <th>Prénom</th>
      <th>Tél</th>
      <th>date naissance</th>
      <th>email</th>
    </tr>
  </thead>
  <tr>
  <td> <?= $patients_item['lastname']; ?></td>
  <td><?= $patients_item['firstname']?></td>
  <td><?=  $patients_item['phone']; ?></td>
  <td><?= $patients_item['birthdate']; ?></td>
  <td><?= $patients_item['mail']; ?></td>
  </tr>
  <tr><td colspan="5"></td></tr>
  <tfoot>
          <td colspan="3"><a href="<?php echo site_url('patients/'); ?>">Supprimer</a> </td>
          <td colspan="2"><a href="<?php echo site_url('patients/create/'.$patients_item['id']); ?>">Modifier</a>
            </td>
        </tfoot>

  <tbody>
</table>