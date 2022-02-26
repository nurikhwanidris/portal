<form action="/maklum-balas/store" method="post">
    @csrf
    <select name="product" id="">
        <option value="">Sila Pilih</option>
        <option value="Portal">Portal JUPEM</option>
        <option value="Produk">Produk & Perkhidmatan</option>
        <option value="Lain">Lain-lain</option>
    </select><br>
    <select name="typeOfQuestion" id="">
        <option value="">Sila Pilih</option>
        <option value="Pertanyaan">Pertanyaan</option>
        <option value="Cadangan">Cadangan</option>
        <option value="Aduan">Aduan</option>
        <option value="Penghargaan">Penghargaan</option>
        <option value="Lain-lain">Lain-lain</option>
    </select><br>
    <input type="text" name="fullName" id="" placeholder="Masukkan nama penuh anda"><br>
    <input type="email" name="email" id="" placeholder="Masukkan email anda"><br>
    <input type="text" name="phone" id="" placeholder="Masukkan nombor telefon anda"><br>
    <input type="text" name="title" id="" placeholder="Masukkan tajuk"><br>
    <textarea name="content" id="" cols="30" rows="10"></textarea><br>
    <button type="submit">Submit</button>
</form>
