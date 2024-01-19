<div class="row">
    <div class="col-sm-5">
        <div class="panel panel-info">
            <div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('Results Image'); ?>
            </div>
            <div class="panel-wrapper collapse in" aria-expanded="true">
                <div class="panel-body table-responsive">

                    <?php echo form_open(base_url() . 'admin/results/result_image', array('class' => 'form-horizontal form-groups-bordered validate', 'target' => '_top', 'enctype' => 'multipart/form-data'));?>
                    <div class="form-group">
                        <label class="col-sm-12"><?php echo get_phrase('result_image');?>*</label>
                        <div class="col-sm-12">
                            <input type='file' class="form-control" name="result_banner" onChange="readURL(this);"
                                required>
                            <img id="blah" alt="" width="100%" />
                            <!-- <?php $image_url = $this->db->get_where('settings', array('type' => 'img'))->row()->description; ?>
						
							<div class="img-box">
								<img id="blah" src="<?php echo base_url('uploads/admin_image/'.$image_url); ?>"
								height="200" width="200">
							</div> -->

                        </div>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-block btn-info btn-rounded btn-sm"><i
                                class="fa fa-save"></i>&nbsp;<?php echo get_phrase('Update Result');?></button>

                    </div>

                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
    <!----CREATION FORM ENDS-->

    <div class="col-sm-7">
        <div class="panel panel-info">
            <div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('Manage Results');?>
            </div>
            <div class="panel-wrapper collapse in" aria-expanded="true">
                <div class="panel-body table-responsive">
                    <table id="example23" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>
                                    <div>#</div>
                                </th>
                                <th>
                                    <div><?php echo get_phrase('result_banner');?></div>
                                </th>
                                <!-- <th>
                                    <div><?php echo get_phrase('Youtube Link');?></div>
                                </th>
                                <th>
                                    <div><?php echo get_phrase('Description');?></div>
                                </th> -->

                                <th>
                                    <div><?php echo get_phrase('actions');?></div>
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $counter = 1; 
                            $sliders = $this->db->get('results')->result_array();

                            foreach($sliders as $key => $slider): ?>
                            <tr>
                                <td><?php echo $counter++; ?></td>
                                <td>
                                    <img src="<?php echo base_url('uploads/results/') . $slider['result_banner']; ?>"
                                        alt="" style="width: 130px; height: 80px;">
                                </td>
                                <td>
                                    <a href="#"
                                        onclick="confirm_modal('<?php echo base_url();?>admin/results/delete_result/<?php echo $slider['id'];?>');">
                                        <button type="button" class="btn btn-danger btn-circle btn-xs">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

<!----TABLE LISTING ENDS--->

<script type="text/javascript">
function get_class_subject(class_id) {
    $.ajax({
        url: '<?php echo base_url();?>admin/get_class_subject/' + class_id,
        success: function(response) {
            jQuery('#subject_selector_holder').html(response);
        }

    });
}
</script>