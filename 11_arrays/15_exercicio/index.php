<?php

  $pessoas = [
    'Eduardo' => 35,
    'Fernando' => 39,
    'Denilson' => 41
  ]

?>

<table border="1px">

  <tr>
    <th>Nome</th>
    <th>Idade</th>
  </tr>
  <?php foreach($pessoas as $nome => $idade): ?>
    <tr>
      <td><?= $nome; ?></td>
      <td><?= $idade; ?></td>
    </tr>
    <?php endforeach ?>

  

</table>