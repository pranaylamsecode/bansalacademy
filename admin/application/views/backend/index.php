<?php
$system_name    = $this->db->get_where('settings', array('type' => 'system_name'))->row()->description;
$system_address = $this->db->get_where('settings', array('type' => 'address'))->row()->description;
$footer         = $this->db->get_where('settings', array('type' => 'footer'))->row()->description;
$text_align     = $this->db->get_where('settings', array('type' => 'text_align'))->row()->description;
$loginType      = $this->session->userdata('login_type');

$running_year   = $this->db->get_where('settings', array('type' => 'session'))->row()->description;
?>
<?php include 'css.php'; ?>

<!-- here css of exac_ci -->

<!-- <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/mystyle.css"> -->

<!-- <script src="<?=base_url()?>assets/bower_components/jquery/jquery-3.3.1.min.js"></script> -->
   <!--  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css"> -->
	<!-- <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/select2/css/select2.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/dist/css/skins/skin-blue.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/dist/css/skins/skin-yellow.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/pace/pace-theme-flash.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/css/buttons.bootstrap.min.css"> -->
	<!-- textarea editor -->
	<!-- <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/codemirror/lib/codemirror.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/froala_editor/css/froala_editor.pkgd.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/froala_editor/css/froala_style.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/froala_editor/css/themes/royal.min.css"> -->
	<!-- /texarea editor; -->

	<!-- Custom CSS -->

	   <!--  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
        <script src="<?=base_url()?>assets/bower_components/sweetalert2/sweetalert2.all.min.js"></script>
        <script src="<?=base_url()?>assets/bower_components/select2/js/select2.full.min.js"></script>
        <script src="<?=base_url()?>assets/bower_components/moment/min/moment.min.js"></script>
        <script src="<?=base_url()?>assets/bower_components/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script> -->
    <!-- here css fo exam_ci end  -->

    <!-- Preloader -->
   <!--  <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div> -->
    <div id="wrapper">


	<?php include 'header.php'; ?>
	<?php include $loginType.'/navigation.php';?>
	<?php include 'page_info.php';?>
	<?php include $loginType.'/'.$page_name.'.php';?>


	<?php // include 'dashboard.php'; ?>




                <!-- .right-sidebar -->
                <div class="right-sidebar" style="background:url(<?php echo base_url(); ?>assets/images/10.png); opacity: 0.9;">
                    <div class="slimscrollright">
                        <div class="rpanel-title">Current Mesage Thread<span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">

                            <ul class="m-t-20 chatonline">

                            <?php
                            $user_array = ['admin', 'student', 'teacher', 'parent'];
                            for($i= 0; $i < sizeof($user_array); $i++):
                            $user_lists = $this->db->get($user_array[$i])->result_array();
                            ?>
                        <?php foreach($user_lists as $key => $user_list):?>
                            <?php $login_status = $user_list['login_status'];?>
                                <li>
                                   <?php echo $user_list['name'];?>
                                   <span class="pull-right">
                                   <?php if($login_status == '1'): ?>
                                   <?php echo '<i class="fa fa-circle" style="color:green"></i>';?>
                                   <?php endif;?>
                                   <?php if($login_status == '2'): ?>
                                   <?php echo '<i class="fa fa-circle" style="color:red"></i>';?>
                                   <?php endif;?>


                                   </span>
                                </li>
                        <?php endforeach;?>
                        <?php endfor;?>


                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.right-sidebar -->
            </div>
            <!-- /.container-fluid -->






         <?php include 'footer.php'; ?>
         <script type="text/javascript">
            let base_url = '<?=base_url()?>';
        </script>
              <!-- script exam_ci start  -->

                                    <!-- Required JS -->

			<script src="<?= base_url() ?>assets/bower_components/datatables.net-bs/js/jquery.dataTables.min.js"></script>
			<script src="<?= base_url() ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

			<!-- Datatables Buttons -->
			<script src="<?= base_url() ?>assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>
			<script src="<?= base_url() ?>assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/js/buttons.bootstrap.min.js"></script>
			<script src="<?= base_url() ?>assets/bower_components/datatables.net-bs/plugins/JSZip-2.5.0/jszip.min.js"></script>
			<script src="<?= base_url() ?>assets/bower_components/datatables.net-bs/plugins/pdfmake-0.1.36/pdfmake.min.js"></script>
			<script src="<?= base_url() ?>assets/bower_components/datatables.net-bs/plugins/pdfmake-0.1.36/vfs_fonts.js"></script>
			<script src="<?= base_url() ?>assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/js/buttons.html5.min.js"></script>
			<script src="<?= base_url() ?>assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/js/buttons.print.min.js"></script>
			<script src="<?= base_url() ?>assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/js/buttons.colVis.min.js"></script>

			<script src="<?= base_url() ?>assets/bower_components/pace/pace.min.js"></script>
			<!-- <script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script> -->

			<!-- Textarea editor -->
			<script src="<?= base_url() ?>assets/bower_components/codemirror/lib/codemirror.min.js"></script>
			<script src="<?= base_url() ?>assets/bower_components/codemirror/mode/xml.min.js"></script>
			<script src="<?= base_url() ?>assets/bower_components/froala_editor/js/froala_editor.pkgd.min.js"></script>

			<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

			<!-- App JS -->
			<!-- <script src="<?= base_url() ?>assets/dist/js/app/dashboard.js"></script> -->

			<!-- Custom JS -->
			<script type="text/javascript">
				$.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings) {
					return {
						"iStart": oSettings._iDisplayStart,
						"iEnd": oSettings.fnDisplayEnd(),
						"iLength": oSettings._iDisplayLength,
						"iTotal": oSettings.fnRecordsTotal(),
						"iFilteredTotal": oSettings.fnRecordsDisplay(),
						"iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
						"iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
					};
				};

				function ajaxcsrf() {
					var csrfname = '<?= $this->security->get_csrf_token_name() ?>';
					var csrfhash = '<?= $this->security->get_csrf_hash() ?>';
					var csrf = {};
					csrf[csrfname] = csrfhash;
					$.ajaxSetup({
						"data": csrf
					});
				}

				function reload_ajax() {
					table.ajax.reload(null, false);
				}

				$(document).ready(function() {
					$('.summernote').summernote({
						toolbar: [
							// [groupName, [list of button]]
							['style', ['bold', 'italic', 'underline', 'clear']],
							['font', ['strikethrough', 'superscript', 'subscript']],
							['fontsize', ['fontsize']],
							['color', ['color']],
							['para', ['ul', 'ol', 'paragraph']],
							['height', ['height']]
						]
					});
				});
			</script>
              <!-- script exam_ci end  -->

        </div>
        <!-- /#page-wrapper -->
    </div>
 <?php include 'modal.php'; ?>
 <?php include 'js.php'; ?>
