<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Profile Mahasiswa</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    *{box-sizing:border-box;margin:0;padding:0}
    body{
      min-height:100vh;
      background: linear-gradient(135deg,#4facfe 0%,#00f2fe 100%);
      font-family: "Poppins",sans-serif;
      display:flex;
      align-items:center;
      justify-content:center;
    }
    .profile-card{
      background:#fff;
      width:380px;
      border-radius:20px;
      box-shadow:0 10px 30px rgba(0,0,0,0.2);
      padding:40px 30px;
      text-align:center;
      position:relative;
      overflow:hidden;
    }
    .profile-card::before{
      content:"";
      position:absolute;
      top:-70px;left:-70px;
      width:200px;height:200px;
      background:rgba(79,172,254,0.2);
      border-radius:50%;
      z-index:0;
    }
    .avatar{
      width:130px;
      height:130px;
      border-radius:50%;
      border:5px solid #4facfe;
      margin:0 auto 20px;
      z-index:1;
      position:relative;
      overflow:hidden;
    }
    .avatar img{
      width:100%;
      height:100%;
      object-fit:cover;
      border-radius:50%;
      display:block;
    }
    .info-box{
      margin-top:20px;
      display:flex;
      flex-direction:column;
      gap:15px;
      position:relative;
      z-index:1;
    }
    .info{
      background:linear-gradient(135deg,#4facfe,#00f2fe);
      color:#fff;
      padding:12px;
      border-radius:10px;
      font-size:16px;
      font-weight:600;
      letter-spacing:0.5px;
      box-shadow:0 5px 15px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>
  <div class="profile-card">
    <div class="avatar">
      <img src="{{ asset('images/profile.jpg') }}" alt="Foto profil">
    </div>

    <div class="info-box">
      <div class="info">{{ $nama }}</div>
      <div class="info">{{ $kelas }}</div>
      <div class="info">{{ $npm }}</div>
    </div>
  </div>
</body>
</html>
