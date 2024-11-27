<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <a href="home.php">Home</a>
                <a href="about.php">About US</a>
                <a href="products.php">Products</a>
                <a href="services.php">Services</a>
                <a href="contact.php">Contact us</a>
            </ul>
        </nav>
    </header>
    <center><h1>Products</h1></center>
    <br>
    <br>
    <hr>
    <div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="gallery">
            <div><img src="./images/MacBook.jpeg" alt="Image 1">
                <p>Hi In this example, we're using CSS Grid to create a responsive grid layout for the gallery. The
                    grid-template-columns
                    property sets up the number of columns in the grid, and the repeat(auto-fill, minmax(200px, 1fr)) ensures
                    that the
                    columns adjust based on the available space while maintaining a minimum width of 200px. The gap property
                    adds spacing
                    between images.</p>
            </div>
            <img src="./images/IphoneXsMax.jpg" alt="Image 2">
            <img src="./images/LastIphone.png" alt="Image3">
            <img src="./images/IphoneXsMax.jpg" alt="image4">
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
    <footer>
        <div class="down">
            <div>
                <h3>quick links</h3>
                <div id="dernier">
                    <ul>
                        <li><a href="home.php">home</a></li>
                        <li><a href="about.php">about us </a></li>
                        <li><a href="contact.php">contact</a></li>
                        <li><a href="products.php">products</a></li>
                        <li><a href="services.php">services</a></li>
                    </ul>
                </div>
    
            </div>
    
            <div class="media">
                <h3>contacts</h3>
                <h4>Phone: +250 777 777 777</h4>
                <h4>Email: ayitekevin@auca.ac.rw</h4>
                <br>
                <br>
                <p>&copy; 2023 Kevin AYITE. All rights reserved.</p>
            </div>
    
        </div>
    
    </footer>
</body>

</html>