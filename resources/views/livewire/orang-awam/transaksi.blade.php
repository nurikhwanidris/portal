<div>
    <h3>{{ __('message.Online Transactions') }} {{ __('message.for_the_year') . $tahun }}</h3>
    <div class="row kotak-filter">
        <div class="col-lg-12">
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="">{{ __('message.Select Year') }}</label>
                    <select name="tahun" id="tahun" class="form-control" wire:model='tahun'>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            <table class="table">
                <thead>
                    <tr>
                        <th>Produk</th>
                        <th class="text-center align-middle">Januari</th>
                        <th class="text-center align-middle">Februari</th>
                        <th class="text-center align-middle">Mac</th>
                        <th class="text-center align-middle">April</th>
                        <th class="text-center align-middle">Mei</th>
                        <th class="text-center align-middle">Jun</th>
                        <th class="text-center align-middle">Julai</th>
                        <th class="text-center align-middle">Ogos</th>
                        <th class="text-center align-middle">September</th>
                        <th class="text-center align-middle">Oktober</th>
                        <th class="text-center align-middle">November</th>
                        <th class="text-center align-middle">Disember</th>
                        <th class="text-center align-middle">Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="align-middle">
                            {{ __('message.kadaster') }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $kadaster->january }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $kadaster->february }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $kadaster->march }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $kadaster->april }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $kadaster->may }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $kadaster->june }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $kadaster->july }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $kadaster->august }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $kadaster->september }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $kadaster->october }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $kadaster->november }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $kadaster->december }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $kadaster->january + $kadaster->february + $kadaster->march + $kadaster->april + $kadaster->may + $kadaster->june + $kadaster->july + $kadaster->august + $kadaster->september + $kadaster->october + $kadaster->november + $kadaster->december }}
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle">{{ __('message.mapping') }}</td>
                        <td class="text-center align-middle">
                            {{ $pemetaan->january }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $pemetaan->february }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $pemetaan->march }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $pemetaan->april }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $pemetaan->may }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $pemetaan->june }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $pemetaan->july }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $pemetaan->august }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $pemetaan->september }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $pemetaan->october }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $pemetaan->november }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $pemetaan->december }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $pemetaan->january + $pemetaan->february + $pemetaan->march + $pemetaan->april + $pemetaan->may + $pemetaan->june + $pemetaan->july + $pemetaan->august + $pemetaan->september + $pemetaan->october + $pemetaan->november + $pemetaan->december }}
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle">{{ __('message.geodesi') }}</td>
                        <td class="text-center align-middle">
                            {{ $geodesi->january }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $geodesi->february }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $geodesi->march }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $geodesi->april }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $geodesi->may }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $geodesi->june }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $geodesi->july }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $geodesi->august }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $geodesi->september }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $geodesi->october }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $geodesi->november }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $geodesi->december }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $geodesi->january + $geodesi->february + $geodesi->march + $geodesi->april + $geodesi->may + $geodesi->june + $geodesi->july + $geodesi->august + $geodesi->september + $geodesi->october + $geodesi->november + $geodesi->december }}
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle">{{ __('message.license') }}</td>
                        <td class="text-center align-middle">
                            {{ $lesen->january }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $lesen->february }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $lesen->march }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $lesen->april }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $lesen->may }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $lesen->june }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $lesen->july }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $lesen->august }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $lesen->september }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $lesen->october }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $lesen->november }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $lesen->december }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $lesen->january + $lesen->february + $lesen->march + $lesen->april + $lesen->may + $lesen->june + $lesen->july + $lesen->august + $lesen->september + $lesen->october + $lesen->november + $lesen->december }}
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle">{{ __('message.myrtk') }}</td>
                        <td class="text-center align-middle">
                            {{ $rtk->january }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $rtk->february }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $rtk->march }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $rtk->april }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $rtk->may }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $rtk->june }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $rtk->july }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $rtk->august }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $rtk->september }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $rtk->october }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $rtk->november }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $rtk->december }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $rtk->january + $rtk->february + $rtk->march + $rtk->april + $rtk->may + $rtk->june + $rtk->july + $rtk->august + $rtk->september + $rtk->october + $rtk->november + $rtk->december }}
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle">{{ __('message.geo_service') }}</td>
                        <td class="text-center align-middle">
                            {{ $geodetik->january }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $geodetik->february }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $geodetik->march }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $geodetik->april }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $geodetik->may }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $geodetik->june }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $geodetik->july }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $geodetik->august }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $geodetik->september }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $geodetik->october }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $geodetik->november }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $geodetik->december }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $geodetik->january + $geodetik->february + $geodetik->march + $geodetik->april + $geodetik->may + $geodetik->june + $geodetik->july + $geodetik->august + $geodetik->september + $geodetik->october + $geodetik->november + $geodetik->december }}
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle">{{ __('message.limited_data_application') }}</td>
                        <td class="text-center align-middle">
                            {{ $dataTerhad->january }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $dataTerhad->february }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $dataTerhad->march }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $dataTerhad->april }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $dataTerhad->may }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $dataTerhad->june }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $dataTerhad->july }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $dataTerhad->august }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $dataTerhad->september }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $dataTerhad->october }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $dataTerhad->november }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $dataTerhad->december }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $dataTerhad->january + $dataTerhad->february + $dataTerhad->march + $dataTerhad->april + $dataTerhad->may + $dataTerhad->june + $dataTerhad->july + $dataTerhad->august + $dataTerhad->september + $dataTerhad->october + $dataTerhad->november + $dataTerhad->december }}
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle">{{ __('message.permit_application') }}</td>
                        <td class="text-center align-middle">
                            {{ $permit->january }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $permit->february }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $permit->march }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $permit->april }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $permit->may }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $permit->june }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $permit->july }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $permit->august }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $permit->september }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $permit->october }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $permit->november }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $permit->december }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $permit->january + $permit->february + $permit->march + $permit->april + $permit->may + $permit->june + $permit->july + $permit->august + $permit->september + $permit->october + $permit->november + $permit->december }}
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td class="align-middle">
                            Jumlah Keseluruhan
                        </td>
                        <td class="text-center align-middle">
                            {{ $totalJanuary = $kadaster->january + $rtk->january + $geodetik->january + $dataTerhad->january + $permit->january }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $totalFebruary = $kadaster->february + $rtk->february + $geodetik->february + $dataTerhad->february + $permit->february }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $totalMarch = $kadaster->march + $rtk->march + $geodetik->march + $dataTerhad->march + $permit->march }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $totalApril = $kadaster->april + $rtk->april + $geodetik->april + $dataTerhad->april + $permit->april }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $totalMay = $kadaster->may + $rtk->may + $geodetik->may + $dataTerhad->may + $permit->may }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $totalJune = $kadaster->june + $rtk->june + $geodetik->june + $dataTerhad->june + $permit->june }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $totalJuly = $kadaster->july + $rtk->july + $geodetik->july + $dataTerhad->july + $permit->july }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $totalAugust = $kadaster->august + $rtk->august + $geodetik->august + $dataTerhad->august + $permit->august }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $totalSeptember = $kadaster->september + $rtk->september + $geodetik->september + $dataTerhad->september + $permit->september }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $totalOctober = $kadaster->october + $rtk->october + $geodetik->october + $dataTerhad->october + $permit->october }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $totalNovember = $kadaster->november + $rtk->november + $geodetik->november + $dataTerhad->november + $permit->november }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $totalDecember = $kadaster->december + $rtk->december + $geodetik->december + $dataTerhad->december + $permit->december }}
                        </td>
                        <td class="text-center align-middle">
                            {{ $totalJanuary + $totalFebruary + $totalMarch + $totalApril + $totalMay + $totalJune + $totalJuly + $totalAugust + $totalSeptember + $totalOctober + $totalNovember + $totalDecember }}
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
