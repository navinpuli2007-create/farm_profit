<?php

include "db.php";


// Get form values
$farmer_name = $_POST['farmer_name'];
$crop_name = $_POST['crop_name'];
$land_area = $_POST['land_area'];

$seed_cost = $_POST['seed_cost'];
$fertilizer_cost = $_POST['fertilizer_cost'];
$pesticide_cost = $_POST['pesticide_cost'];
$labour_cost = $_POST['labour_cost'];
$irrigation_cost = $_POST['irrigation_cost'];
$other_cost = $_POST['other_cost'];

$expected_yield = $_POST['expected_yield'];
$market_price = $_POST['market_price'];


// Calculate total cost
$total_cost =
    $seed_cost +
    $fertilizer_cost +
    $pesticide_cost +
    $labour_cost +
    $irrigation_cost +
    $other_cost;


// Calculate revenue
$revenue = $expected_yield * $market_price;


// Calculate profit
$profit = $revenue - $total_cost;


// Calculate profit percentage
if ($total_cost > 0) {

    $profit_percentage = ($profit / $total_cost) * 100;

} else {

    $profit_percentage = 0;

}


// Save data into database
$sql = "INSERT INTO farm_records
(
    farmer_name,
    crop_name,
    land_area,
    seed_cost,
    fertilizer_cost,
    pesticide_cost,
    labour_cost,
    irrigation_cost,
    other_cost,
    expected_yield,
    market_price,
    total_cost,
    revenue,
    profit
)
VALUES
(
    '$farmer_name',
    '$crop_name',
    '$land_area',
    '$seed_cost',
    '$fertilizer_cost',
    '$pesticide_cost',
    '$labour_cost',
    '$irrigation_cost',
    '$other_cost',
    '$expected_yield',
    '$market_price',
    '$total_cost',
    '$revenue',
    '$profit'
)";


$result = mysqli_query($conn, $sql);


// Check database result
if (!$result) {

    die("Data could not be saved. Error: " . mysqli_error($conn));

}

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Farm Profit Result</title>

    <link rel="stylesheet" href="style.css">

</head>


<body>


<div class="container result-container">

    <h1>🌾 Farm Profit Result</h1>


    <!-- Farmer Details -->

    <div class="result-box">

        <h2>Farm Details</h2>

        <div class="result-item">

            <strong>Farmer Name:</strong>

            <?php echo htmlspecialchars($farmer_name); ?>

        </div>


        <div class="result-item">

            <strong>Crop Name:</strong>

            <?php echo htmlspecialchars($crop_name); ?>

        </div>


        <div class="result-item">

            <strong>Land Area:</strong>

            <?php echo number_format($land_area, 2); ?>

            acres

        </div>

    </div>


    <!-- Cost Details -->

    <div class="result-box">

        <h2>Cost Details</h2>


        <div class="result-item">

            <strong>Seed Cost:</strong>

            ₹<?php echo number_format($seed_cost, 2); ?>

        </div>


        <div class="result-item">

            <strong>Fertilizer Cost:</strong>

            ₹<?php echo number_format($fertilizer_cost, 2); ?>

        </div>


        <div class="result-item">

            <strong>Pesticide Cost:</strong>

            ₹<?php echo number_format($pesticide_cost, 2); ?>

        </div>


        <div class="result-item">

            <strong>Labour Cost:</strong>

            ₹<?php echo number_format($labour_cost, 2); ?>

        </div>


        <div class="result-item">

            <strong>Irrigation Cost:</strong>

            ₹<?php echo number_format($irrigation_cost, 2); ?>

        </div>


        <div class="result-item">

            <strong>Other Cost:</strong>

            ₹<?php echo number_format($other_cost, 2); ?>

        </div>


        <div class="total-cost">

            Total Cost:

            ₹<?php echo number_format($total_cost, 2); ?>

        </div>

    </div>


    <!-- Revenue Details -->

    <div class="result-box">

        <h2>Revenue Details</h2>


        <div class="result-item">

            <strong>Expected Yield:</strong>

            <?php echo number_format($expected_yield, 2); ?>

            kg

        </div>


        <div class="result-item">

            <strong>Market Price:</strong>

            ₹<?php echo number_format($market_price, 2); ?>

            / kg

        </div>


        <div class="revenue">

            Expected Revenue:

            ₹<?php echo number_format($revenue, 2); ?>

        </div>

    </div>


    <!-- Profit / Loss -->

    <?php if ($profit > 0) { ?>

        <div class="profit">

            🎉 Estimated Profit

            <br>

            ₹<?php echo number_format($profit, 2); ?>

            <br>

            <span>
                Profit Percentage:
                <?php echo number_format($profit_percentage, 2); ?>%
            </span>

        </div>


    <?php } elseif ($profit < 0) { ?>

        <div class="loss">

            ⚠️ Estimated Loss

            <br>

            ₹<?php echo number_format(abs($profit), 2); ?>

            <br>

            <span>
                Loss Percentage:
                <?php echo number_format(abs($profit_percentage), 2); ?>%
            </span>

        </div>


    <?php } else { ?>

        <div class="no-profit">

            No Profit / No Loss

        </div>

    <?php } ?>


    <a href="index.php" class="back-link">

        ← Calculate Again

    </a>


</div>


</body>

</html>