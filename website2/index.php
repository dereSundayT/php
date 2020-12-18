/*
Super Globals :: are built in variables that are always availbel in all scopes
*/
<?php include './server-info.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Info</title>
</head>

<body>
    <div class="container">
        <h1> Server & File Info </h1>
        <?php if ($server) : ?>
            <ul class="list-group">
                <?php foreach ($server as $key => $value) : ?>
                    <li class="list-group-item"><strong> <?php echo $key; ?> : </strong> <?php echo $value; ?></li>

                <?php endforeach; ?>
            </ul>
        <?php endif; ?>



        <?php if ($client) : ?>
            <ul class="list-group">
                <?php foreach ($client as $key => $value) : ?>
                    <li class="list-group-item"><strong> <?php echo $key; ?> : </strong> <?php echo $value; ?></li>

                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

    </div>

</body>

</html>