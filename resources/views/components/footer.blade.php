<style>
        /* Footer Styling */
        .site-footer {
            background-color: #06162a;
            background: radial-gradient(circle at top left, rgba(26, 188, 156, 0.45) 0%, transparent 35%),
                        radial-gradient(circle at bottom right, rgba(26, 188, 156, 0.45) 0%, transparent 35%),
                        #06162a;
            color: #ffffff;
<<<<<<< HEAD
            padding: 4.375rem 6.1875rem 6.5rem 6.1875rem;
=======
            padding: 4.375rem 2.5rem 5.625rem 2.5rem;
>>>>>>> Farukh
            font-family: 'Inter', sans-serif;
            position: relative;
            width: 100%;
            max-width: 100%;
            margin: 0 auto;
            min-height: 33.8125rem;
<<<<<<< HEAD
=======
            height: auto;
>>>>>>> Farukh
            box-sizing: border-box;
            border-top-left-radius: 1.5625rem;
            border-top-right-radius: 1.5625rem;
        }

        .footer-top {
            display: flex;
            justify-content: space-between;
            gap: 3.75rem;
            margin-bottom: 3.125rem;
            max-width: 1320px;
            margin-left: auto;
            margin-right: auto;
            width: 100%;
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
            margin-bottom: 2.5rem;
        }

        .footer-col-about {
            background-color: #172c47; /* Slightly lighter box */
            padding: 1.875rem;
            border-radius: 0.75rem;
            width: 20rem;
            box-sizing: border-box;
        }

        .footer-col-about h3 {
            font-size: 1.75rem;
            margin: 0 0 0.9375rem 0;
            font-weight: 700;
        }

        .footer-col-about p {
            color: #FFFFFF;
            font-size: 0.9375rem;
            line-height: 1.6;
            margin-bottom: 1.25rem;
        }

        .footer-hours {
            font-size: 0.8125rem;
            color: #ffffff;
            font-weight: 500;
        }

        .footer-hours-row {
            display: flex;
            justify-content: space-between;
            padding: 0.75rem 0;
        }

        .footer-hours-divider {
            height: 0.0625rem;
            background-color: #3b5068;
            margin: 0;
        }

        .social-links {
            display: flex;
            gap: 0.75rem;
            margin-top: 1.5625rem;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 2.125rem;
            height: 2.125rem;
            background-color: #ffffff;
            color: #172c47;
            border-radius: 50%;
            text-decoration: none;
        }

        .social-links svg {
                width: 1.5rem;
                height: 1.4375rem;
        }

        .footer-col-links, .footer-col-newsletter {
            padding-top: 0.625rem;
        }

        .footer-col-links h4, .footer-col-newsletter h4 {
            font-size: 1.375rem;
            margin: 0 0 1.5625rem 0;
            font-weight: 500;
            letter-spacing: 0.03125rem;
        }

        .footer-links-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
        }

        .footer-links-list a {
            color: #FFFFFF;
            text-decoration: none;
            font-size: 0.9375rem;
            transition: color 0.2s;
        }
        
        .footer-links-list a:hover {
            color: #ffffff;
        }

        .footer-col-newsletter p {
            color: #FFFFFF;
            font-size: 0.875rem;
            line-height: 1.6;
            margin-bottom: 1.5625rem;
            max-width: 19.5rem;
        }

        .newsletter-form {
            display: flex;
            background-color: #ffffff;
            border-radius: 0.5rem;
            padding: 0.375rem;
            align-items: center;
            max-width: 20.75rem;
            margin-top: 2.1875rem;
        }

        .newsletter-form input {
            flex: 1;
            border: none;
            outline: none;
            padding: 0.625rem 0.9375rem;
            font-size: 0.875rem;
            color: #333;
            background: transparent;
        }

        .newsletter-form button {
            background-color: #172c47;
            border: none;
            width: 2.375rem;
            height: 2.375rem;
            border-radius: 1.25rem;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            cursor: pointer;
        }

        .newsletter-form button svg {
            width: 1.125rem;
            height: 1.125rem;
            fill: currentColor;
            transform: translateX(-0.0625rem);
        }

        .footer-contact-info {
            display: flex;
            justify-content: space-between;
            padding: 0;
            margin-top: 3.125rem; /* Reduced to tighten the gap */
            max-width: 1320px;
            margin-left: auto;
            margin-right: auto;
            width: 100%;
        }

        .footer-contact-info .footer-item {
            display: flex;
            align-items: center;
            gap: 0.9375rem;
        }

        .footer-contact-info .footer-icon {
            width: 2.8125rem;
            height: 2.8125rem;
            background-color: #1ABC9C !important;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            flex-shrink: 0;
        }

        .footer-contact-info .footer-icon svg {
            width: 1.25rem;
            height: 1.25rem;
            stroke: currentColor;
            fill: none;
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .footer-contact-info .footer-text h5 {
            margin: 0;
            font-size: 1rem;
            font-weight: 500;
            color: #ffffff;
        }

        .footer-contact-info .footer-text p {
            margin: 0.3125rem 0 0 0;
            font-size: 0.875rem;
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
            border-top-left-radius: 1.875rem;
            border-top-right-radius: 1.875rem;
            margin: 0;
            width: 40rem;
            font-size: 0.875rem;
            font-weight: 600;
            height: 3.5rem;
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
            width: 1.9375rem; /* 0.0625rem extra to overlap and prevent zoom gap */
            height: 1.375rem;
        }

        .footer-bottom::before {
            left: -1.875rem;
            background: radial-gradient(circle at 0 0, transparent 1.875rem, #ffffff 1.90625rem);
        }

        .footer-bottom::after {
            right: -1.875rem;
            background: radial-gradient(circle at 100% 0, transparent 1.875rem, #ffffff 1.90625rem);
        }

        /* Mobile View Adjustments */
        @media (max-width: 56.25rem) {
            .site-footer {
                height: auto;
                padding: 2.5rem 1.75rem 5.625rem 1.75rem;
            }

            .footer-top {
                flex-direction: column;
                gap: 1.5rem;
                margin-bottom: 1.875rem;
            }

            .footer-col-about {
                width: 100%;
                padding: 1.5rem;
            }

            .footer-right-top {
                flex-direction: column;
                gap: 2.5rem;
                margin-bottom: 1.25rem;
            }

            .footer-col-links, .footer-col-newsletter {
                padding-top: 0;
            }

            .footer-col-links h4, .footer-col-newsletter h4 {
                margin: 0 0 0.9375rem 0;
            }

            .footer-links-list {
                gap: 0.9375rem;
            }

            .newsletter-form {
                max-width: 100%;
                margin-top: 0.9375rem;
            }

            .footer-contact-info {
                flex-direction: column;
                gap: 1.25rem;
                margin-top: 1.25rem;
            }

            .footer-bottom {
                width: calc(100% - 3.5rem);
                height: 3.125rem;
                font-size: 1rem;
                border-top-left-radius: 1.25rem;
                border-top-right-radius: 1.25rem;
            }

            .footer-bottom::before,
            .footer-bottom::after {
                width: 1.3125rem;
                height: 1rem;
            }

            .footer-bottom::before {
                left: -1.25rem;
                background: radial-gradient(circle at 0 0, transparent 1.25rem, #ffffff 1.28125rem);
            }

            .footer-bottom::after {
                right: -1.25rem;
                background: radial-gradient(circle at 100% 0, transparent 1.25rem, #ffffff 1.28125rem);
            }
        }

        /* Compact desktop range: keeps the footer usable at 100% browser zoom. */
        @media (min-width: 1100px) and (max-width: 1320px) {
            .site-footer {
                height: 30rem;
                padding: 3.25rem 4.5rem 0;
            }

            .footer-top {
                gap: 2.5rem;
                margin-bottom: 2rem;
            }

            .footer-col-about {
                width: 18rem;
                padding: 1.5rem;
            }

            .footer-contact-info {
                display: grid;
                grid-template-columns: 1.4fr 0.9fr 0.75fr;
                gap: 1rem;
                margin-top: 1.5rem;
            }

            .contact-item {
                min-width: 0;
                gap: 0.75rem;
            }

            .contact-icon {
                width: 2.5rem;
                height: 2.5rem;
                flex: 0 0 2.5rem;
            }

            .contact-text {
                min-width: 0;
            }

            .contact-text h5 {
                font-size: 13px !important;
                white-space: nowrap;
            }

            .contact-text p {
                font-size: 11px !important;
                letter-spacing: 0;
                white-space: nowrap;
            }

            .footer-bottom {
                width: 34rem;
                height: 3rem;
                font-size: 0.8125rem;
            }
        }

        /* Tablet / 125% zoom range: reflow before desktop columns become cramped. */
        @media (min-width: 56.3125rem) and (max-width: 68.6875rem) {
            .site-footer {
                height: auto;
                min-height: 0;
                padding: 3rem 2.5rem 5.5rem;
            }

            .footer-top {
                flex-direction: column;
                gap: 2.5rem;
                margin-bottom: 0;
            }

            .footer-col-about {
                width: min(100%, 22rem);
            }

            .footer-right {
                width: 100%;
            }

            .footer-right-top {
                display: grid;
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 2rem;
            }

            .footer-col-newsletter {
                grid-column: 1 / -1;
            }

            .footer-contact-info {
                display: grid;
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 1.5rem;
                margin-top: 2rem;
            }

            .contact-item {
                min-width: 0;
            }

            .contact-text {
                min-width: 0;
            }

            .contact-text p {
                white-space: normal;
                overflow-wrap: anywhere;
            }
        }

        /* 110%–125% zoom range: keep the three contact blocks readable in one row. */
        @media (min-width: 1100px) and (max-width: 1750px) {
            .footer-contact-info {
                display: grid;
                grid-template-columns: 1.45fr 0.95fr 0.7fr;
                gap: 1.25rem;
            }

            .contact-item,
            .contact-text {
                min-width: 0;
            }

            .contact-icon {
                flex: 0 0 2.5rem;
                width: 2.5rem;
                height: 2.5rem;
            }

            .contact-text h5 {
                font-size: 0.875rem;
                white-space: nowrap;
            }

            .contact-text p {
                font-size: 0.75rem;
                letter-spacing: 0;
                white-space: nowrap;
            }

            .contact-item:first-child .contact-text p {
                white-space: normal;
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
                        <div class="footer-item">
                            <div class="footer-icon">
                                <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            </div>
                            <div class="footer-text">
                                <h5>Laboratory Location</h5>
                                <p>5th Street, 21st Floor, New York, USA</p>
                            </div>
                        </div>

                        <div class="footer-item">
                            <div class="footer-icon">
                                <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                            </div>
                            <div class="footer-text">
                                <h5>Customer Support</h5>
                                <p>info@example.com</p>
                            </div>
                        </div>

                        <div class="footer-item">
                            <div class="footer-icon">
                                <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            </div>
                            <div class="footer-text">
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
