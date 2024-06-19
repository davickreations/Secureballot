<main class="log-main">
    <div class="Log-form">
        <h2>Signup Form</h2>
        <p>it free and aleaays will be</p>
        <form action="" autocomplete="off">
            <div class="error-text">Error</div>
            <div class="grid-details">
                <div class="input">
                    <label>First Name</label>
                    <input type="text" name="fname" placeholder="First Name" required pattern="[a-zA-Z'-'\s]*">
                </div>
                <div class="input">
                    <label>Late Name</label>
                    <input type="text" name="lname" placeholder="Last Name" required pattern="[a-zA-Z'-'\s]*">
                </div>
            </div>
            <div class="input">
                <label>Email Name</label>
                <input type="email" name="email" placeholder="Email Address" required>
            </div>
            <div class="input">
                <label>Mobile Number</label>
                <input type="tel" name="mobile" placeholder="Mobile Number" required pattern="[0-9]{11}" oninvalid="this.setCustomValidity('Enter 11 Digit Number')" oninput="this.setCustomValidity('')">
            </div>
            <div class="grid-details">
                <div class="input">
                    <label>Password</label>
                    <input type="password" name="pass" placeholder="Enter Password" required >
                </div>
                <div class="input">
                    <label>Confirm Password</label>
                    <input type="password" name="cpass" placeholder="Confrim Password" required >
                </div>
            </div>

            <div class="profile-img">
                <input type="file" id="image-preview" name="image" class="file-image" required oninvalid="this.setCustomValidity('Select an Image')" oninput="this.setCustomValidity('')">
                <i class='bx bxs-user-plus'></i>
            </div>

            <div class="submit">
                <input type="submit" value="Sign Up Now" class="button">
            </div>

        </form>
        <div class="link">
           Already Registered? <a href="login2.php">Login Now</a>
        </div>
    </div>


   </main>