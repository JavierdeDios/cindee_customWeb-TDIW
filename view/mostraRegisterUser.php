<form method="post" action="/../controller/registerUser.php" >
    <div class="rgst-container">
        <h1>REGISTER</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
        <label for="name"><b>Name</b></label>
        <input type="text" placeholder="Enter Name" name="name" pattern="[a-zA-Z0-9]+[a-zA-Z0-9 ]+" required>

        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Enter Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,}$" required>

        <label for="psw"><b>Password</b></label> <p style="font-size: 10px"><i>8 characters minimum</i></p>
        <input type="password" placeholder="Enter Password" name="psw" pattern=".{8,}" required>

        <label for="address"><b>Address</b></label>
        <input type="text" placeholder="Enter Address" name="address" maxlength="30" required>

        <label for="city"><b>City</b></label>
        <input type="text" placeholder="Enter City" name="city" maxlength="30" required>

        <label for="code"><b>Postal Code</b></label>
        <input type="text" placeholder="Enter Postal Code" name="code" pattern="^\d{5}$" required>

        <div class="clear">
            <a href="/../index.php" ><button type="button" class="cncl-rgst">CANCEL</button></a>
            <button type="submit" class="submit-rgst">REGISTER</button>
        </div>
    </div>
</form>
</div>