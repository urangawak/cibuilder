<p># cibuilder<br />
  Codeigniter 3 Builder Project without HMVC</p>
<p>Berguna untuk mahasiswa yang akan mengerjakan project akhir.</p>
<p>Fitur :<br />
  1. User Managemen (Login, Tambah User,dll)<br />
  2. Captcha saat login<br />
  3. Konten berita dan halaman (CMS)<br />
  4. Asset management (Datatables, jquery,jquery UI,Font Awesome,select2)<br />
  5. Database Library<br />
  6. File Library</p>
<p>Cara Installasi :<br />
  1. Buat database dan import file sql (database folder. Cari yang terbaru)<br />
  2. Copy Paste kode ini pada sebuah folder yang telah disediakan<br />
  3. Konfigurasi pada application/config.php dan application/database.php<br />
  4. Pada controller, tingkatan folder pertama adalah akses. Misal folder admin jd akses admin. folder member jadi akses member. Sesuaikan pada table userlogin (enum akses)</p>
<p>Cara menggunakan :<br />
  1. Tambah data<br />
  <br />
  $d=array(<br />
  'nama'=&gt;$this-&gt;input-&gt;post('nama'),<br />
  'alamat'=&gt;$this-&gt;input-&gt;post('alamat'),<br />
  );<br />
  $this-&gt;m_db-&gt;add_row('tabel',$d);<br />
  </p>
<p>2. Edit Data<br />
  <br />
  $s=array(<br />
  'pegawai_id'=&gt;$this-&gt;input-&gt;post('pegawaiid'),<br />
  );<br />
  $d=array(<br />
  'nama'=&gt;$this-&gt;input-&gt;post('nama'),<br />
  'alamat'=&gt;$this-&gt;input-&gt;post('alamat'),<br />
  );<br />
  $this-&gt;m_db-&gt;edit_row('tabel',$d,$s);<br />
  </p>
<p>3. Hapus Data<br />
  <br />
  $s=array(<br />
  'pegawai_id'=&gt;$this-&gt;input-&gt;post('pegawaiid'),<br />
  );</p>
<p>$this-&gt;m_db-&gt;delete_row('tabel',$s);<br />
  </p>
<p>4. Menggunakan asset<br />
  Tidak perlu lagi mengincludekan javascript dan css yang banyak. Misalnya ingin menambahkan plugins datatables, cukup memanggil<br />
  <br />
  &lt;?php<br />
  echo asset_datatables();<br />
  ?&gt;<br />
  <br />
  (*) Cek asset yang support pada application/helpers/asset_helper.php</p>
<p>Kontak dan informasi<br />
  eyubalzary@gmail.com / http://www.ilmuprogrammer.com</p>
