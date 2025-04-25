</div>
<!-- /.content-wrapper -->

<footer class="main-footer my-0">
  <h6>Copyright ©2022 - KELOMPOK 4 - 3SIMA / PEMROGRAMAN WEB SISTEM INFORMASI UIB</h6>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url() ?>/assets_admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url() ?>/assets_admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- ChartJS -->
<script src="<?= base_url() ?>/assets_admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url() ?>/assets_admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url() ?>/assets_admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url() ?>/assets_admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url() ?>/assets_admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url() ?>/assets_admin/plugins/moment/moment.min.js"></script>
<script src="<?= base_url() ?>/assets_admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url() ?>/assets_admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url() ?>/assets_admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url() ?>/assets_admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>/assets_admin/dist/js/adminlte.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url() ?>/assets_admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>/assets_admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/assets_admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>/assets_admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/assets_admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>/assets_admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/assets_admin/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url() ?>/assets_admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url() ?>/assets_admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url() ?>/assets_admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>/assets_admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url() ?>/assets_admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>/assets_admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets_guest/js/lightbox.js') ?>"></script>
<!-- Page specific script -->
<script>
  $(function() {
    $("#myTableProvince").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#myTableProvince_wrapper .col-md-6:eq(0)');

    $("#myTableClothes").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", ]
    }).buttons().container().appendTo('#myTableClothes_wrapper .col-md-6:eq(0)');

    $("#myTableHouse").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", ]
    }).buttons().container().appendTo('#myTableHouse_wrapper .col-md-6:eq(0)');
    $("#myTableDance").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", ]
    }).buttons().container().appendTo('#myTableDance_wrapper .col-md-6:eq(0)');
    $("#myTableSong").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", ]
    }).buttons().container().appendTo('#myTableSong_wrapper .col-md-6:eq(0)');
    $("#myTableInstrument").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", ]
    }).buttons().container().appendTo('#myTableInstrument_wrapper .col-md-6:eq(0)');
    $("#myTableLandmark").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", ]
    }).buttons().container().appendTo('#myTableLandmark_wrapper .col-md-6:eq(0)');
    $("#myTableFood").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", ]
    }).buttons().container().appendTo('#myTableFood_wrapper .col-md-6:eq(0)');
    $("#myTableStory").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", ]
    }).buttons().container().appendTo('#myTableStory_wrapper .col-md-6:eq(0)');
    $("#myTableTaboo").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", ]
    }).buttons().container().appendTo('#myTableTaboo_wrapper .col-md-6:eq(0)');


    $(document).on('click', '#btnEditData', function() {
      var id = $(this).attr('vid');
      var table = $(this).attr('vtable');
      strLink = '<?= base_url() ?>/database/' + table + '/' + table + '_' + id + '.jpg';
      tableimg = table + '_img';
      document.getElementById(tableimg).setAttribute("href", strLink);
      $.ajax({
        url: "<?= site_url('table/vEditData') ?>",
        method: "POST",
        data: {
          id: id,
          table: table
        },
        async: true,

        dataType: 'json',
        success: function(data) {
          if (table == 'province') {
            for (i = 0; i < data.length; i++) {
              $('#province_id').val(data[i].province_id);
              $('#province_name').val(data[i].province_name);
              $('#province_info').val(data[i].province_info);
            }
          }
          if (table == 'clothes') {
            for (i = 0; i < data.length; i++) {
              $('#clothes_id').val(data[i].clothes_id);
              $('#clothes_name').val(data[i].clothes_name);
              $('#clothes_info').val(data[i].clothes_info);
              $('#clothes_province_id').val(data[i].province_id);
            }
          }
          if (table == 'house') {
            for (i = 0; i < data.length; i++) {
              $('#house_id').val(data[i].house_id);
              $('#house_name').val(data[i].house_name);
              $('#house_info').val(data[i].house_info);
              $('#house_province_id').val(data[i].province_id);
            }
          }
          if (table == 'dance') {
            for (i = 0; i < data.length; i++) {
              $('#dance_id').val(data[i].dance_id);
              $('#dance_name').val(data[i].dance_name);
              $('#dance_info').val(data[i].dance_info);
              $('#dance_province_id').val(data[i].province_id);
            }
          }
          if (table == 'song') {
            for (i = 0; i < data.length; i++) {
              $('#song_id').val(data[i].song_id);
              $('#song_name').val(data[i].song_name);
              $('#song_info').val(data[i].song_info);
              $('#song_province_id').val(data[i].province_id);
            }
          }
          if (table == 'instrument') {
            for (i = 0; i < data.length; i++) {
              $('#instrument_id').val(data[i].instrument_id);
              $('#instrument_name').val(data[i].instrument_name);
              $('#instrument_info').val(data[i].instrument_info);
              $('#instrument_province_id').val(data[i].province_id);
            }
          }
          if (table == 'landmark') {
            for (i = 0; i < data.length; i++) {
              $('#landmark_id').val(data[i].landmark_id);
              $('#landmark_name').val(data[i].landmark_name);
              $('#landmark_info').val(data[i].landmark_info);
              $('#landmark_province_id').val(data[i].province_id);
            }
          }
          if (table == 'food') {
            for (i = 0; i < data.length; i++) {
              $('#food_id').val(data[i].food_id);
              $('#food_name').val(data[i].food_name);
              $('#food_info').val(data[i].food_info);
              $('#food_province_id').val(data[i].province_id);
            }
          }
          if (table == 'story') {
            for (i = 0; i < data.length; i++) {
              $('#story_id').val(data[i].story_id);
              $('#story_name').val(data[i].story_name);
              $('#story_info').val(data[i].story_info);
              $('#story_province_id').val(data[i].province_id);
            }
          }
          if (table == 'taboo') {
            for (i = 0; i < data.length; i++) {
              $('#taboo_id').val(data[i].taboo_id);
              $('#taboo_info').val(data[i].taboo_info);
              $('#taboo_province_id').val(data[i].province_id);
            }
          }

        }
      })
      return false;
    });

    $(document).on('click', '#btnEditRequest', function() {
      var id = $(this).attr('vid');
      var table = $(this).attr('vtable');
      strLink = '<?= base_url() ?>/database/request/request_' + id + '.jpg';
      document.getElementById("request_img").setAttribute("href", strLink);
      $.ajax({
        url: "<?= site_url('request/vEditData') ?>",
        method: "POST",
        data: {
          id: id,
          table: table
        },
        async: true,
        dataType: 'json',
        success: function(data) {
          for (i = 0; i < data.length; i++) {
            $('#request_id').val(data[i].request_id);
            $('#request_name').val(data[i].request_name);
            $('#request_email').val(data[i].request_email);
            $('#request_province_id').val(data[i].request_province_id);
            $('#request_table').val(data[i].request_table);
            $('#request_title').val(data[i].request_title);
            $('#request_info').val(data[i].request_info);


          }

        }
      })
      return false;
    });


  });
</script>

</html>