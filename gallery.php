<?php
include './inc/functions.inc.php';
include './inc/images.inc.php';

?>
<?php include './views/header.php';?>

<div class="gallery-container">
    <?php foreach($imageTitles AS $src => $title): ?>
        <a href="image.php?<?php echo http_build_query(['image' => $src]); ?>" class="gallery-item">
            <h3><?php echo e($title); ?></h3>
            <img src="./images/<?php echo rawurlencode($src); ?>" alt="<?php echo e($title); ?>" />
        </a>
    <?php endforeach; ?>
    </div>
    
<?php include './views/footer.php';?>

<style>
    .gallery-container {
        display: grid;
        grid-template-columns: repeat(3, 1fr); 
        gap: 10px; 
        max-width: 800px;
        margin: 0 auto; 
    }
    .gallery-item {
        text-align: center; 
    }
 
    .gallery-item h3 {
        font-size: 18px;
        margin-top: 10px;
    }
</style>