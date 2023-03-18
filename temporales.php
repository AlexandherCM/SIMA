<?php if (isset($_GET['mensaje']) && isset($_GET['color'])) { ?>

    <div class="border border-1 alert alert-<?= $_GET['color']; ?> alert-dismissible fade show" role="alert">
        <?= $_GET['mensaje']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
    //session_unset();
} ?>


<?php
if (isset($_SESSION['mensaje'])) { ?>

    <div class="border border-1 alert alert-<?= $_SESSION['color']; ?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['mensaje']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php session_unset();
} ?>

<?php
header("Location: http://localhost/php/SIMA/Index.php?mensaje={$_SESSION['mensaje']}&color={$_SESSION['color']}");
?>