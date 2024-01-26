<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"><?= $subjudul ?></h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="box-body">
        <ul class="alert alert-info" style="padding-left: 40px">
            <li>Please import data from excel, using the provided format</li>
            <li>Data must not be empty, all must be filled in.</li>
           <!--  <li>For Class data, it can only be filled using Class ID. <a data-toggle="modal" href="#kelasId" style="text-decoration:none" class="btn btn-xs btn-primary">View ID</a>.</li> -->
        </ul>
        <div class="text-center">
            <a href="<?= base_url('uploads/import/format/questions.xlsx') ?>" class="btn-default btn">Download Format</a>
        </div>
        <br>
        <div class="row">
            <?= form_open_multipart('mahasiswa/preview'); ?>
            <label for="file" class="col-sm-offset-1 col-sm-3 text-right">Choose File</label>
            <div class="col-sm-4">
                <div class="form-group">
                    <input type="file" name="upload_file">
                </div>
            </div>
            <div class="col-sm-3">
                <button name="preview" type="submit" class="btn btn-sm btn-success">Preview</button>
            </div>
            <?= form_close(); ?>
            <div class="col-sm-6 col-sm-offset-3">
                <?php if (isset($_POST['preview'])) : ?>
                    <br>
                    <h4>Preview Data</h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Que</td>
                                <td>Option_a</td>
                                <td>Option_b</td>
                                <td>Option_c</td>
                                <td>Option_d</td>
								<td>Option_e</td>
								<td>Answer</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $status = true;
                                if (empty($import)) {
                                    echo '<tr><td colspan="2" class="text-center">Empty data! make sure you use the format provided.</td></tr>';
                                } else {
                                    $no = 1;
                                    foreach ($import as $data) :
                                        ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
										<td class="<?= $data['soal'] == null ? 'bg-danger' : ''; ?>">
                                            <?= $data['soal'] == null ? 'NOT FILLED' : $data['soal']; ?>
                                        </td>
										<td class="<?= $data['opsi_a'] == null ? 'bg-danger' : ''; ?>">
                                            <?= $data['opsi_a'] == null ? 'NOT FILLED' : $data['opsi_a']; ?>
                                        </td>
										<td class="<?= $data['opsi_b'] == null ? 'bg-danger' : ''; ?>">
                                            <?= $data['opsi_b'] == null ? 'NOT FILLED' : $data['opsi_b']; ?>
                                        </td>
										<td class="<?= $data['opsi_c'] == null ? 'bg-danger' : ''; ?>">
                                            <?= $data['opsi_c'] == null ? 'NOT FILLED' : $data['opsi_c']; ?>
                                        </td>
										<td class="<?= $data['opsi_d'] == null ? 'bg-danger' : ''; ?>">
                                            <?= $data['opsi_d'] == null ? 'NOT FILLED' : $data['opsi_d']; ?>
                                        </td>
										<td class="<?= $data['opsi_e'] == null ? 'bg-danger' : ''; ?>">
                                            <?= $data['opsi_e'] == null ? 'NOT FILLED' : $data['opsi_e']; ?>
                                        </td>
										<td class="<?= $data['jawaban'] == null ? 'bg-danger' : ''; ?>">
                                            <?= $data['jawaban'] == null ? 'NOT FILLED' : $data['jawaban']; ?>
                                        </td>

                                    </tr>
                            <?php


                               if ($data['soal'] == null || $data['opsi_a'] == null || $data['opsi_b'] == null || $data['opsi_c'] == null || $data['opsi_d'] == null || $data['opsi_e'] == null || $data['jawaban'] == null) {
                                            $status = false;
                                        }
                                    endforeach;
                                }
                                ?>
                        </tbody>
                    </table>
                    <?php if ($status) : ?>

                        <?= form_open('mahasiswa/do_import', null, ['data' => json_encode($import)]); ?>
                        <button type='submit' class='btn btn-block btn-flat bg-purple'>Import</button>
                        <?= form_close(); ?>

                    <?php endif; ?>
                    <br>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="kelasId">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Class Data</h4>
            </div>
            <div class="modal-body">
                <table id="kelas" class="table table-bordered table-condensed table-striped">
                    <thead>
                        <th>ID</th>
                        <th>Class</th>
                        <th>Dept</th>
                    </thead>
                    <tbody>
                        <?php foreach ($kelas as $k) : ?>
                            <tr>
                                <td><?= $k->id_kelas; ?></td>
                                <td><?= $k->nama_kelas; ?></td>
                                <td><?= $k->nama_jurusan; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        let table;
        table = $("#kelas").DataTable({
            "lengthMenu": [
                [5, 10, 25, 50, 100, -1],
                [5, 10, 25, 50, 100, "All"]
            ],
        });
    });
</script>
