
    <main class="main">

        <section class="page-title">

            <div class="a-bgImage"></div>

            <div class="page-content">
                <h2>Contact Uss</h2>

                <p>Tell Us How We Can Help You Today</p>
            </div>

        </section>

        <section class="get-in-touch section">
            <h1 class="get-in-touch-heading">Get In Touch With Us</h1>

            <div class="get-in-touch-container">
                <div class="get-in-touch-box">
                    <i class='bx bxs-message-dots'></i>
                    <h3>Chat With Support</h3>
                    <p>Speak To Our Friendly Team</p>
                    <a href="" class="btn">Chat</a>
                </div>

                <div class="get-in-touch-box">
                    <i class='bx bxs-chat'></i>
                    <h3>Report A Case</h3>
                    <p>See Something Say Something</p>
                    <a href="" class="btn">Chat</a>
                </div>

                <div class="get-in-touch-box">
                    <i class='bx bxs-map'></i>
                    <h3>Locate Us</h3>
                    <p>Visit Our HQ Today</p>
                    <a href="" class="btn">Get Directions</a>
                </div>

                <div class="get-in-touch-box">
                    <i class='bx bxs-phone-call' ></i>
                    <h3>Talk On Phone</h3>
                    <p>Speak To Our Friendly Team</p>
                    <a href="" class="btn">Call Our Team</a>
                </div>
            </div>
        </section>

        <section class="contact section" id="contact">
            <div class="contact_contianer">

                <div class="contact-img" style="margin-bottom: 2rem;">

                    <div class="contact_img">
                        <img src="assets/images/contct.jpg">
                    </div>
                </div>


                <div class="contact-text">
                    <h1 style="color: #6001D3; text-transform: uppercase;font-size: 14px;">CONTACTS US</h1>
                    <h4 style="color: #000000; text-transform: capitalize;">Get In Touch With Us With Any Questions</h4>

                    <form action="mail.php" method="POST">
                        <input type="text" name="name" id="name" placeholder="Name:" required>
						<textarea name="address" placeholder="Enter Address" required></textarea>
                        <input type="email" name="email" id="email" placeholder="Email:" required>
                        <input type="text" name="mobile" placeholder="Enter Mobile Number"  pattern="\d*" required />
                        <input type="text" name="subject" id="subject" placeholder="Subjuct" required>
                        <select name="option" id="option">
                            <option value="Select" select>Select</option>
                            <option value="General Inquiry">General Inquiry</option>
                            <option value="Feedback">Pre-</option>
                            <option value="Support">Support</option>
                        </select>

                        <textarea name="message" cols="30" rows="10" placeholder="Message:"></textarea>

                        <input type="file" name="attachment" id="attachment">

                        <input type="submit" value="Reach Us" onclick="Send()">
                    </form>

                </div>


            </div>
        </section>

        <section class="hero_contact section contact-box">
            <div class="hero-contact-container">
                <div class="hero-contact-img">
                    <img src="assets/images/govote-1-1.png" alt="">
                </div>


                <div class="hero-contact-content">
                    <h1 class="hero-contact-title">Join Us and Make Your Voice Heard!</h1>
                    <p class="hero-contact-des">
                        Experience secure and convenient online voting with SecureBallot. Register now and participate
                        in
                        elections from anywhere in the world.
                    </p>
                    <a href="" class="hero-contact-btn">Register Now</a>
                </div>
            </div>
        </section>


    </main>
