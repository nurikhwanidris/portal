<div>
    <!-- PAGE TITLE - START-->
    <div class="row">
        <div class="col">
            <div class="text-title-semasa-11" style="padding-bottom: 20px;">Arkib Polisi / Belanjawan / Dokumen Sah</div>
        </div>
    </div>
    <!-- PAGE TITLE - END-->
    <!-- FILTERING - START -->
    <div class="row kotak-filter">
        <div class="form-group col-lg-12">
            <label class="form-label mb-1 text-2">Select</label>
            <div class="custom-select-1">
                <select class="form-select form-control  border-color-quaernary h-auto" name="dd-nama" required>
                    <option value="">Choose...</option>
                    <option value="1">2022</option>
                    <option value="2">2021</option>
                </select>
            </div>
        </div>
    </div>
    <!-- FILTERING - END -->
    <!-- LIST TEXT - START -->
    <div class="row align-items-center py-5 appear-animation" data-appear-animation="fadeInRightShorter"
        style="padding-top:0 !important;">
        <div class="col-md-12 pe-md-5 mb-5 mb-md-0">
            <ul class="list list-icons list-icons-style-3 list-tertiary list-icons-sm">
                <li><i class="fas fa-check"></i><a href="#">1</a></li>
                <li><i class="fas fa-check"></i><a href="#">2</a></li>
                <li><i class="fas fa-check"></i><a href="#">3</a></li>
            </ul>
        </div>
    </div>
    <!-- LIST TEXT - END -->
    {!! $dokumen_sah->contents_my !!}
</div>
