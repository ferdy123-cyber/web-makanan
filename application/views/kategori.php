<div class="hero">
    <img style="width: 100%; height: 250px; object-fit: cover" src="<?php echo $thumb ?>">
    <div class="hero-text"><?php echo $category ?></div>
</div>
<div class="content-recipe-bycategory row">
    <div class="left-content col-lg-8 row">
        <?php foreach ($recipeByCategory['results'] as $data) { ?>
        <a href="<?php base_url() ?>detail?key=<?php echo $data['key'] ?>" class="recipes col-12 col-lg-6 col-sm-6">
            <img class="img-newRecipe" src=" <?php echo $data['thumb'] ?>">
            <div class="detail">
                <i class="bi bi-alarm-fill"></i>
                <span><?php echo $data['times'] ?></span>
                <i style="font-size: 14px;" class="bi bi-person-fill"></i>
                <span><?php echo $data['portion'] ?></span>
                <i class="bi bi-bar-chart-line-fill"></i>
                <span><?php echo $data['dificulty'] ?></span>
            </div>
            <p><?php echo $data['title'] ?></p>
        </a>
        <?php } ?>
    </div>
    <div class="right-content col-lg-4">
        <p class="title-right">Resep terbaru</p>
        <?php foreach ($newRecipe['results'] as $data) { ?>
        <div class="new-recipes-ads d-flex justify-content-start align-items-center">
            <img src="<?php echo $data['thumb'] ?>" style="object-fit: cover;">
            <a href="<?php base_url() ?>detail?key=<?php echo $data['key'] ?>"><?php echo $data['title'] ?></a>
        </div>
        <?php } ?>
    </div>
</div>