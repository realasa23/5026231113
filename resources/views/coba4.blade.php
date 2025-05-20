<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helperlog Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #1f3b64;
            color: white;
            position: fixed;
            transition: all 0.3s;
            padding: 20px;
            left: 0;
        }

        #menu-toggle {
            display: none;
        }

        .menu-label {
            position: absolute;
            top: 15px;
            left: 250px;
            background: #1f3b64;
            color: white;
            padding: 8px 12px;
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.3s;
        }

        .menu-label i {
            font-size: 18px;
        }

        #menu-toggle:checked~.sidebar {
            left: -250px;
        }

        #menu-toggle:checked~.menu-label {
            left: 10px;
        }

        #menu-toggle:checked~.dashboard-content {
            margin-left: 0;
        }


        .sidebar a,
        .sidebar button {
            text-decoration: none;
            color: white;
            display: flex;
            align-items: center;
            padding: 12px;
            border-radius: 8px;
            transition: background 0.3s;
        }

        .sidebar a:hover,
        .sidebar button:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .sidebar i {
            margin-right: 10px;
        }

        .logout {
            margin-top: auto;
        }

        .dashboard-content {
            margin-left: 270px;
            padding: 20px;
            transition: margin-left 0.3s;
        }

        .card {
            border-radius: 10px;
            padding: 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .profile {
            display: flex;
            align-items: center;
        }

        .profile img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .user-profile h5 {
            font-size: 18px;
            font-weight: bold;
            margin: 5px 0;
        }

        .user-profile p {
            font-size: 14px;
            color: #d1d1d1;
            margin-bottom: 0;
        }

        .star img {
            width: 10px;
            height: 10px;
            margin-right: 10px;
        }

        img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body>
    <input type="checkbox" id="menu-toggle">


    <label for="menu-toggle" class="menu-label">
        <i class="fa-solid fa-bars"></i>
    </label>


    <div class="sidebar">
        <div class="profile">
            <img src="Frame 40792-6.png" alt="User" class="rounded-circle">
            <div class="ml-3">
                <h5>User</h5>
                <p class="text-light">user@mail.com</p>
            </div>
        </div>
        <a href="#" class="list-group-item list-group-item-action text-white bg-primary">
            <i class="fa-solid fa-house"></i> Helperlog
        </a>
        <a href="#" class="list-group-item list-group-item-action text-white bg-primary">
            <i class="fa-solid fa-search"></i> Helperfind
        </a>
        <a href="#" class="list-group-item list-group-item-action text-white bg-primary">
            <i class="fa-solid fa-hands-helping"></i> Helperassist
        </a>
        <button class="btn btn-light mt-3 logou t">
            <i class="fa-solid fa-sign-out-alt"></i> Log Out
        </button>
    </div>


    <main class="dashboard-content">
        <h2>Helperlog Dashboard</h2>

        <div class="card mt-3">
            <div class="profile">
                <img src="image-1.png" alt="profile">
                <div>
                    <h5>Intan Permata</h5>
                    <p class="text-muted">Baby Sitter - Masa Kontrak: 12 bulan</p>
                </div>
            </div>
            <div>
                <img src="star-clipart-lg.png" width="10px">
                <img src="star-clipart-lg.png" width="10px">
                <img src="star-clipart-lg.png" width="10px">
                <img src="star-clipart-lg.png" width="10px">
                <img src="star-clipart-lg.png" width="10px">
                <small class="text-muted">Beri Penilaian untuk Intan</small>
            </div>
        </div>

        <div class="card mt-3">
            <div class="profile">
                <img src="Frame 40792-5.png" alt="profile">
                <div>
                    <h5>Budi Dorami</h5>
                    <p class="text-muted">Satpam - Masa Kontrak: 6 bulan</p>
                </div>
            </div>
            <div>
                <strong>4.3</strong>
                <img src="Bintang.png" width="10px">
                <img src="Bintang.png" width="10px">
                <img src="Bintang.png" width="10px">
                <img src="Bintang.png" width="10px">
                <img src="star-clipart-lg.png" width="10px">
                <small class="text-muted">Sudah diberi Penilaian</small>
            </div>
        </div>
    </main>
</body>

</html>