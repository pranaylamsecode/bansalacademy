<?php
 $name = $this->session->userdata('first_name');
 $title = $this->session->userdata('name_title');

?>

<section class="quiz">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="quiz-start">
                    <div class="text-center">
                        <h3>Congratulatios</h3>
                        <h5>You have successfully completed your quiz.</h5>
                    </div>
                    <div class="mt-5">
                        
                      <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Question</th>
                                    <th>Answer</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Number of questions attempted</td>
                                    <td><?php echo count($result); ?></td>
                                </tr>
                                <tr>
                                    <td>Number of correct answer </td>
                                    <td><?php echo count($correct); ?></td>
                                </tr>
                               
                            </tbody>
                      </table>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>