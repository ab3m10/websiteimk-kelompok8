<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project IMK - Home</title>

    <style>

        html, body {
            height: 100%;
        }
       
        body {
            margin: 0;
            font-family: Trebuchet ;
            background-image: url(wi.jpg);
            display: flex;
            flex-direction: column;
        }

        /* HEADER */
        header, nav, nav a {
            position: relative;
            z-index: 9999;
        }
        header {
            background: #004aad;
            color: white;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 3px 10px ;
    
        }

        header h1 {
            margin: 0;
            font-size: 22px;
            font-weight: 600;
        }

        nav a {
            color: white;
            margin-left: 25px;
            text-decoration: none;
            font-weight: 500;
           
            
        }

        nav a:hover {
            opacity: 0.8;
            background-color: #55b57aff;
        }

        /* HERO MAIN SECTION */

        .hero {
            margin: 30px;
            padding: 50px;
            text-align: center;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .hero h2 {
            color: #171818ff;
            margin-bottom: 5px;
            font-size: 26px;
            font-weight: bold;
        }

        .hero p {
            margin: 0;
            color: #171818ff;
            font-weight: bold;
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

    <!-- HEADER -->
    <header>
        <h1>Project IMK</h1>
        <nav>
            <a href="index1.php">Home</a>
            <a href="masalah.php">Problem Identification</a>
            <a href="userresearch.php">User Research</a>
            <a href="ursd.php">User Requirement Specification Dokument</a>
            <a href="design.php">Design</a>
            <a href="evaluation.php">Evaluation</a>
            <a href="about.php">About</a>
        </nav>
    </header>

    <!-- HERO  -->
    <section class="hero">
        <h2>WELCOME TO GROUP 8 IMK<br>FINAL ASSIGMENT</h2>
        <br>
        <p>WISLY adalah aplikasi berbasis website yang dirancang untuk mempermudah proses absensi pada Asrama Wisma Lydia<br>
        dan sistem ini juga dibuat untuk memenuhi tugas akhir matakuliah interakhi manusia dan komputer</p>
    </section>



    <!-- FOOTER -->
    <footer>
        © 2025 - Kelompok 8 IMK | Sistem Informasi
    </footer>

</body>
</html>

