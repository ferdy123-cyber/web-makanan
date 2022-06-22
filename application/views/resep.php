<div class="content-recipe-bycategory row">
    <div class="left-content col-lg-8 row" style="padding-top: 90px;">
        <p style="text-align: center; font-size: 38px; font-weight: 600; color: #262729;">Resep makanan</p>
        <p style="text-align: center; margin-bottom:30px; color: #262729;">Inilah tempatnya segala resep masakan
            enak! MAHI telah
            siapkan beragam
            hidangan seru bergaya rumahan,
            tepat sebagai masakan sehari-hari.</p>
        <?php foreach ($allRecipe['results'] as $data) { ?>
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
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a href="<?php base_url() ?>resep" class="page-link">
                        < Sebelumnya</a>
                </li>
                <li class="page-item disabled"><a class="page-link" href="<?php base_url() ?>resep">...</a></li>
                <!-- <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li> -->
                <li class="page-item"><a class="page-link" href="<?php base_url() ?>resep">Berikutnya ></a></li>
            </ul>
        </nav>
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