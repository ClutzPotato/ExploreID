<?= view('layout/g_header') ?>
<div class="page-heading" style="background-image: url(<?= base_url('img/heading-share.jpg') ?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="top-text header-text">
                    <h6>Share Your Story</h6>
                    <h2>Help Others Explore Greater</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-page">
    <div class="container">
        <div class="row">
            <div class="col align-self-center">
                <?php if (session()->getFlashdata('success')) { ?>
                    <div class="alert alert-success col-sm-12" role="alert">
                        <?= session()->getFlashdata('success') ?>
                    </div>
                <?php } elseif (session()->getFlashdata('error')) { ?>
                    <div class="alert alert-warning col-sm-12" role="alert">
                        <?= session()->getFlashdata('error') ?>
                    </div>
                <?php } else { ?>
                <?php } ?>
                <form action="<?= base_url() ?>/share/upload" method="post" enctype="multipart/form-data">
                    <div class="row g-3">
                        <div class="col-lg-6">
                            <fieldset>
                                <input name="request_name" type="name" class="form-control" id="name" placeholder="Your name" autocomplete="on" required>
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <fieldset>
                                <input name="request_email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your email" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-3">
                            <fieldset>
                                <select name="request_province_id" class="form-select" aria-label="province" id="chooseCategory" onchange="this.form.click()" required>
                                    <option disabled selected hidden value="">Which Province?</option>
                                    <option value="1">Aceh</option>
                                    <option value="2">Sumatra Utara</option>
                                    <option value="3">Sumatra Selatan</option>
                                    <option value="4">Sumatra Barat</option>
                                    <option value="5">Bengkulu</option>
                                    <option value="6">Riau</option>
                                    <option value="7">Kepulauan Riau</option>
                                    <option value="8">Jambi</option>
                                    <option value="9">Lampung</option>
                                    <option value="10">Kepulauan Bangka Belitung</option>
                                    <option value="11">Kalimantan Timur</option>
                                    <option value="12">Kalimantan Barat</option>
                                    <option value="13">Kalimantan Tengah</option>
                                    <option value="14">Kalimantan Selatan</option>
                                    <option value="15">Kalimantan Utara</option>
                                    <option value="16">Daerah Khusus Ibukota Jakarta</option>
                                    <option value="17">Banten</option>
                                    <option value="18">Jawa Barat</option>
                                    <option value="19">Jawa Tengah</option>
                                    <option value="20">Daerah Istimewa Yogyakarta</option>
                                    <option value="21">Jawa Timur</option>
                                    <option value="22">Bali</option>
                                    <option value="23">Nusa Tenggara Barat</option>
                                    <option value="24">Nusa Tenggara Timur</option>
                                    <option value="25">Sulawesi Utara</option>
                                    <option value="26">Sulawesi Barat</option>
                                    <option value="27">Sulawesi Tengah</option>
                                    <option value="28">Gorontalo</option>
                                    <option value="29">Sulawesi Tenggara</option>
                                    <option value="30">Sulawesi Selatan</option>
                                    <option value="31">Maluku Utara</option>
                                    <option value="32">Maluku</option>
                                    <option value="33">Papua Barat</option>
                                    <option value="34">Papua</option>
                                    <option value="35">Papua Selatan</option>
                                    <option value="36">Papua Tengah</option>
                                    <option value="37">Papua Pegunungan</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-lg-3">
                            <fieldset>
                                <select name="request_table" class="form-select" aria-label="type" id="chooseCategory" onchange="this.form.click()" required>
                                    <option selected hidden value="">What Topic?</option>
                                    <option value="food">Local Cuisines</option>
                                    <option value="landmark">Landmark & Sceneries</option>
                                    <option value="song">Folk Songs</option>
                                    <option value="dance">Traditional Dances</option>
                                    <option value="story">Lores, Myths, or Tales</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <fieldset>
                                <input name="request_title" type="name" class="form-control" id="name" placeholder="Name or title of the topic" autocomplete="on" required>
                            </fieldset>
                        </div>

                        <div class="col-lg-12">
                            <fieldset>
                                <textarea name="request_info" rows="15" type="text" class="form-control" id="message" placeholder="Information that you want to share with us." required maxlength="3000"></textarea>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <label class="form-label">Media (.jpg/.jpeg/.png) <small>that will be available to the public domain</small></label>
                                <input type="file" name="fileToUpload" id="fileToUpload" class="form-control" required>

                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <button name="submit" type="submit" id="form-submit" class="btn btn-danger"><i class="fa fa-paper-plane"></i> Share Experience</button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= view('layout/g_footer') ?>