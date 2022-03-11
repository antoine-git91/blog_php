<?php

use App\User;

include_once("../public/index.php");

$new_user = new User;
$new_user->addUser();

?>

<h2>Add user :</h2>
<hr/>

<form method="post">
    <div class="form-group">
        <label>Name</label>
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Firstname" />
            </div>
            <div class="col">
                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Lastname" />
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="something@example.com" />
    </div>
    <div class="form-group">
        <label for="company">Company</label>
        <input type="text" class="form-control" id="company" name="company" placeholder="Company Inc." />
    </div>
    <div class="form-group">
        <label for="job">Job</label>
        <input type="text" class="form-control" id="job" name="job" placeholder="Employee" />
    </div>
    <div class="form-group">
        <label>Address / City / Country</label>
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" id="address" name="address" placeholder="123 st. placeholder" />
            </div>
            <div class="col">
                <input type="text" class="form-control" id="city" name="city" placeholder="Democity" />
            </div>
            <div class="col">
                <input type="text" class="form-control" id="country" name="country" placeholder="Exampland" />
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="phone">Phone Number</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="X-XXX-XXX-XXX" />
    </div>
    <div class="form-group">
        <label for="avatar">Avatar URL</label>
        <input type="text" class="form-control" id="avatar" name="avatar" placeholder="http://example.com/image.png" />
    </div>
    <div class="form-group text-right">
        <input type="submit" class="btn btn-primary" name="user" value="Create user" />
    </div>
</form>

