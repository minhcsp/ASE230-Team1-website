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
?>