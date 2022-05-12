<div>
    <div>
        <div class="row">
            <div class="col">
                <div class="text-title-semasa-11" style="padding-bottom: 20px;">Keratan Akhbar</div>
            </div>
        </div>

        <!--  Filtering -->
        <div class="row kotak-filter">
            <div class="form-group col-lg-12">
                <label class="form-label mb-1 text-2">Tahun</label>
                <div class="custom-select-1">
                    <select class="form-select form-control  border-color-quaernary h-auto" name="dd-nama" required>
                        <option value="">Choose...</option>
                        <option value="1">2020</option>
                        <option value="2">2021</option>
                        <option value="3">2022</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- Table -->
        <!-- Datatable - START -->
        <table id="example" class="table table-striped table-hover" style="width:100%">
            <thead>
                <tr>
                    <th class="table-title-jupem text-center">#</th>
                    <th class="table-title-jupem">TITLE</th>
                    <th class="table-title-jupem">TARIKH</th>
                    <th class="table-title-jupem">SUMBER</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($newspapers as $item)
                    <tr>
                        <td class="align-middle text-center">
                            {{ $loop->iteration }}
                        </td>
                        <td class="align-middle">
                            {{ $item->title_my }}
                        </td>
                        <td class="align-middle">
                            {{ $item->created_at->toDateString() }}
                        </td>
                        <td class="align-middle">
                            {{ $item->category->name_my }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- Datatable - END -->
    </div>
</div>
