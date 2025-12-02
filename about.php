<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>About Kelompok</title>
    <style>
        body {
            font-family: "Trebuchet";
            background-image: url(wi.jpg);
            margin: 0;
            padding: 20px;
        }

        .header {
            background: #2e86de;
            padding: 15px 30px;
            color: white;
            font-size: 24px;
            font-weight: bold;
            border-radius: 10px;
            margin-bottom: 30px;
        }

        .team-container {
            display: flex;
            flex-wrap: wrap;
            gap: 25px;
            justify-content: center;
        }

        .card {
            width: 280px;
            background: #ece9e9ff;
            border-radius: 14px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 6px 15px rgba(0,0,0,0.15);
        }
        /* FOTO KOTAK */
        .card img {
            width: 180px;
            height: 180px;
            object-fit: cover; /* foto tetap proporsional */
            border-radius: 1px; /* sedikit rounded, bisa 0 untuk benar² kotak */
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            
            border-radius: 1%;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }

        .name {
            font-size: 20px;
            margin-top: 15px;
            font-weight: bold;
            color: #111418ff;
        }

        .info {
            margin-top: 5px;
            font-size: 15px;
            color: #333;
        }
    </style>
</head>

<body>

     <!-- HEADER -->
<?php include 'header.php'; ?>
<br>
<br>
<br>
<br>



    <div class="team-container">

        <!-- Anggota 1 -->
        <div class="card">
            <img src="ina.jpg" alt="Foto">
            <div class="name">Marthina Manggo</div>
            <div class="info">NPM : 23 421 019</div>
            <div class="info">Sistem Informasi</div>
            <div class="info">USTJ</div>
        </div>

        <!-- Anggota 2 -->
        <div class="card">
            <img src="kka.jpg" alt="Foto">
            <div class="name">Laddy C. Pangkareuw</div>
            <div class="info">NPM : 21 421 008</div>
            <div class="info">Sistem Informasi</div>
            <div class="info">USTJ</div>
        </div>

        <!-- Anggota 3 -->
        <div class="card">
            <img src="gambar/novel.jpg" alt="Foto">
            <div class="name">Mingkungkon N Uropkulin</div>
            <div class="info">NPM : 23 421 033</div>
            <div class="info">Sistem Informasi</div>
            <div class="info">USTJ</div>
        </div>

    </div>

</body>
</html>
