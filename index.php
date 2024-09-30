<?php 
include 'functions.php'; 
?>

<?php
$team = [
    [
        "name" => "Minh Vu",
        "role" => "Student",
        "img" => "assets/images/minh.jpg",
        "profile_link" => "detail.php?id=1"
    ],
    [
        "name" => "Khang Do",
        "role" => "Student",
        "img" => "assets/images/Kingston.jpg",
        "profile_link" => "detail.php?id=2"
    ],
    [
        "name" => "Faizan Zikaria",
        "role" => "Student",
        "img" => "assets/images/pic.jpg",
        "profile_link" => "detail.php?id=3"
    ],
    [
        "name" => "Zoe Smith",
        "role" => "Student",
        "img" => "assets/images/zoeSmith.jpg",
        "profile_link" => "detail.php?id=4"
    ]
];
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Our amazing team</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Group 1's resume">
    <meta name="author" content="Group 1">    
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
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
			<h1 class="py-4 text-center">OUR AMAZING TEAM</h1>

            <?php foreach ($team as $member) { ?>
                <header class="resume-header mt-4 pt-4 pt-md-0">
                    <div class="row">
                        <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
                            <img class="picture" src="<?php echo $member['img']; ?>" alt="">
                        </div><!--//col-->
                        <div class="col">
                            <div class="row p-4 justify-content-center justify-content-md-between">
                                <div class="primary-info col-auto">
                                    <h1 class="name mt-0 mb-1 text-white text-uppercase"><?php echo $member['name']; ?></h1>
                                    <div class="title mb-3"><?php echo $member['role']; ?></div>
                                    <a href="<?php echo $member['profile_link']; ?>" class="btn btn-secondary">See full profile</a>
                                </div><!--//primary-info-->
                            </div><!--//row-->
                        </div><!--//col-->
                    </div><!--//row-->
                </header>
            <?php } ?>
		    
	    </div>
    </article> 

    <footer class="footer text-center pt-2 pb-5">
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by Group 1</small>
    </footer>
</body>
</html>