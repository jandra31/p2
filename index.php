<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="vendor/bootstrap-4.1.3-dist/css/bootstrap.css">
    <!-- common/custom css stiles -->
    <link rel="stylesheet" href="css/common.css">
    <title>Project 2</title>
</head>

<body class="container-fluid">
<div class="common-margin-top-30 col-md-8 offset-md-2 text-center common-font-size-lg common-margin-top-50">
    Welcome, if you want to see the current list click <a class="font-weight-bold" href="/results.php?ACTION=VIEW">here</a>
</div>
<div class="col-md-8 offset-md-2 common-margin-top-20">
    <form action="results.php?ACTION=ADD" method="post">
        <div class="row">
            <div class="col-md-4 offset-md-2 input-group-text">
                <span class="input-group-text" id="basic-addon1">Payment Name*</span>
                <input class="input-group-text width100 form-control" type="text" name="EVENT_NAME" required
                       aria-describedby="basic-addon1">
            </div>
            <div class="col-md-4  input-group-text">
                <span class="input-group-text" id="basic-addon2">Due By*:</span>
                <input class="input-group-text width100 form-control" type="date" name="DUE_DATE"
                       aria-describedby="basic-addon2" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-2 input-group-text ">
                <span class="input-group-text common-min-height-10" id="basic-addon3">Payment Name</span>
                <input class="input-group-text width100 form-control common-min-height-10 width100" type="textarea"
                       name="EVENT_DESCRIPTION" aria-describedby="basic-addon3">
            </div>
        </div>
        <div class="row">
            <div class="input-group-text col-md-8 offset-md-2">
                <div class="">
                    <label class="input-group-text" for="inputGroupSelect01">Type*</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="EVENT_TYPE" required>
                    <option selected disabled>Choose...</option>
                    <option value="monthly">Monthly</option>
                    <option value="one time">One Time</option>
                    <option value="other">other</option>
                </select>
            </div>
        </div>
        <div class="col-md-8 offset-md-2 common-font-size-sm text-right">*required</div>
        <div class="text-center">
            <button class="btn btn-outline-secondary common-width-15 common-margin-top-10" type="submit" value="FORM-SUMBMIT">
                ADD
            </button>
        </div>
</div>
</form>
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






