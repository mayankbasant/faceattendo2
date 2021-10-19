<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>app screen</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
</head>
<body>
<div class="full-page">
        <div class='navbar'>
            <div class='logo'>
                <a href='#'><h1>FACEATTENDO</h1></a>
            </div>
            <nav>
                <ul id='MenuItems'>
                    <li><a href='#'>Home</a></li>
                    <a href="logout.php"><button>logout</button></a>
                    
                </ul>
            </nav>
        </div>
        <div class="sub-page">
          <div class="overlay"></div>
           <div class="text">
               <p>FACE<br>ATTENDO</p>
            </div>
        </div>
        <div id='attendance-page' class="attendance-page">
            <div class="attendance-box">
                <span onclick="document.getElementById('attendance-sheet').style.display='none'" class="close">&times;</span>
                <div class="form">
                    <form class = textarea, action="validate.php", method="post">
                        <left><h1 class="main-heading">ATTENDANCE</h1></left>
				        
				    </form>
                </div>
            </div>
        </div>
        
    </div>

    
</body>
</html>