<?php 
include 'functions.php'; 
?>

<?php
// Define the team array (same as in index.php)
$team = [
    1 => [
        "name" => "Minh Vu",
        "dob" => "2004-1-1",
        "role" => "Data Science Junior",
        "email" => "vum2@mymail.nku.edu",
        "phone" => "(859) 513-4830",
        "img" => "assets/images/Minh.jpg",
        "linkedin" => "https://linkedin.com/in/vqMnh",
        "github" => "https://github.com/vqMnh",
        "website" => "https://vqMnh-portfolio.com",
        "summary" => "Aspiring data scientist with hands-on experience in data analysis, natural language processing, and statistical analysis, seeking opportunities to apply data science techniques in meaningful projects.",
        "title1" => "Research on the American Dream",
        "description1" => "Analyzed data supporting the notion that success is equated to material gain, incorporating concepts of hard work and romantic love.",
        "timeline1" => "09/2024",
        "skill1" => "Python",
        "skill2" => "SQL",
        "place1" => "DSC200",
        "title2" => "Interactive Dashboard for Climate Change Data",
        "description2" => "Developed an interactive dashboard to visualize global climate change trends using Python and Tableau. Integrated real-time data from NOAA's climate datasets, enabling users to explore temperature, precipitation, and sea level rise over the past century. Collaborated with a team to design user-friendly interfaces and ensure high-performance data processing.",
        "timeline2" => "2023",
        "place2" => "DSC315",
        "skill3" => "R",
        "skill4" => "Data Wrangling",
        "education" => "BSc in Data Science",
        "Uni" => "Northern Kentucky University",
        "time" => "2022-2026"
    ],
    2 => [
        "name" => "Khang Do",
        "dob" => "2002-1-1",
        "role" => "Data Analyst",
        "email" => "dok2@mymail.nku.edu",
        "phone" => "(859) 786-2702",
        "img" => "assets/images/Kingston.jpg",
        "linkedin" => "https://linkedin.com/in/khang-do",
        "github" => "https://github.com/khangdo",
        "website" => "https://khang-portfolio.com",
        "summary" => "Aspiring data scientist with a strong foundation in data analytics and hands-on experience in data visualization, seeking a co-op opportunity to contribute to The Feasibility & Proposals department at Medpace. ",
        "title1" => "COVID-19 Data Analysis", //in work experince
        "description1" => "Extracted and processed COVID-19 data from multiple sources (CSV, PDF, API, Excel) using Python, merging into a unified dataset. Scraped job data from Indeed, ZipRecruiter, and Craigslist, compiling and cleaning data for market analysis.",
        "timeline1"=> "10/2022",
        "skill1" => "R",
        "skill2" => "Python",
        "place1"=> "DSC200",
        "title2" =>"Data Visualization Project: COVID-19 Analysis in Italy",
        "description2"=>"Role description goes here ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Donec pede justo, fringilla vel.",
        "timeline2" => "03/2023",
        "place2" => "DSC311",
        "skill3" => "SQL",
        "skill4"=>  "java",
        "education"=>   "BSc in Data Science",
        "Uni"=> "Northern Kentucky University",
        "time"=> "2021-2025"
    ],
    3 => [
    "name" => "Faizan Zikaria",
    "dob" => "1995-1-1",
    "role" => "Senior Database Administrator",
    "email" => "zikariaf1@mymail.nku.edu",
    "phone" => "(773) 712-4984",
    "img" => "assets/images/pic.jpg",
    "linkedin" => "https://www.linkedin.com/in/faizan-zikaria/",
    "github" => "https://github.com/faizan-zikaria",
    "website" => "https://faizan-zikaria.com",
    "summary" => "Over the years, I have accumulated extensive experience in the tech industry, working in various roles. In my current role as a Senior Oracle DBA at GAIG, I manage and optimize Oracle database systems to ensure high performance and reliability. My professional journey has equipped me with a robust skill set in database administration, software development, and project management. I enjoy sleeping, which helps me stay refreshed and productive. I’m passionate about saving money and finding efficient ways to manage finances. Reading books is one of my favorite pastimes, allowing me to continuously learn and explore new ideas.",
    "title1" => "Database Admin Senior Analyst",
    "description1" => "I'm responsible for the performance, integrity, and security of a database. I get involved in the planning and development of the databases, as well as troubleshooting any issues on behalf of the users. The role also includes ensuring that data remains consistent across the database, data is clearly defined, users access data concurrently in a form that suits their needs, and there is provision for data security and recovery control (all data is retrievable in an emergency).",
    "timeline1"=> "01/2013",
    "skill1" => "RMAN",
    "skill2" => "RAC",
    "place1"=> "Accenture",
    "title2" =>"Senior Database Administrator",
    "description2"=>"Ensure the databases are up and running smoothly 24/7. Implement and manage security measures to safeguard the databases. Perform regular tests and evaluations to ensure data security, privacy, and integrity. Monitor database performance and implement changes to improve efficiency. Apply new patches and versions when required.",
    "timeline2" => "02/2022",
    "place2" => "GAIG",
    "skill3" => "SQL",
    "skill4"=>  "OEM",
    "education"=>   "CIT",
    "Uni"=> "Northern Kentucky University",
    "time"=> "2021-2025"
    ],
    4 => [
        "name" => "Zoe Smith",
        "dob" => "1997-1-1",
        "role" => "Database Designer",
        "email" => "Smithz10@mymail.nku.edu",
        "phone" => "(813) 842-9599",
        "img" => "assets/images/zoeSmith.jpg",
        "linkedin" => "https://linkedin.com/in/zoe-smith-843a371b5",
        "github" => "https://github.com/zosmit",
        "website" => "https://smithz10.wixsite.com/my-site",
        "summary" => "A student at Northern Kentucky University studying for a Bachelor's degree in Computer Integrated Technology. I have a proficient tehcnological background with an emphasis on database and website design; I have created a small handful of websites in my spare time, amd a few for various University projects. ",
        "title1" => "Website Design Project: Official Rise Against Band Page", //in work experince
        "description1" => "A fake test website for the band, Rise Against. Using HTML and CSS, I was meant to demonstrate how I would create a website that would be useful, accessible, and easy to navigate while keeping in mind the needs of the 'client'.",
        "timeline1"=> "03/2021",
        "skill1" => "HTML",
        "skill2" => "CSS",
        "place1"=> "ENG331",
        "title2" =>"Website Design Project: Personal Website",
        "description2"=>"A beta test website that was meant to serve as my online resume. Using HTML and CSS, and applying ADA accessibility standards, I was meant to create my own personal website that would be easy to use and navigate.",
        "timeline2" => "04/2021",
        "place2" => "ENG331",
        "skill3" => "HTML",
        "skill4"=>  "CSS",
        "education"=>   "B.S in Computer Information Technology",
        "Uni"=> "Northern Kentucky University",
        "time"=> "2017-2025"
    ]
];

// Get the ID from the URL (if it exists)
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Ensure a valid ID is passed, and that it exists in the $team array
if (array_key_exists($id, $team)) {
    $member = $team[$id];
} else {
    // If no valid ID, set to null or handle error
    $member = null;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $member ? $member['name'] . " - Profile" : "Profile Not Found"; ?></title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your name's resume">
    <meta name="author" content="Your name">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <!-- FontAwesome JS-->
    <script defer src="assets/fontawesome/js/all.min.js"></script>

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


</head>

<body>

<article class="resume-wrapper text-center position-relative">
    <div class="mb-4"><a href="index.php" class="btn btn-primary">Back to index</a></div>
    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
        <header class="resume-header pt-4 pt-md-0">
            <div class="row">
                <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
                    <img class="picture" src="<?php echo $member['img']; ?>" alt="">
                </div><!--//col-->
                <div class="col">
                    <div class="row p-4 justify-content-center justify-content-md-between">
                        <div class="primary-info col-auto">
                            <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase">
                                <?php
                                echo $member['name'];
                                ?>
                            </h1>
                            <div>
                            <?php
                                echo 'Age: ' . calculateAge($member['dob']) . ' years old';
                                ?>
                            </div>
                            <div class="title mb-3"><?php echo $member['role']; ?></div>
                            <ul class="list-unstyled">
                                <li class="mb-2"><a class="text-link" href="#"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?php echo $member['email']; ?></a></li>
                                <li><a class="text-link" href="#"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?php echo $member['phone']; ?></a></li>
                            </ul>
                        </div><!--//primary-info-->
                        <div class="secondary-info col-auto mt-2">
                            <ul class="resume-social list-unstyled">
                                <li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span><?php echo $member['linkedin']; ?></a></li>
                                <li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span><?php echo $member['github']; ?></a></li>
                                <li><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span><?php echo $member['website']; ?></a></li>
                            </ul>
                        </div><!--//secondary-info-->
                    </div><!--//row-->

                </div><!--//col-->
            </div><!--//row-->
        </header>
        <div class="resume-body p-5">
            <section class="resume-section summary-section mb-5">
                <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Summary</h2>
                <div class="resume-section-content">
                    <p class="mb-0"><?php echo $member['summary']; ?></p>
                </div>
            </section><!--//summary-section-->
            <div class="row">
                <div class="col-lg-9">
                    <section class="resume-section experience-section mb-5">
                        <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
                        <div class="resume-section-content">
                            <div class="resume-timeline position-relative">
                                <?php
                                    $skills = [$member['skill1'], $member['skill2']];

                                    echo displayWorkExperience(
                                        $member['title1'], 
                                        $member['place1'], 
                                        $member['timeline1'], 
                                        $member['description1'], 
                                        $skills
                                    );
                                ?>

                                <?php
                                    $skills = [$member['skill3'], $member['skill4']];

                                    echo displayWorkExperience(
                                        $member['title2'], 
                                        $member['place2'], 
                                        $member['timeline2'], 
                                        $member['description2'], 
                                        $skills
                                    );
                                ?>
                            </div><!--//resume-timeline-->






                        </div>
                    </section><!--//projects-section-->
                </div>
                <div class="col-lg-3">
                    <section class="resume-section skills-section mb-5">
                        <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
                        <div class="resume-section-content">
                            <div class="resume-skill-item">
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2">
                                        <div class="resume-skill-name"><?php echo $member['skill1']; ?></div>
                                        <div class="progress resume-progress">
                                            <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 98%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="resume-skill-name"><?php echo $member['skill3']; ?></div>
                                        <div class="progress resume-progress">
                                            <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 94%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="resume-skill-name"><?php echo $member['skill4']; ?></div>
                                        <div class="progress resume-progress">
                                            <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>

                                    <li class="mb-2">
                                        <div class="resume-skill-name"><?php echo $member['skill2']; ?></div>
                                        <div class="progress resume-progress">
                                            <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 92%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div><!--//resume-skill-item-->
                            <div class="resume-skill-item">
                                <h4 class="resume-skills-cat font-weight-bold">Others</h4>
                                <ul class="list-inline">
                                    <li class="list-inline-item"><span class="badge badge-light">DevOps</span></li>
                                    <li class="list-inline-item"><span class="badge badge-light">Code Review</span></li>
                                    <li class="list-inline-item"><span class="badge badge-light">Git</span></li>
                                    <li class="list-inline-item"><span class="badge badge-light">Unit Testing</span></li>
                                    <li class="list-inline-item"><span class="badge badge-light">Wireframing</span></li>
                                    <li class="list-inline-item"><span class="badge badge-light">Sketch</span></li>
                                    <li class="list-inline-item"><span class="badge badge-light">Balsamiq</span></li>
                                    <li class="list-inline-item"><span class="badge badge-light">WordPress</span></li>
                                    <li class="list-inline-item"><span class="badge badge-light">Shopify</span></li>
                                </ul>
                            </div><!--//resume-skill-item-->
                        </div><!--resume-section-content-->
                    </section><!--//skills-section-->
                    <section class="resume-section education-section mb-5">
                        <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
                        <div class="resume-section-content">
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <div class="resume-degree font-weight-bold"><?php echo $member['education']; ?></div>
                                    <div class="resume-degree-org"><?php echo $member['Uni']; ?></div>
                                    <div class="resume-degree-time"><?php echo $member['time']; ?></div>
                                </li>

                            </ul>
                        </div>
                    </section><!--//education-section-->

    </div>
</article>


<footer class="footer text-center pt-2 pb-5">
    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
    <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by Your names</small>
</footer>



</body>
</html> 
