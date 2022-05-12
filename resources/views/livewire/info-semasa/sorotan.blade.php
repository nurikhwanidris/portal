<div>
    <!-- PAGE TITLE - START-->
    <div class="row">
        <div class="col">
            <div class="text-title-semasa-11" style="padding-bottom: 20px;">Sorotan Peristiwa</div>
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
                <th class="table-title-jupem">#</th>
                <th class="table-title-jupem">TAJUK</th>
                <th class="table-title-jupem">TARIKH PENGUMUMAN</th>
                <th class="table-title-jupem">LAMPIRAN</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sorotan as $item)
                <tr>
                    <td>
                        {{ $loop->iteration }}
                    </td>
                    <td>
                        <a href="/sorotan/{{ $item->id }}" target="_blank"
                            rel="noopener noreferrer">{{ $item->title_my }}</a>
                    </td>
                    <td>
                        {{ $item->created_at->toDatestring() }}
                    </td>
                    <td>
                        <a href="/sorotan/{{ $item->id }}" target="_blank" rel="noopener noreferrer">Lampiran</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Datatable - END -->
</div>
