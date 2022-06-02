<div>
    <!-- PAGE TITLE - START-->
    <div class="row">
        <div class="col">
            <div class="text-title-semasa-11" style="padding-bottom: 20px;">{{__('message.Procurement Offer')}}</div>
        </div>
    </div>
    <!-- PAGE TITLE - END-->

    <!-- ACCORDION 1 - START -->
<div class="row pb-4">
	<div class="featured-boxes featured-boxes-style-3 featured-boxes-flat">
		<div class="col mb-4 mb-lg-0">
			<div class="accordion accordion-modern-status accordion-modern-status-borders accordion-modern-status-arrow" id="accordion200">
				<!-- 1 -->
				<div class="card card-default">
					<div class="card-header" id="collapse200HeadingOne">
						<h4 class="card-title m-0">
							<a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse200One" aria-expanded="false" aria-controls="collapse200One">
								{{__('message.Tender')}}
							</a>
						</h4>
					</div>
					<div id="collapse200One" class="collapse" aria-labelledby="collapse200HeadingOne" data-bs-parent="#accordion200">
						<div class="card-body pt-0">

                            <!-- Filtering - START -->
                            <div class="row kotak-filter">
                                <div class="form-group col-lg-6">
                                    <label class="form-label mb-1 text-2">{{__('message.keyword')}}</label>
                                    <input class="form-control border-color-quaernary" type="text" placeholder="Title/Code" aria-label="default color input example">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label class="form-label mb-1 text-2">select</label>
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
                            <table id="example"  class="table table-striped table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="table-title-jupem">#</th>
                                        <th class="table-title-jupem">TAJUK</th>
                                        <th class="table-title-jupem">TAJUK</th>
                                        <th class="table-title-jupem">TAJUK</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>autoincrement</td>
                                        <td>text</td>
                                        <td>text</td>
                                        <td>text</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- Datatable - END -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ACCORDION 1 - END -->


</div>
