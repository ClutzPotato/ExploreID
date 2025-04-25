<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="about">
          <div class="logo">
            <img src="<?= base_url('img/logo.png') ?>" alt="Plot Listing">
          </div>
          <p></p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="helpful-links">
          <h4>Helpful Links</h4>
          <div class="row">
            <div class="col-lg-6 col-sm-6">
              <ul>
                <li><a href="<?= base_url('faq') ?>">FAQ</a></li>
                <li><a href="../../#">Reviews</a></li>
                <li><a href="../../#">Listing</a></li>
                <li><a href="../../#">Contact Us</a></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <!-- <ul>
                <li><a href="../../#">About Us</a></li>
                <li><a href="../../#">Awards</a></li>
                <li><a href="../../#">Useful Sites</a></li>
                <li><a href="../../#">Privacy Policy</a></li>
              </ul> -->
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="contact-us">
          <h4>Contact Us</h4>
          <!-- <p>27th Street of New Town, Digital Villa</p>
          <div class="row">
            <div class="col-lg-6">
              <a href="../../#">010-020-0340</a>
            </div>
            <div class="col-lg-6">
              <a href="../../#">090-080-0760</a>
            </div>
          </div> -->
        </div>
      </div>
      <div class="col-lg-12">
        <div class="sub-footer">
          <p>Copyright © 2022 Kelompok 4</p>
          <a href="<?= base_url() ?>/login">Admin Panel</a>
        </div>
      </div>
    </div>
  </div>
</footer>


<!-- Scripts -->
<script src="<?= base_url('assets_guest/vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets_guest/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets_guest/js/owl-carousel.js') ?>"></script>
<script src="<?= base_url('assets_guest/js/animation.js') ?>"></script>
<script src="<?= base_url('assets_guest/js/imagesloaded.js') ?>"></script>
<script src="<?= base_url('assets_guest/js/custom.js') ?>"></script>
<script src="<?= base_url('assets_guest/js/lightbox.js') ?>"></script>
<script>
  lightbox.option({
    'resizeDuration': 100,
    'wrapAround': true,
    'disableScrolling': true,
  })

  // var speed = 'fast';
  // $('html, body').hide();
  // $(document).ready(function() {
  //   $('html, body').fadeIn(speed, function() {
  //     $('a[href], button[href]').click(function(event) {
  //       var url = $(this).attr('href');
  //       if (url.indexOf('#') == 0 || url.indexOf('javascript:') == 0) return;
  //       event.preventDefault();
  //       $('html, body').fadeOut(speed, function() {
  //         window.location = url;
  //       });
  //     });
  //   });
  // });
</script>


</body>

</html>