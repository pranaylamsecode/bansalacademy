<div class="row">
    <div class="col-sm-5">
        <div class="panel panel-info">
            <div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('Add Course'); ?>
            </div>
            <div class="panel-wrapper collapse in" aria-expanded="true">
                <div class="panel-body table-responsive">

                    <?php echo form_open(base_url() . 'admin/courses/create', array('class' => 'form-horizontal form-groups-bordered validate', 'target' => '_top', 'enctype' => 'multipart/form-data'));?>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="example-text"><?php echo get_phrase('Select Section');?></label>
                            <select class="form-control" name="section" required>
                                <option value="">Select</option>
                                <option value="JEE">JEE</option>
                                <option value="NEET">NEET</option>
                                <option value="Foundation">Foundation</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="example-text"><?php echo get_phrase('Title');?></label>
                            <input name="title" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('class');?></label>
                            <div class="col-sm-12">
                                <select name="class_id" id="class_id" class="form-control select2"
                                    onchange="return get_class_subject(this.value)">
                                    <option value=""><?php echo get_phrase('select_class');?></option>

                                    <?php $class =  $this->db->get('class')->result_array();
                                    foreach($class as $key => $class):?>
                                    <option value="<?php echo $class['class_id'];?>"><?php echo $class['name'];?>
                                    </option>
                                    <?php endforeach;?>
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="example-text"><?php echo get_phrase('Batch Ongoing');?></label>
                            <input name="batch" type="date" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="example-text"><?php echo get_phrase('Target Year');?></label>
                            <input name="target_year" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label><?php echo get_phrase('course_image');?>*</label>
                            <input type='file' class="form-control" name="course_img" onChange="readURL(this);"
                                required>
                            <img id="blah" alt="" width="100%" />
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-info btn-rounded btn-sm"><i
                                class="fa fa-save"></i>&nbsp;<?php echo get_phrase('Update Course');?></button>

                    </div>

                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
    <!----CREATION FORM ENDS-->

    <div class="col-sm-7">
        <div class="panel panel-info">
            <div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('Manage Courses');?>
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
                                    <div><?php echo get_phrase('title');?></div>
                                </th>
                                <th>
                                    <div><?php echo get_phrase('class');?></div>
                                </th>
                                <th>
                                    <div><?php echo get_phrase('batch');?></div>
                                </th>
                                <th>
                                    <div><?php echo get_phrase('target year');?></div>
                                </th>
                                <th>
                                    <div><?php echo get_phrase('course image');?></div>
                                </th>
                                <th>
                                    <div><?php echo get_phrase('actions');?></div>
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $counter = 1; 
                            $courses = $this->db->get('courses')->result_array();

                            foreach($courses as $key => $course): ?>
                            <tr>
                                <td><?php echo $counter++; ?></td>
                                <td><?php echo $course['title'];?></td>
                                <td><?php echo $this->db->get_where('class', array('class_id' => $class['class_id']))->row()->name;?></td>
                                <td><?php echo $course['batch'];?></td>
                                <td><?php echo $course['target_year'];?></td>
                                <td>
                                    <img src="<?php echo base_url('uploads/courses/') . $course['course_img']; ?>"
                                        alt="" style="width: 130px; height: 80px;">
                                </td>
                                <td>
                                    <a href="#"
                                        onclick="confirm_modal('<?php echo base_url();?>admin/courses/delete_course/<?php echo $course['id'];?>');">
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