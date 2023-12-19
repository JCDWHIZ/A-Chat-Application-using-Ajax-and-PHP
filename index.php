<?php
session_start();
if (isset($_SESSION['unique_id'])) {
    header("location: user.php");
}
?>

<?php
include_once "header.php";
?>


<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Sign Up </header>
    <div class="error-txt">
    </div>
            <form action="" enctype="multipart/form-data" autocomplete="off">
                <div class="name-details">
                    <div class="field input">
                        <label class="floating-label">First name</label>
                        <input type="text" placeholder="First name" name="fname" required />
                    </div>
                    <div class="field input">
                        <label>Last name</label>
                        <input type="text" placeholder="Last name" name="lname" required />
                    </div>
                </div>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="email" placeholder="Enter your Email" name="email" required />
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" placeholder="Enter new password" name="password" required />
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Select Image</label>
                    <input type="file" name="image" required />
                </div>
                <div class="field button">
                    <input type="submit" value="continue to Chat" />
                </div>
            </form>
            <div class="link">Already signed up? <a href="login.php">login now</a></div>
        </section>
    </div>
    <script src="index.js"></script>
    <script src="signup.js"></script>
</body>

</html>