<?= view('layout/g_header') ?>
<div class="main-banner">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="top-text header-text">
          <h6>Discover Indonesia with just a few clicks</h6>
          <h2>Find Your Next Destination</h2>
        </div>
      </div>
      <div class="col-lg-12">
        <form id="search-form" name="search" method="get" role="search" action="<?= base_url('search') ?>">
          <div class="row">
            <div class="col-lg-3 align-self-center">
              <fieldset>
                <select class="form-select" aria-label="province" id="chooseCategory">
                  <option selected hidden value="">Where?</option>
                  <option value="<?= base_url('content/?prov=1') ?>">Aceh</option>
                  <option value="<?= base_url('content/?prov=22') ?>">Bali</option>
                  <option value="<?= base_url('content/?prov=10') ?>">Kepulauan Bangka Belitung</option>
                  <option value="<?= base_url('content/?prov=17') ?>">Banten</option>
                  <option value="<?= base_url('content/?prov=5') ?>">Bengkulu</option>
                  <option value="<?= base_url('content/?prov=28') ?>">Gorontalo</option>
                  <option value="<?= base_url('content/?prov=16') ?>">Daerah Khusus Ibukota Jakarta</option>
                  <option value="<?= base_url('content/?prov=8') ?>">Jambi</option>
                  <option value="<?= base_url('content/?prov=18') ?>">Jawa Barat</option>
                  <option value="<?= base_url('content/?prov=19') ?>">Jawa Tengah</option>
                  <option value="<?= base_url('content/?prov=21') ?>">Jawa Timur</option>
                  <option value="<?= base_url('content/?prov=12') ?>">Kalimantan Barat</option>
                  <option value="<?= base_url('content/?prov=14') ?>">Kalimantan Selatan</option>
                  <option value="<?= base_url('content/?prov=13') ?>">Kalimantan Tengah</option>
                  <option value="<?= base_url('content/?prov=11') ?>">Kalimantan Timur</option>
                  <option value="<?= base_url('content/?prov=15') ?>">Kalimantan Utara</option>
                  <option value="<?= base_url('content/?prov=9') ?>">Lampung</option>
                  <option value="<?= base_url('content/?prov=32') ?>">Maluku</option>
                  <option value="<?= base_url('content/?prov=31') ?>">Maluku Utara</option>
                  <option value="<?= base_url('content/?prov=23') ?>">Nusa Tenggara Barat</option>
                  <option value="<?= base_url('content/?prov=24') ?>">Nusa Tenggara Timur</option>
                  <option value="<?= base_url('content/?prov=34') ?>">Papua</option>
                  <option value="<?= base_url('content/?prov=33') ?>">Papua Barat</option>
                  <option value="<?= base_url('content/?prov=37') ?>">Papua Pegunungan</option>
                  <option value="<?= base_url('content/?prov=35') ?>">Papua Selatan</option>
                  <option value="<?= base_url('content/?prov=36') ?>">Papua Tengah</option>
                  <option value="<?= base_url('content/?prov=6') ?>">Riau</option>
                  <option value="<?= base_url('content/?prov=7') ?>">Kepulauan Riau</option>
                  <option value="<?= base_url('content/?prov=26') ?>">Sulawesi Barat</option>
                  <option value="<?= base_url('content/?prov=30') ?>">Sulawesi Selatan</option>
                  <option value="<?= base_url('content/?prov=27') ?>">Sulawesi Tengah</option>
                  <option value="<?= base_url('content/?prov=29') ?>">Sulawesi Tenggara</option>
                  <option value="<?= base_url('content/?prov=25') ?>">Sulawesi Utara</option>
                  <option value="<?= base_url('content/?prov=4') ?>">Sumatra Barat</option>
                  <option value="<?= base_url('content/?prov=3') ?>">Sumatra Selatan</option>
                  <option value="<?= base_url('content/?prov=2') ?>">Sumatra Utara</option>
                  <option value="<?= base_url('content/?prov=20') ?>">Daerah Istimewa Yogyakarta</option>
                </select>
              </fieldset>
            </div>
            <div class="col-lg-7 align-self-center">
              <fieldset>
                <input type="search" name="search" class="searchText" placeholder="or type in the name here" autocomplete="on" required>
              </fieldset>
            </div>

            <div class="col-lg-2 align-self-center">
              <fieldset>
                <button class="search-button"><i class="fa fa-search"></i> Search Now</button>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg-10 offset-lg-1">
        <ul class="categories">
        <?= base_url('img/icon_culture.png') ?>
          <li><span class="icon"><img src="<?= base_url('img/icon_province.png') ?>" alt="Food"></span>
            Local Cultures</li>
          <li><span class="icon"><img src="<?= base_url('img/icon_instrument.png') ?>" alt="Food"></span>
            Folk Traditions</li>
          <li><span class="icon"><img src="<?= base_url('img/icon_landmark.png') ?>" alt="Food"></span>
            Landmark & Scenes</li>
          <li><span class="icon"><img src="<?= base_url('img/icon_food.png') ?>" alt="Food"></span>
            Cuisine</li>
          <li><span class="icon"><img src="<?= base_url('img/icon_story.png') ?>" alt="Food"></span>
            Folk Tales</li>
          <?= base_url('img/search-icon-05.png') ?>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="trending">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-heading">
          <h2>Weekly Selection</h2>
          <h5>hand-picked by our team</h5>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="naccs">
          <div class="grid">
            <div class="row">
              <div class="col-lg-3">
                <div class="menu">
                  <div class="first-thumb active">
                    <div class="thumb">
                      <span class="icon"><img src="<?= base_url('img/icon_province.png') ?>" alt="Food"></span>
                      Local Cultures
                    </div>
                  </div>
                  <div>
                    <div class="thumb">
                      <span class="icon"><img src="<?= base_url('img/icon_instrument.png') ?>" alt="Food"></span>
                      Folk Traditions
                    </div>
                  </div>
                  <div>
                    <div class="thumb">
                      <span class="icon"><img src="<?= base_url('img/icon_landmark.png') ?>" alt="Food"></span>
                      Landmark & Scenes
                    </div>
                  </div>
                  <div>
                    <div class="thumb">
                      <span class="icon"><img src="<?= base_url('img/icon_food.png') ?>" alt="Food"></span>
                      Cuisine
                    </div>
                  </div>
                  <div class="last-thumb">
                    <div class="thumb">
                      <span class="icon"><img src="<?= base_url('img/icon_story.png') ?>" alt="Food"></span>
                      Folk Tales
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-9 align-self-center">
                <ul class="nacc">
                  <li class="active">
                    <div>
                      <div class="thumb">
                        <div class="row">
                          <?php
                         
                          foreach ($clothes as $row){
                          ?>
                            <div class="col-lg-5 align-self-center">
                              <div class="left-text">
                                <h4><?= $row->clothes_name ?></h4>
                                <p><?= substr($row->clothes_info, 0, 200) ?>...</p>
                                <div class="main-white-button"><a href="<?= base_url() ?>/content/?prov=7"><i class="fa fa-eye"></i> Discover More</a>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-7 align-self-center">
                              <div class="right-image">
                                <img src="<?= base_url() ?>/database/clothes/clothes_<?= $row->clothes_id ?>.jpg" alt="">
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
                         
                         foreach ($dance as $row) { ?>
                            <div class="col-lg-5 align-self-center">
                              <div class="left-text">
                                <h4><?= $row->dance_name ?></h4>
                                <p><?= substr($row->dance_info, 0, 200) ?>...</p>
                                <div class="main-white-button"><a href="<?= base_url() ?>/content/?prov=7"><i class="fa fa-eye"></i> Discover More</a>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-7 align-self-center">
                              <div class="right-image">
                                <img src="<?= base_url() ?>/database/dance/dance_<?= $row->dance_id ?>.jpg" alt="">
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
                         
                         foreach ($landmark as $row) { ?>
                            <div class="col-lg-5 align-self-center">
                              <div class="left-text">
                                <h4><?= $row->landmark_name ?></h4>
                                <p><?= substr($row->landmark_info, 0, 200) ?>...</p>
                                <div class="main-white-button"><a href="<?= base_url() ?>/content/?prov=7"><i class="fa fa-eye"></i> Discover More</a>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-7 align-self-center">
                              <div class="right-image">
                                <img src="<?= base_url() ?>/database/landmark/landmark_<?= $row->landmark_id ?>.jpg" alt="">
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
                         
                         foreach ($food as $row) { ?>
                            <div class="col-lg-5 align-self-center">
                              <div class="left-text">
                                <h4><?= $row->food_name ?></h4>
                                <p><?= substr($row->food_info, 0, 200) ?>...</p>
                                <div class="main-white-button"><a href="<?= base_url() ?>/content/?prov=7"><i class="fa fa-eye"></i> Discover More</a>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-7 align-self-center">
                              <div class="right-image">
                                <img src="<?= base_url() ?>/database/food/food_<?= $row->food_id ?>.jpg" alt="">
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
                         
                         foreach ($story as $row) { ?>
                            <div class="col-lg-5 align-self-center">
                              <div class="left-text">
                                <h4><?= $row->story_name ?></h4>
                                <p><?= substr($row->story_info, 0, 200) ?>...</p>
                                <div class="main-white-button"><a href="<?= base_url() ?>/content/?prov=7"><i class="fa fa-eye"></i> Discover More</a>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-7 align-self-center">
                              <div class="right-image">
                                <img src="<?= base_url() ?>/database/story/story_<?= $row->story_id ?>.jpg" alt="">
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


<div class="recent-listing">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-heading">
          <h2>Latest Additions</h2>
          <h5>written wholeheartedly by the staff & community</h5>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="owl-carousel owl-listing">
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <div class="listing-item">
                  <div class="left-image">
                    <a href="../../#"><img src="<?= base_url('img/listing-01.jpg') ?>" alt=""></a>
                  </div>
                  <div class="right-content align-self-center">
                    <a href="../../#">
                      <h4>Lorem Ipsum</h4>
                    </a>
                    <h6>Lorem Ipsum</h6>
                      <?= base_url('img/listing-icon-01.png') ?><?= base_url('img/listing-icon-02.png') ?>" alt=""> 4 Bedrooms</li>
                      <?= base_url('img/listing-icon-03.png') ?>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="listing-item">
                  <div class="left-image">
                    <a href="../../#"><img src="<?= base_url('img/listing-02.jpg') ?>" alt=""></a>
                  </div>
                  <div class="right-content align-self-center">
                    <a href="../../#">
                      <h4>Lorem Ipsum</h4>
                    </a>
                    <h6>Lorem Ipsum</h6>
                    <?= base_url('img/listing-icon-01.png') ?>
                      <?= base_url('img/listing-icon-02.png') ?>
                      <?= base_url('img/listing-icon-03.png') ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="listing-item">
                  <div class="left-image">
                    <a href="../../#"><img src="<?= base_url('img/listing-03.jpg') ?>" alt=""></a>
                  </div>
                  <div class="right-content align-self-center">
                    <a href="../../#">
                      <h4>Lorem Ipsum</h4>
                    </a>
                    <h6>Lorem Ipsum</h6>
                    <?= base_url('img/listing-icon-01.png') ?>
                    <?= base_url('img/listing-icon-02.png') ?>
                    <?= base_url('img/listing-icon-03.png') ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <div class="listing-item">
                  <div class="left-image">
                    <a href="../../#"><img src="<?= base_url('img/listing-04.jpg') ?>" alt=""></a>
                  </div>
                  <div class="right-content align-self-center">
                    <a href="../../#">
                      <h4>Lorem Ipsum</h4>
                    </a>
                    <h6>Lorem Ipsum</h6>
                    <?= base_url('img/listing-icon-01.png') ?>
                      <?= base_url('img/listing-icon-02.png') ?>
                      <?= base_url('img/listing-icon-03.png') ?>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="listing-item">
                  <div class="left-image">
                    <a href="../../#"><img src="<?= base_url('img/listing-05.jpg') ?>" alt=""></a>
                  </div>
                  <div class="right-content align-self-center">
                    <a href="../../#">
                      <h4>Lorem Ipsum</h4>
                    </a>
                    <h6>Lorem Ipsum</h6>
                    <!-- <span class="price">
                      <div class="icon"><img src="<?= base_url('img/listing-icon-01.png') ?>" alt=""></div> $450 - $950 / month
                      with taxes
                    </span>
                    <span class="details">Details: <em>2760 sq ft</em></span>
                    <ul class="info">
                      <li><img src="<?= base_url('img/listing-icon-02.png') ?>" alt=""> 4 Bedrooms</li>
                      <li><img src="<?= base_url('img/listing-icon-03.png') ?>" alt=""> 4 Bathrooms</li>
                    </ul>
                    <div class="main-white-button">
                      <a href="../../contact.html"><i class="fa fa-eye"></i> Contact Now</a>
                    </div> -->
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="listing-item">
                  <div class="left-image">
                    <a href="../../#"><img src="<?= base_url('img/listing-06.jpg') ?>" alt=""></a>
                  </div>
                  <div class="right-content align-self-center">
                    <a href="../../#">
                      <h4>Lorem Ipsum</h4>
                    </a>
                    <h6>Lorem Ipsum</h6>
                    <!-- <span class="price">
                      <div class="icon"><img src="<?= base_url('img/listing-icon-01.png') ?>" alt=""></div> $450 - $950 / month
                      with taxes
                    </span>
                    <span class="details">Details: <em>2760 sq ft</em></span>
                    <ul class="info">
                      <li><img src="<?= base_url('img/listing-icon-02.png') ?>" alt=""> 4 Bedrooms</li>
                      <li><img src="<?= base_url('img/listing-icon-03.png') ?>" alt=""> 4 Bathrooms</li>
                    </ul>
                    <div class="main-white-button">
                      <a href="../../contact.html"><i class="fa fa-eye"></i> Contact Now</a>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <div class="listing-item">
                  <div class="left-image">
                    <a href="../../#"><img src="<?= base_url('img/listing-05.jpg') ?>" alt=""></a>
                  </div>
                  <div class="right-content align-self-center">
                    <a href="../../#">
                      <h4>7. Sunny Apartment</h4>
                    </a>
                    <h6>by: Sale Agent</h6>
                    <ul class="rate">
                      <li><i class="fa fa-star-o"></i></li>
                      <li><i class="fa fa-star-o"></i></li>
                      <li><i class="fa fa-star-o"></i></li>
                      <li><i class="fa fa-star-o"></i></li>
                      <li><i class="fa fa-star-o"></i></li>
                      <li>(24) Reviews</li>
                    </ul>
                    <span class="price">
                      <div class="icon"><img src="<?= base_url('img/listing-icon-01.png') ?>" alt=""></div> $5,450 / month with
                      taxes
                    </span>
                    <span class="details">Details: <em>1640 sq ft</em></span>
                    <ul class="info">
                      <li><img src="<?= base_url('img/listing-icon-02.png') ?>" alt=""> 8 Bedrooms</li>
                      <li><img src="<?= base_url('img/listing-icon-03.png') ?>" alt=""> 5 Bathrooms</li>
                    </ul>
                    <div class="main-white-button">
                      <a href="../../contact.html"><i class="fa fa-eye"></i> Contact Now</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="listing-item">
                  <div class="left-image">
                    <a href="../../#"><img src="<?= base_url('img/listing-02.jpg') ?>" alt=""></a>
                  </div>
                  <div class="right-content align-self-center">
                    <a href="../../#">
                      <h4>8. Third House of Gaming</h4>
                    </a>
                    <h6>by: Sale Agent</h6>
                    <ul class="rate">
                      <li><i class="fa fa-star-o"></i></li>
                      <li><i class="fa fa-star-o"></i></li>
                      <li><i class="fa fa-star-o"></i></li>
                      <li><i class="fa fa-star-o"></i></li>
                      <li><i class="fa fa-star-o"></i></li>
                      <li>(15) Reviews</li>
                    </ul>
                    <span class="price">
                      <div class="icon"><img src="<?= base_url('img/listing-icon-01.png') ?>" alt=""></div> $5,520 / month with
                      taxes
                    </span>
                    <span class="details">Details: <em>1660 sq ft</em></span>
                    <ul class="info">
                      <li><img src="<?= base_url('img/listing-icon-02.png') ?>" alt=""> 5 Bedrooms</li>
                      <li><img src="<?= base_url('img/listing-icon-03.png') ?>" alt=""> 4 Bathrooms</li>
                    </ul>
                    <div class="main-white-button">
                      <a href="../../contact.html"><i class="fa fa-eye"></i> Contact Now</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="listing-item">
                  <div class="left-image">
                    <a href="../../#"><img src="<?= base_url('img/listing-06.jpg') ?>
                    <?= base_url('img/listing-icon-01.png') ?>
                      <?= base_url('img/listing-icon-02.png') ?>
                      <?= base_url('img/listing-icon-03.png') ?>
              </div> -->
        </div>
      </div>
    </div>
  </div>
</div>

<?= view('layout/g_footer') ?>
<script>
  $('#chooseCategory').on('change', function() {
    window.location = $(this).val();
  });
</script>