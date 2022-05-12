<?php
require(__DIR__ . "/../../partials/nav.php");
if (isset($_POST["deposit"])) {
    //insert into Accounts user_id, null account number, account_type
    //left pad last insert id to make an accont number
    //update the account number for this record by the account id
    //do transaction for deposit
    //refresh account balance
    

    $account_number = $_POST["account_number"];
    $account_type = $_POST["account_type"]; 
    $user= get_user_id();
    $balance = $_POST["balance"];
    $db = getDB();
    $stmt = $db->prepare("INSERT INTO Accounts (account_number, account_type, user_id, balance) VALUES(:account_number, :account_type, :user, :balance)");
    $r = $stmt->execute([
        ":account_number" => $account_number,
        ":account_type"=> $account_type,
        ":user" => $user,
        ":balance" => $balance
    ]);

    if($r){
      flash("Created successfully with id: " . $db->lastInsertId());
    }
    else{
      $e = $stmt->errorInfo();
      flash("Error creating: " . var_export($e, true));
    }

}   

?>
<div class="container-fluid">
    <h1>Create Account</h1>
    <form method="POST">
        <select name="account_type">
        <option value = "checking">checking</option>
        <option value =  "saving">saving</option>
        <option value = "loan">loan</option>
        <option value = "world">world</option>
        </select>
        <input type="number" name="deposit" />
        <input type="submit" class="btn btn-info" value="Open Account" />
    </form>
</div>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>