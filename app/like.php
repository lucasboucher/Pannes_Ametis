<!DOCTYPE html>
<?php 
$connection=mysqli_connect('89.234.180.29','isn','0k3k0fE^','isn') or die(mysqli_error());
$post = $connection->query("SELECT * FROM likes ORDER BY id");
//$likecount=$post['like_count'];

while($all = $post->fetch_assoc())
{
    $likecount=$all['like_count'];
}
?>

<html>

<head>
    <link rel="stylesheet" href="style.css"/>
    <script src="https://kit.fontawesome.com/5b23931d65.js" crossorigin="anonymous"></script>
</head>


<div class="like">
        <button class="btn like"><i class="far fa-heart"></i> <?php echo $likecount?></button>
        <button class="btn like"><i class="fas fa-heart-broken"></i> <?= $post->dislike_count ?></button>
</div>

</html>