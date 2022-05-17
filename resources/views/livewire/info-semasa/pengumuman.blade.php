<div>
    <!-- PAGE TITLE - START-->
    <div class="row">
        <div class="col">
            <div class="text-title-semasa-11" style="padding-bottom: 20px;">Pengumuman</div>
        </div>
    </div>
    <!-- PAGE TITLE - END-->
    <!-- Filtering - START -->
    <div class="row kotak-filter">
        <div class="form-group col-lg-6">
            <label class="form-label mb-1 text-2">Keyword</label>
            <input class="form-control border-color-quaernary filter-input" type="text" placeholder="Title/Code"
                aria-label="default color input example" data-column="1">
        </div>
        <div class="form-group col-lg-6">
            <label class="form-label mb-1 text-2">Select</label>
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
    <!-- Filtering - END -->
    <!-- Datatable - START -->
    <table id="example" class="table table-striped table-hover" style="width:100%">
        <thead>
            <tr>
                <th class="table-title-jupem text-center">#</th>
                <th class="table-title-jupem">Tajuk</th>
                <th class="table-title-jupem">Tarikh</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengumuman as $item)
                <tr>
                    <td class="align-middle table-title-jupem text-center">{{ $loop->iteration }}</td>
                    <td class="align-middle table-title-jupem">
                        <a href="/pengumuman/{{ $item->id }}" target="_blank" rel="noopener noreferrer">
                            {{ $item->title_my }}
                        </a>
                        <a href="/info-semasa/inner" target="_blank">test</a>
                    </td>
                    <td class="align-middle table-title-jupem">{{ $item->created_at->toDatestring() }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Datatable - END -->
</div>
