<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Upload form</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>
<table class="table table-striped">
    <tr>
        <td>Number</td>
        <td>Name</td>
        <td>Size</td>
        <td>Delete</td>
    </tr>
    <?php
    foreach($arr as $key =>$val){
        ?>
        <tr>
            <td><?php echo $key; ?></td>
            <td><?php echo $val; ?></td>
            <td><?php echo $countSize; ?> </td>
            <td><a href="?valdelete=<?php echo $val; ?>">DELETE</a></td>
        </tr>
    <?php  } ?>
</table>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>


