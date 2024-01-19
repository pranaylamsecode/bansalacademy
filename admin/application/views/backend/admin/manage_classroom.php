<div class="row">
    <div class="col-sm-5">
        <div class="panel panel-info">
            <div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('Add Classroom'); ?>
            </div>
            <div class="panel-wrapper collapse in" aria-expanded="true">
                <div class="panel-body table-responsive">

                    <?php echo form_open(base_url() . 'admin/manage_classroom/create_classroom', array('class' => 'form-horizontal form-groups-bordered validate', 'target' => '_top', 'enctype' => 'multipart/form-data'));?>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="example-text"><?php echo get_phrase('Select Classroom');?></label>
                            <select class="form-control" name="classroom" required>
                                <option value="">Select</option>
                                <option value="JEE">JEE</option>
                                <option value="NEET">NEET</option>
                                <!-- <option value="Foundation">Foundation</option> -->
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="example-text"><?php echo get_phrase('Select SubClass');?></label>
                            <select class="form-control" name="subclass" required>
                                <option value="">Select</option>
                                <option value="Class 11th">Class 11th</option>
                                <option value="Class 12th">Class 12th</option>
                                <option value="12th Pass">12th Pass</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="example-text"><?php echo get_phrase('Date');?></label>
                            <input name="date" type="date" value="<?php echo date('Y-m-d');?>" class="form-control" required>
                        </div>
                    </div>
                   
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label><?php echo get_phrase('select_document');?>*</label>
                            <!-- <input type='file' class="form-control" name="document" onChange="readURL(this);"
                                required> -->
                            <input type="file" name="document" class="dropify" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-info btn-rounded btn-sm"><i
                                class="fa fa-save"></i>&nbsp;<?php echo get_phrase('Update Classroom');?></button>

                    </div>

                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
    <!----CREATION FORM ENDS-->

    <div class="col-sm-7">
        <div class="panel panel-info">
            <div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('Manage Classroom');?>
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
                                    <div><?php echo get_phrase('Classroom');?></div>
                                </th>
                                <th>
                                    <div><?php echo get_phrase('Sub Class');?></div>
                                </th>
                                <th>
                                    <div><?php echo get_phrase('Date');?></div>
                                </th>
                                <th>
                                    <div><?php echo get_phrase('Document');?></div>
                                </th>
                               
                                <th>
                                    <div><?php echo get_phrase('actions');?></div>
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $counter = 1; 
                            $classroom = $this->db->get('classroom')->result_array();

                            foreach($classroom as $key => $class): ?>
                            <tr>
                                <td><?php echo $counter++; ?></td>
                                <td><?php echo $class['classroom'];?></td>
                                <td><?php echo $class['subclass'];?></td>
                                <td><?php echo $class['date'];?></td>
                                <td><a href="<?php echo base_url().'uploads/classroom/'. $class['document'];?>"><button type="button" class="btn btn-info btn-circle btn-xs" ><i class="fa fa-download"></i></button></a></td>
                                <td>
                                    <a href="#"
                                        onclick="confirm_modal('<?php echo base_url();?>admin/manage_classroom/delete_classroom/<?php echo $class['id'];?>');">
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