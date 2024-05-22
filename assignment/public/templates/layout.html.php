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
            <li>MOBILE
                <ul>
                    <li>
                        <?php

                        $pdo = new PDO('mysql:host=mysql;dbname=GroupWork;charset=utf8', 'student', 'student');

                        $stmt = $pdo->prepare('SELECT * FROM mobiles');

                        $stmt->execute()    

                      
                        ?>
                    </li>
                </ul>
            </li>
            <li>TV & AV
                <ul>
                    <li>
                        <?php

                        $pdo = new PDO('mysql:host=mysql;dbname=GroupWork;charset=utf8', 'student', 'student');

                        $stmt = $pdo->prepare('SELECT * FROM tvs');

                        $stmt->execute();

                        foreach ($stmt as $row) {
                          echo '<li><a href="categories.php?tablename=' . $row['tvs_id'] . '">' . $row['categories'] . '</a></li>';
                        }
                        ?>
                    </li>
                </ul>
            </li>
            <li>CONSOLES
                <ul>
                    <li>
                        <?php

                        $pdo = new PDO('mysql:host=mysql;dbname=GroupWork;charset=utf8', 'student', 'student');

                        $stmt = $pdo->prepare('SELECT * FROM consoles');

                        $stmt->execute();

                        foreach ($stmt as $row) {
                          echo '<li><a href="categories.php?tablename=' . $row['id'] . '">' . $row['categories'] . '</a></li>';
                        }
                        ?>
                    </li>
                </ul>
            </li>
            <li>COMPUTER
                <ul>
                    <li>PCS</li>
                    <li>LAPTOPS</li>
                    <li>HARDWARES</li>
                </ul>
            </li>
        </ul>

        <address>

            <ul>
                <li><a href="contact.php">Support</a></li>
                <li><a href="shop.php"><i class="fa-solid fa-magnifying-glass"></i></a></li>
                <li><i class="fa-solid fa-cart-shopping" id="cart_icon"></i></li>
                <li><i class="fa-solid fa-user">
                        <ul>
                            <li><a href="cLogin.php">LOG IN</a></li>
                            <li><a href="cSignUp.php">REGISTER</a></li>
                            <li><a href="cLogout.php">SIGN OUT</a></li>
                            <li><a href="admin.php">ADMIN</a></li>
                        </ul>
                    </i></li>
            </ul>
        </address>
        <div class="cart">
            <h2 class="cart_title">Your Cart</h2>
            <div class="cart_content">
                <div class="total">
                    <div class="total_title">Total</div>
                    <div class="total_price">£0</div>
                </div>
                <button type="button" class="btn_buy">Buy Now</button>
                <i class="fa-solid fa-x" id="close_cart"></i>
            </div>
        </div>
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