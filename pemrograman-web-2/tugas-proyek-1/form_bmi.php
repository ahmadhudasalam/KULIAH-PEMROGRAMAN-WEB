<form class="" method="POST" action="result_bmi.php">
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama</label> 
        <div class="col-8">
            <input id="nama" name="nama" placeholder="" type="text" class="form-control" required="required">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-4">Jenis Kelamin</label> 
        <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
                <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="L" required="required"> 
                <label for="jk_0" class="custom-control-label">Laki-laki</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="P" required="required"> 
                <label for="jk_1" class="custom-control-label">Perempuan</label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="berat" class="col-4 col-form-label">Berat Badan (kg)</label> 
        <div class="col-8">
            <input id="berat" name="berat" type="text" class="form-control" required="required">
        </div>
    </div>
    <div class="form-group row">
        <label for="tinggi" class="col-4 col-form-label">Tinggi Badan (cm)</label> 
        <div class="col-8">
            <input id="tinggi" name="tinggi" type="text" class="form-control" required="required">
        </div>
    </div> 
    <div class="form-group row">
        <label for="tanggal_periksa" class="col-4 col-form-label">Tanggal Periksa</label> 
        <div class="col-8">
            <input id="tanggal_periksa" name="tgl" type="date" class="form-control" required="required">
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <input name="submit" type="submit" class="btn btn-primary" value="Hitung"></input>
        </div>
    </div>
</form>