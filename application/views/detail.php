<div class="content-recipe-bycategory row">
    <div class="left-content col-lg-8" style="padding-top: 110px; text-align:center; ">
        <p class="detail-recipe-title"><?php echo $detailRecipe['results']['title'] ?></p>
        <div class="detail" style="font-size: 16px;">
            <i class="bi bi-alarm-fill"></i>
            <span><?php echo $detailRecipe['results']['times'] ?></span>
            <i style="font-size: 18px;" class="bi bi-person-fill"></i>
            <span><?php echo $detailRecipe['results']['servings'] ?></span>
            <i class="bi bi-bar-chart-line-fill"></i>
            <span><?php echo $detailRecipe['results']['dificulty'] ?></span>
        </div>
        <div class="author">
            <span><?php echo $detailRecipe['results']['author']['user'] ?></span> |
            <span><?php echo $detailRecipe['results']['author']['datePublished'] ?></span>
        </div>
        <div class="img-detail">
            <img src="<?php echo $detailRecipe['results']['thumb'] ?>">
        </div>
        <p class='detail-desc'><?php echo $detailRecipe['results']['desc'] ?></p>
        <p style="font-size: 30px; margin-top:20px; font-weight:600">Bahan bahan</p>
        <div class="needItem row">
            <?php foreach ($detailRecipe['results']['needItem'] as $data) { ?>
            <div class="col-12 item d-flex justify-content-center align-items-center">
                <img src='<?php echo $data['thumb_item'] ?>'>
                <div class="need-title text-start">
                    <p style="font-size: 13px;">Yang diperlukan:</p>
                    <p style="font-size: 18px; font-weight : 600"><?php echo $data['item_name'] ?></p>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="ingredient row">
            <p style="font-size: 24px; color:#0f5b86; font-weight:700; opacity: 0.8; text-align: left">Bahan</p>
            <?php foreach ($detailRecipe['results']['ingredient'] as $data) { ?>
            <div class="col-md-6 list-ingredient">
                <div class="d-flex">
                    <i class="bi bi-arrow-right-short"></i>
                    <p style="font-weight: 600; margin-left:5px; color: #262729;"><?php echo $data ?></p>
                </div>
            </div>
            <?php } ?>
        </div>
        <p style="font-size: 30px; margin-top:20px; font-weight:600">Cara membuat</p>
        <div class="step row">
            <?php foreach ($detailRecipe['results']['step'] as $data) { ?>
            <div class="col-md-12 list-ingredient">
                <div class="d-flex">
                    <i class="bi bi-circle-fill" style="font-size: 16px; font-weight: 500; color:#0f5b86;"></i>
                    <p
                        style="font-size: 18px; margin-left:15px; color: #262729; width: calc(100% - 34px);word-wrap: break-word;">
                        <?php echo $data ?></p>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <div class="right-content col-lg-4" style="margin-top: 30px;">
        <p class="title-right">Resep terbaru</p>
        <?php foreach ($newRecipe['results'] as $data) { ?>
        <div class="new-recipes-ads d-flex justify-content-start align-items-center">
            <img src="<?php echo $data['thumb'] ?>" style="object-fit: cover;">
            <a href="<?php echo base_url() ?>detail?key=<?php echo $data['key'] ?>"><?php echo $data['title'] ?></a>
        </div>
        <?php } ?>
    </div>
</div>