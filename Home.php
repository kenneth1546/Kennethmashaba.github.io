<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kenneth Mashaba - Academic Portfolio</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Kenneth Mashaba</h1>
        <p>Civil Engineering Student</p>
        <nav>
            <ul>
                <li><a href="#about">About Me</a></li>
                <li><a href="#achievements">Academic Achievements</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#research">Research</a></li>
                <li><a href="#internships">Internships</a></li>
                <li><a href="#extracurricular">Extracurricular Activities</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="about">
        <h2>About Me</h2>
        <p>I am a Civil Engineering student at Wits University, passionate about Civil Engineering. My academic journey has been enriched by hands-on projects, research, and practical experience in the field of civil engineering. I aspire to play a significant role in the wolrd of Civil.</p>
    <?php
        // Connect to the database
        $conn = new mysqli('localhost', 'root', '', 'images');

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch images for the About Me section
        $sql = "SELECT image_path FROM images WHERE description LIKE '%FacePhoto%'";
        $result = $conn->query($sql);

        // Display images
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<img src='" . $row['image_path'] . "' alt='FacePhoto' style='max-width: 50%; height: 40%;'>";
            }
        }

        // Close the connection
        $conn->close();
        ?>    
        <p>Email: 482909@students.wits.ac.za | LinkedIn: www.linkedin.com/in/kenneth-mashaba-6bb661253 </p>
    </section>
    
    <section id="achievements">
        <h2>Academic Achievements</h2>
        <ul>
            <li>Desmond Midgley-Knight Piesold Certificate, Wits University, 2023 – The Top Hydrology student in 2023</li>

            <?php
        // Connect to the database
        $conn = new mysqli('localhost', 'root', '', 'images');

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch images for the About Me section
        $sql = "SELECT image_path FROM images WHERE description LIKE '%With Prof Majozi%'";
        $result = $conn->query($sql);

        // Display images
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<img src='" . $row['image_path'] . "' alt='With Prof Majozi' style='max-width: 32%; height: 50%;'>";
            }
        }

        // Close the connection
        $conn->close();
        ?>    
<?php
        // Connect to the database
        $conn = new mysqli('localhost', 'root', '', 'images');

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch images for the About Me section
        $sql = "SELECT image_path FROM images WHERE description LIKE '%With Prof Zanthe%'";
        $result = $conn->query($sql);

        // Display images
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<img src='" . $row['image_path'] . "' alt='With Prof Zanthe' style='max-width: 32%; height: 50%;'>";
            }
        }

        // Close the connection
        $conn->close();
        ?>    
<?php
        // Connect to the database
        $conn = new mysqli('localhost', 'root', '', 'images');

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch images for the About Me section
        $sql = "SELECT image_path FROM images WHERE description LIKE '%With Dr Ganesh%'";
        $result = $conn->query($sql);

        // Display images
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<img src='" . $row['image_path'] . "' alt='With Dr Ganesh' style='max-width: 32%; height: 50%;'>";
            }
        }

        // Close the connection
        $conn->close();
        ?>

            <li>Golden Key Certificate, Wits University, 2024 – The Top 15% student in the Faculty of Engineering</li>
        </ul>
        <h3>Dean’s List</h3>
        <ul>
            <li> 2023 – Achieved Dean’s List recognition for outstanding academic performance.</li>
        </ul>
    </section>

    <section id="projects">
        <h2>Projects</h2>
        <div class="project">
            <h3>Basement Excavation and Secant Pile Wall Design</h3>
            <h4> Brief Description </h4>
            <p>For a commercial building in Braamfontein Johanesburg, I managed the 2D soil profile analysis and designed a secant pile wall to support basement excavation. The soil profile revealed clayey and sandy layers with a high water table. My design included alternating primary and secondary piles to stabilize the excavation and control groundwater seepage</p>
            <h4> My Roles </h4>
            <p> I analyzed soil samples, designed the secant pile wall, and calculated the necessary dimensions and reinforcement. I also coordinated with engineering teams to ensure the design's integration into the excavation plan and implemented safety measures for groundwater management. </p>
        </div>
        <div class="project">
            <h3>THE EFFECTS OF COLD JOINT ON THE FLEXURAL STRENGTH OF REINFORCED CONCRETE BEAMS</h3>
            <h4> Brief Description </h4>
            <p> This project investigated how cold joints affect the flexural strength of reinforced concrete beams. I was involved in casting beams with intentionally created cold joints and conducting subsequent testing to assess their impact on structural performance. Data analysis focused on comparing the flexural strength of beams with and without cold joints. </p>
            <h4> Key Findings </h4>
            <p> Cold joints significantly reduced the flexural strength of the beams, demonstrating the critical importance of proper joint construction.</p>
            <h4> My Role </h4>
            <p> I oversaw the casting process, conducted tests on the beams, and analyzed the resulting data to evaluate the effects of cold joints on their strength.</p>
       
        </div>
    </section>

    <section id="research">
        <h2>Research Experience</h2>
        <div class="research">
            <h3>THE EFFECTS OF COLD JOINT ON THE FLEXURAL STRENGTH OF REINFORCED CONCRETE BEAMS</h3>
            <?php
                // Connect to the database
                $conn = new mysqli('localhost', 'root', '', 'images');
        
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
        
                // Fetch images for the About Me section
                $sql = "SELECT image_path FROM images WHERE description LIKE '%beam being tested%'";
                $result = $conn->query($sql);
        
                // Display images
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<img src='" . $row['image_path'] . "' alt='beam being tested' style='max-width: 100%; height: auto;'>";
                    }
                }
        
                // Close the connection
                $conn->close();
                ?>


            <p><strong>Role:</strong> I oversaw the casting process, conducted tests on the beams, and analyzed the resulting data to evaluate the effects of cold joints on their strength.</p>
            <p><strong>Institution/Department:</strong> Wits University, Civil Engineering department</p>
            <p> Overview: This research explored the impact of cold joints on the flexural strength of reinforced concrete beams.

                Objectives: To determine how the presence of cold joints affects the structural integrity and load-bearing capacity of concrete beams.
                
                Methodologies: Beams with intentionally created cold joints were cast and subjected to flexural strength testing. The performance of these beams was compared with control beams without cold joints.
                
                Outcomes: The study revealed a significant reduction in flexural strength for beams with cold joints, highlighting the importance of continuous concrete placement for structural reliability.</p>
        </div>
        <?php
                // Connect to the database
                $conn = new mysqli('localhost', 'root', '', 'images');
        
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
        
                // Fetch images for the About Me section
                $sql = "SELECT image_path FROM images WHERE description LIKE '%The team%'";
                $result = $conn->query($sql);
        
                // Display images
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<img src='" . $row['image_path'] . "' alt='The team' style='max-width: 100%; height: auto;'>";
                    }
                }
        
                // Close the connection
                $conn->close();
                ?>

    </section>

    <section id="internships">
        <h2>Internships and Work Experience</h2>
        <div class="internship">
            <h3> Vacational Student </h3>
            <p><strong>Company/Organization:</strong> Knight Piesold Consulting</p>
            <p><strong>Duration:</strong> 02 - July 2023  – 14 July 2023</p>
            <p>Overview: During my vocational work at Knight Piésold Consulting, I was involved in analyzing geotechnical data to support various engineering projects.

                Responsibilities: I conducted detailed data analysis for triaxial tests and upset tests, focusing on interpreting soil behavior and material properties.
                
                Projects: Analyzed triaxial test results to assess soil strength and stability and evaluated upset test data to understand material deformation under stress.
                
                Achievements: Provided crucial insights into soil and material performance, contributing to the optimization of engineering solutions and ensuring the accuracy of project recommendations.</p>
        </div>
        <?php
                // Connect to the database
                $conn = new mysqli('localhost', 'root', '', 'images');
        
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
        
                // Fetch images for the About Me section
                $sql = "SELECT image_path FROM images WHERE description LIKE '%Knight Piesold team%'";
                $result = $conn->query($sql);
        
                // Display images
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<img src='" . $row['image_path'] . "' alt='Knight Piesold team' style='max-width: 100%; height: auto;'>";
                    }
                }
        
                // Close the connection
                $conn->close();
                ?>   
    </section>

    <section id="extracurricular">
        <h2>Extracurricular Activities</h2>
        <div class="activity">
            <h3>Chess </h3>
            <p><strong>Role:</strong> Chess Club Player </p>
            <p><strong>Duration:</strong> June 2019 – June 2024</p>
            <p> I led weekly meetings, organized tournaments, and coordinated practice sessions. I developed and implemented strategic training programs that improved players’ skills and promoted a collaborative environment. I also facilitated workshops with experienced players, boosting team morale and engagement. My efforts resulted in our team winning several regional competitions and significantly increasing membership. By fostering a supportive and competitive atmosphere, I enhanced both individual and team performance, and strengthened the overall presence of chess within our school community.</p>
        </div>

        <div class="activity">
            <h3> World of Golf </h3>
            <p><strong>Role:</strong> Amateur Golfer </p>
            <p><strong>Duration:</strong> September 2021 – June 2024</p>
            <p> As an Amateur Golfer at World of Golf, I competed in local and regional tournaments, honing my skills and achieving top rankings. I actively participated in training sessions, collaborated with coaches to refine techniques, and contributed to team strategies during competitions. My dedication led to personal best scores and recognition in various golf events. Additionally, I volunteered to assist in organizing charity golf tournaments, enhancing community engagement and promoting the sport. Through consistent performance and involvement, I helped elevate the profile of our golf club and fostered a competitive spirit among fellow golfers.</p>
        </div>
        <?php
        // Connect to the database
        $conn = new mysqli('localhost', 'root', '', 'images');

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch images for the About Me section
        $sql = "SELECT image_path FROM images WHERE description LIKE '%Golfer1%'";
        $result = $conn->query($sql);

        // Display images
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<img src='" . $row['image_path'] . "' alt='Golfer1' style='max-width: 32%; height: 30%;'>";
            }
        }

        // Close the connection
        $conn->close();
        ?>    
<?php
        // Connect to the database
        $conn = new mysqli('localhost', 'root', '', 'images');

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch images for the About Me section
        $sql = "SELECT image_path FROM images WHERE description LIKE '%Golfer2%'";
        $result = $conn->query($sql);

        // Display images
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<img src='" . $row['image_path'] . "' alt='Golfer2' style='max-width: 32%; height: 30%;'>";
            }
        }

        // Close the connection
        $conn->close();
        ?>    
<?php
        // Connect to the database
        $conn = new mysqli('localhost', 'root', '', 'images');

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch images for the About Me section
        $sql = "SELECT image_path FROM images WHERE description LIKE '%Golfer3%'";
        $result = $conn->query($sql);

        // Display images
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<img src='" . $row['image_path'] . "' alt='Golfer3' style='max-width: 32%; height: 30%;'>";
            }
        }

        // Close the connection
        $conn->close();
        ?>   
        

    <section id="contact">
        <h2>Contact Me</h2>
        <p>Please feel free to reach out to me via email or connect with me on LinkedIn.                                                                                                </p>
        <p>Email: 482909@students.wits.ac.za </p>
        <p>LinkedIn: www.linkedin.com/in/kenneth-mashaba-6bb661253 </p>
    </section>

    <footer>
        <p>&copy; 2024 Kenneth. All rights reserved.</p>
    </footer>
</body>
</html>
