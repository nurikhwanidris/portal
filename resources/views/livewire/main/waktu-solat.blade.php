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
                    {{ $waktuSolat->ZONE_NAME }}
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
                <select wire:model='zone' class="form-select form-select-sm">
                    <option selected>Sila pilih negeri</option>
                    <optgroup label="Johor">
                        <option value="35">Pulau Aur dan Pemanggil</option>
                        <option value="36">Kota Tinggi, Mersing, Johor Bahru</option>
                        <option value="37">Kluang dan Pontian</option>
                        <option value="38">Batu Pahat, Muar, Segamat, Gemas</option>
                    </optgroup>
                    <optgroup label="Kedah">
                        <option value="2">Baling, Sik, Padang Terap</option>
                        <option value="3">Kubang Pasu, Kota Setar</option>
                        <option value="4">Puncak Gunung Jerai</option>
                        <option value="5">Langkawi</option>
                        <option value="6">Pendang, Kuala Muda, Yan</option>
                        <option value="7">Kulim, Bandar Baharu</option>
                    </optgroup>
                    <optgroup label="Kelantan">
                        <option value="16">K.Bharu, Bachok,Pasir Puteh, Tumpat,Pasir Mas, Tnh. Merah, Machang, Kuala
                            Krai, Mukim Chiku</option>
                        <option value="17">Jeli, Gua Musang (Mukim Galas, Bertam)</option>
                    </optgroup>
                    <optgroup label="Melaka">
                        <option value="34">Bandar Melaka, Alor Gajah, Jasin, Masjid Tanah, Merlimau, Nyalas</option>
                    </optgroup>
                    <optgroup label="Negeri Sembilan">
                        <option value="32">Jempol, Tampin</option>
                        <option value="33">Port Dickson, Seremban, Kuala Pilah, Jelebu, Rembau</option>
                    </optgroup>
                    <optgroup label="Pahang">
                        <option value="26">Pulau Tioman</option>
                        <option value="27">Kuantan, Pekan, Rompin, Muadzam Shah</option>
                        <option value="28">Maran, Chenor, Temerloh, Bera, Jerantut</option>
                        <option value="29">Bentong, Raub, Kuala Lipis</option>
                        <option value="30">Genting Sempah, Janda Baik, Bukit Tinggi</option>
                        <option value="31">Bukit Fraser, Genting Highlands, Cameron Highlands</option>
                    </optgroup>
                    <optgroup label="Perak">
                        <option value="9">Tapah, Slim River, Tanjung Malim</option>
                        <option value="10">Ipoh, Batu Gajah, Kampar, Sg.Siput, Kuala Kangsar</option>
                        <option value="11">Pengkalan Hulu, Grik, Lenggong</option>
                        <option value="12">Temengor, Belum</option>
                        <option value="13">Teluk Intan, Bagan Datoh, Kg.Gajah,Sri Iskandar, Beruas,Parit,Lumut,Setiawan
                            dan Pulau Pangkor</option>
                        <option value="14">Selama, Taiping, Bagan Serai dan Parit Buntar</option>
                        <option value="15">Bukit Larut</option>
                    </optgroup>
                    <optgroup label="Perlis">
                        <option value="1">Kangar, Padang Besar, Arau</option>
                    </optgroup>
                    <optgroup label="Pulau Pinang">
                        <option value="8">Seluruh Negeri Pulau Pinang</option>
                    </optgroup>
                    <optgroup label="Sabah">
                        <option value="39">Zon 1 - Sandakan, Bdr. Bkt. Garam, Semawang, Temanggong, Tambisan</option>
                        <option value="40">Zon 2 - Pinangah, Terusan, Beluran, Kuamut, Telupit</option>
                        <option value="41">Zon 3 - Lahad Datu, Kunak, Silabukan, Tungku, Sahabat, Semporna</option>
                        <option value="42">Zon 4 - Tawau, Balong, Merotai, Kalabakan</option>
                        <option value="43">Zon 5 - Kudat, Kota Marudu, Pitas, Pulau Banggi</option>
                        <option value="44">Zon 6 - Gunung Kinabalu</option>
                        <option value="45">Zon 7 - Papar, Ranau, Kota Belud, Tuaran, Penampang, Kota Kinabalu</option>
                        <option value="46">Zon 8 - Pensiangan, Keningau, Tambunan, Nabawan</option>
                        <option value="47">Zon 9 - Sipitang, Membakut, Beaufort, Kuala Penyu, Weston, Tenom, Long Pa Sia
                        </option>
                    </optgroup>
                    <optgroup label="Sarawak">
                        <option value="48">Zon 1 - Limbang, Sundar, Terusan, Lawas</option>
                        <option value="49">Zon 2 - Niah, Belaga, Sibuti, Miri, Bekenu, Marudi</option>
                        <option value="50">Zon 3 - Song, Belingan, Sebauh, Bintulu, Tatau, Kapit</option>
                        <option value="51">Zon 4 - Igan, Kanowit, Sibu, Dalat, Oya</option>
                        <option value="52">Zon 5 - Belawai, Matu, Daro, Sarikei, Julau, Bitangor, Rajang</option>
                        <option value="53">Zon 5 - Belawai, Matu, Daro, Sarikei, Julau, Bitangor, Rajang</option>
                        <option value="54">Zon 7 - Samarahan, Simunjan, Serian, Sebuyau, Meludam</option>
                        <option value="55">Zon 8 - Kuching, Bau, Lundu,Sematan</option>
                    </optgroup>
                    <optgroup label="Selangor">
                        <option value="22">Gombak,H.Selangor,Rawang,H.Langat,Sepang,Petaling,S.Alam</option>
                        <option value="24">Klang, Kuala Langat</option>
                        <option value="23">Sabak Bernam, Kuala Selangor</option>
                    </optgroup>
                    <optgroup label="Terengganu">
                        <option value="18">Kuala Terengganu, Marang</option>
                        <option value="19">Besut, Setiu</option>
                        <option value="20">Hulu Terengganu</option>
                        <option value="21">Kemaman Dungun</option>
                    </optgroup>
                    <option value="57">W.P. Kuala Lumpur & Putrajaya</option>
                    <option value="56">W.P. Labuan</option>
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
