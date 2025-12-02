<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Research</title>

    <style>
        /* GLOBAL */
        html, body {
            height: 100%;
            margin: 0;
        }

        body {
            font-family: "Trebuchet";
            background-image: url(wi.jpg);


        }

        .wrapper-page {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
            padding: 40px 80px;
        }

        /* TITLE */
        .page-title {
            text-align: center;
            font-size: 36px;
            font-weight: 600;
            margin-top: 20px;
            margin-bottom: 40px;
            color: #222;
        }

        .section-title {
            font-size: 20px;
            margin-bottom: 20px;
            font-weight: 600;
            color: #333;
        }

        /* PDF VIEWER */
        .pdf-viewer {
            width: 100%;
            height: 500px;
            border: none;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }

        /* FOOTER */
        footer {
            text-align: center;
            padding: 15px;
            background: #004aad;
            color: white;
            margin-top: auto;
        }
    </style>
</head>
<body>

<div class="wrapper-page">

    <!-- HEADER -->
<?php include 'header.php'; ?>

    <!-- MAIN CONTENT -->
    <main>
        <h1 class="page-title">PROBLEM IDENTIFICATION</h1>
        <p>Sistem absensi manual yang digunakan di Asrama Wisma Lydia membawa beberapa masalah kritis, terutama terkait akurasi data, efisiensi waktu, dan kesulitan pemantauan secara real-time. Dengan sistem seperti ini, akan sangat sulit untuk mengelola dan mengawasi kehadiran penghuni dengan efektif dan efisien.</p>
        <p>Identifikasi Masalah:
        <ol>
            <li>Masalah Akurasi Data:</li>
                <ul>
                    <li>Tipe masalah: Ketidakakuratan data absensi</li>
                    <li>Penyebab: Penggunaan sistem absensi manual yang memungkinkan kecurangan, seperti titip absen. Hal ini mengurangi validitas data yang dicatat</li>
                    <li>Dampak: Pemilik asrama tidak bisa yakin dengan kehadiran sebenarnya dari penghuni, yang bisa berdampak pada proses pengambilan keputusan, seperti pengelolaan fasilitas atau aturan disiplin</li>
                </ul>
            <li>Masalah Efisiensi Waktu:</li>
                <ul>
                    <li>Tipe masalah: Proses rekapitulasi data yang lambat dan memakan waktu</li>
                    <li>Penyebab: Absensi manual memerlukan pemeriksaan fisik dan penghitungan manual yang memakan waktu, serta risiko terjadinya kesalahan input </li>
                    <li>Dampak: Proses rekap absensi menjadi tidak efisien, dan mengganggu fokus pada tugas-tugas penting lainnya </li>
                </ul>
            <li>Masalah Pemantauan Real-Time:</li>
                <ul>
                    <li>Tipe masalah: Tidak adanya pemantauan kehadiran secara real-time</li>
                    <li>Penyebab: Sistem manual tidak memungkinkan pemantauan langsung  </li>
                    <li>Dampak: Pemilik asrama tidak bisa cepat mendeteksi ketidakhadiran atau masalah lainnya, yang mempersulit pengelolaan dan pengawasan asrama secara efektif </li>
                </ul>
           





        <h2 class="section-title">
            
        </h2>

        <!-- PDF VIEWER -->
        <embed 
            src="pdf/ProblemIdentification.pdf"
            type="application/pdf"
            class="pdf-viewer">
    </main>


</div>

</body>
</html>
