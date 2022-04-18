<div>
    <div class="container">
        <div class="row justify-content-center">

            <div class="row">
                <div class="col" style="padding-top: 20px;">
                    <span class="row text-title-semasa-1 mb-2">Waktu Solat</span>
                </div>
                <text class="date-text-small">
                    {{ date('d F Y') }} Miladi | {{ $tarikhHijrah }} Hijriah
                </text>
                <text class="tempat-text-small">
                    Wilayah Persekutuan Kuala Lumpur & Putrajaya
                </text>
            </div>
            <div class="row" style="padding: 0 25px;">
                <table>
                    <tr class="tinggi">
                        <td class="waktu-solat-small">SUBUH</td>
                        <td class="masa-solat-small">{{ $waktuSolat->SUBUH }}</td>
                    </tr>
                    <tr class="tinggi">
                        <td class="waktu-solat-small">SYURUK</td>
                        <td class="masa-solat-small">{{ $waktuSolat->SYURUK }}</td>
                    </tr>
                    <tr class="tinggi">
                        <td class="waktu-solat-small">ZOHOR</td>
                        <td class="masa-solat-small">{{ $waktuSolat->ZUHUR }}</td>
                    </tr>
                    <tr class="tinggi">
                        <td class="waktu-solat-small">ASAR</td>
                        <td class="masa-solat-small">{{ $waktuSolat->ASAR }}</td>
                    </tr>
                    <tr class="tinggi">
                        <td class="waktu-solat-small">MAGHRIB</td>
                        <td class="masa-solat-small">{{ $waktuSolat->MAGHRIB }}</td>
                    </tr>
                    <tr class="tinggi">
                        <td class="waktu-solat-small">ISYAK</td>
                        <td class="masa-solat-small">{{ $waktuSolat->ISYA }}</td>
                    </tr>
                </table>
                <select wire:model='negeri' class="form-select form-select-sm">
                    <option selected>Sila pilih negeri</option>
                    <option value="Johor">Johor</option>
                    <option value="Kedah">Kedah</option>
                    <option value="Kelantan">Kelantan</option>
                    <option value="Melaka">Melaka</option>
                    <option value="Negeri Sembilan">Negeri Sembilan</option>
                    <option value="Pahang">Pahang</option>
                    <option value="Perak">Perak</option>
                    <option value="Perlis">Perlis</option>
                    <option value="Pulau Pinang">Pulau Pinang</option>
                    <option value="Sabah">Sabah</option>
                    <option value="Sarawak">Sarawak</option>
                    <option value="Selangor">Selangor</option>
                    <option value="Terengganu">Terengganu</option>
                    <option value="wilayah persekutuan">W.P. Kuala Lumpur & Putrajaya</option>
                    <option value="labuan">W.P. Labuan</option>
                </select>
                <div class="col mt-2 p-0">
                    <button type="button" class="btn btn-outline-dark btn-sm float-end">
                        <i class="fas fa-file-pdf"></i> Jadual Waktu Solat
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
