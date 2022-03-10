<?php

require_once("../includes/db.php");

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>ECF PHP - Edit user</title>
</head>
<body>

<?php include("../includes/header.php"); ?>

<main class="container">
    <h2>Edit user :</h2>
    <hr/>

    <form method="post">
        <input type="hidden" name="id" value="user_id"/>
        <div class="form-group">
            <label>Name</label>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Firstname" value="current firstname" />
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Lastname" value="current lastname" />
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="something@example.com" value="current email" />
        </div>
        <div class="form-group">
            <label for="company">Company</label>
            <input type="text" class="form-control" id="company" name="company" placeholder="Company Inc." value="current company" />
        </div>
        <div class="form-group">
            <label for="job">Job</label>
            <input type="text" class="form-control" id="job" name="job" placeholder="Employee" value="current job" />
        </div>
        <div class="form-group">
            <label>Address / City / Country</label>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" id="address" name="address" placeholder="123 st. placeholder" value="current address" />
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="city" name="city" placeholder="Democity" value="current city" />
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="country" name="country" placeholder="Exampland" value="current country" />
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="X-XXX-XXX-XXX" value="current phone" />
        </div>
        <div class="form-group">
            <label for="avatar">Avatar URL</label>
            <input type="text" class="form-control" id="avatar" name="avatar" placeholder="http://example.com/image.png" value="current avatar" />
        </div>
        <div class="form-group text-right">
            <input type="submit" class="btn btn-primary" name="user" value="Edit user" />
        </div>
    </form>

</main>

</body>
</html>
