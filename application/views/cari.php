<div class="contentSearch" style="padding-top: 95px;">
    <p style="font-size: 38px;font-weight:600; margin-left:10px">Hasil untuk <span
            style='color: #1a7db6;'><?php echo $key ?></span>
    </p>
    <div class="left-content row">
        <?php foreach ($result['results'] as $data) { ?>
        <a href="<?php base_url() ?>detail?key=<?php echo $data['key'] ?>" class="recipes col-12 col-lg-4 col-sm-6">
            <img class="img-newRecipe" src=" <?php echo $data['thumb'] ?>">
            <div class="detail">
                <i class="bi bi-alarm-fill"></i>
                <span><?php echo $data['times'] ?></span>
                <i style="font-size: 14px;" class="bi bi-person-fill"></i>
                <span><?php echo $data['serving'] ?></span>
                <i class="bi bi-bar-chart-line-fill"></i>
                <span><?php echo $data['difficulty'] ?></span>
            </div>
            <p><?php echo $data['title'] ?></p>
        </a>
        <?php } ?>
    </div>
</div>