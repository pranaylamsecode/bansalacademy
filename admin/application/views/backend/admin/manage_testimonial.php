<div class="row">
    <div class="col-sm-5">
        <div class="panel panel-info">
            <div class="panel-heading"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('add testimonial');?>
            </div>
            <div class="panel-wrapper collapse in" aria-expanded="true">
                <div class="panel-body table-responsive">

                    <!----CREATION FORM STARTS---->

                    <?php echo form_open(base_url() . 'admin/manage_testimonial/create_testimonial' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top', 'enctype' => 'multipart/form-data'));?>
                    <div class="form-group">
                        <label class="col-md-12" for="example-text"><?php echo get_phrase('name');?></label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="name" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12" for="example-text"><?php echo get_phrase('description');?></label>
                        <div class="col-sm-12">
                            <textarea class="form-control" name="description"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-12"><?php echo get_phrase('Scholarship_image');?>*</label>
                        <div class="col-sm-12">
                            <input type='file' class="form-control" name="scholarship_image" onChange="readURL(this);" required>
                            <img id="blah" alt="" width="100%"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-info btn-block btn-rounded btn-sm"><i
                                class="fa fa-plus"></i>&nbsp;<?php echo get_phrase('manage_testimonial');?></button>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!----CREATION FORM ENDS-->

    <div class="col-sm-7">
        <div class="panel panel-info">
            <div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('manage_testimonial');?>
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
                                    <div><?php echo get_phrase('name');?></div>
                                </th>
                                <th>
                                    <div><?php echo get_phrase('description');?></div>
                                </th>
                                <th>
                                    <div><?php echo get_phrase('Scholarship_image');?></div>
                                </th>
                                <th>
                                    <div><?php echo get_phrase('actions');?></div>
                                </th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php $counter = 1; $testimonial =  $this->db->get('testimonial')->result_array();
                                foreach($testimonial as $key => $test):?>
                            <tr>
                                <td><?php echo $counter++;?></td>
                                <td><?php echo $test['name'];?></td>
                                <td><?php echo $test['description'];?></td>
                                <td><img src="<?php echo base_url('uploads/testimonial/') . $test['scholarship_image']; ?>"
                                        alt="" style="width: 130px; height: 80px;"></td>
                                <td>

                                    <a href="#"
                                        onclick="confirm_modal('<?php echo base_url();?>admin/manage_testimonial/delete_testimonial/<?php echo $test['id'];?>');"><button
                                            type="button" class="btn btn-danger btn-circle btn-xs"><i
                                                class="fa fa-times"></i></button></a>



                                </td>
                            </tr>
                            <?php endforeach;?>
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