<section class="content">
  <div class="container-fluid">
    <h5 class="pt-3 mb-3">Database</h5>
    <div class="row">
      <div class="col-12">
        <!-- Custom Tabs -->
        <div class="card">
          <div class="card-header d-flex p-0">
            <h3 class="card-title p-3">Request Table</h3>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="table-responsive" style="overflow-x: hidden;">
              <table class="table table-hover table-striped table-bordered" id="myTableProvince">
                <thead>
                  <tr>
                    <th>Request ID</th>
                    <th>Request Name</th>
                    <th>Request Email</th>
                    <th>For Province ID</th>
                    <th>Request Table</th>
                    <th>Request Title</th>
                    <th>Request Info</th>
                    <th>Request Submitted on</th>
                    <th>Request Status</th>
                    <th>Option</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  foreach ($request as $data) {
                  ?>
                    <tr>
                      <td><?= $data->request_id ?></td>
                      <td><?= $data->request_name ?></td>
                      <td><?= $data->request_email ?></td>
                      <td><?= $data->request_province_id ?></td>
                      <td><?= $data->request_table ?></td>
                      <td><?= $data->request_title ?></td>
                      <td><?= $data->request_info ?></td>
                      <td><?= $data->request_submitted_on ?></td>
                      <td><?= $data->request_status ?></td>
                      <td>
                        <?php
                        if ($data->request_status != 'Accepted') {
                        ?>
                          <a class="btn btn-sm btn-warning float-right" data-toggle="modal" data-target="#modalEditrequest" id="btnEditRequest" vid="<?= $data->request_id ?>" vtable="request"> <i class="fas fa-edit fa-fw"></i></a>
                        <?php } ?>
                        <a href="<?= base_url('/request/deleteData/' . $data->request_id . '/request') ?>" class="btn btn-sm btn-danger float-right mt-1" onclick="return confirm('Do you want to delete data ID:<?= $data->request_id ?> ?')"> <i class="fas fa-trash-alt fa-fw"></i></a>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- /.tab-pane -->
        </div>
        <!-- ./card -->
      </div>
      <!-- /.col -->
    </div>
  </div>
</section>

<!-- MODAL EDIT-->

<div class="modal fade" id="modalEditrequest" tabindex="-1" role="dialog" aria-labelledby="Modal Edit request">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEditrequestTitle">
          Edit Request
        </h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url() ?>/request/saveEditData" method="post">
        <div class="modal-body">
          <div class="form-group row d-none">
            <label class="col-sm-3 col-form-label">Request ID</label>
            <div class="col-md-8"><input type="text" class="form-control" id="request_id" name="request_id" readonly></div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Request Name</label>
            <div class="col-md-8"><input type="text" class="form-control" id="request_name" name="request_name" placeholder="request name" required></div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Request Email</label>
            <div class="col-md-8"><input type="text" class="form-control" id="request_email" name="request_email" placeholder="request email" required></div>
          </div>
          <br>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Province ID</label>
            <div class="col-md-8">
              <fieldset>
                <select name="request_province_id" id="request_province_id" class="custom-select" aria-label="province" onchange="this.form.click()" required>
                  <option disabled selected hidden value="">-No Change-</option>
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
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">For Table</label>
            <div class="col-md-8">
              <fieldset>
                <select name="request_table" id="request_table" class="custom-select" aria-label="province" onchange="this.form.click()" required>
                  <option disabled selected hidden value="">-No Change-</option>
                  <option value="clothes">Clothes</option>
                  <option value="dance">Dance</option>
                  <option value="food">Food</option>
                  <option value="house">House</option>
                  <option value="instrument">Instrument</option>
                  <option value="landmark">Landmark</option>
                  <option value="song">Song</option>
                  <option value="story">Story</option>
                  <option value="taboo">Taboo</option>
                </select>
              </fieldset>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Title/Name</label>
            <div class="col-md-8"><input type="text" class="form-control" id="request_title" name="request_title" placeholder="request title" required></div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Info</label>
            <div class="col-md-8">
              <textarea type="text" class="form-control" id="request_info" name="request_info" placeholder="request info" required cols="30" rows="5"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Image</label>
            <div class="col-md-8">
            <a id="request_img" href="LINKNYA DISINI" data-lightbox="image-1" class="form-control">View</a>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" name="buttontype" value='accept' class="btn btn-success">Save and Transfer to Main Tables</button>
          <button type="submit" name="buttontype" value='edit' class="btn btn-primary">Save</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</div>