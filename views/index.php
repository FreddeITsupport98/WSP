<?php
include 'header.php';
?>

<div class="container px-5">

<?php foreach ($result as $row): ?>
    <?php include 'card.php'; ?>
<?php endforeach ?>

</div>

<?php
    include 'footer.php';
?>