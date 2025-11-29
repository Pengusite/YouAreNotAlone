<!--Catanghal, Justine Chollo C | CYB 201-->

<?php
$shop_title = "PokéMart PH";
$story = "PokéMart PH was born in the Angeles City. It started as a humble side hustle by a college student trying to balance tuition fees and a passion for TCG. 
What began with selling a few duplicate cards from a dorm room has now evolved into one of the region's most trusted hubs for collectors.";
// Associative Array for Team
$team = [
    "Justine Catanghal" => "Founder & CEO",
    "Kyzer Canicosa" => "Head Grader",
    "Cedric Palo" => "Logistics Manager",
    "Angel Pineda" => "Social Media"
];

$faqs = [
    "Do you accept trades?" => "Yes, purely for sealed products.",
    "How long is shipping?" => "1-2 Days Metro Manila, 3-5 Days Provincial.",
    "Is this legit?" => "100% Guaranteed authentic."
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | <?= $shop_title ?></title>
    <link rel="stylesheet" href="css/pokemon.css">
    <style>
        .role-card { background: #f9f9f9; padding: 10px; margin: 5px 0; border-left: 5px solid #ffcb05; }
        .faq-box { margin-bottom: 15px; border-bottom: 1px dashed #ccc; padding-bottom: 10px; }
    </style>
</head>
<body>
    <div class="container">
        <?php include 'include/header.php'; ?>

        <h1 style="color:#CC0000; -webkit-text-stroke: 1px black;">Our Story</h1>
        <p style="font-size: 1.1em; line-height: 1.6; text-align: justify;"><?= $story ?></p>

        <h2 style="border:none; margin-top: 40px;">Meet the Team</h2>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">
            <?php foreach($team as $name => $role): ?>
                <div class="role-card">
                    <strong><?= $name ?></strong><br>
                    <span style="color: gray;"><?= $role ?></span>
                </div>
            <?php endforeach; ?>
        </div>

        <h2 style="border:none; margin-top: 40px;">Frequently Asked Questions</h2>
        <?php foreach($faqs as $q => $a): ?>
            <div class="faq-box">
                <h3 style="margin: 0; color: #3B4CCA;">Q: <?= $q ?></h3>
                <p style="margin: 5px 0;">A: <?= $a ?></p>
            </div>
        <?php endforeach; ?>

        <?php include 'include/footer.php'; ?>
    </div>
</body>
</html>