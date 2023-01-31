<div class="modal-header">
    <h4 class="modal-title">Tambah Kecamatan</h4>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body p-4">
    <div class="row">
        <div class="col-md-12">
            <div class="mb-3">
                <label for="field-1" class="form-label">Provinsi</label>
                <select class="form-select" id="provinsi" name="provinsi">
                    <option selected value="">Pilih Provinsi</option>
                    @foreach ($provinsi as $row)
                        <option value="{{ $row->id }}">{{ $row->provinsi }}
                        </option>
                    @endforeach
                </select>
                <div class="invalid-feedback">
                    Provinsi Harus Di Isi
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="mb-3">
                <label for="field-1" class="form-label">Kabupaten</label>
                <select class="form-select" id="kabupaten" name="kabupaten">
                    <option value="" selected>Pilih Kabupaten</option>
                    {{-- @foreach ($kabupaten as $row)
                        <option value="{{ $row->id }}">{{ $row->kabupaten }}
                        </option>
                    @endforeach --}}
                </select>
                <div class="invalid-feedback">
                    Kabupaten Harus Di Isi
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="mb-3">
                <label for="field-1" class="form-label">Kecamatan</label>
                <input type="text" id="kecamatan" name="kecamatan" class="form-control" id="field-1"
                    placeholder="Masukkan Kecamatan">
                    <div class="invalid-feedback">
                        Kecamatan Harus Di Isi
                    </div>
            </div>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Kembali</button>
    <button type="submit" class="btn btn-info waves-effect waves-light" onclick="storekecamatan()">Tambah</button>
</div>
<script>
    //depended dropdown
    $(document).ready(function() {
        $('#provinsi').change(function() {
            // alert();
            let rsi = $(this).val();
            // let ci = rsi;
            // alert(rsi);
            $.ajax({
                url: '/getkabupatenadmin',
                type: 'post',
                data: {_token:"{{ csrf_token() }}",rsi:rsi},
                success: function(result) {
                    console.log(result);
                    $('#kabupaten').html(result);
                    // $('#city').removeAttr('disabled');
                }
            });
        });
    });
</script>
