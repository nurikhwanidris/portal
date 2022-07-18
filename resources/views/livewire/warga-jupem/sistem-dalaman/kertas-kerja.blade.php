<div>
    <div class="row kotak-filter">
        <div class="form-group col-lg-6">
            <label class="form-label mb-1 text-2">{{ __('message.Search') }}</label>
            <input wire:model='searchKertasKerja' class="form-control border-color-quaernary filter-text" type="text"
                id="tender-filter-text" aria-label="default color input example">
        </div>
    </div>
    <div class="row">
        <table class="table table-border">
            <thead>
                <tr>
                    <th>Tajuk Kertas Kerja</th>
                    <th>Dibentangkan Oleh</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kertas_kerja as $item)
                    <tr>
                        <td>
                            {{ $item->title_my }}
                        </td>
                        <td>
                            {{ $item->presentedBy }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div>
        {!! $kertas_kerja->links() !!}
    </div>
</div>
