<?php $students = $this->db->get_where('quiz_details', array('quiz_id' => $quiz_id))->result_array();
        foreach($students as $key => $quiz_details):
		// print_r($students);
		// exit;
		// echo $quiz_details['duration'];
		?>


<div class="row">
    <div class="col-sm-10">
        <div class="panel panel-info">

            <div class="panel-wrapper collapse in" aria-expanded="true">
                <div class="panel-body table-responsive">


                    <div class="row panel-body">
                        <div class="col-sm-12">

                            <?php echo form_open(base_url() . 'quiz/add_quiz/update/' .$quiz_id , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text"><?php echo get_phrase('Enter Quiz Name');?></label>
                                    <input name="quiz" type="text" class="form-control"
                                        value="<?php echo $quiz_details['quiz_name'];?>" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text"><?php echo get_phrase('Quiz Duration');?></label>
                                    <!-- <select class="form-control" name="duration" required>
                                        <option value="">Quiz Duration Time</option>
                                        <option value="30 min">30 Minutes</option>
                                        <option value="1 hours">1 Hours</option>
                                        <option value="2 hours">2 Hours</option>
                                        <option value="3 hours">3 Hours</option>
                                    </select> -->
									<select name="duration" class="form-control select2" style="width:100%">
										<option value=""><?php echo get_phrase('Quiz Duration');?></option>
										<option value="30 min"<?php if($quiz_details['quiz_duration']== '30 min') echo 'selected';?>><?php echo get_phrase('30 Minutes');?></option>
										<option value="1 hours" value="1 hours"<?php if($quiz_details['quiz_duration']== '1 hours') echo 'selected';?>><?php echo get_phrase('1 Hours');?></option>
										<option value="2 hours" value="2 hours"<?php if($quiz_details['quiz_duration']== '2 hours') echo 'selected';?>><?php echo get_phrase('2 Hours');?></option>
										<option value="3 hours" value="3 hours"<?php if($quiz_details['quiz_duration']== '3 hours') echo 'selected';?>><?php echo get_phrase('3 Hours');?></option>
									</select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text"><?php echo get_phrase('Quiz Start Date');?></label>
                                    <input name="q_s_d" type="date" value="<?php echo $quiz_details['start_date'];?>" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text"><?php echo get_phrase('Quiz End Date');?></label>
                                    <input name="q_e_d" type="date" value="<?php echo $quiz_details['end_date'];?>" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="checkbox" class="filled-in chk-col-teal" name="show_quiz" value="1" <?php if($quiz_details['show_it'] == '1') echo 'checked';?>
                                        type="checkbox">
                                    <label for="checkbox">Active</label> <br />
                                </div>
                            </div>

                        </div>


                    </div>




                    <div class="form-group">

                        <button type="submit" class="btn btn-success btn-sm btn-rounded btn-block"> <i
                                class="fa fa-plus"></i>&nbsp;<?php echo get_phrase('edit_quiz');?></button>
                        <img id="install_progress" src="<?php echo base_url() ?>assets/images/loader-2.gif"
                            style="margin-left: 20px; display: none" />

                    </div>


                    <?php echo form_close();?>

                </div>
            </div>
        </div>
    </div>
</div>

<?php endforeach;?>



<script type="text/javascript">
function get_class_sections(class_id) {

    $.ajax({
        url: '<?php echo base_url();?>admin/get_class_section/' + class_id,
        success: function(response) {
            jQuery('#section_selector_holder').html(response);
        }
    });

}
</script>


<script type="text/javascript">
function CheckPasswordStrength(password) {
    var password_strength = document.getElementById("password_strength");

    //TextBox left blank.
    if (password.length == 0) {
        password_strength.innerHTML = "";
        return;
    }

    //Regular Expressions.
    var regex = new Array();
    regex.push("[A-Z]"); //Uppercase Alphabet.
    regex.push("[a-z]"); //Lowercase Alphabet.
    regex.push("[0-9]"); //Digit.
    regex.push("[$@$!%*#?&]"); //Special Character.

    var passed = 0;

    //Validate for each Regular Expression.
    for (var i = 0; i < regex.length; i++) {
        if (new RegExp(regex[i]).test(password)) {
            passed++;
        }
    }

    //Display status.
    var color = "";
    var strength = "";
    switch (passed) {
        case 0:
        case 1:
        case 2:
            strength = "Weak";
            color = "red";
            break;
        case 3:
            strength = "Medium";
            color = "orange";
            break;
        case 4:
            strength = "Strong";
            color = "green";
            break;

    }
    password_strength.innerHTML = strength;
    password_strength.style.color = color;

    if (passed <= 2) {
        document.getElementById('show').disabled = true;
    } else {
        document.getElementById('show').disabled = false;
    }

}
</script>

<script type="text/javascript">
$(function() {
    $('input[name="birthday"]').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true
        },
        function(start, end, label) {
            var years = moment().diff(start, 'years');
            // alert("You are " + years + " years old.");
            $("#age").val(years);
        });
});
</script>