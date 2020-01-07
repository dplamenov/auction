<?php
$title = 'Welcome';
include 'header.php';
?>
<h1>Welcome to Auction System</h1>
<h3>Login</h3>
<form action="index.php" method="post">
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

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>