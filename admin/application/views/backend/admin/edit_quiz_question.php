<?php $questions = $this->db->get_where('quiz_questions', array('id' => $id))->result_array();
        foreach($questions as $key => $quiz_questions):
		// print_r($students);
		// exit;
		// echo $quiz_details['duration'];
		?>
<div class="row">
    <div class="col-sm-10">
        <div class="panel panel-info">
            <div class="panel-heading"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('Edit Quiz Question'); ?>
            </div>
  
            <?php echo form_open(base_url() . 'quiz/quizQuestion/update/' .$id, array('class' => 'form-horizontal form-goups-bordered validate'));?>            <div class="panel-body table-responsive">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <?php 
                            $quiz_details_list = $this->db->get('quiz_details')->result_array();
                            foreach($quiz_details_list as $quiz_details):
                            ?>
                                <?php if ($quiz_details['quiz_id'] == $quiz_questions['quiz_id']): ?>
                                    <label for="example-text"><?php echo get_phrase('Quiz Name');?></label> : <?php echo $quiz_details['quiz_name']; ?>
                                    <!-- Hidden input to send the quiz_id along with the form -->
                                    <!-- <input type="hidden" name="quiz_id" value="<?php echo $quiz_details['quiz_id']; ?>"> -->
                                <?php endif; ?>
                            <?php
                            endforeach;
                            ?>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="example-text"><?php echo get_phrase('Question');?></label>
                            <input name="question" type="text" value="<?php echo $quiz_questions['question'];?>" class="form-control" required>
                        </div>
                    </div>
                    <!-- <div class="col-md-6"></div> -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text"><?php echo get_phrase('Option 1');?></label>
                            <input name="option1" type="text" value="<?php echo $quiz_questions['option1'];?>" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text"><?php echo get_phrase('Option 2');?></label>
                            <input name="option2" type="text" value="<?php echo $quiz_questions['option2'];?>" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text"><?php echo get_phrase('Option 3');?></label>
                            <input name="option3" type="text" value="<?php echo $quiz_questions['option3'];?>" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text"><?php echo get_phrase('Option 4');?></label>
                            <input name="option4" type="text" value="<?php echo $quiz_questions['option4'];?>" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="example-text"><?php echo get_phrase('Correct Answer : ');?></label>
                            <input id="radio" class="filled-in chk-col-teal" name="answer" value="option_1" type="radio" <?php echo ($quiz_questions['answer'] == 'option_1') ? 'checked' : ''; ?>> <span>Option 1</span> &nbsp;&nbsp;
                            <input id="radio" class="filled-in chk-col-teal" name="answer" value="option_2" type="radio" <?php echo ($quiz_questions['answer'] == 'option_2') ? 'checked' : ''; ?>> <span>Option 2</span> &nbsp;&nbsp;
                            <input id="radio" class="filled-in chk-col-teal" name="answer" value="option_3" type="radio" <?php echo ($quiz_questions['answer'] == 'option_3') ? 'checked' : ''; ?>> <span>Option 3</span> &nbsp;&nbsp;
                            <input id="radio" class="filled-in chk-col-teal" name="answer" value="option_4" type="radio" <?php echo ($quiz_questions['answer'] == 'option_4') ? 'checked' : ''; ?>> <span>Option 4</span>
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

<?php endforeach;?>