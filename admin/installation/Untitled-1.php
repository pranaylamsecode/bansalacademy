<section class="milestone-page header-text" id="top"
    style="background-image: url(<?php echo base_url('admin/uploads/images/').$milestone_banner[0]->image_url; ?>);"
    loading="lazy">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- <h6>Here are our upcoming meetings</h6> -->
                <h2>Milestone</h2>
                <h6><a href="<?=base_url('')?>">Home</a> – Milestone</h6>
            </div>
        </div>
    </div>
</section>

<section class="meetings-page about-school vision content main" id="meetings">
    <div class="container">
        <div class="breadcrumbs">
            <h6><a href="<?=base_url('')?>">Home</a> – Milestone</h6>

            <h2><img src="<?=base_url('assets/')?>images/icons8-achievement-50.png" alt="" class="heading-icon"
                    loading="lazy">
                Milestone</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="filters">
                            <ul>
                                <li data-filter=".all" class="active">All</li>
                                <!--<li data-filter=".infra">Infra</li>-->
                                <li data-filter=".achieve">Achievements</li>
                                <li data-filter=".student">Students</li>
                                <li data-filter=".teacher">Teachers</li>
                                <li data-filter=".labs">Labs</li>
                                <!--<li data-filter=".tadopted">Technology We Adopted</li>-->
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row grid">
                            <div class="col-lg-12 templatemo-item-col all achieve">
                                <div class="sectiontitle">
                                    <h3>Our Achievements</h3>
                                    <p>Achievements in a very short span of 4 years</p>
                                    <span class="headerLine"></span>
                                </div>
                                <div id="projectFacts" class="sectionClass">
                                    <div class="row mt-4">
                                        <?php foreach($milestone_achieve_blog as $row): ?>
                                        <div class="col-xl-12 col-md-12 col-sm-12">
                                            <div class="meeting-item">
                                                <div class="event-content">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <img src="<?php echo base_url('admin/uploads/images/').$row->image_url; ?>"
                                                                    loading="lazy">
                                                            </div>
                                                            <br>
                                                            <div>
                                                                <img src="<?php echo base_url('admin/uploads/images/').$row->image_url1; ?>"
                                                                    loading="lazy">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <p><?= $row->sub_title?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach ?>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="">
                                                <div class="projectFactsWrap ">
                                                    <div class="item wow fadeInUpBig animated animated"
                                                        data-number="<?= $milestone_counter[0]->no_of_achieve;?>"
                                                        style="visibility: visible;">
                                                        <img src="<?=base_url('assets/')?>images\trophy.png" alt=""
                                                            loading="lazy">
                                                        <p id="number1" class="number">
                                                            <?= $milestone_counter[0]->no_of_achieve;?></p>
                                                        <span></span>
                                                        <p><?= $milestone_counter[0]->achievements;?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="">
                                                <div class="projectFactsWrap ">
                                                    <div class="item wow fadeInUpBig animated animated"
                                                        data-number="<?= $milestone_counter[1]->no_of_achieve;?>"
                                                        style="visibility: visible;">
                                                        <img src="<?=base_url('assets/')?>images\medal.png" alt=""
                                                            loading="lazy">
                                                        <p id="number2" class="number">
                                                            <?= $milestone_counter[1]->no_of_achieve;?></p>
                                                        <span></span>
                                                        <p><?= $milestone_counter[1]->achievements;?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="">
                                                <div class="projectFactsWrap ">
                                                    <div class="item wow fadeInUpBig animated animated"
                                                        data-number="<?= $milestone_counter[2]->no_of_achieve;?>"
                                                        style="visibility: visible;">
                                                        <img src="<?=base_url('assets/')?>images\certificate.png" alt=""
                                                            loading="lazy">
                                                        <p id="number3" class="number">
                                                            <?= $milestone_counter[2]->no_of_achieve;?></p>
                                                        <span></span>
                                                        <p><?= $milestone_counter[2]->achievements;?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-xl-12 col-md-12 col-sm-12">
                                        <div class="text-center"><b>We are elated to share the achievements of our
                                                students in various ZP sports competitions as below(these students have
                                                been selected for the division matches as well)</b></div>
                                    </div>
                                    <!--<br>-->
                                    <?php foreach($milestone_achieve_students as $row): ?>
                                    <div class="col-xl-4 col-md-4 col-sm-12">
                                        <div class="meeting-item mt-4">
                                            <div class="thumb">
                                                <a href="#0"><img
                                                        src="<?php echo base_url('admin/uploads/images/').$row->image_url; ?>"
                                                        alt="" class="student-image" loading="lazy"></a>
                                            </div>
                                            <div class="event-content">
                                                <!--<a href="meeting-details.html">-->
                                                <!--<h4><?= $row->description?></h4>-->
                                                <!--<p><?php echo date_format(date_create($row->created),'d-M-y'); ?></p>-->
                                                <p><?= $row->description?></p>
                                                <!--<a href="" class="text-warning">Read More</a>-->
                                                <!--</a>-->
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach ?>
                                </div>
                            </div>

                            <div class="col-lg-12 templatemo-item-col all student">
                                <div class="meeting-item">
                                    <div class="card thumb">
                                        <div class="card-body">
                                            <div class="chart">
                                                <canvas id="students"
                                                    style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->

                                        <div class="down-content">
                                            <a href="meeting-details.html">
                                                <h4>Students Growth Chart</h4>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 templatemo-item-col all teacher">
                                <div class="meeting-item">
                                    <div class="card thumb">
                                        <div class="card-body">
                                            <div class="chart">
                                                <canvas id="teachers"
                                                    style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->

                                        <div class="down-content">
                                            <a href="meeting-details.html">
                                                <h4>Teachers Chart</h4>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <?php foreach($milestone_achieve_teacher as $row): ?>
                                    <div class="col-xl-12 col-md-12 col-sm-12">
                                        <div class="meeting-item">
                                            <div class="event-content teacher-content">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div>
                                                            <img src="<?php echo base_url('admin/uploads/images/').$row->image_url; ?>"
                                                                loading="lazy">
                                                        </div>
                                                        <br>
                                                        <div>
                                                            <img src="<?php echo base_url('admin/uploads/images/').$row->image_url1; ?>"
                                                                loading="lazy">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <h5><?= $row->name?></h5>
                                                        <p><?= $row->description?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach ?>
                                </div>
                            </div>

                            <div class="col-lg-12 templatemo-item-col all labs">
                                <div class="sectiontitle">
                                    <h3>Labs</h3>
                                    <span class="headerLine"></span>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-xl-12 col-md-12 col-sm-12">
                                        <div class="meeting-item">
                                            <div class="event-content">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <img src="<?php echo base_url('admin/uploads/images/').$milestone_labs[0]->image_url; ?>"
                                                            loading="lazy">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <p><?= $milestone_labs[0]->description?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>