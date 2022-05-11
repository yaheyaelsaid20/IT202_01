<?php
require_once(__DIR__ . "/../../partials/nav.php");
//TODO create lookup query and fetch results, set them to $results
$user = get_user_id();
  if(isset($user)){
  $results = [];
  $db = getDB();
  $stmt = $db->prepare("SELECT Accounts.user_id as UserID, Accounts.id as AccID, account_number, account_type, balance FROM Accounts WHERE Accounts.user_id = :q LIMIT 5");
  $r = $stmt->execute([":q" => $user]);
    if($r){
      $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    else{
      flash("There was a problem listing your accounts"); 
    }
  }
?>
<h1>Account History</h1>
<?php if (count($results) == 0) : ?>
    <p>No results to show</p>
<?php else : ?>
    <table class="table">
        <?php foreach ($results as $index => $record) : ?>
            <?php if ($index == 0) : ?>
                <thead>
                    <?php foreach ($record as $column => $value) : ?>
                        <th><?php se($column); ?></th>
                    <?php endforeach; ?>
                    <th>Actions</th>
                </thead>
            <?php endif; ?>
            <tr>
                <?php foreach ($record as $column => $value) : ?>
                    <td><?php se($value, null, "N/A"); ?></td>
                <?php endforeach; ?>
                <td>
                    <!-- other action buttons can go here-->
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>

<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>
