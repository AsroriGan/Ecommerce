<div class="row">
    <div class="col-md-12">
        <div class="mb-3">
            <label for="field-1" class="form-label">Provinsi</label>
            <select class="form-select" id="provinsi" name="provinsi">
                <option>Pilih Provinsi</option>
                @foreach ($provinsi as $row)
                    <option value="{{ $row->id }}">{{ $row->provinsi }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-12">
        <div class="mb-3">
            <label for="field-1" class="form-label">Kabupaten</label>
            <select class="form-select" id="kabupaten" name="kabupaten">
                <option>Pilih Kabupaten</option>
                @foreach ($kabupaten as $row)
                    <option value="{{ $row->id }}">{{ $row->kabupaten }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-12">
        <div class="mb-3">
            <label for="field-1" class="form-label">Kecamatan</label>
            <input type="text" id="kecamatan" name="kecamatan" class="form-control" id="field-1" placeholder="Masukkan Kecamatan">
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-info waves-effect waves-light" onclick="storekecamatan()">Save
        changes</button>
</div>
