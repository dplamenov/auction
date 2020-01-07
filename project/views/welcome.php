<?php
$title = 'Welcome';
$js = ['welcome.js', 'user.js'];
include 'header.php';
?>
<h1>Welcome to Auction System</h1>
<div id="errors">

</div>
<div id="login">
    <button type="button" class="btn btn-primary" onclick="toRegister()">Register</button>
    <h3>Login</h3>

    <div class="input-group mb-3" style="width: 600px">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">&#x1f4e7;</span>
        </div>
        <input type="text" id="login_email" class="form-control" placeholder="Email" aria-label="Username"
               aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3" style="width: 600px">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">&#x1f512;</span>
        </div>
        <input type="password" id="login_password" class="form-control" placeholder="Password" aria-label="Username"
               aria-describedby="basic-addon1">
    </div>
    <input type="hidden" name="type" value="login">
    <button type="submit" class="btn btn-primary" onclick="login()">Submit</button>
</div>
<div id="register" style="display: none">
    <button type="button" class="btn btn-primary" onclick="toLogin()">Login</button>
    <h3>Register</h3>
        <div class="input-group mb-3" style="width: 600px">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">&#x1f4e7;</span>
            </div>
            <input type="text" name="email" class="form-control" placeholder="Email" aria-label="Username"
                   aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3" style="width: 600px">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">&#x1f512;</span>
            </div>
            <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Username"
                   aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3" style="width: 600px">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">&#x1f512;</span>
            </div>
            <input type="password" name="password2" class="form-control" placeholder="Repeat password"
                   aria-label="Username"
                   aria-describedby="basic-addon1">
        </div>
        <input type="hidden" name="type" value="register">
        <button class="btn btn-primary">Submit</button>
</div>
</body>
</html>