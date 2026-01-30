<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Projects - Nekoshiro</title>
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
        <h1>My Projects</h1>
    </section>

    <section class="projects-detailed">
        <div class="container">
            <div class="project-filters">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="web">Web Development</button>
                <button class="filter-btn" data-filter="mobile">Mobile Apps</button>
                <button class="filter-btn" data-filter="design">Design</button>
            </div>

            <div class="projects-grid">
                <div class="project-card" data-category="web">
                    <div class="project-image">
                        <img src="https://via.placeholder.com/600x400" alt="E-commerce Platform" />
                    </div>
                    <div class="project-content">
                        <h3>E-commerce Platform</h3>
                        <p>
                            A full-stack e-commerce solution with React, Node.js, and
                            MongoDB. Features include user authentication, product
                            management, and payment integration.
                        </p>
                        <div class="project-tech">
                            <span>React</span>
                            <span>Node.js</span>
                            <span>MongoDB</span>
                            <span>Stripe</span>
                        </div>
                        <div class="project-links">
                            <a href="#" class="project-link"><i class="fab fa-github"></i> View Code</a>
                            <a href="#" class="project-link"><i class="fas fa-external-link-alt"></i> Live Demo</a>
                        </div>
                    </div>
                </div>

                <div class="project-card" data-category="mobile">
                    <div class="project-image">
                        <img src="https://via.placeholder.com/600x400" alt="Fitness Tracking App" />
                    </div>
                    <div class="project-content">
                        <h3>Fitness Tracking App</h3>
                        <p>
                            A mobile application for tracking workouts, nutrition, and
                            fitness goals. Built with React Native and Firebase.
                        </p>
                        <div class="project-tech">
                            <span>React Native</span>
                            <span>Firebase</span>
                            <span>Redux</span>
                        </div>
                        <div class="project-links">
                            <a href="#" class="project-link"><i class="fab fa-github"></i> View Code</a>
                            <a href="#" class="project-link"><i class="fas fa-external-link-alt"></i> Live Demo</a>
                        </div>
                    </div>
                </div>

                <div class="project-card" data-category="design">
                    <div class="project-image">
                        <img src="https://via.placeholder.com/600x400" alt="Brand Identity Design" />
                    </div>
                    <div class="project-content">
                        <h3>Brand Identity Design</h3>
                        <p>
                            Complete brand identity design including logo, color palette,
                            typography, and brand guidelines for a tech startup.
                        </p>
                        <div class="project-tech">
                            <span>Illustrator</span>
                            <span>Photoshop</span>
                            <span>Figma</span>
                        </div>
                        <div class="project-links">
                            <a href="#" class="project-link"><i class="fas fa-external-link-alt"></i> View Project</a>
                        </div>
                    </div>
                </div>

                <div class="project-card" data-category="web">
                    <div class="project-image">
                        <img src="https://via.placeholder.com/600x400" alt="Task Management System" />
                    </div>
                    <div class="project-content">
                        <h3>Task Management System</h3>
                        <p>
                            A collaborative task management platform with real-time updates,
                            team collaboration features, and progress tracking.
                        </p>
                        <div class="project-tech">
                            <span>Vue.js</span>
                            <span>Express</span>
                            <span>Socket.io</span>
                            <span>PostgreSQL</span>
                        </div>
                        <div class="project-links">
                            <a href="#" class="project-link"><i class="fab fa-github"></i> View Code</a>
                            <a href="#" class="project-link"><i class="fas fa-external-link-alt"></i> Live Demo</a>
                        </div>
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