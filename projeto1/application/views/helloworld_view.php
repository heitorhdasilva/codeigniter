<?php
defined ('BASEPATH') OR exit('No direct script acces allowed');
?>
<!doctype html>
<html lang=pt-br>
<head>
    <title>CI helloworld</title>
</head>
<body>
    <?php foreach ($result as $row):?>
        <h3><?= $row['title'] ?></h3>
        <p><?= $row['text'] ?></p>
        <br />
    <?php endforeach; ?>
</body>
</html>
