<?php
include_once('get_data.inc.php');

if ($_GET['ACTION'] == 'ADD') {
    //run query to add to table
    add_data($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="vendor/bootstrap-4.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/common.css">
    <title>Project 2</title>
</head>
<body class="container-fluid">
<div class="common-margin-top-50 row text-center common-font-size-lg common-margin-20">
    <div class="col-sm-12">
        payments due:
    </div>
</div>
<div class="common-margin-top-30 row text-center common-margin-top-20 common-margin-bottom-10">
    <div class="col-sm-12 cente">
        today is <?php echo date("m/d/Y") ?>
    </div>
</div>
<div class="row">
    <div class="dropdown show common-block-centering">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
           aria-haspopup="true" aria-expanded="false">
            filter options
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="/results.php?ACTION=VIEW&FILTER=P">pending</a>
            <a class="dropdown-item" href="/results.php?ACTION=VIEW&FILTER=D">past due</a>
            <a class="dropdown-item" href="/results.php?ACTION=VIEW&FILTER=M">monthly</a>
            <a class="dropdown-item" href="/results.php?ACTION=VIEW&FILTER=1">one time</a>
            <a class="dropdown-item" href="/results.php?ACTION=VIEW&FILTER=O">other</a>
        </div>
    </div>
</div>
<div class="col-sm-12 text-center">
</div>
<div class="">
    <?php view_data() ?>
</div>
<div class="common-margin-top-30 row text-center common-font-size-lg common-margin-20">
    <div class="col-sm-12">
        <a class="text-center" href="/index.php">ADD AN EVENT</a>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>


</body>
</html>







