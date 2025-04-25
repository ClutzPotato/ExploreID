<style>
  .dataTables_filter input { width: 25em;}
</style>
<section class="content">
  <div class="container-fluid">
    <h5 class="pt-3 mb-3">Database</h5>
    <div class="row">
      <div class="col">
        <!-- Custom Tabs -->
        <div class="card">
          <div class="card-header p-0">
            <h3 class="card-title p-3"><?= ucwords($table) ?> Tables</h3>
          </div>
          <div class="card-body">
            <!-- new table -->
            <?php if ($table == 'province') { ?>
              <div class="mb-2">
                <button class="btn btn-primary" data-toggle="modal" data-target="#modalAddprovince" type="button"><i class="fa fa-plus"></i>&nbsp; Add New Data</button>
              </div>
              <div class="table-responsive" style="overflow-x: hidden;">
                <table class="table table-hover table-striped table-bordered" id="myTableProvince">
                  <thead>
                    <tr>
                      <th>Province ID</th>
                      <th>Province Name</th>
                      <th>Province Info</th>
                      <th>Option</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($province as $data) {
                    ?>
                      <tr>
                        <td><?= $data->province_id ?></td>
                        <td><?= $data->province_name ?></td>
                        <td><?= $data->province_info ?></td>
                        <td>
                          <a class="btn btn-sm btn-warning float-right mb-1" data-toggle="modal" data-target="#modalEditprovince" id="btnEditData" vid="<?= $data->province_id ?>" vtable="province"> <i class="fas fa-edit fa-fw"></i></a>
                          <a href="<?= base_url('/table/deleteData/' . $data->province_id . '/province') ?>" class="btn btn-sm btn-danger float-right ml-1" onclick="return confirm('Do you want to delete data ID:<?= $data->province_id ?> ?')"> <i class="fas fa-trash-alt fa-fw"></i></a>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            <?php } ?>
            <!-- new table -->
            <?php if ($table == 'clothes') { ?>
              <div class="mb-2">
                <button class="btn btn-primary" data-toggle="modal" data-target="#modalAddclothes" type="button"><i class="fa fa-plus"></i>&nbsp; Add New Data</button>
              </div>
              <div class="table-responsive" style="overflow-x: hidden;">
                <table class="table table-hover table-striped table-bordered" id="myTableClothes">
                  <thead>
                    <tr>
                      <th>Clothes ID</th>
                      <th>Province ID</th>
                      <th>Clothes Name</th>
                      <th>Clothes Info</th>
                      <th>Option</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($clothes as $data) {
                    ?>
                      <tr>
                        <td><?= $data->clothes_id ?></td>
                        <td><?= $data->province_id ?></td>
                        <td><?= $data->clothes_name ?></td>
                        <td><?= $data->clothes_info ?></td>
                        <td>
                          <a class="btn btn-sm btn-warning float-right mb-1" data-toggle="modal" data-target="#modalEditclothes" id="btnEditData" vid="<?= $data->clothes_id ?>" vtable="clothes"> <i class="fas fa-edit fa-fw"></i></a>
                          <a href="<?= base_url('/table/deleteData/' . $data->clothes_id . '/clothes') ?>" class="btn btn-sm btn-danger float-right ml-1" onclick="return confirm('Do you want to delete data ID:<?= $data->clothes_id ?> ?')"> <i class="fas fa-trash-alt fa-fw"></i></a>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            <?php } ?>
            <!-- new table -->
            <?php if ($table == 'house') { ?>
              <div class="mb-2">
                <button class="btn btn-primary" data-toggle="modal" data-target="#modalAddhouse" type="button"><i class="fa fa-plus"></i>&nbsp; Add New Data</button>
              </div>
              <div class="table-responsive" style="overflow-x: hidden;">
                <table class="table table-bordered table-striped" id="myTableHouse">
                  <thead>
                    <tr>
                      <th>House ID</th>
                      <th>Province ID</th>
                      <th>House Name</th>
                      <th>House Info</th>
                      <th>Option</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($house as $data) {
                    ?>
                      <tr>
                        <td><?= $data->house_id ?></td>
                        <td><?= $data->province_id ?></td>
                        <td><?= $data->house_name ?></td>
                        <td><?= $data->house_info ?></td>
                        <td>
                          <a class="btn btn-sm btn-warning float-right mb-1" data-toggle="modal" data-target="#modalEdithouse" id="btnEditData" vid="<?= $data->house_id ?>" vtable="house"> <i class="fas fa-edit fa-fw"></i></a>
                          <a href="<?= base_url('/table/deleteData/' . $data->house_id . '/house') ?>" class="btn btn-sm btn-danger float-right ml-1" onclick="return confirm('Do you want to delete data ID:<?= $data->house_id ?> ?')"> <i class="fas fa-trash-alt fa-fw"></i></a>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            <?php } ?>
            <!-- new table -->
            <?php if ($table == 'dance') { ?>
              <div class="mb-2">
                <button class="btn btn-primary" data-toggle="modal" data-target="#modalAdddance" type="button"><i class="fa fa-plus"></i>&nbsp; Add New Data</button>
              </div>
              <div class="table-responsive" style="overflow-x: hidden;">
                <table class="table table-bordered table-striped" id="myTableDance">
                  <thead>
                    <tr>
                      <th>Dance ID</th>
                      <th>Province ID</th>
                      <th>Dance Name</th>
                      <th>Dance Info</th>
                      <th>Option</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($dance as $data) {
                    ?>
                      <tr>
                        <td><?= $data->dance_id ?></td>
                        <td><?= $data->province_id ?></td>
                        <td><?= $data->dance_name ?></td>
                        <td><?= $data->dance_info ?></td>
                        <td>
                          <a class="btn btn-sm btn-warning float-right mb-1" data-toggle="modal" data-target="#modalEditdance" id="btnEditData" vid="<?= $data->dance_id ?>" vtable="dance"> <i class="fas fa-edit fa-fw"></i></a>
                          <a href="<?= base_url('/table/deleteData/' . $data->dance_id . '/dance') ?>" class="btn btn-sm btn-danger float-right ml-1" onclick="return confirm('Do you want to delete data ID:<?= $data->dance_id ?> ?')"> <i class="fas fa-trash-alt fa-fw"></i></a>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            <?php } ?>
            <!-- new table -->
            <?php if ($table == 'song') { ?>
              <div class="mb-2">
                <button class="btn btn-primary" data-toggle="modal" data-target="#modalAddsong" type="button"><i class="fa fa-plus"></i>&nbsp; Add New Data</button>
              </div>
              <div class="table-responsive" style="overflow-x: hidden;">
                <table class="table table-bordered table-striped" id="myTableSong">
                  <thead>
                    <tr>
                      <th>Song ID</th>
                      <th>Province ID</th>
                      <th>Song Name</th>
                      <th>Song Info</th>
                      <th>Option</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($song as $data) {
                    ?>
                      <tr>
                        <td><?= $data->song_id ?></td>
                        <td><?= $data->province_id ?></td>
                        <td><?= $data->song_name ?></td>
                        <td><?= $data->song_info ?></td>
                        <td>
                          <a class="btn btn-sm btn-warning float-right mb-1" data-toggle="modal" data-target="#modalEditsong" id="btnEditData" vid="<?= $data->song_id ?>" vtable="song"> <i class="fas fa-edit fa-fw"></i></a>
                          <a href="<?= base_url('/table/deleteData/' . $data->song_id . '/song') ?>" class="btn btn-sm btn-danger float-right ml-1" onclick="return confirm('Do you want to delete data ID:<?= $data->song_id ?> ?')"> <i class="fas fa-trash-alt fa-fw"></i></a>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            <?php } ?>
            <!-- new table -->
            <?php if ($table == 'instrument') { ?>
              <div class="mb-2">
                <button class="btn btn-primary" data-toggle="modal" data-target="#modalAddinstrument" type="button"><i class="fa fa-plus"></i>&nbsp; Add New Data</button>
              </div>
              <div class="table-responsive" style="overflow-x: hidden;">
                <table class="table table-bordered table-striped" id="myTableInstrument">
                  <thead>
                    <tr>
                      <th>Instrument ID</th>
                      <th>Province ID</th>
                      <th>Instrument Name</th>
                      <th>Instrument Info</th>
                      <th>Option</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($instrument as $data) {
                    ?>
                      <tr>
                        <td><?= $data->instrument_id ?></td>
                        <td><?= $data->province_id ?></td>
                        <td><?= $data->instrument_name ?></td>
                        <td><?= $data->instrument_info ?></td>
                        <td>
                          <a class="btn btn-sm btn-warning float-right mb-1" data-toggle="modal" data-target="#modalEditinstrument" id="btnEditData" vid="<?= $data->instrument_id ?>" vtable="instrument"> <i class="fas fa-edit fa-fw"></i></a>
                          <a href="<?= base_url('/table/deleteData/' . $data->instrument_id . '/instrument') ?>" class="btn btn-sm btn-danger float-right ml-1" onclick="return confirm('Do you want to delete data ID:<?= $data->instrument_id ?> ?')"> <i class="fas fa-trash-alt fa-fw"></i></a>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            <?php } ?>
            <!-- new table -->
            <?php if ($table == 'landmark') { ?>
              <div class="mb-2">
                <button class="btn btn-primary" data-toggle="modal" data-target="#modalAddlandmark" type="button"><i class="fa fa-plus"></i>&nbsp; Add New Data</button>
              </div>
              <div class="table-responsive" style="overflow-x: hidden;">
                <table class="table table-bordered table-striped" id="myTableLandmark">
                  <thead>
                    <tr>
                      <th>Landmark ID</th>
                      <th>Province ID</th>
                      <th>Landmark Name</th>
                      <th>Landmark Info</th>
                      <th>Option</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($landmark as $data) {
                    ?>
                      <tr>
                        <td><?= $data->landmark_id ?></td>
                        <td><?= $data->province_id ?></td>
                        <td><?= $data->landmark_name ?></td>
                        <td><?= $data->landmark_info ?></td>
                        <td>
                          <a class="btn btn-sm btn-warning float-right mb-1" data-toggle="modal" data-target="#modalEditlandmark" id="btnEditData" vid="<?= $data->landmark_id ?>" vtable="landmark"> <i class="fas fa-edit fa-fw"></i></a>
                          <a href="<?= base_url('/table/deleteData/' . $data->landmark_id . '/landmark') ?>" class="btn btn-sm btn-danger float-right ml-1" onclick="return confirm('Do you want to delete data ID:<?= $data->landmark_id ?> ?')"> <i class="fas fa-trash-alt fa-fw"></i></a>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            <?php } ?>
            <!-- new table -->
            <?php if ($table == 'food') { ?>
              <div class="mb-2">
                <button class="btn btn-primary" data-toggle="modal" data-target="#modalAddfood" type="button"><i class="fa fa-plus"></i>&nbsp; Add New Data</button>
              </div>
              <div class="table-responsive" style="overflow-x: hidden;">
                <table class="table table-bordered table-striped" id="myTableFood">
                  <thead>
                    <tr>
                      <th>Food ID</th>
                      <th>Province ID</th>
                      <th>Food Name</th>
                      <th>Food Info</th>
                      <th>Option</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($food as $data) {
                    ?>
                      <tr>
                        <td><?= $data->food_id ?></td>
                        <td><?= $data->province_id ?></td>
                        <td><?= $data->food_name ?></td>
                        <td><?= $data->food_info ?></td>
                        <td>
                          <a class="btn btn-sm btn-warning float-right mb-1" data-toggle="modal" data-target="#modalEditfood" id="btnEditData" vid="<?= $data->food_id ?>" vtable="food"> <i class="fas fa-edit fa-fw"></i></a>
                          <a href="<?= base_url('/table/deleteData/' . $data->food_id . '/food') ?>" class="btn btn-sm btn-danger float-right ml-1" onclick="return confirm('Do you want to delete data ID:<?= $data->food_id ?> ?')"> <i class="fas fa-trash-alt fa-fw"></i></a>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            <?php } ?>
            <!-- new table -->
            <?php if ($table == 'story') { ?>
              <div class="mb-2">
                <button class="btn btn-primary" data-toggle="modal" data-target="#modalAddstory" type="button"><i class="fa fa-plus"></i>&nbsp; Add New Data</button>
              </div>
              <div class="table-responsive" style="overflow-x: hidden;">
                <table class="table table-bordered table-striped" id="myTableStory">
                  <thead>
                    <tr>
                      <th>Story ID</th>
                      <th>Province ID</th>
                      <th>Story Name</th>
                      <th>Story Info</th>
                      <th>Option</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($story as $data) {
                    ?>
                      <tr>
                        <td><?= $data->story_id ?></td>
                        <td><?= $data->province_id ?></td>
                        <td><?= $data->story_name ?></td>
                        <td><?= $data->story_info ?></td>
                        <td>
                          <a class="btn btn-sm btn-warning float-right mb-1" data-toggle="modal" data-target="#modalEditstory" id="btnEditData" vid="<?= $data->story_id ?>" vtable="story"> <i class="fas fa-edit fa-fw"></i></a>
                          <a href="<?= base_url('/table/deleteData/' . $data->story_id . '/story') ?>" class="btn btn-sm btn-danger float-right ml-1" onclick="return confirm('Do you want to delete data ID:<?= $data->story_id ?> ?')"> <i class="fas fa-trash-alt fa-fw"></i></a>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            <?php } ?>
            <!-- new table -->
            <?php if ($table == 'taboo') { ?>
              <div class="mb-2">
                <button class="btn btn-primary" data-toggle="modal" data-target="#modalAddtaboo" type="button"><i class="fa fa-plus"></i>&nbsp; Add New Data</button>
              </div>
              <div class="table-responsive" style="overflow-x: hidden;">
                <table class="table table-bordered table-striped" id="myTableTaboo">
                  <thead>
                    <tr>
                      <th>Taboo ID</th>
                      <th>Province ID</th>
                      <th>Taboo Info</th>
                      <th>Option</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($taboo as $data) {
                    ?>
                      <tr>
                        <td><?= $data->taboo_id ?></td>
                        <td><?= $data->province_id ?></td>
                        <td><?= $data->taboo_info ?></td>
                        <td>
                          <a class="btn btn-sm btn-warning float-right mb-1" data-toggle="modal" data-target="#modalEdittaboo" id="btnEditData" vid="<?= $data->taboo_id ?>" vtable="taboo"> <i class="fas fa-edit fa-fw"></i></a>
                          <a href="<?= base_url('/table/deleteData/' . $data->taboo_id . '/taboo') ?>" class="btn btn-sm btn-danger float-right ml-1" onclick="return confirm('Do you want to delete data ID:<?= $data->taboo_id ?> ?')"> <i class="fas fa-trash-alt fa-fw"></i></a>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            <?php } ?>
            <!-- /.tab-pane -->
          </div>
          <!-- /.tab-content -->
        </div><!-- /.card-body -->
      </div>
      <!-- ./card -->
    </div>
    <!-- /.col -->
  </div>
  </div>
</section>

<!-- MODAL ADD-->
<div class="modal fade" id="modalAddprovince" tabindex="-1" role="dialog" aria-labelledby="Modal Add province">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalAddprovinceTitle">
          Add Province
        </h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url() ?>/table/saveData" method="post">
        <div class="modal-body">
          <input type="hidden" name="table" value="province">
          <div class="form-group row d-none">
            <label class="col-sm-3 col-form-label">ID province</label>
            <div class="col-md-8"><input type="text" class="form-control" name="province_id" placeholder="Otomatis" readonly></div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Name</label>
            <div class="col-md-8"><input type="text" class="form-control" name="province_name" placeholder="province Name" required></div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Info</label>
            <div class="col-md-8"><input type="text" class="form-control" name="province_info" placeholder="province Description" required></div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php
$othertables = array('clothes', 'house', 'dance', 'song', 'instrument', 'landmark', 'food', 'story', 'taboo');

foreach ($othertables as $tableadd) {
?>
  <div class="modal fade" id="modalAdd<?= $tableadd ?>" tabindex="-1" role="dialog" aria-labelledby="Modal Add <?= $tableadd ?>">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalAdd<?= $tableadd ?>Title">
            Add <?= $tableadd ?>
          </h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?= base_url() ?>/table/saveData" method="post">
          <div class="modal-body">
            <input type="hidden" name="table" value="<?= $tableadd ?>">
            <div class="form-group row d-none">
              <label class="col-sm-3 col-form-label">ID <?= $tableadd ?></label>
              <div class="col-md-8"><input type="text" class="form-control" name="<?= $tableadd ?>_id" placeholder="Otomatis" readonly></div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label"> Province ID</label>
              <div class="col-md-8">
                <fieldset>
                  <select name="province_id" class="custom-select" aria-label="province" onchange="this.form.click()" required>
                    <option disabled selected hidden value="">Select Province</option>
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
                </fieldset>
              </div>
            </div>
            <?php if ($tableadd != "taboo") { ?>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-md-8"><input type="text" class="form-control" name="<?= $tableadd ?>_name" placeholder="<?= $tableadd ?> Name" required></div>
              </div>
            <?php } ?>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Info</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="<?= $tableadd ?>_info" placeholder="<?= $tableadd ?> Description" required>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php
}
?>

<!-- MODAL EDIT-->
<div class="modal fade" id="modalEditprovince" tabindex="-1" role="dialog" aria-labelledby="Modal Edit province">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEditprovinceTitle">
          Edit Province
        </h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url() ?>/table/saveEditData" method="post">
        <div class="modal-body">
          <input type="hidden" name="table" value="province">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">ID Province</label>
            <div class="col-md-8"><input type="text" class="form-control" id="province_id" name="province_id" readonly></div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Province Name</label>
            <div class="col-md-8"><input type="text" class="form-control" id="province_name" name="province_name" placeholder="province name" required></div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Province Info</label>
            <div class="col-md-8"><input type="text" class="form-control" id="province_info" name="province_info" placeholder="province Info" required></div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Image</label>
            <div class="col-md-8">
              <a id="province_img" href="" data-lightbox="image-1" class="form-control">Click to View</a>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php
foreach ($othertables as $tableadd) {
?>
  <div class="modal fade" id="modalEdit<?= $tableadd ?>" tabindex="-1" role="dialog" aria-labelledby="Modal Edit <?= $tableadd ?>">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalEdit<?= $tableadd ?>Title">
            Edit <?= $tableadd ?>
          </h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?= base_url() ?>/table/saveEditData" method="post">
          <div class="modal-body">
            <input type="hidden" name="table" value="<?= $tableadd ?>">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label"><?= ucfirst($tableadd) ?> ID</label>
              <div class="col-md-8"><input type="text" class="form-control" id="<?= $tableadd ?>_id" name="<?= $tableadd ?>_id" readonly></div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label"> Province ID</label>
              <div class="col-md-8">
                <fieldset>
                  <select name="province_id" class="custom-select" aria-label="province" onchange="this.form.click()" required>
                    <option disabled selected hidden id="<?= $tableadd ?>_province_id" value="">-No Changes-</option>
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
                </fieldset>
              </div>
            </div>
            <?php if ($tableadd != "taboo") { ?>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label"><?= ucfirst($tableadd) ?> Name</label>
                <div class="col-md-8"><input type="text" class="form-control" id="<?= $tableadd ?>_name" name="<?= $tableadd ?>_name" placeholder="<?= $tableadd ?> name" required></div>
              </div>
            <?php } ?>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label"><?= ucfirst($tableadd) ?> Info</label>
              <div class="col-md-8"><input type="text" class="form-control" id="<?= $tableadd ?>_info" name="<?= $tableadd ?>_info" placeholder="<?= $tableadd ?> Info" required></div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Image</label>
              <div class="col-md-8">
                <a id="<?= $tableadd ?>_img" href="" data-lightbox="image-1" class="form-control">Click to View</a>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php
}
?>