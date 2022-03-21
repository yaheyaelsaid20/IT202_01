<?php
require(__DIR__ . "/../../lib/functions,php");
?>
<form onsubmit="return validate(this)" method="POST">
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" required />
    </div>
    <div>
        <label for="pw">Password</label>
        <input type="password" id="pw" name="password" required minlength="8" />
    </div>
    <div>
        <label for="confirm">Confirm</label>
        <input type="password" name="confirm" required minlength="8" />
    </div>
    <input type="submit" value="Register" />
</form>
<script>
    function validate(form) {
        if(isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["confirm"])){
            $email = se($_POST, "email","",false);
            $password = se($_POST,"password","",false);
            $confirm= se($_POST, "confirm", "", false);
        }
        

        return true;
    }
</script>
<?php
 if(isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["confirm"])){
     $email- $_POST["email"];
     $password = $_POST["password"];
     $confirm = $_POST["confirm"];
 }
?>