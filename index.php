<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nekoshiro - Personal Profile</title>
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

    <section id="home" class="hero">
        <div class="hero-content">
            <h1>Welcome, I'm <span class="highlight">Nekoshiro</span></h1>
            <p class="tagline">Creative Developer & Digital Artist</p>
            <div class="cta-buttons">
                <a href="#contact" class="cta-primary">Get in Touch</a>
                <a href="#projects" class="cta-secondary">View My Work</a>
            </div>
        </div>
    </section>

    <section id="about" class="about">
        <h2>About Me</h2>
        <div class="about-content">
            <div class="about-text">
                <p>
                    Hello! I'm Nekoshiro, a passionate developer and digital creator. I
                    specialize in creating unique digital experiences that combine
                    creativity with technical expertise.
                </p>
                <p>
                    With a keen eye for design and a love for clean code, I strive to
                    build projects that not only look great but also provide meaningful
                    value to users.
                </p>
            </div>
            <div class="about-stats">
                <div class="stat">
                    <span class="stat-number">3+</span>
                    <span class="stat-label">Years Experience</span>
                </div>
                <div class="stat">
                    <span class="stat-number">50+</span>
                    <span class="stat-label">Projects Completed</span>
                </div>
                <div class="stat">
                    <span class="stat-number">100%</span>
                    <span class="stat-label">Client Satisfaction</span>
                </div>
            </div>
        </div>
    </section>

    <section id="skills" class="skills">
        <h2>My Skills</h2>
        <div class="skills-grid">
            <div class="skill-card">
                <i class="fas fa-code"></i>
                <h3>Web Development</h3>
                <p>HTML, CSS, JavaScript</p>
            </div>
            <div class="skill-card">
                <i class="fas fa-palette"></i>
                <h3>Design</h3>
                <p>UI/UX, Graphic Design</p>
            </div>
            <div class="skill-card">
                <i class="fas fa-mobile-alt"></i>
                <h3>Responsive Design</h3>
                <p>Mobile-First Approach</p>
            </div>
            <div class="skill-card">
                <i class="fas fa-database"></i>
                <h3>Backend</h3>
                <p>Node.js, SQL</p>
            </div>
        </div>
    </section>

    <section id="projects" class="projects">
        <h2>Featured Projects</h2>
        <div class="project-grid">
            <div class="project-card">
                <div class="project-image"></div>
                <h3>Project One</h3>
                <p>A brief description of the project and its key features.</p>
                <a href="#" class="project-link">View Project</a>
            </div>
            <div class="project-card">
                <div class="project-image"></div>
                <h3>Project Two</h3>
                <p>A brief description of the project and its key features.</p>
                <a href="#" class="project-link">View Project</a>
            </div>
            <div class="project-card">
                <div class="project-image"></div>
                <h3>Project Three</h3>
                <p>A brief description of the project and its key features.</p>
                <a href="#" class="project-link">View Project</a>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <h2>Get in Touch</h2>
        <div class="contact-content">
            <form id="contact-form" class="contact-form">
                <div class="form-group">
                    <input type="text" id="name" name="name" required placeholder="Your Name" />
                </div>
                <div class="form-group">
                    <input type="email" id="email" name="email" required placeholder="Your Email" />
                </div>
                <div class="form-group">
                    <textarea id="message" name="message" required placeholder="Your Message"></textarea>
                </div>
                <button type="submit" class="submit-btn">Send Message</button>
            </form>
            <div class="social-links">
                <a href="#" class="social-link"><i class="fab fa-github"></i></a>
                <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2025 Nekoshiro. All rights reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>

</html>