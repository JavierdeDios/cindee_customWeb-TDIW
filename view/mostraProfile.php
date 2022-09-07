<div id="AJAX">
    <div class="editProfile">
        <div class="profleftcolumn">
            <div class="profcard">
                <h2>MY DETAILS</h2>
                <p style="font-size: 20px">Fill down to edit your details:</p>
                <br>
                <form method="post" action="/../index.php?action=mod">
                    <label for="fname">Name</label>
                    <input type="text" name="name" pattern="[a-zA-Z0-9]+[a-zA-Z0-9 ]+" placeholder=<?php echo $_SESSION['user_name'];?>>

                    <label for="lname">Email</label>
                    <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,}$" placeholder=<?php echo $_SESSION['user_mail'];?>>

                    <label for="lname">Password</label><p style="font-size: 10px"><i>8 characters minimum</i></p>
                    <input type="password" name="psw" pattern=".{8,}" placeholder="...">

                    <label for="lname">Address</label>
                    <input type="text" name="address" maxlength="30" placeholder=<?php echo $_SESSION['user_address'];?>>

                    <label for="lname">City</label>
                    <input type="text" name="city" maxlength="30" placeholder=<?php echo $_SESSION['user_city'];?>>

                    <label for="lname">Postal Code</label>
                    <input type="text" name="pcode" pattern="^\d{5}$" placeholder=<?php echo $_SESSION['user_pcode'];?>>
                    <br><br><br>
                    <button type="submit" class="submit-changes">Save Changes</button>
                </form>
            </div>

        </div>
        <div class="profrightcolumn">

            <div class="profcard">
                <div class="picture-container">
                    <form method="post" enctype="multipart/form-data" action="/../index.php?action=modpicture">
                        <div class="picture">
                            <img src=<?php echo $_SESSION['profile_picture']; ?> class="picture-src" id="picturePreview" alt="default_user">
                            <input type="file" id="profile-picture" name="profile_image">
                        </div>
                        <p style="font-size: 10px;"><i>click to edit</i></p>
                        <h1 style="text-align: center;" ><?php echo $_SESSION['user_name'];?></h1>
                        <button type="submit" class="submit-pfp">Save Picture</button>
                    </form>
                </div>
            </div>

            <div class="profcard">
                <a href="/../index.php"><button class="shopbtn">SHOP</button></a>
            </div>
            <div class="profcard">
                <a id="history"><button class="historybtn">SHOPPING HISTORY</button></a>
            </div>
            <div class="profcard">
                <a href="/../index.php?action=logout"><button class="logoutbtn">LOG OUT</button></a>
            </div>
        </div>
    </div>
</div>



<script>
    document.getElementById("profile-picture").onchange = function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('picturePreview').setAttribute('src', e.target.result);
            };
            reader.readAsDataURL(this.files[0]);
        }
    }
</script>
