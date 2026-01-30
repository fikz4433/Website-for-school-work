<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Skills - Nekoshiro</title>
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
        <h1>My Skills</h1>
    </section>

    <section class="skills-detailed">
        <div class="container">
            <div class="skills-category">
                <h2>Frontend Development</h2>
                <div class="skills-grid">
                    <div class="skill-card">
                        <i class="fab fa-html5"></i>
                        <h3>HTML5</h3>
                        <div class="skill-level">
                            <div class="progress" style="width: 95%"></div>
                        </div>
                        <p>Semantic markup, accessibility, SEO optimization</p>
                    </div>
                    <div class="skill-card">
                        <i class="fab fa-css3-alt"></i>
                        <h3>CSS3</h3>
                        <div class="skill-level">
                            <div class="progress" style="width: 90%"></div>
                        </div>
                        <p>Responsive design, animations, Flexbox, Grid</p>
                    </div>
                    <div class="skill-card">
                        <i class="fab fa-js"></i>
                        <h3>JavaScript</h3>
                        <div class="skill-level">
                            <div class="progress" style="width: 85%"></div>
                        </div>
                        <p>ES6+, DOM manipulation, async programming</p>
                    </div>
                    <div class="skill-card">
                        <i class="fab fa-react"></i>
                        <h3>React</h3>
                        <div class="skill-level">
                            <div class="progress" style="width: 80%"></div>
                        </div>
                        <p>Components, hooks, state management</p>
                    </div>
                </div>
            </div>

            <div class="skills-category">
                <h2>Backend Development</h2>
                <div class="skills-grid">
                    <div class="skill-card">
                        <i class="fab fa-node-js"></i>
                        <h3>Node.js</h3>
                        <div class="skill-level">
                            <div class="progress" style="width: 75%"></div>
                        </div>
                        <p>Express.js, RESTful APIs, authentication</p>
                    </div>
                    <div class="skill-card">
                        <i class="fas fa-database"></i>
                        <h3>SQL</h3>
                        <div class="skill-level">
                            <div class="progress" style="width: 70%"></div>
                        </div>
                        <p>MySQL, PostgreSQL, database design</p>
                    </div>
                    <div class="skill-card">
                        <i class="fas fa-server"></i>
                        <h3>MongoDB</h3>
                        <div class="skill-level">
                            <div class="progress" style="width: 65%"></div>
                        </div>
                        <p>NoSQL, Mongoose, data modeling</p>
                    </div>
                </div>
            </div>

            <div class="skills-category">
                <h2>Tools & Technologies</h2>
                <div class="skills-grid">
                    <div class="skill-card">
                        <i class="fab fa-git-alt"></i>
                        <h3>Git</h3>
                        <div class="skill-level">
                            <div class="progress" style="width: 85%"></div>
                        </div>
                        <p>Version control, collaboration, Git flow</p>
                    </div>
                    <div class="skill-card">
                        <i class="fab fa-docker"></i>
                        <h3>Docker</h3>
                        <div class="skill-level">
                            <div class="progress" style="width: 60%"></div>
                        </div>
                        <p>Containerization, deployment, orchestration</p>
                    </div>
                    <div class="skill-card">
                        <i class="fas fa-cloud"></i>
                        <h3>AWS</h3>
                        <div class="skill-level">
                            <div class="progress" style="width: 55%"></div>
                        </div>
                        <p>EC2, S3, Lambda, cloud deployment</p>
                    </div>
                </div>
            </div>

            <div class="skills-category">
                <h2>Design & Creative</h2>
                <div class="skills-grid">
                    <div class="skill-card">
                        <i class="fas fa-pencil-ruler"></i>
                        <h3>UI/UX Design</h3>
                        <div class="skill-level">
                            <div class="progress" style="width: 80%"></div>
                        </div>
                        <p>User research, wireframing, prototyping</p>
                    </div>
                    <div class="skill-card">
                        <i class="fas fa-palette"></i>
                        <h3>Graphic Design</h3>
                        <div class="skill-level">
                            <div class="progress" style="width: 75%"></div>
                        </div>
                        <p>Adobe Creative Suite, digital illustration</p>
                    </div>
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