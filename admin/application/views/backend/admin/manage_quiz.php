<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-info">
            <div class="panel-heading"> <?php echo get_phrase('All Categories');?>
                <a href="<?php echo base_url(); ?>quiz/add_quiz" class="btn btn-warning btn-xs pull-right p-2">
                    <i class="fa fa-plus"></i><?php echo get_phrase('add_quiz'); ?>
                </a>
            </div>
            <div class="panel-body table-responsive">


                <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <!-- <th>#</th> -->
                            <th>Quiz Name</th>
                            <th>Number of Question</th>
                            <th>Quiz Start Date</th>
                            <th>Quiz End Date</th>
                            <th>Quiz Time Duration</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                    if(count($quiz_details)) {
                        // print_r(count($quiz_details));
                        // exit;
                        foreach ($quiz_details as $quiz_obj):
//  print_r($quiz_details);
//                         exit;
                           
                        ?>
                        <tr>
                            <td><?php echo ucfirst($quiz_obj['quiz_name']); ?></td>
                            <td><?php echo $quiz_obj['counter']; ?></td>
                            <td><?php echo $quiz_obj['start_date']; ?></td>
                            <td><?php echo $quiz_obj['end_date']; ?></td>
                            <td><?php echo $quiz_obj['quiz_duration']; ?></td>
                            <td>
                                <?php if ($quiz_obj['show_it'] == 1) { ?>
                                <span class="label label-info">Active</span>
                                <?php } else { ?>
                                <span class="label label-warning">Deactive</span>
                                <?php } ?>
                            </td>

                            <td> <a href="<?php echo base_url(); ?>quiz/edit_quiz/<?php echo $quiz_obj['quiz_id']; ?>"
                                    class="btn btn-info btn-circle btn-xs" style="color:white">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="#"
                                    onclick="confirm_modal('<?php echo base_url();?>quiz/add_quiz/delete/<?php echo $quiz_obj['quiz_id']; ?>');"><button
                                        type="button" class="btn btn-danger btn-circle btn-xs" style="color:white"><i
                                            class="fa fa-times"></i></button></a>
                                <!-- <a href="javascript:void(0);" rel="<?php echo $quiz_obj['quiz_id']; ?>"
                                    onClick="delConfirm(this);" class="btn btn-danger btn-circle btn-xs"
                                    style="color:white">
                                    <i class="fa fa-times"></i>
                                </a> -->
                            </td>
                        </tr>
                        <?php
                          endforeach;
                    }
                ?>

                    </tbody>
                </table>



            </div>
        </div>
    </div>
</div>