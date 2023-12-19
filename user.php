<?php
session_start();
include_once "header.php"; // Include your database connection code here
if (!isset($_SESSION['unique_id'])) {
    header("Location: login.php");
}
?>
<body>
    <div class="wrapper">
        <section class="user_form login">
            <!-- <header>Chap app</header> -->
            <div class="users">
                <header>
                    <?php
                    include_once "php/config.php";
                    $sql = mysqli_query($conn, "SELECT * FROM user WHERE unique_id = {$_SESSION['unique_id']}");
                    if (mysqli_num_rows($sql) > 0) {
                        $row = mysqli_fetch_assoc($sql);
                    }
                    ?>
                    <div class="content">
                        <div class="online">
                            <div class="onl_img">
                                <img src="php/images/<?php echo  $row['img'] ?>" alt="" />
                            </div>
                            <div class="dot"></div>
                        </div>
                        <div class="details">
                            <span><?php echo $row['fname'] . " "  . $row['lname'] ?></span>
                            <!-- <p><?php echo $row['status'] ?></p> -->
                        </div>
                    </div>
                    <a href="php/logout.php?logout_id=<?php echo $row['unique_id'] ?>" class="logout">Logout</a>
                </header>

                <div class="mini">
                    <h1>messages</h1>
                </div>
                <div class="search">
                    <span class="text">Select a user to start chat</span>
                    <input type="text" placeholder="Enter name to search..." />
                    <button><i class="fas fa-search"></i></button>
                </div>
                <div class="users-list">

                </div>
            </div>
        </section>
    </div>
    <script src="users.js"></script>
</body>

</html>