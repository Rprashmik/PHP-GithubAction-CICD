<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel CI/CD Application</title>

    <style>
        body {
            margin:0;
            padding:0;
            background:linear-gradient(135deg, #eef2f7, #dfe4ea);
            font-family:"Poppins", sans-serif;
        }
        .header {
            background:linear-gradient(90deg, #3559e0, #1b2cc1);
            padding:28px;
            text-align:center;
            color:white;
            font-size:34px;
            font-weight:600;
        }
        .container {
            max-width:1100px;
            margin:60px auto;
            text-align:center;
        }
        .badge {
            background:#1b2cc1;
            color:white;
            padding:8px 18px;
            border-radius:25px;
            font-size:14px;
            display:inline-block;
            margin-bottom:18px;
        }
        h2 { font-size:32px; margin-bottom:10px; }
        p.subtitle { color:#4a4d52; font-size:16px; margin-bottom:40px; }
        .grid {
            display:grid;
            grid-template-columns:repeat(3, 1fr);
            gap:20px;
            padding:0 30px;
        }
        .card {
            background:white;
            padding:25px;
            border-radius:16px;
            box-shadow:0 10px 25px rgba(0,0,0,0.12);
            transition:0.35s;
        }
        .card:hover {
            transform:scale(1.05);
            box-shadow:0 18px 30px rgba(0,0,0,0.18);
        }
        .footer-btn {
            display:block;
            width:240px;
            margin:45px auto 0;
            background:#3559e0;
            padding:14px;
            border-radius:12px;
            color:white;
            font-weight:600;
            text-decoration:none;
        }
    </style>
</head>
<body>

    <div class="header">🚀 My CI/CD Powered Laravel Application</div>

    <div class="container">

        <span class="badge">🔥 Laravel • CI/CD • Docker • Deployment Ready</span>

        <h2>Welcome to the Application 🎉</h2>
        <p class="subtitle">
            This Laravel app is deployed automatically via CI/CD pipeline (GitHub Actions & Docker).
        </p>

        <div class="grid">
            <div class="card">
                <h3>🔁 CI/CD Pipeline</h3>
                <p>Auto Build → Test → Deploy</p>
            </div>
            <div class="card">
                <h3>📦 Docker/Artifacts</h3>
                <p>Image built & pushed automatically</p>
            </div>
            <div class="card">
                <h3>🌍 Live Deployment</h3>
                <p>Push → Pipeline → Live Update</p>
            </div>
        </div>

        <a href="/about" class="footer-btn">Open Application</a>
    </div>

</body>
</html>
