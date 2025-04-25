<section class="content">

  <div class="container-fluid">
    <h5 class="pt-3 mb-3">Site Settings</h5>
    <b>Weekly Featured Province:</b>
    <form action="<?= base_url() ?>/dashboard/saveSettings" method="post">
      <div class="row">
        <div class="col-md-3">
          <select name="province_id" class="custom-select" aria-label="provinceid" onchange="this.form.click()" required>
            <?php foreach ($settings as $row) {  ?><option selected disabled value='<?= $row['settings_value'] ?>'>Current Province ID: <?= $row['settings_value'];
                                                                                                                                      } ?></option>
              <option value="1">1 - Aceh</option>
              <option value="2">2 - Sumatra Utara</option>
              <option value="3">3 - Sumatra Selatan</option>
              <option value="4">4 - Sumatra Barat</option>
              <option value="5">5 - Bengkulu</option>
              <option value="6">6 - Riau</option>
              <option value="7">7 - Kepulauan Riau</option>
              <option value="8">8 - Jambi</option>
              <option value="9">9 - Lampung</option>
              <option value="10">10 - Kepulauan Bangka Belitung</option>
              <option value="11">11 - Kalimantan Timur</option>
              <option value="12">12 - Kalimantan Barat</option>
              <option value="13">13 - Kalimantan Tengah</option>
              <option value="14">14 - Kalimantan Selatan</option>
              <option value="15">15 - Kalimantan Utara</option>
              <option value="16">16 - Daerah Khusus Ibukota Jakarta</option>
              <option value="17">17 - Banten</option>
              <option value="18">18 - Jawa Barat</option>
              <option value="19">19 - Jawa Tengah</option>
              <option value="20">20 - Daerah Istimewa Yogyakarta</option>
              <option value="21">21 - Jawa Timur</option>
              <option value="22">22 - Bali</option>
              <option value="23">23 - Nusa Tenggara Barat</option>
              <option value="24">24 - Nusa Tenggara Timur</option>
              <option value="25">25 - Sulawesi Utara</option>
              <option value="26">26 - Sulawesi Barat</option>
              <option value="27">27 - Sulawesi Tengah</option>
              <option value="28">28 - Gorontalo</option>
              <option value="29">29 - Sulawesi Tenggara</option>
              <option value="30">30 - Sulawesi Selatan</option>
              <option value="31">31 - Maluku Utara</option>
              <option value="32">32 - Maluku</option>
              <option value="33">33 - Papua Barat</option>
              <option value="34">34 - Papua</option>
              <option value="35">35 - Papua Selatan</option>
              <option value="36">36 - Papua Tengah</option>
              <option value="37">37 - Papua Pegunungan</option>
          </select>
        </div>
        <div class="col-md-1">
          <button type="submit" class="btn btn-primary">Change</button>
        </div>
      </div>
    </form>
  </div>

  <div class="container-fluid">
    <h5 class="pt-3 mb-3">Agregation Stats</h5>
    <div class="row">
      <div class="col-2">
        <!-- Custom Tabs -->
        <?php
        if ($_SESSION['user_status'] == "administrator") { ?>
          <a href="<?= base_url() ?>/table?table=province">
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $province ?></h3>
                <p>Provinces</p>
              </div>
              <div class="icon">
                <i class="fas fa-border-all"></i>
              </div>
            </div>
          </a>
      </div>
      <div class="col-2">
        <!-- Custom Tabs -->
        <a href="<?= base_url() ?>/table?table=clothes">
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?= $clothes ?></h3>
              <p>Clothes</p>
            </div>
            <div class="icon">
              <i class="fas fa-border-all"></i>
            </div>
          </div>
        </a>
      </div>
      <div class="col-2">
        <!-- Custom Tabs -->
        <a href="<?= base_url() ?>/table?table=house">
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?= $house ?></h3>
              <p>Houses</p>
            </div>
            <div class="icon">
              <i class="fas fa-border-all"></i>
            </div>
          </div>
        </a>
      </div>
      <div class="col-2">
        <!-- Custom Tabs -->
        <a href="<?= base_url() ?>/table?table=dance">
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?= $dance ?></h3>
              <p>Dances</p>
            </div>
            <div class="icon">
              <i class="fas fa-border-all"></i>
            </div>
          </div>
        </a>
      </div>
      <div class="col-2">
        <!-- Custom Tabs -->
        <a href="<?= base_url() ?>/table?table=song">
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?= $song ?></h3>
              <p>Songs</p>
            </div>
            <div class="icon">
              <i class="fas fa-border-all"></i>
            </div>
          </div>
        </a>
      </div>
      <div class="col-2">
        <!-- Custom Tabs -->
        <a href="<?= base_url() ?>/table?table=instrument">
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?= $instrument ?></h3>
              <p>Instruments</p>
            </div>
            <div class="icon">
              <i class="fas fa-border-all"></i>
            </div>
          </div>
        </a>
      </div>
      <div class="col-2">
        <!-- Custom Tabs -->
        <a href="<?= base_url() ?>/table?table=landmark">
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?= $landmark ?></h3>
              <p>Landmarks</p>
            </div>
            <div class="icon">
              <i class="fas fa-border-all"></i>
            </div>
          </div>
        </a>
      </div>
      <div class="col-2">
        <!-- Custom Tabs -->
        <a href="<?= base_url() ?>/table?table=food">
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?= $food ?></h3>
              <p>Foods</p>
            </div>
            <div class="icon">
              <i class="fas fa-border-all"></i>
            </div>
          </div>
        </a>
      </div>
      <div class="col-2">
        <!-- Custom Tabs -->
        <a href="<?= base_url() ?>/table?table=story">
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?= $story ?></h3>
              <p>Stories</p>
            </div>
            <div class="icon">
              <i class="fas fa-border-all"></i>
            </div>
          </div>
        </a>
      </div>
      <div class="col-2">
        <!-- Custom Tabs -->
        <a href="<?= base_url() ?>/table?table=taboo">
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?= $taboo ?></h3>
              <p>Taboos</p>
            </div>
            <div class="icon">
              <i class="fas fa-border-all"></i>
            </div>
          </div>
        </a>
      </div>
      <div class="col-4">
        <!-- Custom Tabs -->
        <div class="small-box bg-primary">
          <div class="inner">
            <h3><?= $province + $clothes + $house + $dance + $song + $instrument + $landmark + $food + $story + $taboo ?></h3>
            <p>Total Data</p>
          </div>
          <div class="icon">
            <i class="fas fa-table"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php } else { ?>

  <div class="small-box bg-info">
    <div class="inner">
      <h3><?= $province ?></h3>
      <p>Provinces</p>
    </div>
    <div class="icon">
      <i class="fas fa-border-all"></i>
    </div>
  </div>

  </div>
  <div class="col-2">
    <!-- Custom Tabs -->

    <div class="small-box bg-info">
      <div class="inner">
        <h3><?= $clothes ?></h3>
        <p>Clothes</p>
      </div>
      <div class="icon">
        <i class="fas fa-border-all"></i>
      </div>
    </div>

  </div>
  <div class="col-2">
    <!-- Custom Tabs -->

    <div class="small-box bg-info">
      <div class="inner">
        <h3><?= $house ?></h3>
        <p>Houses</p>
      </div>
      <div class="icon">
        <i class="fas fa-border-all"></i>
      </div>
    </div>

  </div>
  <div class="col-2">
    <!-- Custom Tabs -->

    <div class="small-box bg-info">
      <div class="inner">
        <h3><?= $dance ?></h3>
        <p>Dances</p>
      </div>
      <div class="icon">
        <i class="fas fa-border-all"></i>
      </div>
    </div>

  </div>
  <div class="col-2">
    <!-- Custom Tabs -->

    <div class="small-box bg-info">
      <div class="inner">
        <h3><?= $song ?></h3>
        <p>Songs</p>
      </div>
      <div class="icon">
        <i class="fas fa-border-all"></i>
      </div>
    </div>

  </div>
  <div class="col-2">
    <!-- Custom Tabs -->

    <div class="small-box bg-info">
      <div class="inner">
        <h3><?= $instrument ?></h3>
        <p>Instruments</p>
      </div>
      <div class="icon">
        <i class="fas fa-border-all"></i>
      </div>
    </div>

  </div>
  <div class="col-2">
    <!-- Custom Tabs -->

    <div class="small-box bg-info">
      <div class="inner">
        <h3><?= $landmark ?></h3>
        <p>Landmarks</p>
      </div>
      <div class="icon">
        <i class="fas fa-border-all"></i>
      </div>
    </div>

  </div>
  <div class="col-2">
    <!-- Custom Tabs -->

    <div class="small-box bg-info">
      <div class="inner">
        <h3><?= $food ?></h3>
        <p>Foods</p>
      </div>
      <div class="icon">
        <i class="fas fa-border-all"></i>
      </div>
    </div>

  </div>
  <div class="col-2">
    <!-- Custom Tabs -->

    <div class="small-box bg-info">
      <div class="inner">
        <h3><?= $story ?></h3>
        <p>Stories</p>
      </div>
      <div class="icon">
        <i class="fas fa-border-all"></i>
      </div>
    </div>

  </div>
  <div class="col-2">
    <!-- Custom Tabs -->
    <div class="small-box bg-info">
      <div class="inner">
        <h3><?= $taboo ?></h3>
        <p>Taboos</p>
      </div>
      <div class="icon">
        <i class="fas fa-border-all"></i>
      </div>
    </div>
  </div>
  <div class="col-4">
    <!-- Custom Tabs -->
    <div class="small-box bg-primary">
      <div class="inner">
        <h3><?= $province + $clothes + $house + $dance + $song + $instrument + $landmark + $food + $story + $taboo ?></h3>
        <p>Total Data</p>
      </div>
      <div class="icon">
        <i class="fas fa-table"></i>
      </div>
    </div>
  </div>
  </div>
  </div>
<?php } ?>


<div class="container-fluid">
  <h5 class="pt-3 mb-3">Community Requests</h5>
  <div class="row">
    <div class="col-4">
      <!-- Custom Tabs -->
      <a href="<?= base_url() ?>/request">
        <div class="small-box bg-info">
          <div class="inner">
            <h3><?= $new_request ?></h3>
            <p>New Requests</p>
          </div>
          <div class="icon">
            <i class="fas fa-asterisk"></i>
          </div>
        </div>
      </a>
    </div>
    <div class="col-4">
      <!-- Custom Tabs -->
      <a href="<?= base_url() ?>/request">
        <div class="small-box bg-warning">
          <div class="inner">
            <h3><?= $priority_request ?></h3>
            <p>Priority Requests</p>
          </div>
          <div class="icon">
            <i class="fas fa-exclamation"></i>
          </div>
        </div>
      </a>
    </div>
    <div class="col-4">
      <!-- Custom Tabs -->
      <a href="<?= base_url() ?>/request">
        <div class="small-box bg-success">
          <div class="inner">
            <h3><?= $accepted_request ?></h3>
            <p>Accepted Requests</p>
          </div>
          <div class="icon">
            <i class="fas fa-border-all"></i>
          </div>
        </div>
      </a>
    </div>
    <!-- ./card -->
  </div>
  <!-- /.col -->
</div>
</section>