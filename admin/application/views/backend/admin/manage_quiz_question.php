<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-info">
            <div class="panel-heading"> <?php echo get_phrase('All Categories');?>
                <a href="<?php echo base_url(); ?>quiz/quizQuestion" class="btn btn-warning btn-xs pull-right p-2">
                    <i class="fa fa-plus"></i><?php echo get_phrase('add_quiz_question'); ?>
                </a>
            </div>
            <div class="panel-body table-responsive">


                <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <!-- <th>#</th> -->
                            <th>Quiz Name</th>
                            <th>Question</th>
                            <th>Option 1</th>
                            <th>Option 2</th>
                            <th>Option 3</th>
                            <th>Option 4</th>
                            <th>Answer</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                    if(count($details)) {
                        // print_r(count($quiz_details));
                        // exit;
                        foreach ($details as $quiz_obj):
                        //  print_r($quiz_details);
                        //  exit;
                           
                        ?>
                        <tr>
                            <td><?php echo ucfirst($quiz_obj['quiz_name']); ?></td>
                            <td><?php echo $quiz_obj['question']; ?></td>
                            <td><?php echo $quiz_obj['option1']; ?></td>
                            <td><?php echo $quiz_obj['option2']; ?></td>
                            <td><?php echo $quiz_obj['option3']; ?></td>
                            <td><?php echo $quiz_obj['option4']; ?></td>
                            <td><?php echo $quiz_obj['answer']; ?></td>
                           
                            <td> <a href="<?php echo base_url(); ?>quiz/edit_quiz_question/<?php echo $quiz_obj['id']; ?>"
                                    class="btn btn-info btn-circle btn-xs" style="color:white">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="#"
                                    onclick="confirm_modal('<?php echo base_url();?>quiz/manage_quiz_question/delete/<?php echo $quiz_obj['id']; ?>');"><button
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