<div class="row">
    <div class="col-sm-10">
        <div class="panel panel-info">
            <div class="panel-heading"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('Quiz Question'); ?>
            </div>
  
            <?php echo form_open(base_url() . 'quiz/quizQuestion/create', array('class' => 'form-horizontal form-goups-bordered validate'));?>            <div class="panel-body table-responsive">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text"><?php echo get_phrase('Select Quiz Name');?></label>
                            <select name="quiz_id" class="form-control select2" style="width:100%" required>
                                <option value=""><?php echo get_phrase('Quiz Name');?></option>
                                <?php 
                                $quiz = $this->db->get('quiz_details')->result_array();
                                foreach($quiz as $quiz_details):
                                    ?>
                                    <option value="<?php echo $quiz_details['quiz_id'];?>">
                                        <?php echo $quiz_details['quiz_name'];?>
                                    </option>
                                <?php
                                endforeach;
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="example-text"><?php echo get_phrase('Question');?></label>
                            <input name="question" type="text" class="form-control" required>
                        </div>
                    </div>
                    <!-- <div class="col-md-6"></div> -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text"><?php echo get_phrase('Option 1');?></label>
                            <input name="option1" type="text" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text"><?php echo get_phrase('Option 2');?></label>
                            <input name="option2" type="text" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text"><?php echo get_phrase('Option 3');?></label>
                            <input name="option3" type="text" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text"><?php echo get_phrase('Option 4');?></label>
                            <input name="option4" type="text" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="example-text"><?php echo get_phrase('Correct Answer : ');?></label>
                            <input id="radio" class="filled-in chk-col-teal" name="answer" value="option_1" type="radio"> <span>Option 1</span> &nbsp;&nbsp;
                            <input id="radio" class="filled-in chk-col-teal" name="answer" value="option_2" type="radio"> <span>Option 2</span> &nbsp;&nbsp;
                            <input id="radio" class="filled-in chk-col-teal" name="answer" value="option_3" type="radio"> <span>Option 3</span> &nbsp;&nbsp;
                            <input id="radio" class="filled-in chk-col-teal" name="answer" value="option_4" type="radio"> <span>Option 4</span>
                            <!-- <label for="checkbox">Active</label> <br/> -->
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-info btn-rounded btn-sm "><i
                                class="fa fa-plus"></i>&nbsp;<?php echo get_phrase('add_quiz_question');?></button>
                    </div>
                </div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>
<!----TABLE LISTING ENDS--->