<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact - Nekoshiro</title>
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
</head>

<body>
    <nav class="navbar">
        <div class="nav-brand">Nekoshiro</div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="skills.php">Skills</a></li>
            <li><a href="projects.php">Projects</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>

    <section class="page-header">
        <h1>Get in Touch</h1>
    </section>

    <section class="contact-detailed">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-info">
                    <h2>Let's Connect</h2>
                    <p>
                        I'm always interested in hearing about new projects and
                        opportunities. Whether you have a question or just want to say hi,
                        I'll try my best to get back to you!
                    </p>

                    <div class="contact-methods">
                        <div class="contact-method">
                            <i class="fas fa-envelope"></i>
                            <div class="method-details">
                                <h3>Email</h3>
                                <p>hello@nekoshiro.com</p>
                            </div>
                        </div>
                        <div class="contact-method">
                            <i class="fas fa-phone"></i>
                            <div class="method-details">
                                <h3>Phone</h3>
                                <p>+1 (555) 123-4567</p>
                            </div>
                        </div>
                        <div class="contact-method">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="method-details">
                                <h3>Location</h3>
                                <p>Tokyo, Japan</p>
                            </div>
                        </div>
                    </div>

                    <div class="social-links">
                        <h3>Follow Me</h3>
                        <div class="social-grid">
                            <a href="#" class="social-link">
                                <i class="fab fa-github"></i>
                                <span>GitHub</span>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fab fa-linkedin"></i>
                                <span>LinkedIn</span>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fab fa-twitter"></i>
                                <span>Twitter</span>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fab fa-instagram"></i>
                                <span>Instagram</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="contact-form-container">
                    <h2>Send a Message</h2>
                    <form id="contact-form" class="contact-form">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" required placeholder="Your Name" />
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required placeholder="Your Email" />
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" required placeholder="Message Subject" />
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" required placeholder="Your Message"></textarea>
                        </div>
                        <button type="submit" class="submit-btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="faq">
        <div class="container">
            <h2>Frequently Asked Questions</h2>
            <div class="faq-grid">
                <div class="faq-item">
                    <h3>What type of projects do you take on?</h3>
                    <p>
                        I specialize in web development, mobile applications, and digital
                        design projects. I'm always open to discussing new and challenging
                        opportunities.
                    </p>
                </div>
                <div class="faq-item">
                    <h3>What is your typical response time?</h3>
                    <p>
                        I usually respond to inquiries within 24-48 hours during business
                        days. For urgent matters, please indicate so in your message.
                    </p>
                </div>
                <div class="faq-item">
                    <h3>Do you work with international clients?</h3>
                    <p>
                        Yes! I work with clients from all around the world and am
                        comfortable with remote collaboration.
                    </p>
                </div>
                <div class="faq-item">
                    <h3>What is your preferred method of communication?</h3>
                    <p>
                        Email is the best way to reach me initially. We can then set up
                        video calls or use other communication tools as needed.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2025 Nekoshiro. All rights reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>

</html>