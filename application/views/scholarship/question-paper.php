<?php
//  $name = $this->session->userdata('first_name');
//  $title = $this->session->userdata('name_title');

?>

<section class="quiz">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="quiz-start">
                    <div class="text-center">
                        <h3>OnLine Quiz</h3>
                        <p style="color: red;">Time left : <span id="timer"></span></p>
                    </div>
                    <div class="mt-5">
                        <form id="msform" name="question-form" method="POST"
                            action="<?php echo base_url(); ?>save-answer">


                            <?php

                            if(count($question) > 0)
                            {
                                $counter = 1;
                                foreach($question as $quest){
                            ?>
                            <fieldset>
                                <hr />
                                <p style="text-align: left;">Question <?php echo $counter; ?> of
                                    <?php echo count($question); ?></p>

                                <hr />
                                <div class="text-left">
                                    <h4 class="quiz-heading"><?php echo $quest->question; ?></h4>
                                    <div class="quiz-row">

                                        <div class="q-tab">
                                            <label class="radio">
                                                <input type="radio" value="option_1"
                                                    name="question_<?php echo $quest->id; ?>" class="ans-opt">
                                                <span class="outer"><span class="inner"></span></span>
                                                <?php echo $quest->option1; ?>
                                            </label>
                                        </div>

                                        <div class="q-tab">
                                            <label class="radio">
                                                <input type="radio" value="option_2"
                                                    name="question_<?php echo $quest->id; ?>" class="ans-opt">
                                                <span class="outer"><span class="inner"></span></span>
                                                <?php echo $quest->option2; ?>
                                            </label>
                                        </div>

                                        <div class="q-tab">
                                            <label class="radio">
                                                <input type="radio" value="option_3"
                                                    name="question_<?php echo $quest->id; ?>" class="ans-opt">
                                                <span class="outer"><span class="inner"></span></span>
                                                <?php echo $quest->option3; ?>
                                            </label>
                                        </div>

                                        <div class="q-tab">
                                            <label class="radio">
                                                <input value="option_4" type="radio"
                                                    name="question_<?php echo $quest->id; ?>" class="ans-opt">
                                                <span class="outer"><span class="inner"></span></span>
                                                <?php echo $quest->option4; ?>
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                <hr>
                                <?php
                                if($counter != 1)
                                {
                                ?>

                                <?php }

                            if($counter == count($question))
                            { ?>

                                <input type="submit" name="submit" id="sbmtbtn" onclick="return submitAnswer();"
                                    class="action-button" value="Submit" />
                                <?php } else {  ?>
                                <input type="button" name="next" id="defaultbtnnxt" class="next action-button"
                                    value="Next" />

                                    <!-- <input type="button" name="next" id="defaultbtnnxt" class="action-button"
                                    value="Next" /> -->

                                <?php } ?>
                            </fieldset>
                            <?php  $counter++;
                                }
                            } ?>
                            <input type="hidden" name="quizid" value="<?php echo $question[0]->quiz_id; ?>">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>

<script type="text/javascript">
function submitAnswer() {

    let attempt = 0;
    $(".ans-opt").each(function() {
        if ($(this).prop("checked")) {
            attempt++;
        }
    });
    if (confirm('Total question attempted : ' + attempt + '\n Are you sure to submit your answer ?'))

        return true;

    else
        return false;
}
</script>

</body>

</html>

<?php
$count_down = !empty($time) && isset($time[0]->quiz_duration) ? $time[0]->quiz_duration : '0 min';
$duration = trim($count_down, 'min');
?>
<script>

document.getElementById('timer').innerHTML = <?php echo json_encode($duration); ?> + ":" + 59;
startTimer();

function startTimer() {
    var presentTime = document.getElementById('timer').innerHTML;
    var timeArray = presentTime.split(/[:]+/);
    var m = timeArray[0];
    var second = checkSecond((timeArray[1] - 1));

    if (second == 59) {
        m = m - 1;
    }
    document.getElementById('timer').innerHTML = m + ":" + second;

    if (second == 00 && m == 00) {
        $("#sbmtbtn").click();
    }

    setTimeout(startTimer, 1000);
}

function checkSecond(sec) {
    if (sec < 10 && sec >= 0) {
        sec = "0" + sec;
    }
    if (sec < 0) {
        sec = "59";
    }

    return sec;
}
</script>
