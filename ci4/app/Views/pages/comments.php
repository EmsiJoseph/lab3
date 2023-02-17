<body>
    <div class="header">
        <h1 class="container">
            <nav>
                <a href="index.php">
                    <img src="images/icon.png" class="logo">
                </a>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
    </div>

    <div id="comment">
        <div class="container">
            <div class="row">
                <div class="comment-left">
                    <hi class="sub-title">Comments</hi>
                    <br><br>
                    <?php include 'getComments.php'; ?>
                </div>
                <div class="contact-right">
                    <!-- --------Form------------ -->

                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <input type="text" name="name" placeholder="Your Name" required>
                        <input type="email" name="email" placeholder="Your Email" required>
                        <input type="website" name="website" placeholder="Your Website">
                        <textarea name="comment" rows="6" placeholder="Your Message"></textarea>
                        <button type="submit" class="btn btn2">Submit</button>
                    </form>
                    <?php include 'form.php'; ?>

                </div>
            </div>
        </div>
    </div>