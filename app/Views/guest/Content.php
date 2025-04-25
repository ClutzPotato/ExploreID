<?= view('layout/g_header') ?>
<?php
foreach ($province as $data) {
?>
    <div class="page-heading" style="background-image: url(<?= base_url() ?>/database/province/province_<?= $data->province_id ?>.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 transparent ms-3 pb-4 pt-1">
                    <div class="top-text header-text">

                        <h2><?= $data->province_name ?></h2>
                        <h6><?= $data->province_info ?></h6>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<div class="category-post">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="naccs">
                    <div class="grid">
                        <div class="row">
                            <div class="col">
                                <div class="menu" style="width: 100%;">
                                    <div class="first-thumb active">
                                        <div class="thumb">
                                            <span class="icon"><img src="<?= base_url('img/icon_province.png') ?>" alt="">
                                                <h4>Culture</h4>
                                            </span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="thumb">
                                            <span class="icon"><img src="<?= base_url('img/icon_food.png') ?>" alt="">
                                                <h4>Cuisine</h4>
                                            </span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="thumb">
                                            <span class="icon"><img src="<?= base_url('img/icon_instrument.png') ?>" alt="">
                                                <h4>Songs<br>&nbsp;Instruments<br>&nbsp;Dances</h4>
                                            </span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="thumb">
                                            <span class="icon"><img src="<?= base_url('img/icon_landmark.png') ?>" alt="">
                                                <h4>Landmarks</h4>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="last-thumb">
                                        <div class="thumb">
                                            <span class="icon"><img src="<?= base_url('img/icon_story.png') ?>" alt="">
                                                <h4>Folk&nbsp;Tales</h4>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <ul class="nacc">
                                    <li class="active">
                                        <div class="thumb">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="top-content">
                                                        <div class="row">
                                                            <?php
                                                            foreach ($clothes as $data) {
                                                            ?>
                                                                <div class="col-lg-9">
                                                                    <h4>Traditional Clothes: <?= $data->clothes_name ?></h4>
                                                                    <p><?= $data->clothes_info ?></p>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <a href="<?= base_url() ?>/database/clothes/clothes_<?= $data->clothes_id ?>.jpg" data-lightbox="image-1"><img src="<?= base_url() ?>/database/clothes/clothes_<?= $data->clothes_id ?>.jpg" alt=""></a>
                                                                </div>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="description">
                                                        <div class="row">
                                                            <?php
                                                            foreach ($house as $data) {
                                                            ?>
                                                                <div class="col-lg-9">
                                                                    <h4>Traditional House: <?= $data->house_name ?></h4>
                                                                    <p><?= $data->house_info ?></p>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <a href="<?= base_url() ?>/database/house/house_<?= $data->house_id ?>.jpg" data-lightbox="image-1"><img src="<?= base_url() ?>/database/house/house_<?= $data->house_id ?>.jpg" alt=""></a>
                                                                </div>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb">
                                            <div class="row">
                                                <?php
                                                foreach ($food as $data) {
                                                ?>
                                                    <div class="col-lg-12">
                                                        <div class="description">
                                                            <div class="row">
                                                                <div class="col-lg-9">
                                                                    <h4><?= $data->food_name ?></h4>
                                                                    <p><?= $data->food_info ?></p>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <a href="<?= base_url() ?>/database/food/food_<?= $data->food_id ?>.jpg" data-lightbox="image-1"><img src="<?= base_url() ?>/database/food/food_<?= $data->food_id ?>.jpg" alt=""></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <div class="thumb">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="description">
                                                            <div class="row">
                                                                <?php
                                                                foreach ($instrument as $data) {
                                                                ?>
                                                                    <div class="col-lg-9">
                                                                        <h4>Folk Musical Instrument: <?= $data->instrument_name ?></h4>
                                                                        <p><?= $data->instrument_info ?></p>
                                                                    </div>
                                                                    <div class="col-lg-3">
                                                                        <a href="<?= base_url() ?>/database/instrument/instrument_<?= $data->instrument_id ?>.jpg" data-lightbox="image-1"><img src="<?= base_url() ?>/database/instrument/instrument_<?= $data->instrument_id ?>.jpg" alt=""></a>
                                                                    </div>
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    foreach ($song as $data) {
                                                    ?>
                                                        <div class="col-lg-12">
                                                            <div class="description">
                                                                <div class="row">
                                                                    <div class="col-lg-9">
                                                                        <h4>Folk Song: <?= $data->song_name ?></h4>
                                                                        <p><?= $data->song_info ?></p>
                                                                    </div>
                                                                    <div class="col-lg-3">
                                                                        <a href="<?= base_url() ?>/database/song/song_<?= $data->song_id ?>.jpg" data-lightbox="image-1"><img src="<?= base_url() ?>/database/song/song_<?= $data->song_id ?>.jpg" alt=""></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                    <?php
                                                    foreach ($dance as $data) {
                                                    ?>
                                                        <div class="col-lg-12">
                                                            <div class="description">
                                                                <div class="row">
                                                                    <div class="col-lg-9">
                                                                        <h4>Folk Dance: <?= $data->dance_name ?></h4>
                                                                        <p><?= $data->dance_info ?></p>
                                                                    </div>
                                                                    <div class="col-lg-3">
                                                                        <a href="<?= base_url() ?>/database/dance/dance_<?= $data->dance_id ?>.jpg" data-lightbox="image-1"><img src="<?= base_url() ?>/database/dance/dance_<?= $data->dance_id ?>.jpg" alt=""></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <div class="thumb">
                                                <div class="row">
                                                    <?php
                                                    foreach ($landmark as $data) {
                                                    ?>
                                                        <div class="col-lg-12">
                                                            <div class="description">
                                                                <div class="row">
                                                                    <div class="col-lg-9">
                                                                        <h4><?= $data->landmark_name ?></h4>
                                                                        <p><?= $data->landmark_info ?></p>
                                                                    </div>
                                                                    <div class="col-lg-3">
                                                                        <a href="<?= base_url() ?>/database/landmark/landmark_<?= $data->landmark_id ?>.jpg" data-lightbox="image-1"><img src="<?= base_url() ?>/database/landmark/landmark_<?= $data->landmark_id ?>.jpg" alt=""></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <div class="thumb">
                                                <div class="row">
                                                    <?php
                                                    foreach ($story as $data) {
                                                    ?>
                                                        <div class="col-lg-12">
                                                            <div class="description">
                                                                <div class="row">
                                                                    <div class="col-lg-9">
                                                                        <h4><?= $data->story_name ?></h4>
                                                                        <p><?= $data->story_info ?></p>
                                                                    </div>
                                                                    <div class="col-lg-3">
                                                                        <a href="<?= base_url() ?>/database/story/story_<?= $data->story_id ?>.jpg" data-lightbox="image-1"><img src="<?= base_url() ?>/database/story/story_<?= $data->story_id ?>.jpg" alt=""></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= view('layout/g_footer') ?>