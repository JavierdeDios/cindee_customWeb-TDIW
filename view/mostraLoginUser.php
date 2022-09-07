<form method="post" action="/../index.php?action=logged">
    <div class="login-container">
        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Enter email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,}$" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" pattern=".{8,}" required>

        <button type="submit" class="login-btn">LOGIN</button>
    </div>

    <div class="clearfix" style="background-color:#f1f1f1">
        <a href="/../index.php"><button type="button" class="logincancel">CANCEL</button></a>
        <span class="rgstlink">Don't have an account? <a href="/../index.php?action=register">Register</a></span>
    </div>
</form>