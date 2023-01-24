<div class="modal-header">
    <h4 class="modal-title">Edit Kabupaten</h4>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body p-4">
    <div class="row">
        <div class="col-md-12">
            <div class="mb-3">
                <label for="field-1" class="form-label">Provinsi</label>
                <select class="form-select" id="provinsi" name="provinsi">
                    <option value="{{ $data->provinsi }}" selected>
                        {{ $data->rprovinsi->provinsi }}
                    </option>
                    @foreach ($provinsi as $prov)
                        <option value="{{ $prov->id }}">
                            {{ $prov->provinsi }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-12">
            <div class="mb-3">
                <label class="form-label">Kabupaten</label>
                <input type="text" id="kabupaten" name="kabupaten" class="form-control"
                    value="{{ $data->kabupaten }}">
            </div>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-info waves-effect waves-light"
        onclick="editkabupaten({{ $data->id }})">Save
        changes</button>
</div>
