<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OH!SOME Global</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #FEC42D;
      font-family: sans-serif;
      padding: 20px;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }
    
    /* Main Container */
    .main-container {
      width: 100%;
      max-width: 630px;
      min-width: 576px
      background-color  #FEC42D;
      border-radius: 20px;
      padding: 25px; 
      position: relative;
    }
    
    /* Profile Photo */
    .profile-photo {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      background-color: #ddd;
      margin: 0 auto 20px;
      overflow: hidden;
      border: 3px solid white;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    
    .profile-photo img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    
    .subtitle {
      color: white;
      font-size: 20px;
      margin-bottom: 25px;
      text-align: center;
    }
    .ssubtitle {
    font-size: 18px;
    }
    .subtitle2 {
      color: white;
      font-size: 18px;
      margin-bottom: 18px;
      text-align: center;
    }

    .btnltr{
      display: flex;
    position: relative;
      margin-bottom: 20px;
      width: 100%;
      justify-content: center;
    }

    .btnltr-main {
      display: flex;
      position: relative;
      height: 45px;
      width: 70%;
      background-color: #fff1ca;
      box-shadow: 3px 3px 5px #0000003d;
      border-radius: 20px;
      padding: 1rem;
      font-weight: bold;
      font-size: 1rem;
      z-index: 2;
      transition: transform 0.2s ease;
      border: none;
      align-items: center;
      justify-content: center;
    }
    .btnltr:hover .btnltr-main {
      background-color: white;
      transition: color 0.3s ease;
    }
    /* Button with Shadow Effect */
    .btn-outer {
      position: relative;
      margin-bottom: 20px;
      width: 100%;
    }
    
    .btn-shadow {
      position: absolute;
      width: 100%;
      height: 100%;
      background-color: #e46c04;
      border-radius: 8px;
      bottom: -6px;
      right: -6px;
      z-index: 1;
    }
    
    .btn-main {
      position: relative;
      height: 65px;
      width: 100%;
      background-color: white;
      color: #ff9239;
      border: 2px solid #e46c04;
      border-radius: 8px;
      padding: 1rem;
      font-weight: bold;
      font-size: 1rem;
      text-align: center;
      padding-right: 2.5rem;
      z-index: 2;
      transition: transform 0.2s ease;
    }
    
    .btn-outer:hover .btn-main {
      transform: translate(3px, 3px);
    }
    
    /* Dot Menu Style - Updated to match button text color */
    .dot-menu {
      position: absolute;
      top: 50%;
      right: 15px;
      transform: translateY(-50%);
      font-size: 1.2rem;
      color: #ff9239; 
      cursor: pointer;
      font-weight: bold; 
    }
    

    .header-menu {
      position: absolute;
      top: 20px;
      right: 20px;
      width: 30px;
      height: 30px;
      background-color: #c69c29;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      cursor: pointer;
    }
    
    .header-menu::after {
      content: "⋮";
      color: white;
      font-size: 1.2rem;
      line-height: 1;
    }
    
    /* Footer Styles */
    .footer {
      text-align: center;
      margin-top: 25px;
      font-size: 0.9rem;
    }
    
    .linktree {
      margin-top: 15px;
      font-size: 0.8rem;
      color: #666;
    }
    
    .linktree strong {
      color: #000;
    }
  </style>
</head>
<body>

<div class="main-container">
  <!-- Three Dots Menu in Header -->
  <div class="header-menu"></div>
 
  <div class="profile-photo">
    <img src="D:\FED5026231113_\OHSOME.jpeg">
  </div>
  
  <!-- Header Section -->
  <div class="subtitle"><b>OH!SOME Global</b><br><div class="ssubtitle">Your One-Stop Happy Lifestyle store</div></div>

  <!-- Buttons with Shadow Effect and Visible Three Dots -->
  <div class="subtitle2" ><b>OH!SOME offline stores</b></div>
  <div class="btn-outer">
    <button class="btn-main">OH!SOME opening hours</button>
    <div class="btn-shadow"></div>
  </div>
  
  <div class="btn-outer">
  <button class="btn-main">Here We Are!</button>
    <span class="dot-menu" onclick="togglePopup('buttonPopup2')">⋮</span>
    <div class="btn-shadow"></div>
  </div>
  
  <div class="btn-outer">
    <button class="btn-main">Let Us Know Your Concerns</button>
    <span class="dot-menu" onclick="togglePopup('buttonPopup3')">⋮</span>
    <div class="btn-shadow"></div>
  </div>

  <div class="subtitle2"> <b>OH! SOME OHANA</b></div>
  <div class="btn-outer">
    <button class="btn-main">OH!Some Indonesia </button>
    <span class="dot-menu" onclick="togglePopup('buttonPopup1')">⋮</span>
    <div class="btn-shadow"></div>
  </div>

  <div class="btn-outer">
    <button class="btn-main">OH!Some Malaysia </button>
    <span class="dot-menu" onclick="togglePopup('buttonPopup1')">⋮</span>
    <div class="btn-shadow"></div>
  </div>
  <div class="btn-outer">
    <button class="btn-main">OH!Some Cambodia </button>
    <span class="dot-menu" onclick="togglePopup('buttonPopup1')">⋮</span>
    <div class="btn-shadow"></div>
  </div>

  <div class="btn-outer">
    <button class="btn-main">OH!Some Vietnam </button>
    <span class="dot-menu" onclick="togglePopup('buttonPopup1')">⋮</span>
    <div class="btn-shadow"></div>
  </div>


  <div class="btn-outer">
    <button class="btn-main">OH!Some Singapore </button>
    <span class="dot-menu" onclick="togglePopup('buttonPopup1')">⋮</span>
    <div class="btn-shadow"></div>
  </div>

  <div class="btnltr">
    <button class="btnltr-main"> 
      <img src="D:\FED5026231113_\linktree_logo_icon_247832.png" width="15" style="margin-right: 8px;"">
      Bergabung dengan Ohsome.idn di Linktree
    </button>
    </div>

<script>
  function togglePopup(id) {
    // Hide all popups first
    document.querySelectorAll('.popup').forEach(popup => {
      popup.classList.remove('show');
    });
    
    // Show the clicked popup
    const popup = document.getElementById(id);
    if (popup) {
      popup.classList.toggle('show');
    }
    
    // Stop event propagation to prevent closing when clicking inside popup
    event.stopPropagation();
  }
  
  // Close popups when clicking anywhere else
  document.addEventListener('click', function() {
    document.querySelectorAll('.popup').forEach(popup => {
      popup.classList.remove('show');
    });
  });
</script>

</body>
</html>