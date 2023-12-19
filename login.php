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
        <section class="form login">
            <header>Login</header>
    <div class="error-txt"></div>
            <form action="">
                <div class="field input">
                    <label>Email Address</label>
                    <input type="email" placeholder="Enter your Email" name="email" />
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" placeholder="Enter your password" name="password" />
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" value="continue to Chat" />
                </div>
            </form>
            <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
        </section>
    </div>
    <script src="index.js"></script>
    <script src="login.js"></script>
</body>

</html>