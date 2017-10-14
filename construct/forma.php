<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
<?php //include_once 'construct.php'?>
<?php include_once 'logic.php'?>


<div class="container">
    <form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="post">
        <div class="form-group row">
            <label class="col-sm-8 offset-sm-3 col-form-label">
                Brand:
                <div class="col-sm-8 ">
                    <input type="text" name="input[brand]" class="form-control" id="inputName" placeholder="">
                </div>
            </label>
        </div>
        <div class="form-group row">
            <label class="col-sm-8 offset-sm-3 col-form-label">
                Model:
                <div class="col-sm-8">
                    <input type="text" name="input[model]" class="form-control" id="inputName" placeholder="">
                </div>
            </label>
        </div>
        <div class="form-group row">
            <label class="col-sm-8 offset-sm-3 col-form-label">
                Year:
                <div class="col-sm-8">
                    <input type="text" name="input[year]" class="form-control" id="inputName" placeholder="">
                </div>
            </label>
        </div>
        <div class="form-group row">
            <div class="offset-sm-5 col-sm-8">
                <button type="submit" class="btn btn-primary">Action</button>
            </div>
        </div>
    </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
</body>
</html>