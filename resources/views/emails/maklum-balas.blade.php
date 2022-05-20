    <div>
        <h3>Aduan & Maklum Balas</h3>
        <hr>

        Nombor Aduan & Maklum Balas : <strong>{{ $data['id'] }}</strong><br>

        Nama : {{ $data['fullName'] }} <br>
        Email : {{ $data['email'] }} <br>
        No Telefon : {{ $data['phone'] }} <br>
        Produk : {{ $data['product'] }} <br>
        Jenis Pertanyaan : {{ $data['typeOfQuestion'] }} <br>
        Tajuk : {{ $data['title'] }} <br>
        Ulasan : {{ $data['content'] }} <br>

        <hr>
        Anda boleh menekan pautan di bawah untuk melihat balasan dari pihak JUPEM. <br>
        <a href="{{ route('maklum-balas', $data['id']) }}">Lihat Balasan</a>
    </div>
