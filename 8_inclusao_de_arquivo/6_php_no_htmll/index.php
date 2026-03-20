<?php

   include_once "backend.php";


?>


<p>Bem vindo, <?= $nome ?></p>
<p>Nossos produtos: </p>

<ul>
   <?php foreach ($produtos as $produto): ?>
      <li><?= $produto; ?></li>
   <?php endforeach; ?> 
</ul>

<p>teste </p>