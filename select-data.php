<?php
    include 'config.php';

    $sql = "SELECT * FROM message ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
?>

<div class="item">
    <h2><?php echo $row['ten']; ?></h2>
    <p><?php echo $row['noidung']; ?></p>
</div>

    <?php } } ?>