<div class="row">
    <div class="col-sm-5">
        <div class="panel panel-info">
            <div class="panel-heading"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('Add Lecture');?>
            </div>
            <div class="panel-wrapper collapse in" aria-expanded="true">
                <div class="panel-body table-responsive">

                    <!----CREATION FORM STARTS---->

                    <?php echo form_open(base_url() . 'admin/manage_recorded_lecture/create' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top', 'enctype' => 'multipart/form-data'));?>
                    <div class="form-group">
                        <label class="col-md-12" for="example-text"><?php echo get_phrase('title');?></label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="title" required>
                        </div>
                    </div>

                    <!-- <div class="form-group">
                        <label class="col-md-12" for="example-text"><?php echo get_phrase('Meeting Type');?></label>
                        <div class="col-sm-12">
                            <select name="meeting_type" id="meeting_type" class="form-control select2">
                                <option value=""><?php echo get_phrase('select_meeting');?></option>
                                <option value="Google Meeting">Google Meeting</option>
                                <option value="Zoom Meeting">Zoom Meeting</option>
                            </select>

                        </div>
                    </div> -->

                    <div class="form-group">
                        <label class="col-md-12" for="example-text"><?php echo get_phrase('Youtube Link');?></label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="youtube_link" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12" for="example-text"><?php echo get_phrase('description');?></label>
                        <div class="col-sm-12">
                            <textarea class="form-control" name="description"></textarea>
                        </div>
                    </div>

                    <!-- 
                    <div class="form-group">
                        <label class="col-md-12" for="example-text"><?php echo get_phrase('class');?></label>
                        <div class="col-sm-12">
                            <select name="class_id" id="class_id" class="form-control select2"
                                onchange="return get_class_subject(this.value)">
                                <option value=""><?php echo get_phrase('select_class');?></option>

                                <?php $class =  $this->db->get('class')->result_array();
                                foreach($class as $key => $class):?>
                                <option value="<?php echo $class['class_id'];?>"><?php echo $class['name'];?></option>
                                <?php endforeach;?>
                            </select>

                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-12" for="example-text"><?php echo get_phrase('subject');?></label>
                        <div class="col-sm-12">
                            <select name="subject_id" class="form-control" id="subject_selector_holder">
                                <option value=""><?php echo get_phrase('select_subject');?></option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-12" for="example-text"><?php echo get_phrase('browse_file');?></label>
                        <div class="col-sm-12">
                            <input name="file_name" class="form-control" type="file" / required>
                        </div>
                    </div> -->


                    <div class="form-group">
                        <button type="submit" class="btn btn-info btn-block btn-rounded btn-sm"><i
                                class="fa fa-plus"></i>&nbsp;<?php echo get_phrase('manage_lecture');?></button>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!----CREATION FORM ENDS-->

    <div class="col-sm-7">
        <div class="panel panel-info">
            <div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('Manage Lecture');?>
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
                                    <div><?php echo get_phrase('Youtube Link');?></div>
                                </th>
                                <th>
                                    <div><?php echo get_phrase('Description');?></div>
                                </th>
                            
                                <th>
                                    <div><?php echo get_phrase('actions');?></div>
                                </th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php $counter = 1; $link =  $this->db->get('recorded_lecture')->result_array();
                                foreach($link as $key => $link):?>
                            <tr>
                                <td><?php echo $counter++;?></td>
                                <td><?php echo $link['title'];?></td>
                                <td><?php echo $link['youtube_link'];?></td>
                                <td><?php echo $link['description'];?></td>
                                                            
                                <td>

                                    <a href="#"
                                        onclick="confirm_modal('<?php echo base_url();?>admin/manage_recorded_lecture/delete/<?php echo $link['id'];?>');"><button
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