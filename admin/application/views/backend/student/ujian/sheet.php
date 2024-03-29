
<div class="row">
    <div class="col-sm-3">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Question Navigation</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body text-center" id="tampil_jawaban">
            </div>
        </div>
    </div>
    <div class="col-sm-9">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><span class="badge bg-blue">Question #<span id="soalke"></span> </span></h3>
                <div class="box-tools pull-right">
                    <span class="badge bg-red">Remaining time <span class="sisawaktu" data-time=""></span></span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">

            </div>
            <div class="box-footer text-center">
                <a class="action back btn btn-info" rel="0" onclick="return back();"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
                <a class="ragu_ragu btn btn-primary" rel="1" onclick="return tidak_jawab();">Doubtful</a>
                <a class="action next btn btn-info" rel="2" onclick="return next();"><i class="glyphicon glyphicon-chevron-right"></i> Next</a>
                <a class="selesai action submit btn btn-danger" onclick="return simpan_akhir();"><i class="glyphicon glyphicon-stop"></i> Finished</a>
                <input type="hidden" name="jml_soal" id="jml_soal" value="">
            </div>
        </div>

    </div>
</div>


<script src="<?=base_url()?>assets/dist/js/app/ujian/sheet.js"></script>
