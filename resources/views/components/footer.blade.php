<style>
        /* Footer Styling */
        .site-footer {
            background-color: #06162a; /* Dark blue base */
            background: radial-gradient(circle at top left, rgba(26, 188, 156, 0.65) 0%, transparent 17%),
                        radial-gradient(circle at bottom right, rgba(26, 188, 156, 0.65) 0%, transparent 17%),
                        #06162a; /* Cyan glows and base color */
            color: #ffffff;
            padding: 70px 99px 0 99px;
            font-family: 'Inter', sans-serif;
            position: relative;
            width: 100%;
            height: 541px;
            box-sizing: border-box;
            border-top-left-radius: 25px;
            border-top-right-radius: 25px;
        }

        .footer-top {
            display: flex;
            justify-content: space-between;
            gap: 60px;
            margin-bottom: 50px;
        }

        .footer-left {
            flex-shrink: 0;
        }

        .footer-right {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }

        .footer-right-top {
            display: flex;
            justify-content: space-between;
            margin-bottom: 40px;
        }

        .footer-col-about {
            background-color: #172c47; /* Slightly lighter box */
            padding: 30px;
            border-radius: 12px;
            width: 320px;
            box-sizing: border-box;
        }

        .footer-col-about h3 {
            font-size: 28px;
            margin: 0 0 15px 0;
            font-weight: 700;
        }

        .footer-col-about p {
            color: #FFFFFF;
            font-size: 15px;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .footer-hours {
            font-size: 13px;
            color: #ffffff;
            font-weight: 500;
        }

        .footer-hours-row {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
        }

        .footer-hours-divider {
            height: 1px;
            background-color: #3b5068;
            margin: 0;
        }

        .social-links {
            display: flex;
            gap: 12px;
            margin-top: 25px;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 34px;
            height: 34px;
            background-color: #ffffff;
            color: #172c47;
            border-radius: 50%;
            text-decoration: none;
        }

        .social-links svg {
                width: 24px;
                height: 23px;
        }

        .footer-col-links, .footer-col-newsletter {
            padding-top: 10px;
        }

        .footer-col-links h4, .footer-col-newsletter h4 {
            font-size: 22px;
            margin: 0 0 25px 0;
            font-weight: 500;
            letter-spacing: 0.5px;
        }

        .footer-links-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .footer-links-list a {
            color: #FFFFFF;
            text-decoration: none;
            font-size: 15px;
            transition: color 0.2s;
        }
        
        .footer-links-list a:hover {
            color: #ffffff;
        }

        .footer-col-newsletter p {
            color: #FFFFFF;
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 25px;
            max-width: 312px;
        }

        .newsletter-form {
            display: flex;
            background-color: #ffffff;
            border-radius: 8px;
            padding: 6px;
            align-items: center;
            max-width: 300px;
            margin-top: 35px;
        }

        .newsletter-form input {
            flex: 1;
            border: none;
            outline: none;
            padding: 10px 15px;
            font-size: 14px;
            color: #333;
            background: transparent;
        }

        .newsletter-form button {
            background-color: #172c47;
            border: none;
            width: 38px;
            height: 38px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            cursor: pointer;
        }

        .newsletter-form button svg {
            width: 18px;
            height: 18px;
            fill: currentColor;
            transform: translateX(-1px);
        }

        .footer-contact-info {
            display: flex;
            justify-content: space-between;
            padding: 0;
            margin-top: 50px; /* Reduced to tighten the gap */
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .contact-icon {
            width: 45px;
            height: 45px;
            background-color: #1ABC9C;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        .contact-icon svg {
            width: 20px;
            height: 20px;
            stroke: currentColor;
            fill: none;
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .contact-text h5 {
            margin: 0;
            font-size: 16px;
            font-weight: 500;
            color: #ffffff;
        }

        .contact-text p {
            margin: 5px 0 0 0;
            font-size: 14px;
            color: #FFFFFF;
            letter-spacing: 0.0625rem;

        }

        .footer-bottom {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            background-color: #ffffff;
            color: #333333;
            text-align: center;
            border-top-left-radius: 30px;
            border-top-right-radius: 30px;
            margin: 0;
            width: 600px;
            font-size: 14px;
            font-weight: 600;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-sizing: border-box;
        }

        .footer-bottom::before,
        .footer-bottom::after {
            content: "";
            position: absolute;
            bottom: 0;
            width: 31px; /* 1px extra to overlap and prevent zoom gap */
            height: 22px;
        }

        .footer-bottom::before {
            left: -30px;
            background: radial-gradient(circle at 0 0, transparent 30px, #ffffff 30.5px);
        }

        .footer-bottom::after {
            right: -30px;
            background: radial-gradient(circle at 100% 0, transparent 30px, #ffffff 30.5px);
        }

        /* Mobile View Adjustments */
        @media (max-width: 900px) {
            .site-footer {
                height: auto;
                padding: 40px 28px 90px 28px;
            }

            .footer-top {
                flex-direction: column;
                gap: 40px;
                margin-bottom: 30px;
            }

            .footer-col-about {
                width: 100%;
                padding: 24px;
            }

            .footer-right-top {
                flex-direction: column;
                gap: 40px;
                margin-bottom: 20px;
            }

            .footer-col-links, .footer-col-newsletter {
                padding-top: 0;
            }

            .footer-col-links h4, .footer-col-newsletter h4 {
                margin: 0 0 15px 0;
            }

            .footer-links-list {
                gap: 15px;
            }

            .newsletter-form {
                max-width: 100%;
                margin-top: 15px;
            }

            .footer-contact-info {
                flex-direction: column;
                gap: 25px;
                margin-top: 20px;
            }

            .footer-bottom {
                width: calc(100% - 56px);
                height: 50px;
                font-size: 16px;
                border-top-left-radius: 20px;
                border-top-right-radius: 20px;
            }

            .footer-bottom::before,
            .footer-bottom::after {
                width: 21px;
                height: 16px;
            }

            .footer-bottom::before {
                left: -20px;
                background: radial-gradient(circle at 0 0, transparent 20px, #ffffff 20.5px);
            }

            .footer-bottom::after {
                right: -20px;
                background: radial-gradient(circle at 100% 0, transparent 20px, #ffffff 20.5px);
            }
        }
</style>

        <!-- Footer Section -->
        <footer class="site-footer">
            <div class="footer-top">
                <!-- Left: About Box -->
                <div class="footer-left">
                    <div class="footer-col-about">
                        <h3>Logo</h3>
                        <p>Laboratory solutions focused on precision, timely reporting, and informed care.</p>
                        
                        <div class="footer-hours">
                            <div class="footer-hours-row">
                                <span>Mon - Fri</span>
                                <span>9:00 - 18:00</span>
                            </div>
                            <div class="footer-hours-divider"></div>
                            <div class="footer-hours-row">
                                <span>Sat - Sun</span>
                                <span>8:00 - 14:00</span>
                            </div>
                        </div>

                        <div class="social-links">
                            <a href="#"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3.81l.19-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></a>
                            <a href="#"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg></a>
                            <a href="#"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4l6.5 9m3 4l6.5 9M20 4L4 20"></path></svg></a>
                            <a href="#"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="6" width="20" height="12" rx="4" ry="4"></rect><polygon points="10 15 15 12 10 9"></polygon></svg></a>
                        </div>
                    </div>
                </div>

                <!-- Right: Content & Contact Info -->
                <div class="footer-right">
                    
                    <div class="footer-right-top">
                        <!-- Quick Links -->
                        <div class="footer-col-links">
                            <h4>Quick Links</h4>
                            <ul class="footer-links-list">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Team Member</a></li>
                                <li><a href="#">Price Table</a></li>
                            </ul>
                        </div>

                        <!-- Our services -->
                        <div class="footer-col-links">
                            <h4>Our services</h4>
                            <ul class="footer-links-list">
                                <li><a href="#">Biochemistry Research</a></li>
                                <li><a href="#">Chemical Research</a></li>
                                <li><a href="#">Molecular Biology</a></li>
                                <li><a href="#">Diagnostic Testing</a></li>
                            </ul>
                        </div>

                        <!-- Newsletter -->
                        <div class="footer-col-newsletter">
                            <h4>Newsletter</h4>
                            <p>Join the Community and Receive Our Monthly Newsletter Straight to Your Inbox</p>
                            <form class="newsletter-form">
                                <input type="email" placeholder="Your Email Address">
                                <button type="button">
                                    <svg viewBox="0 0 512 512"><path d="M498.1 5.6c10.1 7 15.4 19.1 13.5 31.2l-64 416c-1.5 9.7-7.4 18.2-16 23s-18.9 5.4-28 1.6L284 427.7l-68.5 74.1c-8.9 9.7-22.9 12.9-35.2 8.1S160 493.2 160 480l0-83.6c0-4 1.5-7.8 4.2-10.8L331.8 202.8c5.8-6.3 5.6-16-.4-22s-15.7-6.4-22-.7L106 360.8 17.7 316.6C7.1 311.3 .3 300.7 0 288.9s5.9-22.8 16.1-28.7l448-256c10.7-6.1 23.9-5.5 34 1.4z"></path></svg>
                                </button>
                            </form>
                        </div>
                    </div>

                    <!-- Contact Info Row -->
                    <div class="footer-contact-info">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            </div>
                            <div class="contact-text">
                                <h5>Laboratory Location</h5>
                                <p>5th Street, 21st Floor, New York, USA</p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">
                                <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                            </div>
                            <div class="contact-text">
                                <h5>Customer Support</h5>
                                <p>info@example.com</p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">
                                <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            </div>
                            <div class="contact-text">
                                <h5>Speak with us</h5>
                                <p>(888) 4567890</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="footer-bottom">
                &copy; 2026, Lab. All rights are reserved.
            </div>
        </footer>
