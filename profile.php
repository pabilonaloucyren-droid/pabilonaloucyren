<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
die("Invalid. Please use the correct form to submit your profile information.");
}

$fullname = trim($_POST['fullname'] ?? 'Not provided');
$age      = trim($_POST['age'] ?? 'Not provided');
$course   = trim($_POST['course'] ?? 'Not provided');
$emailAddress    = trim($_POST['emailAddress'] ?? 'Not provided');
$bio      = trim($_POST['bio'] ?? '');
$gender   = trim($_POST['gender'] ?? 'Not selected'); 


?><?php
session_start();

$name         = htmlspecialchars(trim($_POST['name']         ?? ''));
$age          = htmlspecialchars(trim($_POST['age']          ?? ''));
$course       = htmlspecialchars(trim($_POST['course']       ?? ''));
$emailAddress = htmlspecialchars(trim($_POST['emailAddress'] ?? ''));
$gender       = htmlspecialchars(trim($_POST['gender']       ?? ''));
$bio          = htmlspecialchars(trim($_POST['bio']          ?? ''));
$hobbies      = $_POST['hobbies'] ?? [];

if (empty($name)) {
    header('Location: index.php');
    exit;
}

$upload_dir   = 'uploads/';
$profile_image = '';

if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0755, true);
}

if (isset($_FILES['profileImage']) && $_FILES['profileImage']['error'] === UPLOAD_ERR_OK) {
    $tmp      = $_FILES['profileImage']['tmp_name'];     
    $filename = basename($_FILES['profileImage']['name']);
    $safename = time() . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '_', $filename);
    $dest     = $upload_dir . $safename;

    if (move_uploaded_file($tmp, $dest)) {
        $profile_image = $dest;
    }
}


$initial = strtoupper(substr($name, 0, 1));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $name ?> — Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background-color: #e6dcdb;
            font-family: "Segoe UI", sans-serif;
        }

        h2 {
            font-family: "Verdana";
            font-weight: bold;
            color: #ffffff;
        }

        .col.mx-2.shadow.p-5 {
            border-radius: 10px;
            padding: 0 !important;
            overflow: hidden;
        }

        .profile-title-band {
            background-color: #482c3d;
            padding: 24px 32px 20px;
            text-align: center;
        }

        .profile-content {
            padding: 28px 32px;
        }

        .profile-photo {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid white;
        }

        .avatar-placeholder {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background-color: #bd8e89;
            color: white;
            font-size: 2.5rem;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 3px solid #482c3d;
        }

        .profile-photo-band {
            background-color: #bd8e89;
            padding: 24px;
            text-align: center;
        }

        .profile-photo-band h4 {
            color: #ffffff;
            font-weight: bold;
            margin-top: 10px;
            margin-bottom: 2px;
        }

        .profile-photo-band span {
            color: #bd8e89;
            font-size: 0.9rem;
        }

        .hobby-badge {
            display: inline-block;
            background-color: #e6dcdb;
            color: #482c3d;
            border: 1px solid #bd8e89;
            border-radius: 20px;
            padding: 3px 12px;
            font-size: 0.82rem;
            margin: 3px 2px;
        }

        .info-label {
            font-weight: 600;
            color: #482c3d;
            width: 140px;
        }

        .section-divider {
            border-top: 1px solid #b8d4e8;
            margin: 16px 0;
        }

        .info-section {
            background-color: #e6dcdb;
            border-radius: 8px;
            padding: 14px 16px;
        }

        .hobbies-section {
            background-color: #e6dcdb;
            border-radius: 8px;
            padding: 14px 16px;
        }

        .bio-section {
            background-color: #e6dcdb;
            border-left: 4px solid #482c3d;
            border-radius: 0 8px 8px 0;
            padding: 14px 16px;
        }

        .btn-outline-info {
            color: #ffffff;
            background-color: #482c3d;
            border-color: #482c3d;
            font-weight: 600;
        }

        .btn-outline-info:hover {
            background-color: #482c3d;
            border-color: #bd8e89;
            color: #ffffff;
        }
    </style>
</head>

<body>
    <div class="container my-5" style="max-width: 580px; background-color: white;">
        <div class="row">
            <div class="col mx-2 shadow p-5">

                <div class="profile-title-band">
                    <h2 class="mb-0">User Profile</h2>
                </div>

                <div class="profile-photo-band">
                    <?php if ($profile_image && file_exists($profile_image)): ?>
                        <img src="<?= htmlspecialchars($profile_image) ?>"
                             alt="Profile photo" class="profile-photo mb-3">
                    <?php else: ?>
                        <div class="avatar-placeholder mx-auto mb-3">
                            <?= $initial ?>
                        </div>
                    <?php endif; ?>

                    <h4 class="mb-0 fw-bold"><?= $name ?></h4>
                    <span><?= $course ?></span>
                </div>

                <div class="profile-content">

                    <div class="section-divider"></div>

                    <div class="info-section mb-3">
                        <table class="table table-borderless mb-0">
                            <tbody>
                                <tr>
                                    <td class="info-label">Full Name:</td>
                                    <td><?= $name ?></td>
                                </tr>
                                <tr>
                                    <td class="info-label">Age:</td>
                                    <td><?= $age ?> years old</td>
                                </tr>
                                <tr>
                                    <td class="info-label">Course / Program:</td>
                                    <td><?= $course ?></td>
                                </tr>
                                <tr>
                                    <td class="info-label">Email Address:</td>
                                    <td><?= $emailAddress ?></td>
                                </tr>
                                <tr>
                                    <td class="info-label">Gender:</td>
                                    <td><?= $gender ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="section-divider"></div>

                    <div class="hobbies-section mb-3">
                        <p class="fw-bold mb-2" style="color: #1B2A4A;">Hobbies</p>
                        <?php if (!empty($hobbies)): ?>
                            <?php foreach ($hobbies as $hobby): ?>
                                <span class="hobby-badge"><?= htmlspecialchars($hobby) ?></span>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <span class="text-muted">No hobbies selected.</span>
                        <?php endif; ?>
                    </div>

                    <div class="section-divider"></div>

                    <div class="mb-4">
                        <p class="fw-bold mb-2" style="color: #1B2A4A;">Short Biography</p>
                        <div class="bio-section">
                            <p class="text-muted mb-0" style="font-size: 0.95rem; line-height: 1.7;">
                                <?= $bio ?>
                            </p>
                        </div>
                    </div>

                    <div class="d-grid">
                        <a href="index.php" class="btn btn-outline-info">&#8592; Go Back to Form</a>
                    </div>

                </div>

            </div>
        </div>
    </div>

</body>
</html>