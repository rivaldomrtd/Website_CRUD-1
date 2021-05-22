<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artikel Perbandingan Bahasa Pembrograman</title>
</head>

<body>
    @extends('layout.header')
    @section('konten')
        <div class="judul" style="position:relative">
            <center>
                <h1>Perbedaan C++ dan Python dalam Penulisan Array</h1>
                <br>
                <br>
            </center>
        </div>
        <div class="cpp" style="float: left; width:550px">
            <div class="post-header">
                <h2 class="card-title mb-3 post-title font-weight-bold">Belajar C++ #09: Menggunakan Array untuk Menyimpan
                    Banyak Data</h2>
                <hr>
                <div><a rel="tag" class="badge badge-light p-2">#C++</a></div>
            </div>
            <div class="post-content my-5">
                <p></p>
                <figure class="mb-3"><img class="lazyload img-fluid lazyloaded" src="/img/cpp/cpp.png"
                        data-src="/img/cpp/cpp.png" alt="Tutorial Array di C++"></figure>
                <p></p>
                <p>Apa yang akan kamu lakukan jika diminta untuk menyimpan
                    banyak data di program?</p>
                <p>Misalkan kita ingin menyimpan nama-nama
                    teman untuk data kontak.</p>
                <p>Mungkin saja, kita akan menyimpannya seperti ini:</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-cpp" data-lang="cpp">string namaKontak1 <span style="color:#ff79c6">=</span> <span style="color:#f1fa8c">"Ayu"</span>;
        string namaKontak2 <span style="color:#ff79c6">=</span> <span style="color:#f1fa8c">"Bunga"</span>;
        string namaKontak3 <span style="color:#ff79c6">=</span> <span style="color:#f1fa8c">"Cyntia"</span>;
        string namaKontak4 <span style="color:#ff79c6">=</span> <span style="color:#f1fa8c">"Deni"</span>;
        string namaKontak5 <span style="color:#ff79c6">=</span> <span style="color:#f1fa8c">"Elisa"</span>;
        </code></pre>
                </div>
                <p>Hal ini boleh-boleh saja..</p>
                <p>Akan tetapi, masalahnya:</p>
                <p>“Gimana nanti kalau ada banyak sekali data,
                    pasti capek bikin variabel terus?”</p>
                <p>Karena itu, kita membutuhkan Array.</p>
                <p>Apa itu Array, dan bagaimana cara menggunakannya?</p>
                <p>Mari kita bahas…</p>
                <h2 id="apa-itu-array" class="h2">Apa itu Array?</h2>
                <p>Array merupakan struktur data yang digunakan
                    untuk <strong>menyimpan sekumpulan data</strong> dalam satu tempat.</p>
                <p>Setiap data dalam Array memiliki indeks, sehingga
                    kita akan mudah memprosesnya.</p>
                <p></p>
                <figure class="mb-3"><img class="lazyload img-fluid lazyloaded" src="/img/php/array/array.png"
                        data-src="/img/php/array/array.png" alt="Array"></figure>
                <p></p>
                <p>Indeks array selalu dimulai dari angka nol (<code>0</code>).</p>
                <p>Pada teori struktur data…</p>
                <p>…ukuran array akan bergantung
                    dari banyaknya data yang disimpan di dalamnya.</p>
                <h2 id="cara-membuat-array-pada-c" class="h2">Cara Membuat Array pada C++</h2>
                <p>Pada C++, array dapat kita buat
                    dengan cara seperti ini.</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-c" data-lang="c"><span style="color:#6272a4">// membuat array kosong dengan tipe data integer dan panjang 10
        </span><span style="color:#6272a4"></span><span style="color:#8be9fd">int</span> nama_array[<span style="color:#bd93f9">10</span>];

        <span style="color:#6272a4">// membuat array dengan langsung diisi
        </span><span style="color:#6272a4"></span><span style="color:#8be9fd">int</span> nama_arr[<span style="color:#bd93f9">3</span>] <span style="color:#ff79c6">=</span> {<span style="color:#bd93f9">0</span>, <span style="color:#bd93f9">3</span>, <span style="color:#bd93f9">2</span>}
        </code></pre>
                </div>
                <p>Cara membaut array hampir sama seperti
                    cara membuat variabel biasa.</p>
                <p>Bedanya… pada array kita harus menentukan
                    panjangnya.</p>
                <p></p>
                <figure class="mb-3"><img class="lazyload img-fluid lazyloaded" src="/img/c/array/array-pada-c.png"
                        data-src="/img/c/array/array-pada-c.png" alt="Cara Membuat Array pada C"></figure>
                <p></p>
                <h2 id="cara-mengambil-data-dari-array" class="h2">Cara Mengambil Data dari Array</h2>
                <p>Seperti yang sudah kita kethaui…</p>
                <p>Array akan menyimpan sekumpulan data
                    dan memberinya nomer indeks agar mudah diakses.</p>
                <p>Indeks array selalu dimauli dari nol <code>0</code>.</p>
                <p>Misalkan kita punya array seperti ini:</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-c" data-lang="c"><span style="color:#8be9fd">char</span> huruf[<span style="color:#bd93f9">5</span>] <span style="color:#ff79c6">=</span> {<span style="color:#f1fa8c">'a'</span>, <span style="color:#f1fa8c">'b'</span>, <span style="color:#f1fa8c">'c'</span>, <span style="color:#f1fa8c">'d'</span>, <span style="color:#f1fa8c">'e'</span>};
        </code></pre>
                </div>
                <p>Bagaimana cara mengambil huruf <code>c</code>?</p>
                <p>Jawabannya:</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-c" data-lang="c">huruf[<span style="color:#bd93f9">2</span>];
        </code></pre>
                </div>
                <p>Mengapa bukan <code>huruf[3]</code>?</p>
                <p><strong>Ingat: indeks array selalu dimulai dari nol.</strong></p>
                <p>Biar lebih jelas, mari kita coba dalam program.
                    Silahkan buat file baru dengan nama <code>contoh_array.cpp</code>,
                    kemudian isi dengan kode berikut:</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-cpp" data-lang="cpp"><span style="color:#ff79c6">#include</span> <span style="color:#ff79c6">&lt;iostream&gt;</span><span style="color:#ff79c6">
        </span><span style="color:#ff79c6"></span><span style="color:#ff79c6">using</span> <span style="color:#ff79c6">namespace</span> std;

        <span style="color:#8be9fd">int</span> <span style="color:#50fa7b">main</span>(){
            <span style="color:#8be9fd">char</span> huruf[<span style="color:#bd93f9">5</span>] <span style="color:#ff79c6">=</span> {<span style="color:#f1fa8c">'a'</span>, <span style="color:#f1fa8c">'b'</span>, <span style="color:#f1fa8c">'c'</span>, <span style="color:#f1fa8c">'d'</span>, <span style="color:#f1fa8c">'e'</span>};

            <span style="color:#6272a4">// mengambil data pada array
        </span><span style="color:#6272a4"></span>    cout <span style="color:#ff79c6">&lt;&lt;</span> <span style="color:#f1fa8c">"Huruf: "</span> <span style="color:#ff79c6">&lt;&lt;</span> huruf[<span style="color:#bd93f9">2</span>] <span style="color:#ff79c6">&lt;&lt;</span> endl;

            <span style="color:#ff79c6">return</span> <span style="color:#bd93f9">0</span>;
        }
        </code></pre>
                </div>
                <p>Setelah itu, coba compile dan jalankan.</p>
                <p>Maka hasilnya:</p>
                <p></p>
                <figure class="mb-3"><img class="lazyload img-fluid lazyloaded" src="/img/c/array/get-data.webp"
                        data-src="/img/c/array/get-data.webp" alt="Mengambil data dari array"></figure>
                <p></p>
                <h2 id="mengisi-ulang-data-pada-array" class="h2">Mengisi Ulang Data pada Array</h2>
                <p>Data pada array dapat kita isi ulang
                    dengan cara seperti ini:</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-cpp" data-lang="cpp">huruf[<span style="color:#bd93f9">2</span>] <span style="color:#ff79c6">=</span> <span style="color:#f1fa8c">'z'</span>;
        </code></pre>
                </div>
                <p>Maka isi array <code>huruf</code> pada indeks ke-2
                    akan bernilai <code>'z'</code>.</p>
                <p>Kalau tidak percaya…</p>
                <p>Kamu bisa coba buktikan sendiri.</p>
                <p>Silahkan ubah kode pada <code>contoh_array.cpp</code>
                    menjadi seperti ini:</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-cpp" data-lang="cpp"><span style="color:#ff79c6">#include</span> <span style="color:#ff79c6">&lt;iostream&gt;</span><span style="color:#ff79c6">
        </span><span style="color:#ff79c6"></span><span style="color:#ff79c6">using</span> <span style="color:#ff79c6">namespace</span> std;

        <span style="color:#8be9fd">int</span> <span style="color:#50fa7b">main</span>(){
            <span style="color:#6272a4">// isi awal array
        </span><span style="color:#6272a4"></span>    <span style="color:#8be9fd">char</span> huruf[<span style="color:#bd93f9">5</span>] <span style="color:#ff79c6">=</span> {<span style="color:#f1fa8c">'a'</span>, <span style="color:#f1fa8c">'b'</span>, <span style="color:#f1fa8c">'c'</span>, <span style="color:#f1fa8c">'d'</span>, <span style="color:#f1fa8c">'e'</span>};

        <span style="display:block;width:100%;background-color:#3d3f4a">    <span style="color:#6272a4">// mengubah isi data array
        </span></span><span style="display:block;width:100%;background-color:#3d3f4a"><span style="color:#6272a4"></span>    huruf[<span style="color:#bd93f9">2</span>] <span style="color:#ff79c6">=</span> <span style="color:#f1fa8c">'z'</span>;
        </span>
            <span style="color:#6272a4">// mencetak isi array
        </span><span style="color:#6272a4"></span>    cout <span style="color:#ff79c6">&lt;&lt;</span> <span style="color:#f1fa8c">"Huruf: "</span> <span style="color:#ff79c6">&lt;&lt;</span> huruf[<span style="color:#bd93f9">2</span>] <span style="color:#ff79c6">&lt;&lt;</span> endl;

            <span style="color:#ff79c6">return</span> <span style="color:#bd93f9">0</span>;
        }
        </code></pre>
                </div>
                <p>Hasil outputnya:</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-txt" data-lang="txt">Huruf: z
        </code></pre>
                </div>
                <p>Contoh lain: <code>array_data.cpp</code></p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-cpp" data-lang="cpp"><span style="color:#ff79c6">#include</span> <span style="color:#ff79c6">&lt;iostream&gt;</span><span style="color:#ff79c6">
        </span><span style="color:#ff79c6"></span><span style="color:#ff79c6">using</span> <span style="color:#ff79c6">namespace</span> std;

        <span style="color:#8be9fd">int</span> <span style="color:#50fa7b">main</span>(){
            <span style="color:#6272a4">// membuat array kosong
        </span><span style="color:#6272a4"></span>    <span style="color:#8be9fd">int</span> nilai[<span style="color:#bd93f9">5</span>];

        <span style="display:block;width:100%;background-color:#3d3f4a">    <span style="color:#6272a4">// mengisi array
        </span></span><span style="display:block;width:100%;background-color:#3d3f4a"><span style="color:#6272a4"></span>    nilai[<span style="color:#bd93f9">0</span>] <span style="color:#ff79c6">=</span> <span style="color:#bd93f9">32</span>;
        </span><span style="display:block;width:100%;background-color:#3d3f4a">    nilai[<span style="color:#bd93f9">1</span>] <span style="color:#ff79c6">=</span> <span style="color:#bd93f9">42</span>;
        </span><span style="display:block;width:100%;background-color:#3d3f4a">    nilai[<span style="color:#bd93f9">2</span>] <span style="color:#ff79c6">=</span> <span style="color:#bd93f9">76</span>;
        </span><span style="display:block;width:100%;background-color:#3d3f4a">    nilai[<span style="color:#bd93f9">3</span>] <span style="color:#ff79c6">=</span> <span style="color:#bd93f9">31</span>;
        </span><span style="display:block;width:100%;background-color:#3d3f4a">    nilai[<span style="color:#bd93f9">4</span>] <span style="color:#ff79c6">=</span> <span style="color:#bd93f9">57</span>;
        </span>
            <span style="color:#6272a4">// mencetak isi array
        </span><span style="color:#6272a4"></span>    cout <span style="color:#ff79c6">&lt;&lt;</span> <span style="color:#f1fa8c">"Nilai ke-1: "</span> <span style="color:#ff79c6">&lt;&lt;</span> nilai[<span style="color:#bd93f9">0</span>] <span style="color:#ff79c6">&lt;&lt;</span> endl;
            cout <span style="color:#ff79c6">&lt;&lt;</span> <span style="color:#f1fa8c">"Nilai ke-2: "</span> <span style="color:#ff79c6">&lt;&lt;</span> nilai[<span style="color:#bd93f9">1</span>] <span style="color:#ff79c6">&lt;&lt;</span> endl;
            cout <span style="color:#ff79c6">&lt;&lt;</span> <span style="color:#f1fa8c">"Nilai ke-3: "</span> <span style="color:#ff79c6">&lt;&lt;</span> nilai[<span style="color:#bd93f9">2</span>] <span style="color:#ff79c6">&lt;&lt;</span> endl;
            cout <span style="color:#ff79c6">&lt;&lt;</span> <span style="color:#f1fa8c">"Nilai ke-4: "</span> <span style="color:#ff79c6">&lt;&lt;</span> nilai[<span style="color:#bd93f9">3</span>] <span style="color:#ff79c6">&lt;&lt;</span> endl;
            cout <span style="color:#ff79c6">&lt;&lt;</span> <span style="color:#f1fa8c">"Nilai ke-5: "</span> <span style="color:#ff79c6">&lt;&lt;</span> nilai[<span style="color:#bd93f9">4</span>] <span style="color:#ff79c6">&lt;&lt;</span> endl;

            <span style="color:#ff79c6">return</span> <span style="color:#bd93f9">0</span>;
        }
        </code></pre>
                </div>
                <p>Hasilnya:</p>
                <p></p>
                <figure class="mb-3"><img class="lazyload img-fluid lazyloaded" src="/img/c/array/isi-array.webp"
                        data-src="/img/c/array/isi-array.webp" alt="Mengisi data ke array"></figure>
                <p></p>
                <h2 id="menggunakan-perulangan-dan-array" class="h2">Menggunakan Perulangan dan Array</h2>
                <p>Pada contoh di atas, kita menggunakan
                    perintah <code>cout</code> secara berulang
                    untuk mencetak semua isi array.</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-cpp" data-lang="cpp">cout <span style="color:#ff79c6">&lt;&lt;</span> <span style="color:#f1fa8c">"Nilai ke-1: "</span> <span style="color:#ff79c6">&lt;&lt;</span> nilai[<span style="color:#bd93f9">0</span>] <span style="color:#ff79c6">&lt;&lt;</span> endl;
        cout <span style="color:#ff79c6">&lt;&lt;</span> <span style="color:#f1fa8c">"Nilai ke-2: "</span> <span style="color:#ff79c6">&lt;&lt;</span> nilai[<span style="color:#bd93f9">1</span>] <span style="color:#ff79c6">&lt;&lt;</span> endl;
        cout <span style="color:#ff79c6">&lt;&lt;</span> <span style="color:#f1fa8c">"Nilai ke-3: "</span> <span style="color:#ff79c6">&lt;&lt;</span> nilai[<span style="color:#bd93f9">2</span>] <span style="color:#ff79c6">&lt;&lt;</span> endl;
        cout <span style="color:#ff79c6">&lt;&lt;</span> <span style="color:#f1fa8c">"Nilai ke-4: "</span> <span style="color:#ff79c6">&lt;&lt;</span> nilai[<span style="color:#bd93f9">3</span>] <span style="color:#ff79c6">&lt;&lt;</span> endl;
        cout <span style="color:#ff79c6">&lt;&lt;</span> <span style="color:#f1fa8c">"Nilai ke-5: "</span> <span style="color:#ff79c6">&lt;&lt;</span> nilai[<span style="color:#bd93f9">4</span>] <span style="color:#ff79c6">&lt;&lt;</span> endl;
        </code></pre>
                </div>
                <p>Kalau isi array-nya ada ribuan, apa kamu akan
                    sanggup menulis ini berulang-ulang?</p>
                <p>Tentu saja tidak!</p>
                <p>Karena itu, kita bisa memanfaatkan perulangan
                    untuk mencetaknya.</p>
                <p>Contoh: <code>array_loop.cpp</code></p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-cpp" data-lang="cpp"><span style="color:#ff79c6">#include</span> <span style="color:#ff79c6">&lt;iostream&gt;</span><span style="color:#ff79c6">
        </span><span style="color:#ff79c6"></span><span style="color:#ff79c6">using</span> <span style="color:#ff79c6">namespace</span> std;

        <span style="color:#8be9fd">int</span> <span style="color:#50fa7b">main</span>(){
            <span style="color:#6272a4">// membuat array kosong
        </span><span style="color:#6272a4"></span>    <span style="color:#8be9fd">int</span> nilai[<span style="color:#bd93f9">5</span>];

            <span style="color:#6272a4">// mengisi array
        </span><span style="color:#6272a4"></span>    nilai[<span style="color:#bd93f9">0</span>] <span style="color:#ff79c6">=</span> <span style="color:#bd93f9">32</span>;
            nilai[<span style="color:#bd93f9">1</span>] <span style="color:#ff79c6">=</span> <span style="color:#bd93f9">42</span>;
            nilai[<span style="color:#bd93f9">2</span>] <span style="color:#ff79c6">=</span> <span style="color:#bd93f9">76</span>;
            nilai[<span style="color:#bd93f9">3</span>] <span style="color:#ff79c6">=</span> <span style="color:#bd93f9">31</span>;
            nilai[<span style="color:#bd93f9">4</span>] <span style="color:#ff79c6">=</span> <span style="color:#bd93f9">57</span>;

            <span style="color:#6272a4">// mencetak isi array dengan perulangan
        </span><span style="display:block;width:100%;background-color:#3d3f4a"><span style="color:#6272a4"></span>    <span style="color:#ff79c6">for</span>(<span style="color:#8be9fd">int</span> i; i <span style="color:#ff79c6">&lt;</span> <span style="color:#bd93f9">5</span>; i<span style="color:#ff79c6">++</span>){
        </span><span style="display:block;width:100%;background-color:#3d3f4a">        printf(<span style="color:#f1fa8c">"Nilai ke-%d: %d</span><span style="color:#f1fa8c">\n</span><span style="color:#f1fa8c">"</span>, i, nilai[i]);
        </span><span style="display:block;width:100%;background-color:#3d3f4a">    }
        </span>
            <span style="color:#ff79c6">return</span> <span style="color:#bd93f9">0</span>;
        }
        </code></pre>
                </div>
                <p>Hasilnya:</p>
                <p></p>
                <figure class="mb-3"><img class="lazyload img-fluid lazyloaded" src="/img/c/array/isi-array.webp"
                        data-src="/img/c/array/isi-array.webp" alt="Mengisi data ke array"></figure>
                <p></p>
                <p>Jauh lebih sederhana ‘kan…</p>
                <p>Tapi ada yang masih kurang.</p>
                <p>Pada perulangan di atas kita memberikan batas
                    maksimal secara manual, yaitu: <code>i &lt; 5</code>.</p>
                <p>Nilai <code>5</code> seharusnya diganti dengan ukuran
                    atau jumlah isi array.</p>
                <p>Sehingga akan menjadi seperti ini:</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-cpp" data-lang="cpp"><span style="display:block;width:100%;background-color:#3d3f4a"><span style="color:#8be9fd">int</span> length <span style="color:#ff79c6">=</span> <span style="color:#ff79c6">sizeof</span>(nilai) <span style="color:#ff79c6">/</span> <span style="color:#ff79c6">sizeof</span>(<span style="color:#ff79c6">*</span>nilai);
        </span><span style="color:#ff79c6">for</span> (<span style="color:#8be9fd">int</span> i <span style="color:#ff79c6">=</span> <span style="color:#bd93f9">0</span>; i <span style="color:#ff79c6">&lt;</span> length; i<span style="color:#ff79c6">++</span>){
            printf(<span style="color:#f1fa8c">"Nilai ke-1: %d</span><span style="color:#f1fa8c">\n</span><span style="color:#f1fa8c">"</span>, nilai[i]);
        }
        </code></pre>
                </div>
                <h2 id="mengambil-panjang-array" class="h2">Mengambil Panjang Array</h2>
                <p>Ada dua cara untuk mendapatkan panjang array:</p>
                <ol>
                    <li>Partama cara seperti di atas (seperti bahasa C);</li>
                    <li>Menggunakan Class array dari C++.</li>
                </ol>
                <p>Kita bahas dulu cara yang pertama..</p>
                <p>Pada contoh di atas, kita menggunakan fungsi <code>sizeof()</code>
                    untuk mengambil panajang atau ukuran array.</p>
                <p>Fungsi <code>sizeof()</code> sebenarnya akan mengambil
                    ukuran memori dari array.</p>
                <p>Misalkan saya punya array seperti ini:</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-cpp" data-lang="cpp"><span style="color:#8be9fd">int</span> nilai[<span style="color:#bd93f9">2</span>] <span style="color:#ff79c6">=</span> {<span style="color:#bd93f9">1</span>, <span style="color:#bd93f9">2</span>};
        </code></pre>
                </div>
                <p>Isi array-nya berupa integer, tipe data integer
                    memiliki ukuran <code>4</code> byte dalam memori. Maka
                    ukuran array tersebut adalah <code>8</code> byte.</p>
                <p>Lalu bagaimana cara mendapatkan banyaknya
                    isi array?</p>
                <p>Karena di bahasa C belum memiliki
                    fungsi khusus untuk mengambil
                    banyaknya isi array.</p>
                <p>Kita harus membaginya dengan panjang pointernya.</p>
                <p>Contoh:</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-cpp" data-lang="cpp"><span style="color:#8be9fd">int</span> array[] <span style="color:#ff79c6">=</span> { <span style="color:#bd93f9">0</span>, <span style="color:#bd93f9">1</span>, <span style="color:#bd93f9">2</span>, <span style="color:#bd93f9">3</span>, <span style="color:#bd93f9">4</span>, <span style="color:#bd93f9">5</span>, <span style="color:#bd93f9">6</span>, <span style="color:#bd93f9">7</span>, <span style="color:#bd93f9">8</span>, <span style="color:#bd93f9">9</span> };

        <span style="color:#6272a4">/* ukuran array dalam byte */</span>
        <span style="color:#8be9fd">int</span> size <span style="color:#ff79c6">=</span> <span style="color:#ff79c6">sizeof</span>(array);

        <span style="color:#6272a4">/* banyaknya isi array `array` */</span>
        <span style="color:#8be9fd">int</span> length <span style="color:#ff79c6">=</span> <span style="color:#ff79c6">sizeof</span>(array) <span style="color:#ff79c6">/</span> <span style="color:#ff79c6">sizeof</span>(<span style="color:#ff79c6">*</span>array);
        </code></pre>
                </div>
                <p>Mari kita coba…</p>
                <p>Buatlah program dengan nama <code>panjang_array.cpp</code>,
                    kemudian isi dengan kode berikut:</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-cpp" data-lang="cpp"><span style="color:#ff79c6">#include</span> <span style="color:#ff79c6">&lt;stdio.h&gt;</span><span style="color:#ff79c6">
        </span><span style="color:#ff79c6"></span>
        <span style="color:#8be9fd">void</span> <span style="color:#50fa7b">main</span>(){
            <span style="color:#6272a4">// membuat array
        </span><span style="color:#6272a4"></span>    string contact[] <span style="color:#ff79c6">=</span> {<span style="color:#f1fa8c">"Ami"</span>, <span style="color:#f1fa8c">"Ayu"</span>, <span style="color:#f1fa8c">"Budi"</span>, <span style="color:#f1fa8c">"Agus"</span>, <span style="color:#f1fa8c">"Mila"</span>};

            <span style="color:#6272a4">//  mengambil banyaknya isi array
        </span><span style="color:#6272a4"></span>    <span style="color:#8be9fd">int</span> length <span style="color:#ff79c6">=</span> <span style="color:#ff79c6">sizeof</span>(contact) <span style="color:#ff79c6">/</span> <span style="color:#ff79c6">sizeof</span>(<span style="color:#ff79c6">*</span>contact);

            printf(<span style="color:#f1fa8c">"Banyaknya isi array nilai: %d</span><span style="color:#f1fa8c">\n</span><span style="color:#f1fa8c">"</span>, length);
        }
        </code></pre>
                </div>
                <p>Hasilnya:</p>
                <p></p>
                <figure class="mb-3"><img class="lazyload img-fluid lazyloaded" src="/img/c/array/array-len.webp"
                        data-src="/img/c/array/array-len.webp" alt="Banyaknya isi data pada array"></figure>
                <p></p>
                <p>Cara kedua, kita bisa gunakan <em>Class Template</em> dari C++.
                    <em>Class Template</em> ini mulai ditambahkan pada C++11.
                </p>
                <p>Contoh:</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-cpp" data-lang="cpp"><span style="color:#6272a4">// membuat array dengan class
        </span><span style="color:#6272a4"></span>array<span style="color:#ff79c6">&lt;</span>string, <span style="color:#bd93f9">5</span><span style="color:#ff79c6">&gt;</span> names <span style="color:#ff79c6">=</span> {<span style="color:#f1fa8c">"Ali"</span>, <span style="color:#f1fa8c">"Abi"</span>, <span style="color:#f1fa8c">"Ami"</span>, <span style="color:#f1fa8c">"Mia"</span>, <span style="color:#f1fa8c">"Nia"</span>};
        <span style="color:#6272a4">// mengambil ukuran array
        </span><span style="color:#6272a4"></span>cout <span style="color:#ff79c6">&lt;&lt;</span> names.size();
        </code></pre>
                </div>
                <p>Tapi sebelum kita dapat menggunakan <em>Class Template</em>
                    <code>array&lt;&gt;</code>, kita harus mengimpornya dengan <code>#include</code>.
                </p>
                <p>Contoh lengkap: <code>array_class.cpp</code></p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-cpp" data-lang="cpp"><span style="color:#ff79c6">#include</span> <span style="color:#ff79c6">&lt;iostream&gt;</span><span style="color:#ff79c6">
        </span><span style="display:block;width:100%;background-color:#3d3f4a"><span style="color:#ff79c6">#include</span> <span style="color:#ff79c6">&lt;array&gt;</span><span style="color:#ff79c6">
        </span></span><span style="color:#ff79c6"></span><span style="color:#ff79c6">using</span> <span style="color:#ff79c6">namespace</span> std;

        <span style="color:#8be9fd">int</span> <span style="color:#50fa7b">main</span>(){
            array<span style="color:#ff79c6">&lt;</span>string, <span style="color:#bd93f9">5</span><span style="color:#ff79c6">&gt;</span> names <span style="color:#ff79c6">=</span> {<span style="color:#f1fa8c">"Ali"</span>, <span style="color:#f1fa8c">"Abi"</span>, <span style="color:#f1fa8c">"Ami"</span>, <span style="color:#f1fa8c">"Mia"</span>, <span style="color:#f1fa8c">"Nia"</span>};

        <span style="display:block;width:100%;background-color:#3d3f4a">    printf(<span style="color:#f1fa8c">"Ada %d data di dalam array: </span><span style="color:#f1fa8c">\n</span><span style="color:#f1fa8c">"</span>, names.size());
        </span>
        <span style="display:block;width:100%;background-color:#3d3f4a">    <span style="color:#ff79c6">for</span>(<span style="color:#8be9fd">int</span> i <span style="color:#ff79c6">=</span> <span style="color:#bd93f9">0</span>; i <span style="color:#ff79c6">&lt;</span> names.size(); i<span style="color:#ff79c6">++</span>){
        </span>        cout <span style="color:#ff79c6">&lt;&lt;</span> i <span style="color:#ff79c6">&lt;&lt;</span> <span style="color:#f1fa8c">". "</span> <span style="color:#ff79c6">&lt;&lt;</span> names[i] <span style="color:#ff79c6">&lt;&lt;</span> endl;
            }

            <span style="color:#ff79c6">return</span> <span style="color:#bd93f9">0</span>;
        }
        </code></pre>
                </div>
                <p>Hasilnya:</p>
                <p></p>
                <figure class="mb-3"><img class="lazyload img-fluid lazyloaded" src="/img/cpp/array/array-class.png"
                        data-src="/img/cpp/array/array-class.png" alt="Membuat Array dengan Array Class Template"></figure>
                <p></p>
                <p>Bisa dibilang, <em>Class Template</em> array ini
                    adalah pengembangan dari cara yang sebelumnya.</p>
                <p>Array dianggap sebagai sebuah objek..</p>
                <p>Objek itu apa?</p>
                <p>Buat kamu yang belum paham OOP,
                    pasti akan menyanyakan hal ini.</p>
                <p>Karena itu, saran saya pahami saja
                    dulu cara yang pertama.</p>
                <p>Nanti kita akan bahas OOP di tutorial
                    yang berbeda.</p>
                <h2 id="latihan-program-hitung-rata-rata" class="h2">Latihan: Program Hitung Rata-Rata</h2>
                <p>Anggap saja kita diminta untuk membuat program
                    untuk menghitung tinggi rata-rata dari sepuluh orang.</p>
                <p>Pertama kita pasti akan membutuhkan sebuah
                    array dengan panjang <code>10</code> yang berisi kumpulan
                    tinggi badan.</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-cpp" data-lang="cpp"><span style="color:#8be9fd">int</span> tinggi_badan[<span style="color:#bd93f9">10</span>] <span style="color:#ff79c6">=</span> {<span style="color:#bd93f9">175</span>, <span style="color:#bd93f9">165</span>, <span style="color:#bd93f9">166</span>, <span style="color:#bd93f9">157</span>, <span style="color:#bd93f9">184</span>, <span style="color:#bd93f9">156</span>, <span style="color:#bd93f9">163</span>, <span style="color:#bd93f9">176</span>, <span style="color:#bd93f9">171</span>, <span style="color:#bd93f9">169</span>};
        </code></pre>
                </div>
                <p>Berikutnya kita harus menghitung nilai rata-rata dari sekumpulan
                    nilai tersebut.</p>
                <p>Rumus nilai rata-rata:</p>
                <p></p>
                <figure class="mb-3"><img class="lazyload img-fluid lazyloaded" src="/img/c/array/rumus-rata.webp"
                        data-src="/img/c/array/rumus-rata.webp" alt="Rumus nilai rata-rata dalam matematika"></figure>
                <p></p>
                <p>Mari kita buat programnya…</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-cpp" data-lang="cpp"><span style="color:#ff79c6">#include</span> <span style="color:#ff79c6">&lt;iostream&gt;</span><span style="color:#ff79c6">
        </span><span style="color:#ff79c6"></span><span style="color:#ff79c6">using</span> <span style="color:#ff79c6">namespace</span> std;

        <span style="color:#8be9fd">int</span> <span style="color:#50fa7b">main</span>(){
            <span style="color:#6272a4">// membuat array dari tinggi badan
        </span><span style="color:#6272a4"></span>    <span style="color:#8be9fd">int</span> tinggi_badan[<span style="color:#bd93f9">10</span>] <span style="color:#ff79c6">=</span> {<span style="color:#bd93f9">175</span>, <span style="color:#bd93f9">165</span>, <span style="color:#bd93f9">166</span>, <span style="color:#bd93f9">157</span>, <span style="color:#bd93f9">184</span>, <span style="color:#bd93f9">156</span>, <span style="color:#bd93f9">163</span>, <span style="color:#bd93f9">176</span>, <span style="color:#bd93f9">171</span>, <span style="color:#bd93f9">169</span>};

            <span style="color:#6272a4">//  length itu sama dengan n
        </span><span style="color:#6272a4"></span>    <span style="color:#8be9fd">int</span> length <span style="color:#ff79c6">=</span> <span style="color:#ff79c6">sizeof</span>(tinggi_badan) <span style="color:#ff79c6">/</span> <span style="color:#ff79c6">sizeof</span>(tinggi_badan[<span style="color:#bd93f9">0</span>]);
            <span style="color:#8be9fd">int</span> sum <span style="color:#ff79c6">=</span> <span style="color:#bd93f9">0</span>;

            <span style="color:#ff79c6">for</span>(<span style="color:#8be9fd">int</span> i <span style="color:#ff79c6">=</span> <span style="color:#bd93f9">0</span>; i <span style="color:#ff79c6">&lt;</span> length; i<span style="color:#ff79c6">++</span>){
                sum <span style="color:#ff79c6">+=</span> tinggi_badan[i];
            }

            <span style="color:#6272a4">// rata-rata tinggi badan
        </span><span style="color:#6272a4"></span>    <span style="color:#8be9fd">float</span> rata_rata <span style="color:#ff79c6">=</span> (<span style="color:#8be9fd">float</span>)sum <span style="color:#ff79c6">/</span> (<span style="color:#8be9fd">float</span>)length;

            printf(<span style="color:#f1fa8c">"Rata-rata tinggi badan: %.2f</span><span style="color:#f1fa8c">\n</span><span style="color:#f1fa8c">"</span>, rata_rata);

            <span style="color:#ff79c6">return</span> <span style="color:#bd93f9">0</span>;
        }
        </code></pre>
                </div>
                <p>Hasilnya:</p>
                <p></p>
                <figure class="mb-3"><img class="lazyload img-fluid lazyloaded" src="/img/c/array/program-rata.webp"
                        data-src="/img/c/array/program-rata.webp" alt="Program nilai rata-rata dengan C"></figure>
                <p></p>
                <h2 id="array-multi-dimensi" class="h2">Array Multi Dimensi</h2>
                <p>Array yang kita buat pada contoh-contoh program di atas
                    adalah array satu dimensi.</p>
                <p>Array bisa dibuat dua dimensi bahkan lebih.</p>
                <p>Array multidimensi biasanya digunakan untuk membuat matriks.</p>
                <p>Contoh array dua dimensi:</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-cpp" data-lang="cpp"><span style="color:#8be9fd">int</span> matriks[<span style="color:#bd93f9">3</span>][<span style="color:#bd93f9">3</span>] <span style="color:#ff79c6">=</span> {
            {<span style="color:#bd93f9">1</span>, <span style="color:#bd93f9">3</span>, <span style="color:#bd93f9">5</span>},
            {<span style="color:#bd93f9">5</span>, <span style="color:#bd93f9">3</span>, <span style="color:#bd93f9">1</span>},
            {<span style="color:#bd93f9">6</span>, <span style="color:#bd93f9">2</span>, <span style="color:#bd93f9">3</span>}
        };
        </code></pre>
                </div>
                <p>Array dua dimensi biasanya digunakan untuk
                    membuat matriks.</p>
                <p>Lalu bagaimana cara mengambil data dari array dua
                    dimensi?</p>
                <p>Begini caranya:</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-cpp" data-lang="cpp">matriks[<span style="color:#bd93f9">1</span>][<span style="color:#bd93f9">2</span>];
        </code></pre>
                </div>
                <p>Contoh program:</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-cpp" data-lang="cpp"><span style="color:#ff79c6">#include</span> <span style="color:#ff79c6">&lt;iostream&gt;</span><span style="color:#ff79c6">
        </span><span style="color:#ff79c6"></span><span style="color:#ff79c6">using</span> <span style="color:#ff79c6">namespace</span> std;

        <span style="color:#8be9fd">int</span> <span style="color:#50fa7b">main</span>(){
            <span style="color:#8be9fd">int</span> matriks[<span style="color:#bd93f9">3</span>][<span style="color:#bd93f9">3</span>] <span style="color:#ff79c6">=</span> {
                {<span style="color:#bd93f9">1</span>, <span style="color:#bd93f9">3</span>, <span style="color:#bd93f9">5</span>},
                {<span style="color:#bd93f9">5</span>, <span style="color:#bd93f9">3</span>, <span style="color:#bd93f9">1</span>},
                {<span style="color:#bd93f9">6</span>, <span style="color:#bd93f9">2</span>, <span style="color:#bd93f9">3</span>}
            };

            printf(<span style="color:#f1fa8c">"Isi Data pada indeks ke-(1,0): %d</span><span style="color:#f1fa8c">\n</span><span style="color:#f1fa8c">"</span>, matriks[<span style="color:#bd93f9">1</span>][<span style="color:#bd93f9">0</span>]);

            <span style="color:#ff79c6">return</span> <span style="color:#bd93f9">0</span>;
        }
        </code></pre>
                </div>
                <p>Hasilnya:</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-txt" data-lang="txt">Program Matriks
        </code></pre>
                </div>
            </div>
        </div>









        <div class="python" style="float: right; width:550px">
            <div class="post-header">
                <h2 class="card-title mb-3 post-title font-weight-bold">Belajar Python: Mengenal Struktur Data List</h2>
                <hr>
                <div><a rel="tag" class="badge badge-light p-2">#Python</a>
                </div>
            </div>
            <div class="post-content my-5">
                <p>Bagaimana caranya menyimpan banyak data dalam satu veriabel?</p>
                <p>Jawabannya menggunakan <strong>List</strong>.</p>
                <p><em>List</em> adalah struktur data pada python yang mampu menyimpan lebih
                    dari satu data, seperti array.</p>
                <p>Pada kesempatan ini, kita akan membahas cara menggunakan <em>list</em>
                    di Python dari yang paling sederhana sampai yang sedikit kompleks.</p>
                <p>Apa saja poin-poin yang akan dipelajari?</p>
                <ul>
                    <li>Cara Membuat List dan Mengisinya</li>
                    <li>Cara Mangambil nilai dari List</li>
                    <li>Cara Menambahkan dan Menghapus isi List</li>
                    <li>Operasi pada List</li>
                    <li>List multi dimensi</li>
                </ul>
                <p>Selamat menyimak…</p>
                <h2 id="cara-membuat-list-di-python" class="h2">Cara Membuat List di Python</h2>
                <p><em>List</em> dapat kita buat seperti membuat variabel biasa,
                    namun nilai variabelnya diisi dengan tanda kurung siku (<code>[]</code>).</p>
                <p>Contoh:</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-python" data-lang="python"><span style="color:#6272a4"># Membuat List kosong</span>
        warna <span style="color:#ff79c6">=</span> []

        <span style="color:#6272a4"># Membuat list dengan isi 1 item</span>
        hobi <span style="color:#ff79c6">=</span> [<span style="color:#f1fa8c">"membaca"</span>]
        </code></pre>
                </div>
                <p>Apabila list-nya memiliki lebih dari satu isi, maka kita bisa
                    memisahnya dengan tanda koma.</p>
                <p>Contoh:</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-python" data-lang="python">buah <span style="color:#ff79c6">=</span> [<span style="color:#f1fa8c">"jeruk"</span>, <span style="color:#f1fa8c">"apel"</span>, <span style="color:#f1fa8c">"mangga"</span>, <span style="color:#f1fa8c">"duren"</span>]
        </code></pre>
                </div>
                <p><strong>Jenis data apa saja yang boleh diisi ke dalam List?</strong></p>
                <p><em>list</em> dapat diisi dengan tipe data apa saja, string, integer,
                    float, double, boolean, object, dan sebagainya.</p>
                <p>Kita juga bisa mencampur isinya.</p>
                <p>Contoh:</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-python" data-lang="python">laci <span style="color:#ff79c6">=</span> [<span style="color:#f1fa8c">"buku"</span>, <span style="color:#bd93f9">21</span>, True, <span style="color:#bd93f9">34.12</span>]
        </code></pre>
                </div>
                <p>Ada empat jenis tipe data pada list <code>laci</code>:</p>
                <ol>
                    <li><code>"buku"</code> adalah tipe data string;</li>
                    <li><code>21</code> adalah tipe data integer;</li>
                    <li><code>True</code> adalah tipe data boolean;</li>
                    <li>dan <code>34.12</code> adalah tipe data float.</li>
                </ol>
                <h2 id="cara-mengambil-nilai-dari-list" class="h2">Cara Mengambil Nilai dari List</h2>
                <p>Setelah kita tahu cara membuat dan menyimpan data di dalam <em>List</em>,
                    mari kita coba mengambil datanya.</p>
                <p>List sama seperti array, list juga memiliki nomer indeks untuk mengakses
                    data atau isinya.</p>
                <p></p>
                <figure class="mb-3"><img class="lazyload img-fluid lazyloaded" src="/img/python/list/contoh-list.svg"
                        data-src="/img/python/list/contoh-list.svg" alt="List dengan Indeks"></figure>
                <p></p>
                <p>Nomer indeks <em>list</em> selalu dimulai dari nol (<code>0</code>).</p>
                <p>Nomer indeks ini yang kita butuhkan untuk mengambil isi (item)
                    dari <em>list</em>.</p>
                <p>Contoh:</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-python" data-lang="python"><span style="color:#6272a4"># Kita punya list nama-nama buah</span>
        buah <span style="color:#ff79c6">=</span> [<span style="color:#f1fa8c">"apel"</span>, <span style="color:#f1fa8c">"anggur"</span>, <span style="color:#f1fa8c">"mangga"</span>, <span style="color:#f1fa8c">"jeruk"</span>]

        <span style="color:#6272a4"># Misanya kita ingin mengambil mangga</span>
        <span style="color:#6272a4"># Maka indeknya adalah 2</span>
        <span style="color:#ff79c6">print</span> buah[<span style="color:#bd93f9">2</span>]
        </code></pre>
                </div>
                <p>Akan menghasilkan output:</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-bash" data-lang="bash"><span style="color:#f1fa8c">"mangga"</span>
        </code></pre>
                </div>
                <p>Horee! dapat mangga. 😄</p>
                <h3 id="latihan-1-membuat-program-dengan-list" class="h3">Latihan 1: Membuat Program dengan List</h3>
                <p>Untuk memantapkan pemahaman, silahkan coba latihan berikut.</p>
                <ol>
                    <li>Buat sebuah list untuk menyimpan kenalanmu</li>
                    <li>Isi list sebanyak 5</li>
                    <li>Tampilkan isi list indeks nomer 3</li>
                    <li>Tampilkan semua teman dengan perulangan</li>
                    <li>Tampilkan panjang list</li>
                </ol>
                <p>Mari kita coba…</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-python" data-lang="python"><span style="color:#6272a4"># Buat list untuk menampung nama-nama teman</span>
        my_friends <span style="color:#ff79c6">=</span> [<span style="color:#f1fa8c">"Anggun"</span>, <span style="color:#f1fa8c">"Dian"</span>, <span style="color:#f1fa8c">"Agung"</span>, <span style="color:#f1fa8c">"Adi"</span>, <span style="color:#f1fa8c">"Adam"</span>]

        <span style="color:#6272a4"># Tampilkan isi list my_friends dengan nomer indeks 3</span>
        <span style="color:#ff79c6">print</span> <span style="color:#f1fa8c">"Isi my_friends indeks ke-3 adalah: {}"</span><span style="color:#ff79c6">.</span>format(my_friends[<span style="color:#bd93f9">3</span>])

        <span style="color:#6272a4"># Tampilkan semua daftar teman</span>
        <span style="color:#ff79c6">print</span> <span style="color:#f1fa8c">"Semua teman: ada {} orang"</span><span style="color:#ff79c6">.</span>format(<span style="color:#8be9fd;font-style:italic">len</span>(my_friends))
        <span style="color:#ff79c6">for</span> friend <span style="color:#ff79c6">in</span> my_friends:
            <span style="color:#ff79c6">print</span> friend
        </code></pre>
                </div>
                <p>Pada kode di atas, kita menggunakan fungsi <code>len()</code> untuk
                    mengambil panjang <em>list</em>.</p>
                <p>Hasil outputnya:</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-bash" data-lang="bash">Isi my_friends indeks ke-3 adalah: Adi
        Semua teman: ada <span style="color:#bd93f9">5</span> orang
        Anggun
        Dian
        Agung
        Adi
        Adam
        </code></pre>
                </div>
                <h2 id="mengganti-nilai-list" class="h2">Mengganti Nilai List</h2>
                <p>List bersifat <em>mutable</em>, artinya isinya bisa kita ubah-ubah.</p>
                <p>Contoh:</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-python" data-lang="python"><span style="color:#6272a4"># list mula-mula</span>
        buah <span style="color:#ff79c6">=</span> [<span style="color:#f1fa8c">"jeruk"</span>, <span style="color:#f1fa8c">"apel"</span>, <span style="color:#f1fa8c">"mangga"</span>, <span style="color:#f1fa8c">"duren"</span>]
        <span style="color:#6272a4"># mengubah nilai index ke-2</span>
        buah[<span style="color:#bd93f9">2</span>] <span style="color:#ff79c6">=</span> <span style="color:#f1fa8c">"kelapa"</span>
        </code></pre>
                </div>
                <p>Maka <code>"mangga"</code> akan diganti dengan <code>"kelapa"</code>.</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-python" data-lang="python">[<span style="color:#f1fa8c">"jeruk"</span>, <span style="color:#f1fa8c">"apel"</span>, <span style="color:#f1fa8c">"kelapa"</span>, <span style="color:#f1fa8c">"duren"</span>]
        </code></pre>
                </div>
                <h2 id="menambahkan-item-list" class="h2">Menambahkan Item List</h2>
                <p>Tedapat Tiga metode <em>(method)</em> atau fungsi yang bisa digunakan untuk menambahkan isi
                    atau item ke List:</p>
                <ol>
                    <li><code>prepend(item)</code> menambahkan item dari depan;</li>
                    <li><code>append(item)</code> menambahkan item dari belakang.</li>
                    <li><code>insert(index, item)</code> menambahkan item dari indeks tertentu</li>
                </ol>
                <p></p>
                <figure class="mb-3"><img class="lazyload img-fluid lazyloaded" src="/img/python/list/prepend-append.svg"
                        data-src="/img/python/list/prepend-append.svg" alt="Prepend dan Append"></figure>
                <p></p>
                <p>Contoh:</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-python" data-lang="python"><span style="color:#6272a4">#list mula-mula</span>
        buah <span style="color:#ff79c6">=</span> [<span style="color:#f1fa8c">"jeruk"</span>, <span style="color:#f1fa8c">"apel"</span>, <span style="color:#f1fa8c">"mangga"</span>, <span style="color:#f1fa8c">"duren"</span>]
        <span style="color:#6272a4"># Tambahkan manggis</span>
        buah<span style="color:#ff79c6">.</span>append(<span style="color:#f1fa8c">"manggis"</span>)
        </code></pre>
                </div>
                <p>Hasilnya <code>"manggis"</code> akan ditambahkan setelah item terakhir.</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-python" data-lang="python">[<span style="color:#f1fa8c">"jeruk"</span>, <span style="color:#f1fa8c">"apel"</span>, <span style="color:#f1fa8c">"mangga"</span>, <span style="color:#f1fa8c">"duren"</span>, <span style="color:#f1fa8c">"manggis"</span>]
        </code></pre>
                </div>
                <p>Metode yang kedua menggunakan <code>prepend()</code>.</p>
                <p>Metode <code>prepend()</code> akan menambahkan item dari depan atau awal list.</p>
                <p>Contoh:</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-python" data-lang="python"><span style="color:#6272a4">#list mula-mula</span>
        buah <span style="color:#ff79c6">=</span> [<span style="color:#f1fa8c">"jeruk"</span>, <span style="color:#f1fa8c">"apel"</span>, <span style="color:#f1fa8c">"mangga"</span>, <span style="color:#f1fa8c">"duren"</span>]
        buah<span style="color:#ff79c6">.</span>prepend(<span style="color:#f1fa8c">"anggur"</span>)
        </code></pre>
                </div>
                <p>Maka <code>"anggur"</code> akan ditambahkan pada awal list.</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-python" data-lang="python">[<span style="color:#f1fa8c">"anggur"</span>,<span style="color:#f1fa8c">"jeruk"</span>, <span style="color:#f1fa8c">"apel"</span>, <span style="color:#f1fa8c">"mangga"</span>, <span style="color:#f1fa8c">"duren"</span>]
        </code></pre>
                </div>
                <p>Selain <code>prepend()</code> dan <code>append()</code> kita juga bisa mengginakan <em>method</em>
                    <code>insert()</code> untuk menambahkan item pada indeks tertentu.
                </p>
                <p></p>
                <figure class="mb-3"><img class="lazyload img-fluid lazyloaded" src="/img/python/list/insert.svg"
                        data-src="/img/python/list/insert.svg" alt="Menambahkan item dengan method insert"></figure>
                <p></p>
                <p>Contoh:</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-python" data-lang="python"><span style="color:#6272a4">#list mula-mula</span>
        buah <span style="color:#ff79c6">=</span> [<span style="color:#f1fa8c">"jeruk"</span>, <span style="color:#f1fa8c">"apel"</span>, <span style="color:#f1fa8c">"mangga"</span>, <span style="color:#f1fa8c">"duren"</span>]
        buah<span style="color:#ff79c6">.</span>insert(<span style="color:#bd93f9">2</span>, <span style="color:#f1fa8c">"duren"</span>)
        </code></pre>
                </div>
                <h3 id="latihan-2-membuat-program-dengan-list" class="h3">Latihan 2: Membuat Program dengan List</h3>
                <p>Sekarang mari kita coba membuat program
                    dengan memanfaatkan <em>method</em> <code>prepend()</code> dan <code>append()</code>.</p>
                <p>Silahkan langsung di ketik dan dicoba.</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-python" data-lang="python"><span style="color:#6272a4"># Membuat list kosong untuk menampung hobi</span>
        hobi <span style="color:#ff79c6">=</span> []
        stop <span style="color:#ff79c6">=</span> False
        i <span style="color:#ff79c6">=</span> <span style="color:#bd93f9">0</span>

        <span style="color:#6272a4"># Mengisi hobi</span>
        <span style="color:#ff79c6">while</span>(<span style="color:#ff79c6">not</span> stop):
            hobi_baru <span style="color:#ff79c6">=</span> <span style="color:#8be9fd;font-style:italic">raw_input</span>(<span style="color:#f1fa8c">"Inputkan hobi yang ke-{}: "</span><span style="color:#ff79c6">.</span>format(i))
            hobi<span style="color:#ff79c6">.</span>append(hobi_baru)

            <span style="color:#6272a4"># Increment i</span>
            i <span style="color:#ff79c6">+=</span> <span style="color:#bd93f9">1</span>

            tanya <span style="color:#ff79c6">=</span> <span style="color:#8be9fd;font-style:italic">raw_input</span>(<span style="color:#f1fa8c">"Mau isi lagi? (y/t): "</span>)
            <span style="color:#ff79c6">if</span>(tanya <span style="color:#ff79c6">==</span> <span style="color:#f1fa8c">"t"</span>):
                stop <span style="color:#ff79c6">=</span> True


        <span style="color:#6272a4"># Cetak Semua Hobi</span>
        <span style="color:#ff79c6">print</span> <span style="color:#f1fa8c">"="</span> <span style="color:#ff79c6">*</span> <span style="color:#bd93f9">10</span>
        <span style="color:#ff79c6">print</span> <span style="color:#f1fa8c">"Kamu memiliki {} hobi"</span><span style="color:#ff79c6">.</span>format(<span style="color:#8be9fd;font-style:italic">len</span>(hobi))
        <span style="color:#ff79c6">for</span> hb <span style="color:#ff79c6">in</span> hobi:
            <span style="color:#ff79c6">print</span> <span style="color:#f1fa8c">"- {}"</span><span style="color:#ff79c6">.</span>format(hb)
        </code></pre>
                </div>
                <p>Coba eksekusi dan inputkan sebuah nilai.</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-bash" data-lang="bash">petanikode@imajinasi ~ $ python hobi.py
        Inputkan hobi yang ke-0: Membaca
        Mau isi lagi? <span style="color:#ff79c6">(</span>y/t<span style="color:#ff79c6">)</span>: y
        Inputkan hobi yang ke-1: Menulis
        Mau isi lagi? <span style="color:#ff79c6">(</span>y/t<span style="color:#ff79c6">)</span>: y
        Inputkan hobi yang ke-2: Main Game
        Mau isi lagi? <span style="color:#ff79c6">(</span>y/t<span style="color:#ff79c6">)</span>: y
        Inputkan hobi yang ke-3: Ngoding
        Mau isi lagi? <span style="color:#ff79c6">(</span>y/t<span style="color:#ff79c6">)</span>: <span style="color:#8be9fd;font-style:italic">t</span>
        <span style="color:#ff79c6">==========</span>
        Kamu memiliki <span style="color:#bd93f9">4</span> hobi
        - Membaca
        - Menulis
        - Main Game
        - Ngoding
        </code></pre>
                </div>
                <h2 id="menghapus-item-di-list" class="h2">Menghapus Item di List</h2>
                <p>Untuk menghapus salah satu isi dari <em>List</em>, kita bisa menggunakan
                    perintah <code>del</code>.</p>
                <p></p>
                <figure class="mb-3"><img class="lazyload img-fluid lazyloaded" src="/img/python/list/delete-list.svg"
                        data-src="/img/python/list/delete-list.svg" alt="Menghapus item di List"></figure>
                <p></p>
                <p>Perintah <code>del</code> akan menghapus sebuah variabel dari memori.</p>
                <p>Contoh:</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-python" data-lang="python"><span style="color:#6272a4"># Membuat List</span>
        todo_list <span style="color:#ff79c6">=</span> [
            <span style="color:#f1fa8c">"Balajar Python"</span>,
            <span style="color:#f1fa8c">"Belajar Django"</span>,
            <span style="color:#f1fa8c">"Belajar MongoDB"</span>,
            <span style="color:#f1fa8c">"Belajar Sulap"</span>,
            <span style="color:#f1fa8c">"Belajar Flask"</span>
        ]

        <span style="color:#6272a4"># Misalkan kita ingin menghapus "Belajar Sulap"</span>
        <span style="color:#6272a4"># yang berada di indeks ke-3</span>
        <span style="color:#ff79c6">del</span> todo_list[<span style="color:#bd93f9">3</span>]

        <span style="color:#ff79c6">print</span> todo_list
        </code></pre>
                </div>
                <p>Hasilnya, <code>"Belajar Sulap"</code> akan dihapus:</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-python" data-lang="python">[<span style="color:#f1fa8c">'Balajar Python'</span>, <span style="color:#f1fa8c">'Belajar Django'</span>, <span style="color:#f1fa8c">'Belajar MongoDB'</span>, <span style="color:#f1fa8c">'Belajar Flask'</span>]
        </code></pre>
                </div>
                <p>Selain menggunakan perintah <code>del</code>, kita juga bisa menggunakan <em>method</em>
                    <code>remove()</code> dengan paramter item yang akan dihapus.
                </p>
                <p>Contoh:</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-python" data-lang="python"><span style="color:#6272a4"># mula-mula kita punya list</span>
        a <span style="color:#ff79c6">=</span> [<span style="color:#f1fa8c">"a"</span>, <span style="color:#f1fa8c">"b"</span>, <span style="color:#f1fa8c">"c"</span>, <span style="color:#f1fa8c">"d"</span>]
        <span style="color:#6272a4"># kemudian kita hapus b</span>
        a<span style="color:#ff79c6">.</span>remove(<span style="color:#f1fa8c">"b"</span>)

        <span style="color:#ff79c6">print</span> a
        </code></pre>
                </div>
                <p>Hasilnya:</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-txt" data-lang="txt">["a", "c", "d"]
        </code></pre>
                </div>
                <h2 id="memotong-list" class="h2">Memotong list</h2>
                <p>Seperti string, list juga dapat dipotong-potong.</p>
                <p></p>
                <figure class="mb-3"><img class="lazyload img-fluid" src="/img/placeholder.svg"
                        data-src="/img/python/list/potong-list.svg" alt="Potong List"></figure>
                <p></p>
                <p>Contoh:</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-python" data-lang="python"><span style="color:#6272a4"># Kita punya list warna</span>
        warna <span style="color:#ff79c6">=</span> [<span style="color:#f1fa8c">"merah"</span>, <span style="color:#f1fa8c">"hijau"</span>, <span style="color:#f1fa8c">"kuning"</span>, <span style="color:#f1fa8c">"biru"</span>, <span style="color:#f1fa8c">"pink"</span>, <span style="color:#f1fa8c">"ungu"</span>]

        <span style="color:#6272a4"># Kita potong dari indeks ke-1 sampai ke-5</span>
        <span style="color:#ff79c6">print</span> warna[<span style="color:#bd93f9">1</span>:<span style="color:#bd93f9">5</span>]
        </code></pre>
                </div>
                <p>Hasilnya:</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-python" data-lang="python">[<span style="color:#f1fa8c">'hijau'</span>, <span style="color:#f1fa8c">'kuning'</span>, <span style="color:#f1fa8c">'biru'</span>, <span style="color:#f1fa8c">'pink'</span>]
        </code></pre>
                </div>
                <h2 id="operasi-list" class="h2">Operasi List</h2>
                <p>Ada beberapa operasi yang bisa dilakukan terhadap List,
                    diantaranya:</p>
                <ul>
                    <li>Penggabungan (<code>+</code>)</li>
                    <li>Perkalian (<code>*</code>)</li>
                </ul>
                <p>Contoh:</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-python" data-lang="python"><span style="color:#6272a4"># Beberapa list lagu</span>
        list_lagu <span style="color:#ff79c6">=</span> [
            <span style="color:#f1fa8c">"No Women, No Cry"</span>,
            <span style="color:#f1fa8c">"Dear God"</span>
        ]

        <span style="color:#6272a4"># playlist lagu favorit</span>
        playlist_favorit <span style="color:#ff79c6">=</span> [
            <span style="color:#f1fa8c">"Break Out"</span>,
            <span style="color:#f1fa8c">"Now Loading!!!"</span>
        ]

        <span style="color:#6272a4"># Mari kita gabungkan keduanya</span>
        semua_lagu <span style="color:#ff79c6">=</span> list_lagu <span style="color:#ff79c6">+</span> playlist_favorit

        <span style="color:#ff79c6">print</span> semua_lagu
        </code></pre>
                </div>
                <p>Hasilnya:</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-python" data-lang="python">[<span style="color:#f1fa8c">'No Women, No Cry'</span>, <span style="color:#f1fa8c">'Dear God'</span>, <span style="color:#f1fa8c">'Break Out'</span>, <span style="color:#f1fa8c">'Now Loading!!!'</span>]
        </code></pre>
                </div>
                <p>Sedangkan untuk operasi perkalian hanya dapat dilakukan
                    dengan bilangan.</p>
                <p>Contoh:</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-python" data-lang="python"><span style="color:#6272a4"># playlist lagu favorit</span>
        playlist_favorit <span style="color:#ff79c6">=</span> [
            <span style="color:#f1fa8c">"Break Out"</span>,
            <span style="color:#f1fa8c">"Now Loading!!!"</span>
        ]

        <span style="color:#6272a4"># ulangi sebanyak 5x</span>
        ulangi <span style="color:#ff79c6">=</span> <span style="color:#bd93f9">5</span>

        now_playing <span style="color:#ff79c6">=</span> playlist_favorit <span style="color:#ff79c6">*</span> ulangi

        <span style="color:#ff79c6">print</span> now_playing
        </code></pre>
                </div>
                <p>Hasilnya:</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-python" data-lang="python">[<span style="color:#f1fa8c">'Break Out'</span>, <span style="color:#f1fa8c">'Now Loading!!!'</span>, <span style="color:#f1fa8c">'Break Out'</span>, <span style="color:#f1fa8c">'Now Loading!!!'</span>, <span style="color:#f1fa8c">'Break Out'</span>, <span style="color:#f1fa8c">'Now Loading!!!'</span>, <span style="color:#f1fa8c">'Break Out'</span>, <span style="color:#f1fa8c">'Now Loading!!!'</span>, <span style="color:#f1fa8c">'Break Out'</span>, <span style="color:#f1fa8c">'Now Loading!!!'</span>]
        </code></pre>
                </div>
                <h2 id="list-multi-dimensi" class="h2">List Multi Dimensi</h2>
                <p>Pada contoh-contoh di atas, kita hanya membuat list satu dimensi saja.</p>
                <p>List dapat juga memiliki lebih dari satu dimensi atau disebut dengan multi dimensi.</p>
                <p>List multi dimensi biasanya digunakan untuk menyimpan struktur data yang
                    kompleks seperti tabel, matriks, graph, tree, dsb.</p>
                <p></p>
                <figure class="mb-3"><img class="lazyload img-fluid" src="/img/placeholder.svg"
                        data-src="/img/python/list/list-multidimensi.svg" alt="List Multidimensi"></figure>
                <p></p>
                <p>Contoh:</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-python" data-lang="python"><span style="color:#6272a4"># List minuman dengan 2 dimensi</span>
        list_minuman <span style="color:#ff79c6">=</span> [
            [<span style="color:#f1fa8c">"Kopi"</span>, <span style="color:#f1fa8c">"Susu"</span>, <span style="color:#f1fa8c">"Teh"</span>],
            [<span style="color:#f1fa8c">"Jus Apel"</span>, <span style="color:#f1fa8c">"Jus Melon"</span>, <span style="color:#f1fa8c">"Jus Jeruk"</span>],
            [<span style="color:#f1fa8c">"Es Kopi"</span>, <span style="color:#f1fa8c">"Es Campur"</span>, <span style="color:#f1fa8c">"Es Teler"</span>]
        ]

        <span style="color:#6272a4"># Cara mengakses list multidimensi</span>
        <span style="color:#6272a4"># misalkan kita ingin mengambil "es kopi"</span>
        <span style="color:#ff79c6">print</span> list_minuman[<span style="color:#bd93f9">2</span>][<span style="color:#bd93f9">0</span>]

        </code></pre>
                </div>
                <p>Anka dua <code>2</code> pada kode di atas, menujukan indeks list yang akan kita
                    akses. Kemudian setelah dapat list-nya baru kita ambil isinya.</p>
                <p>Hasil outputnya:</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-bash" data-lang="bash"><span style="color:#f1fa8c">"Es Kopi"</span>
        </code></pre>
                </div>
                <p>Bagaimana kalau kita ingin menampilkan semua isi dalam list multi dimensi?</p>
                <p>Gampang…</p>
                <p>Tinggal gunakan perulangan bersarang.</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-python" data-lang="python"><span style="color:#6272a4"># List minuman dengan 2 dimensi</span>
        list_minuman <span style="color:#ff79c6">=</span> [
            [<span style="color:#f1fa8c">"Kopi"</span>, <span style="color:#f1fa8c">"Susu"</span>, <span style="color:#f1fa8c">"Teh"</span>],
            [<span style="color:#f1fa8c">"Jus Apel"</span>, <span style="color:#f1fa8c">"Jus Melon"</span>, <span style="color:#f1fa8c">"Jus Jeruk"</span>],
            [<span style="color:#f1fa8c">"Es Kopi"</span>, <span style="color:#f1fa8c">"Es Campur"</span>, <span style="color:#f1fa8c">"Es Teler"</span>]
        ]

        <span style="color:#ff79c6">for</span> menu <span style="color:#ff79c6">in</span> list_minuman:
            <span style="color:#ff79c6">for</span> minuman <span style="color:#ff79c6">in</span> menu:
                <span style="color:#ff79c6">print</span> minuman
        </code></pre>
                </div>
                <p>Hasilnya:</p>
                <div class="highlight">
                    <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-txt" data-lang="txt">Kopi
        Susu
        Teh
        Jus Apel
        Jus Melon
        Jus Jeruk
        Es Kopi
        Es Campur
        Es Teler
        </code></pre>
                </div>
            </div>
        </div>
    @endsection
</body>

</html>
