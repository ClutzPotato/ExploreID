<?= view('layout/g_header') ?>
<div class="page-heading" style="background-image: url(<?= base_url('img/heading-search.jpg') ?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="top-text header-text">
                    <h6>Search Results For:</h6>
                    <h2>Item listings of</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="listing-page my-5">
    <div class="container">
        <div class="naccs">
            <div class="grid">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="menu">
                            <?php
                            if ($clothes != [] || $house != []) { ?>
                                <div class="thumb active">
                                    <div class="thumb">
                                        <span class="icon"><img src="<?= base_url('img/icon_province.png') ?>" alt=""></span>
                                        Culture
                                    </div>
                                </div>
                            <?php }
                            ?>
                            <?php
                            if ($food != []) { ?>
                                <div>
                                    <div class="thumb">
                                        <span class="icon"><img src="<?= base_url('img/icon_food.png') ?>" alt=""></span>
                                        Cuisine
                                    </div>
                                </div>
                            <?php }
                            ?>
                            <?php
                            if ($instrument != [] || $song != [] || $dance != []) { ?>
                                <div>
                                    <div class="thumb">
                                        <span class="icon"><img src="<?= base_url('img/icon_instrument.png') ?>" alt=""></span>
                                        Songs&nbsp;Dance&nbsp;Instruments
                                    </div>
                                </div>
                            <?php }
                            ?>
                            <?php
                            if ($landmark != []) { ?>
                                <div class="thumb">
                                    <div class="thumb">
                                        <span class="icon"><img src="<?= base_url('img/icon_landmark.png') ?>" alt=""></span>
                                        Landmarks
                                    </div>
                                </div>
                            <?php }
                            ?>
                            <?php
                            if ($story != []) { ?>
                                <div class="thumb">
                                    <div class="thumb">
                                        <span class="icon"><img src="<?= base_url('img/icon_story.png') ?>" alt=""></span>
                                        Folk Tales
                                    </div>
                                </div>
                            <?php }
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <ul class="nacc">
                            <!-- first category listing of items -->
                            <?php
                            if ($clothes != [] || $house != []) { ?>
                                <li class="active">
                                    <div>
                                        <div class="col-lg-12">
                                            <div class="owl-carousel owl-listing">
                                                <div class="item">
                                                    <div class="row">
                                                        <?php
                                                        foreach ($clothes as $data) {
                                                        ?>
                                                            <div class="col-lg-12">
                                                                <div class="listing-item">

                                                                    <!-- <div class="left-image">
                                                                <a href="#"><img src="assets/images/listing-01.jpg" alt=""></a>
                                                                <div class="hover-content">
                                                                    <div class="main-white-button">
                                                                        <a href="contact.html"><i class="fa fa-eye"></i> Contact Now</a>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                                    <div class="right-content align-self-center">
                                                                        <a href="<?= base_url() ?>/content/?prov=<?= $data->province_id ?>">
                                                                            <h4><?= $data->clothes_name ?></h4>
                                                                        </a>
                                                                        <!-- <h6>by: Real ESTATE Agent</h6> -->
                                                                        <span class="price">
                                                                            <!-- <div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> -->
                                                                            <?= substr($data->clothes_info, 0, 200) ?>...
                                                                        </span>
                                                                        <!-- <span class="details">Details: <em>860 sq ft</em></span>
                                                                    <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2 Bedrooms<br><img src="assets/images/listing-icon-03.png" alt=""> 3 Bathrooms</span> -->
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        <?php } ?>
                                                        <?php
                                                        foreach ($house as $data) {
                                                        ?>
                                                            <div class="col-lg-12">
                                                                <div class="listing-item">

                                                                    <!-- <div class="left-image">
                                                                <a href="#"><img src="assets/images/listing-01.jpg" alt=""></a>
                                                                <div class="hover-content">
                                                                    <div class="main-white-button">
                                                                        <a href="contact.html"><i class="fa fa-eye"></i> Contact Now</a>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                                    <div class="right-content align-self-center">
                                                                        <a href="<?= base_url() ?>/content/?prov=<?= $data->province_id ?>">
                                                                            <h4><?= $data->house_name ?></h4>
                                                                        </a>
                                                                        <!-- <h6>by: Real ESTATE Agent</h6> -->
                                                                        <span class="price">
                                                                            <!-- <div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> -->
                                                                            <?= substr($data->house_info, 0, 200) ?>...
                                                                        </span>
                                                                        <!-- <span class="details">Details: <em>860 sq ft</em></span>
                                                                    <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2 Bedrooms<br><img src="assets/images/listing-icon-03.png" alt=""> 3 Bathrooms</span> -->
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php }
                            ?>
                            <?php
                            if ($food != []) { ?>
                            <!-- second category listing of items -->
                            <li>
                                <div>
                                    <div class="col-lg-12">
                                        <div class="owl-carousel owl-listing">
                                            <div class="item">
                                                <div class="row">
                                                    <?php
                                                    foreach ($food as $data) {
                                                    ?>
                                                        <div class="col-lg-12">
                                                            <div class="listing-item">

                                                                <!-- <div class="left-image">
                                                                <a href="#"><img src="assets/images/listing-01.jpg" alt=""></a>
                                                                <div class="hover-content">
                                                                    <div class="main-white-button">
                                                                        <a href="contact.html"><i class="fa fa-eye"></i> Contact Now</a>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                                <div class="right-content align-self-center">
                                                                    <a href="<?= base_url() ?>/content/?prov=<?= $data->province_id ?>">
                                                                        <h4><?= $data->food_name ?></h4>
                                                                    </a>
                                                                    <!-- <h6>by: Real ESTATE Agent</h6> -->
                                                                    <span class="price">
                                                                        <!-- <div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> -->
                                                                        <?= substr($data->food_info, 0, 200) ?>...
                                                                    </span>
                                                                    <!-- <span class="details">Details: <em>860 sq ft</em></span>
                                                                    <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2 Bedrooms<br><img src="assets/images/listing-icon-03.png" alt=""> 3 Bathrooms</span> -->
                                                                </div>

                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php }
                            ?>
                            <?php
                            if ($instrument != [] || $song != [] || $dance != []) { ?>
                            <!-- third category first page -->
                            <li>
                                <div>
                                    <div class="col-lg-12">
                                        <div class="owl-carousel owl-listing">
                                            <div class="item">
                                                <div class="row">
                                                    <?php
                                                    foreach ($instrument as $data) {
                                                    ?>
                                                        <div class="col-lg-12">
                                                            <div class="listing-item">

                                                                <!-- <div class="left-image">
                                                                <a href="#"><img src="assets/images/listing-01.jpg" alt=""></a>
                                                                <div class="hover-content">
                                                                    <div class="main-white-button">
                                                                        <a href="contact.html"><i class="fa fa-eye"></i> Contact Now</a>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                                <div class="right-content align-self-center">
                                                                    <a href="<?= base_url() ?>/content/?prov=<?= $data->province_id ?>">
                                                                        <h4><?= $data->instrument_name ?></h4>
                                                                    </a>
                                                                    <!-- <h6>by: Real ESTATE Agent</h6> -->
                                                                    <span class="price">
                                                                        <!-- <div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> -->
                                                                        <?= substr($data->instrument_info, 0, 200) ?>...
                                                                    </span>
                                                                    <!-- <span class="details">Details: <em>860 sq ft</em></span>
                                                                    <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2 Bedrooms<br><img src="assets/images/listing-icon-03.png" alt=""> 3 Bathrooms</span> -->
                                                                </div>

                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                    <?php
                                                    foreach ($song as $data) {
                                                    ?>
                                                        <div class="col-lg-12">
                                                            <div class="listing-item">

                                                                <!-- <div class="left-image">
                                                                <a href="#"><img src="assets/images/listing-01.jpg" alt=""></a>
                                                                <div class="hover-content">
                                                                    <div class="main-white-button">
                                                                        <a href="contact.html"><i class="fa fa-eye"></i> Contact Now</a>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                                <div class="right-content align-self-center">
                                                                    <a href="<?= base_url() ?>/content/?prov=<?= $data->province_id ?>">
                                                                        <h4><?= $data->song_name ?></h4>
                                                                    </a>
                                                                    <!-- <h6>by: Real ESTATE Agent</h6> -->
                                                                    <span class="price">
                                                                        <!-- <div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> -->
                                                                        <?= substr($data->song_info, 0, 200) ?>...
                                                                    </span>
                                                                    <!-- <span class="details">Details: <em>860 sq ft</em></span>
                                                                    <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2 Bedrooms<br><img src="assets/images/listing-icon-03.png" alt=""> 3 Bathrooms</span> -->
                                                                </div>

                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                    <?php
                                                    foreach ($dance as $data) {
                                                    ?>
                                                        <div class="col-lg-12">
                                                            <div class="listing-item">

                                                                <!-- <div class="left-image">
                                                                <a href="#"><img src="assets/images/listing-01.jpg" alt=""></a>
                                                                <div class="hover-content">
                                                                    <div class="main-white-button">
                                                                        <a href="contact.html"><i class="fa fa-eye"></i> Contact Now</a>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                                <div class="right-content align-self-center">
                                                                    <a href="<?= base_url() ?>/content/?prov=<?= $data->province_id ?>">
                                                                        <h4><?= $data->dance_name ?></h4>
                                                                    </a>
                                                                    <!-- <h6>by: Real ESTATE Agent</h6> -->
                                                                    <span class="price">
                                                                        <!-- <div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> -->
                                                                        <?= substr($data->dance_info, 0, 200) ?>...
                                                                    </span>
                                                                    <!-- <span class="details">Details: <em>860 sq ft</em></span>
                                                                    <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2 Bedrooms<br><img src="assets/images/listing-icon-03.png" alt=""> 3 Bathrooms</span> -->
                                                                </div>

                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php }
                            ?>
                            <?php
                            if ($landmark != []) { ?>
                            <!-- 4th category 1st page -->
                            <li>
                                <div>
                                    <div class="col-lg-12">
                                        <div class="owl-carousel owl-listing">
                                            <div class="item">
                                                <div class="row">
                                                    <?php
                                                    foreach ($landmark as $data) {
                                                    ?>
                                                        <div class="col-lg-12">
                                                            <div class="listing-item">

                                                                <!-- <div class="left-image">
                                                                <a href="#"><img src="assets/images/listing-01.jpg" alt=""></a>
                                                                <div class="hover-content">
                                                                    <div class="main-white-button">
                                                                        <a href="contact.html"><i class="fa fa-eye"></i> Contact Now</a>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                                <div class="right-content align-self-center">
                                                                    <a href="<?= base_url() ?>/content/?prov=<?= $data->province_id ?>">
                                                                        <h4><?= $data->landmark_name ?></h4>
                                                                    </a>
                                                                    <!-- <h6>by: Real ESTATE Agent</h6> -->
                                                                    <span class="price">
                                                                        <!-- <div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> -->
                                                                        <?= substr($data->landmark_info, 0, 200) ?>...
                                                                    </span>
                                                                    <!-- <span class="details">Details: <em>860 sq ft</em></span>
                                                                    <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2 Bedrooms<br><img src="assets/images/listing-icon-03.png" alt=""> 3 Bathrooms</span> -->
                                                                </div>

                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php }
                            ?>
                            <?php
                            if ($story != []) { ?>
                            <li>
                                <div>
                                    <div class="col-lg-12">
                                        <div class="owl-carousel owl-listing">
                                            <div class="item">
                                                <div class="row">
                                                    <?php
                                                    foreach ($story as $data) {
                                                    ?>
                                                        <div class="col-lg-12">
                                                            <div class="listing-item">

                                                                <!-- <div class="left-image">
                                                                <a href="#"><img src="assets/images/listing-01.jpg" alt=""></a>
                                                                <div class="hover-content">
                                                                    <div class="main-white-button">
                                                                        <a href="contact.html"><i class="fa fa-eye"></i> Contact Now</a>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                                <div class="right-content align-self-center">
                                                                    <a href="<?= base_url() ?>/content/?prov=<?= $data->province_id ?>">
                                                                        <h4><?= $data->story_name ?></h4>
                                                                    </a>
                                                                    <!-- <h6>by: Real ESTATE Agent</h6> -->
                                                                    <span class="price">
                                                                        <!-- <div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> -->
                                                                        <?= substr($data->story_info, 0, 200) ?>...
                                                                    </span>
                                                                    <!-- <span class="details">Details: <em>860 sq ft</em></span>
                                                                    <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2 Bedrooms<br><img src="assets/images/listing-icon-03.png" alt=""> 3 Bathrooms</span> -->
                                                                </div>

                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= view('layout/g_footer') ?>