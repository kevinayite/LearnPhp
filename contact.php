<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
        <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #FFC300;
        }

       
        h2 {
            text-align: center;
            margin-top: 20px;
        }

        form {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            width: 80%;
            max-width: 500px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        textarea {
            resize: vertical;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
    <script>
        function validateForm() {
            var firstName = document.getElementById("first_Name").value;
            var lastName = document.getElementById("last_Name").value;
            var email = document.getElementById("email").value;
            var nationalID = document.getElementById("nationalID").value;
            var phoneNumber = document.getElementById("phone_number").value;

            var nameRegex = /^[A-Za-z]+$/;
            var emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            var nationalIDRegex = /^\d{16}$/;
            var phoneNumberRegex = /^\d{10}$/;

            if (!nameRegex.test(firstName)) {
                alert("First Name should contain letters only.");
                return false;
            }

            if (!nameRegex.test(lastName)) {
                alert("Last Name should contain letters only.");
                return false;
            }

            if (!emailRegex.test(email)) {
                alert("Please enter a valid email address.");
                return false;
            }

            if (!nationalIDRegex.test(nationalID)) {
                alert("National ID should be exactly 16 digits.");
                return false;
            }

            if (!phoneNumberRegex.test(phoneNumber)) {
                alert("Phone Number should be exactly 10 digits.");
                return false;
            }

            return true;
        }
    </script>
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
    <center><h1>Contact US</h1></center>
    <br>
    <br>
    <hr>
    <br><br>
    <br><br>
    <div>
        <form action="register.php" id="myForm" method="post" onsubmit="return validateForm();">
        <fieldset>
            <legend><b>Form</b></legend>
            <br>
            <br>
            <label for="first_Name">First Name:</label>
            <input type="text" id="first_Name" name="first_Name" placeholder="First Name" required><br><br>

            <label for="last_Name">Last Name:</label>
            <input type="text" id="last_Name" name="last_Name" placeholder="Last Name" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="example@gmail.com"required><br><br>

            <label for="nationalID">National ID:</label>
            <input type="text" id="nationalID" name="nationalID" placeholder="National ID" required><br><br>

            <label for="phone_number">Phone Number:</label>
            <input type="text" id="phone_number" name="phone_number" placeholder="Your phone number" required><br><br>
            <br>

            <label for="send_message">Your Message:</label>
            <textarea name="send_message" id="send_message" cols="30" rows="10" placeholder="Type your message here" required></textarea>

            <br>
            <br>

            <input type="submit" value="Submit">
            <br>
            <br>
        </fieldset>
    </form>
    <br><br>
    <br><br>
    </div>
    <footer>
        <div class="down">
            <div>
                <h3>quick links</h3>
                <div id="dernier">
                    <ul>
                        <li><a href="home.php" >home</a></li>
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