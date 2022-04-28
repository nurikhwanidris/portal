<div>
    <!-- PAGE TITLE - START-->
    <div class="row">
        <div class="col">
            <div class="text-title-semasa-11" style="padding-bottom: 20px;">Pertukaran Pegawai</div>
        </div>
    </div>
    <!-- PAGE TITLE - END-->
    <!-- Filtering - START -->
    <div class="row kotak-filter">
        <div class="form-group col-lg-6">
            <label class="form-label mb-1 text-2">Keyword</label>
            <input class="form-control border-color-quaernary" type="text" placeholder="Title/Code"
                aria-label="default color input example">
        </div>
        <div class="form-group col-lg-6">
            <label class="form-label mb-1 text-2">Select</label>
            <div class="custom-select-1">
                <select class="form-select form-control  border-color-quaernary h-auto" name="dd-nama" required>
                    <option value="">Choose...</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
        </div>
    </div>
    <!-- Filtering - END -->
    <!-- Datatable - START -->
    <table id="example" class="table table-striped table-hover" style="width:100%">
        <thead>
            <tr>
                <th class="table-title-jupem align-middle">#</th>
                <th class="table-title-jupem align-middle">TARIKH PERTUKARAN</th>
                <th class="table-title-jupem align-middle">NAMA PEGAWAI</th>
                <th class="table-title-jupem align-middle">DARI</th>
                <th class="table-title-jupem align-middle">KE</th>
                <th class="table-title-jupem align-middle">STATUS PERTUKARAN</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pertukaran as $item)
                <tr>
                    <td class="text-left align-middle text-uppercase">{{ $loop->iteration }}</td>
                    <td class="text-left align-middle text-uppercase">{{ $item->tarikh_pertukaran }}</td>
                    <td class="text-left align-middle text-uppercase">{{ $item->name }}</td>
                    <td class="text-left align-middle text-uppercase">{{ $item->jawatan_dari_my }}</td>
                    <td class="text-left align-middle text-uppercase">{{ $item->jawatan_ke_my }}</td>
                    <td class="text-left align-middle text-uppercase">{{ $item->status_pertukaran_my }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Datatable - END -->
</div>
