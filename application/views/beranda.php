<p style="padding-top: 80px;" class="text-center title-category">Telusuri berdasarkan</p>
<div class="chategory row justify-content-center">
    <?php foreach ($chategory as $data) { ?>
    <a href="<?php echo base_url() ?>kategori?key=<?php echo $data['key'] ?>&thumb=<?php echo $data['dekstop-thumb'] ?>&category=<?php echo $data['category'] ?>"
        class="box col-12 col-lg-4 col-sm-6">
        <img class="img-chategory" src=" <?php echo $data['thumb'] ?>">
        <div class="text-category"><?php echo $data['category'] ?></div>
    </a>
    <?php } ?>
</div>
<p class="text-center title-newRecipe">Resep terbaru</p>
<div class="newRecipe row justify-content-center">
    <?php foreach ($newRecipe['results'] as $data) { ?>
    <a href="<?php echo base_url() ?>detail?key=<?php echo $data['key'] ?>" class="recipes col-12 col-lg-4 col-sm-6">
        <img class="img-newRecipe" src="<?php echo $data['thumb'] ?>">
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