<?php
    include 'header.php';
?>

<div class="container px-5">

<?php
    include 'card.php';

    if (count($result) > 0) {
        echo "<pre>" . print_r($result, 1) . "</pre>";
    }
?>

</div>

<?php
    include 'footer.php';
?>