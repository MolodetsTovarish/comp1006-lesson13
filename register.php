<?php

$page_title = 'Register';
require_once('header.php'); ?>

<h1>User Registration</h1>
<form method="post" action="save-registration.php" class="form-horizontal">
    <div class="form-group">
        <label for="username" class="col-sm-2">Username:</label>
        <input name="username" />
    </div>
    <div class="form-group">
        <label for="password" class="col-sm-2">Password:</label>
        <input type="password" name="password" />
    </div>
    <div class="form-group">
        <label for="confirm" class="col-sm-2">Confirm Password:</label>
        <input type="password" name="confirm" />
    </div>
    <div class="g-recaptcha" data-sitekey="6LcPmgQTAAAAAO8CDeB-fKKVyUOikLev1GR-LORv"></div>
    <div class="col-sm-offset-2">
        <input type="submit" value="Register" class="btn btn-primary" />
    </div>
</form>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>


<?php require_once('footer.php'); ?>
