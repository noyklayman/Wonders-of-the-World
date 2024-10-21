<?php
include './inc/functions.inc.php';
include './inc/images.inc.php';
?>

<?php include './views/header.php'; ?>

<?php if (!empty($_GET['image']) && !empty($imageTitles[htmlspecialchars($_GET['image'])])): ?>
    <?php 
        $image = htmlspecialchars($_GET['image']);
        $imageTitle = htmlspecialchars($imageTitles[$image]);
        $imageDescription = htmlspecialchars($imageDescriptions[$image]);
    ?>

    <div class="image-container">
        <h2><?php echo $imageTitle; ?></h2>
        <img src="./images/<?php echo rawurlencode($image); ?>" alt="<?php echo $imageTitle; ?>" />
        <p><?php echo nl2br($imageDescription); ?></p>
    </div>
<?php else: ?>
    <div class="notice">
        This image could not be found.
    </div>
<?php endif; ?>

<a href="gallery.php">Back to gallery</a>

<?php include './views/footer.php'; ?>

<style>
    .image-container {
        text-align: center;
        margin: 20px auto;
        width: 50%;
    }
    .image-container img {
        width: 600px; 
        height: 500px;
        object-fit: cover; 
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 10px;
    }
    .image-container h2 {
        font-size: 24px;
        margin-bottom: 10px;
    }
    .image-container p {
        font-size: 16px;
        line-height: 1.6;
        margin-top: 10px;
        text-align: left; 
    }
    .notice {
        text-align: center;
        color: red;
        font-size: 18px;
        margin: 20px;
    }
</style>
