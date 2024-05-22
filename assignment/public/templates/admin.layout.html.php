<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="layout.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=League Gothic:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Alef:wght@700&display=swap" />

    <!--https://cdnjs.com/libraries/font-awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <a href="index.php">
            <img class="logo" src="/images/Screenshot 2024-02-15 at 10.15.08.png" alt="Image 3">
        </a></div>


        <ul>
            <li><a href="addproducts.php">ADD PRODUCTS</a></li>
            <li><a href="addcategories.php">ADD CATEGORY</a></li>
            <li>ADMIN MENU
                <ul>
                    <li><a href="addadmin.php">Register New Admin</a></li>
                    <li><a href="questions.php">Unanswered Questions</a></li>
                    
                    
                </ul>
            </li>
            <li><a href="adminlogout.php">SIGN OUT</a></li>
        </ul>
    </header>
    <main>
        <?=$output?>
    </main>
    <footer>
        <ul>
            <li>Company
                <ul>
                    <li>About</li>
                    <li>Office</li>
                    <li>Joinus</li>
                </ul>
            </li>
            <li>Categories
                <ul>
                    <li>Mobile</li>
                    <li>Tv & Av</li>
                    <li>Consoles</li>
                    <li>Computer</li>
                </ul>
            </li>
            <li>Support
                <ul>
                    <li>Contact</li>
                    <li>FAQ</li>
                    <li>Chat</li>
                </ul>
            </li>
        </ul>
        <div class="icons">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-tiktok"></i>
        </div>
        <div class="all-rights-reserved">
            All Rights Reserved. NFJE Electronics Store, 2024.
        </div>
    </footer>
    <script src="main.js"></script>
</body>

</html>