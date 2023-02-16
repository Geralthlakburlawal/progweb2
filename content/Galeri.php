<h3>Upload Gambar</h3>
<hr>
<form action="index.php?page=galeri_upload" method="POST" enctype="multipart/form-data">
    <div class="card col-8 mx-auto p-3">
        <div class="row">
            <div class="col-6">
                <label for="formFile" class="form-label"><h3>Pilih Gambar</h3></label>
                <input class="form-control" type="file" id="formFile">
        </div>
        </div>
        <div class="row mt-2">
            <div class="col-2">
                <button type="button" class="btn btn-info">Upload</button>
            </div>
        </div>
    </div>
</form>