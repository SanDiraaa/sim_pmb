<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi Mahasiswa Baru | Universitas Cakra</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

  <?php include '../include/header.php'; ?>

  <section class="form-section">
    <h2>Formulir Pendaftaran Mahasiswa Baru</h2>
    <p>Silakan isi data berikut dengan lengkap dan benar.</p>

    <form action="proses_register.php" method="POST" enctype="multipart/form-data">

      <!-- ====================== Informasi Pribadi ====================== -->
      <h3>Informasi Pribadi</h3>
      <div class="form-group">
        <label>Nama Lengkap</label>
        <input type="text" name="nama_lengkap" required>
      </div>

      <div class="form-row">
        <div class="form-group">
          <label>Tempat Lahir</label>
          <input type="text" name="tempat_lahir" required>
        </div>
        <div class="form-group">
          <label>Tanggal Lahir</label>
          <input type="date" name="tanggal_lahir" required>
        </div>
      </div>

      <div class="form-group">
        <label>Alamat Lengkap</label>
        <textarea name="alamat" rows="3" required></textarea>
      </div>

      <div class="form-row">
        <div class="form-group">
          <label>Nomor Telepon</label>
          <input type="tel" name="no_telepon" required>
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" name="email" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group">
          <label>Jenis Kelamin</label>
          <select name="jenis_kelamin" required>
            <option value="">-- Pilih Jenis Kelamin --</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>
        <div class="form-group">
          <label>Kewarganegaraan</label>
          <input type="text" name="kewarganegaraan" required>
        </div>
      </div>

      <!-- ====================== Informasi Akademik ====================== -->
      <h3>Informasi Akademik</h3>
      <div class="form-group">
        <label>Nama Sekolah Asal</label>
        <input type="text" name="sekolah_asal" required>
      </div>

      <div class="form-row">
        <div class="form-group">
          <label>Jurusan Sekolah Asal</label>
          <input type="text" name="jurusan_asal" required>
        </div>
        <div class="form-group">
          <label>Nilai Rata-rata Rapor</label>
          <input type="number" step="0.01" name="nilai_rata" required>
        </div>
      </div>

      <div class="form-group">
        <label>Tahun Lulus</label>
        <input type="number" name="tahun_lulus" required>
      </div>

      <!-- ====================== Dokumen ====================== -->
      <h3>Unggah Dokumen</h3>
      <div class="form-row">
        <div class="form-group">
          <label>Ijazah (PDF/JPG)</label>
          <input type="file" name="ijazah" accept=".pdf,.jpg,.jpeg,.png" required>
        </div>
        <div class="form-group">
          <label>Pas Foto</label>
          <input type="file" name="foto" accept=".jpg,.jpeg,.png" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group">
          <label>Transkrip Nilai</label>
          <input type="file" name="transkrip" accept=".pdf,.jpg,.jpeg,.png" required>
        </div>
        <div class="form-group">
          <label>Kartu Keluarga (KK)</label>
          <input type="file" name="kk" accept=".pdf,.jpg,.jpeg,.png" required>
        </div>
      </div>

      <div class="form-group">
        <label>KTP</label>
        <input type="file" name="ktp" accept=".pdf,.jpg,.jpeg,.png" required>
      </div>

      <!-- ====================== Jalur Pendaftaran ====================== -->
      <h3>Jalur Pendaftaran</h3>
      <div class="form-row">
        <div class="form-group">
          <label>Pilihan Program Studi 1</label>
          <select name="program_studi" required>
            <option value="">-- Pilih Program Studi --</option>
            <option value="Informatika">Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Teknik Elektro">Teknik Elektro</option>
            <option value="Manajemen">Manajemen</option>
          </select>
        </div>
        <div class="form-group">
          <label>Pilihan Program Studi 2</label>
          <select name="program_studi" required>
            <option value="">-- Pilih Program Studi --</option>
            <option value="Informatika">Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Teknik Elektro">Teknik Elektro</option>
            <option value="Manajemen">Manajemen</option>
          </select>
        </div>
        <div class="form-group">
          <label>Jalur Pendaftaran</label>
          <select name="jalur_pendaftaran" required>
            <option value="">-- Pilih Jalur --</option>
            <option value="Reguler">Reguler</option>
            <option value="Beasiswa">Beasiswa</option>
            <option value="Prestasi">Prestasi</option>
          </select>
        </div>
      </div>

      <div class="form-submit">
        <button type="submit">Kirim Pendaftaran</button>
      </div>
    </form>
  </section>

  <?php include '../include/footer.php'; ?>

</body>
</html>
