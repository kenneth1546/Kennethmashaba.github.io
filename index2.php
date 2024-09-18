
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>[Your Name] - Civil Engineering Professional</title>
            <link rel="stylesheet" href="styles.css">
        </head>
        <body>
        
            <!-- Navigation Bar -->
            <header>
                <nav>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About Me</a></li>
                        <li><a href="#projects">Projects</a></li>
                        <li><a href="#skills">Skills</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
            </header>
        
            <!-- Home Section -->
            <section id="home" class="home-section">
                <div class="home-content">
                    <h1>Welcome to [Your Name]'s Website</h1>
                    <p>Final-Year Civil Engineering Student & Aspiring Professional</p>
                </div>
            </section>
        
            <!-- About Section -->
            <section id="about" class="about-section">
                <h2>About Me</h2>
                <p>
                    I am currently a final-year civil engineering student with a passion for infrastructure design, sustainable development, and modern construction techniques. My goal is to contribute to the engineering world with innovative solutions.
                </p>
                <?php
                // Connect to the database
                $conn = new mysqli('localhost', 'root', '', 'my_website');
        
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
        
                // Fetch images for the About Me section
                $sql = "SELECT image_path FROM images WHERE description LIKE '%Kenneth%'";
                $result = $conn->query($sql);
        
                // Display images
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<img src='" . $row['image_path'] . "' alt='Kenneth' style='max-width: 100%; height: auto;'>";
                    }
                }
        
                // Close the connection
                $conn->close();
                ?>
            </section>
        
            <!-- Projects Section -->
            <section id="projects" class="projects-section">
                <h2>Projects & Experience</h2>
                <ul>
                    <li><strong>Structural Analysis of High-Rise Buildings</strong> - Building stability and resilience in urban environments.</li>
                    <li><strong>Sustainable Urban Drainage Design</strong> - Environmentally friendly drainage systems.</li>
                    <li><strong>Bridge Design & Engineering</strong> - Conceptualized a pedestrian bridge focusing on safety and durability.</li>
                </ul>
            </section>
        
            <!-- Skills Section -->
            <section id="skills" class="skills-section">
                <h2>Skills & Expertise</h2>
                <ul>
                    <li>Technical Skills: AutoCAD, Revit, MATLAB, Civil 3D</li>
                    <li>Engineering Competencies: Structural integrity, Sustainable design, Infrastructure planning</li>
                    <li>Soft Skills: Leadership, Problem-solving, Teamwork</li>
                </ul>
            </section>
        
            <!-- Contact Section -->
            <section id="contact" class="contact-section">
                <h2>Contact Me</h2>
                <p>Email: [Your Email]</p>
                <p>LinkedIn: <a href="[Your LinkedIn URL]">[Your LinkedIn Profile]</a></p>
                <p>Phone: [Your Contact Number]</p>
            </section>
        
            <!-- Footer -->
            <footer>
                <p>&copy; 2024 [Your Name]. All Rights Reserved.</p>
            </footer>
        
        </body>
        </html>
        
        On Wed, 11 Sept 2024, 15:26 Sifiso Mashaba, <482909@students.wits.ac.za> wrote:
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>[Your Name] - Civil Engineering Professional</title>
            <link rel="stylesheet" href="styles.css">
        </head>
        <body>
        
            <!-- Navigation Bar -->
            <header>
                <nav>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About Me</a></li>
                        <li><a href="#projects">Projects</a></li>
                        <li><a href="#skills">Skills</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
            </header>
        
            <!-- Home Section -->
            <section id="home" class="home-section">
                <div class="home-content">
                    <h1>Welcome to [Your Name]'s Website</h1>
                    <p>Final-Year Civil Engineering Student & Aspiring Professional</p>
                </div>
            </section>
        
            <!-- About Section -->
            <section id="about" class="about-section">
                <h2>About Me</h2>
                <p>
                    I am currently a final-year civil engineering student with a passion for infrastructure design, sustainable development, and modern construction techniques. My goal is to contribute to the engineering world with innovative solutions.
                </p>
                
            </section>
        
            <!-- Projects Section -->
            <section id="projects" class="projects-section">
                <h2>Projects & Experience</h2>
                <ul>
                    <li><strong>Structural Analysis of High-Rise Buildings</strong> - Building stability and resilience in urban environments.</li>
                    <li><strong>Sustainable Urban Drainage Design</strong> - Environmentally friendly drainage systems.</li>
                    <li><strong>Bridge Design & Engineering</strong> - Conceptualized a pedestrian bridge focusing on safety and durability.</li>
                </ul>
            </section>
        
            <!-- Skills Section -->
            <section id="skills" class="skills-section">
                <h2>Skills & Expertise</h2>
                <ul>
                    <li>Technical Skills: AutoCAD, Revit, MATLAB, Civil 3D</li>
                    <li>Engineering Competencies: Structural integrity, Sustainable design, Infrastructure planning</li>
                    <li>Soft Skills: Leadership, Problem-solving, Teamwork</li>
                </ul>
            </section>
        
            <!-- Contact Section -->
            <section id="contact" class="contact-section">
                <h2>Contact Me</h2>
                <p>Email: [Your Email]</p>
                <p>LinkedIn: <a href="[Your LinkedIn URL]">[Your LinkedIn Profile]</a></p>
                <p>Phone: [Your Contact Number]</p>
            </section>
        
            <!-- Footer -->
            <footer>
                <p>&copy; 2024 [Your Name]. All Rights Reserved.</p>
            </footer>
        
        </body>
        </html>
        
        On Wed, 11 Sept 2024, 15:12 Sifiso Mashaba, <482909@students.wits.ac.za> wrote:
       
        
        On Wed, 11 Sept 2024, 14:55 Sifiso Mashaba, <482909@students.wits.ac.za> wrote:
        INSERT INTO images (image_name, image_path, description) 
        VALUES ('My Image', 'images/myimage.jpg', 'This is an image description');
        
        On Wed, 11 Sept 2024, 12:07 Sifiso Mashaba, <482909@students.wits.ac.za> wrote:
        // script.js
        
        // Smooth scroll for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
        
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        
        On Wed, 11 Sept 2024, 12:06 Sifiso Mashaba, <482909@students.wits.ac.za> wrote:
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        /* Navigation Bar */
        header {
            background-color: #333;
            padding: 10px 0;
            text-align: center;
        }
        
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        
        nav ul li {
            display: inline;
            margin: 0 15px;
        }
        
        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
        
        nav ul li a:hover {
            text-decoration: underline;
        }
        
        /* Section Styling */
        section {
            padding: 50px;
            text-align: center;
        }
        
        .home-section {
            background-color: #f2f2f2;
        }
        
        .about-section,
        .projects-section,
        .skills-section,
        .contact-section {
            background-color: #e6e6e6;
            margin: 0;
            padding: 40px;
        }
        
        h1, h2 {
            color: #333;
        }
        
        /* Footer Styling */
        footer {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
            position: absolute;
            width: 100%;
            bottom: 0;
        }
        
        On Wed, 11 Sept 2024, 12:04 Sifiso Mashaba, <482909@students.wits.ac.za> wrote:
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>[Your Name] - Civil Engineering Professional</title>
            <link rel="stylesheet" href="styles.css">
        </head>
        <body>
        
            <!-- Navigation Bar -->
            <header>
                <nav>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About Me</a></li>
                        <li><a href="#projects">Projects</a></li>
                        <li><a href="#skills">Skills</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
            </header>
        
            <!-- Home Section -->
            <section id="home" class="home-section">
                <div class="home-content">
                    <h1>Welcome to [Your Name]'s Website</h1>
                    <p>Final-Year Civil Engineering Student & Aspiring Professional</p>
                </div>
            </section>
        
            <!-- About Section -->
            <section id="about" class="about-section">
                <h2>About Me</h2>
                <p>
                    I am currently a final-year civil engineering student with a passion for infrastructure design, sustainable development, and modern construction techniques. My goal is to contribute to the engineering world with innovative solutions.
                </p>
            </section>
        
            <!-- Projects Section -->
            <section id="projects" class="projects-section">
                <h2>Projects & Experience</h2>
                <ul>
                    <li><strong>Structural Analysis of High-Rise Buildings</strong> - Building stability and resilience in urban environments.</li>
                    <li><strong>Sustainable Urban Drainage Design</strong> - Environmentally friendly drainage systems.</li>
                    <li><strong>Bridge Design & Engineering</strong> - Conceptualized a pedestrian bridge focusing on safety and durability.</li>
                </ul>
            </section>
        
            <!-- Skills Section -->
            <section id="skills" class="skills-section">
                <h2>Skills & Expertise</h2>
                <ul>
                    <li>Technical Skills: AutoCAD, Revit, MATLAB, Civil 3D</li>
                    <li>Engineering Competencies: Structural integrity, Sustainable design, Infrastructure planning</li>
                    <li>Soft Skills: Leadership, Problem-solving, Teamwork</li>
                </ul>
            </section>
        
            <!-- Contact Section -->
            <section id="contact" class="contact-section">
                <h2>Contact Me</h2>
                <p>Email: [Your Email]</p>
                <p>LinkedIn: <a href="[Your LinkedIn URL]">[Your LinkedIn Profile]</a></p>
                <p>Phone: [Your Contact Number]</p>
            </section>
        
            <!-- Footer -->
            <footer>
                <p>&copy; 2024 [Your Name]. All Rights Reserved.</p>
            </footer>
        
        </body>
        </html>