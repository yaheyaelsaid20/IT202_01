<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<div class="container-fluid">
    <h1>Dashboard</h1>
    <div class="lead text-center mb-3">
    <li><a href="<?php echo get_url('accounts.php'); ?>">Home</a></li>
    <li><a href="<?php echo get_url('account_history.php'); ?>">Home</a></li>
    <li><a href="<?php echo get_url('create_account.php'); ?>">Home</a></li>
    <li><a href="<?php echo get_url('transaction.php'); ?>">Home</a></li>
    <li><a href="<?php echo get_url('profile.php'); ?>">Profile</a></li>
        List the links from the proposal
    </div>
</div>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>