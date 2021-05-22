@extends('layout/main0247')
@section('title','Artikel')

@section('container')
</nav>
<div class="container">
<div class="row">
<div class="col-10">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src={{ asset ('img/codeigniter.png') }} class="d-block w-50" alt="...">
        </div>
    </div>
    </div>
    <h1>Apa Itu Code Igniter ?</h1>
    <h5>CodeIgniter adalah Framework yang dikembangkan pada Bahasa Pemrograman PHP. 
    Code Igniter bersifat Open-Source yang banyak digunakan oleh para developer dalam mengembangkan website yang dinamis. 
    Code Igniter mengikuti pola kode MVC, sehingga kamu dapat membagi kode kode menjadi 3 bagian yang diberikan di bawah ini:</h5>
    <h5>M => Model // Semua panggilan yang berhubungan dengan Database akan ditentukan di sini, seperti pengambilan data, Insert, Delete dan Update Data</h5>
    <h5>V => View // Sesuai Namanya, View hanya tampilan yang biasa disebut HTML. Semua data terkait dengan View (html) akan ditentukan di sini.</h5>
    <h5>C => Controller // Merupakan jembatan antara model dan view. Ketika kamu mencari sesuatu di browser web. Hal tersebut akan langsung menuju ke controller 
    dan controller menggunakan Model dan view untuk menampilkan hasil yang sesuai.
    <h5>Framework memudahkan programmer karena didalamnya ada begitu banyak Libraries yang serupa, kamu bisa menggunakan dan mendapatkan hasil spesifik sesuai apa 
    yang kamu mau. Ada ribuan orang yang telah menguji dan menggunakan Framework, sehingga kamu dapat mempercayai kerangka tersebut.</h5>
    <h5>Code Igniter dikembangkan pertama kali oleh Rick Ellis pada tahun 2006 dengan logo api yang menyala. Logo tersebut mengartikan bahwa code igniter dengan
    cepat “membakar” semangat para web developer dalam membangun website yang cepat dan dinamis.</h5>
    <h2>Fitur-Fitur Code Igniter</h2>
    <h5>1.Framework berbasis Model-View-Controller (MVC)</h5>
    <h5>2.Support terhadap mayoritas jenis Database</h5>
    <h5>3.Mendukung Query Builder</h5>
    <h5>4.Bersifat Independent</h5>
    <h5>5.Validasi Form dan Data</h5>
    <h2>Cara Kerja CodeIgniter</h2>
    <h5>Code igniter merupakan framework MVC. MVC adalah Model-view-controller. Ketika kamu anggaplah mencari suatu informasi, controller akan merespon permintaan
     kamu, lalu menyajikan informasi yang kamu cari jika memang tersedia.</h5>
    <h5>Contoh kecilnya yakni, jika kamu ingin mencari id=3, maka controller akan merespon permintaan kamu, lalu meminta Model untuk mengambil data dari id=3. Model 
    nantinya akan memberikan data tersebut kembali ke controller. Controller akan menyajikan data tersebut kepada View dengan format yang mudah dikenali (Human-readable format).  Dan hasilnya akan muncul pada browser kamu.</h5>
    <h2>Kesimpulan</h2>
    <h5>1.Codeigniter adalah framework php yang digunakan untuk mengembankan aplikasi</h5>
    <h5>2.Keseluruhan source code pada codeigniter hanya sebesar 2MB, yang mana membuatnya menjadi mudah dipelajari dan cara kerjanya</h5>
    <h5>3.Fitur built-in pada codeigniter didesain agar bekerja secara independen tanpa harus bergantug pada kompoen lainnya</h5>
    <h5>4.Framework Codeigniter menggunakan desain arsitektural MVC</h5>
    <h5>5.Codeigniter didokumentasinkan dengan baik, ada banyak tutorial dan forum untuk Tanya jawab</h5>
</div>
</div>
</div>
@endsection
