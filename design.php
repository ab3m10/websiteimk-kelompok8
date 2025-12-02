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
        <div class="box">
        <h3>Link Prototype</h3>
        <p>
            Klik untuk membuka prototype Figma:<br>
            <ol>
                <li>
            <a href="https://www.figma.com/proto/q3eBx5seASckUxG3vJ2B6h/WISLY?node-id=0-1&t=FW5qm4BMVUsezTRv-1" target="_blank" rel="noopener noreferrer">
                Buka Prototype di Figma Pengelola
            </a><br>
            </li>
            <li>
            <a href="https://www.figma.com/proto/hrOHzLL5iNwDBE9A8lxXJv/WISLY_Pemilik?node-id=0-1&t=yo045HBgwejPoiCa-1" target="_blank" rel="noopener noreferrer">
                Buka Prototype di Figma Pemilik
            </a>
    </li>
            </ol>
        </p>
    </div>


        <h2 class="section-title">
            
        </h2>

        <!-- PDF VIEWER -->
        <embed 
            src="pdf/Design.pdf"
            type="application/pdf"
            class="pdf-viewer">
    </main>


</div>

</body>
</html>
