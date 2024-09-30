<?php
function calculateAge($dob) {
    $birthDate = new DateTime($dob);
    $today = new DateTime();
    $age = $today->diff($birthDate)->y;
    return $age;
}

function displayMemberCard($member) {
    echo "
    <header class='resume-header mt-4 pt-4 pt-md-0'>
        <div class='row'>
            <div class='col-block col-md-auto resume-picture-holder text-center text-md-start'>
                <img class='picture' src='{$member['img']}' alt=''>
            </div>
            <div class='col'>
                <div class='row p-4 justify-content-center justify-content-md-between'>
                    <div class='primary-info col-auto'>
                        <h1 class='name mt-0 mb-1 text-white text-uppercase'>{$member['name']}</h1>
                        <div class='title mb-3'>{$member['role']}</div>";
                        
    if (isset($member['dob'])) {
        $age = calculateAge($member['dob']);
        echo "<div>Age: {$age}</div>";
    }

    echo "
                        <a href='{$member['profile_link']}' class='btn btn-secondary'>See full profile</a>
                    </div>
                </div>
            </div>
        </div>
    </header>";
}

function displayWorkExperience($title, $place, $timeline, $description, $skills) {
    $skillHTML = '';
    foreach ($skills as $skill) {
        $skillHTML .= "<li class='list-inline-item'><span class='badge bg-secondary badge-pill'>$skill</span></li>";
    }

    return "
        <article class='resume-timeline-item position-relative pb-5'>
            <div class='resume-timeline-item-header mb-2'>
                <div class='d-flex flex-column flex-md-row'>
                    <h3 class='resume-position-title font-weight-bold mb-1'>$title</h3>
                    <div class='resume-company-name ms-auto'>$place</div>
                </div>
                <div class='resume-position-time'>$timeline</div>
            </div>
            <div class='resume-timeline-item-desc'>
                <p>$description</p>
                <h4 class='resume-timeline-item-desc-heading font-weight-bold'>Technologies used:</h4>
                <ul class='list-inline'>
                    $skillHTML
                </ul>
            </div>
        </article>
    ";
}

?>