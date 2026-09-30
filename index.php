<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Farm Cost & Profit Calculator</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>🌾 Farm Cost & Profit Calculator</h1>


    <form action="calculate.php" method="POST">

        <div class="form-grid">

            <!-- Farmer Name -->
            <div class="form-group">

                <label>Farmer Name</label>

                <input
                    type="text"
                    name="farmer_name"
                    placeholder="Enter farmer name"
                    required
                >

            </div>


            <!-- Crop Name -->
            <div class="form-group">

                <label>Crop Name</label>

                <input
                    type="text"
                    name="crop_name"
                    placeholder="Example: Paddy"
                    required
                >

            </div>


            <!-- Land Area -->
            <div class="form-group">

                <label>Land Area (Acres)</label>

                <input
                    type="number"
                    name="land_area"
                    step="0.01"
                    min="0"
                    placeholder="Example: 2"
                    required
                >

            </div>


            <!-- Seed Cost -->
            <div class="form-group">

                <label>Seed Cost (₹)</label>

                <input
                    type="number"
                    name="seed_cost"
                    step="0.01"
                    min="0"
                    placeholder="Enter seed cost"
                    required
                >

            </div>


            <!-- Fertilizer Cost -->
            <div class="form-group">

                <label>Fertilizer Cost (₹)</label>

                <input
                    type="number"
                    name="fertilizer_cost"
                    step="0.01"
                    min="0"
                    placeholder="Enter fertilizer cost"
                    required
                >

            </div>


            <!-- Pesticide Cost -->
            <div class="form-group">

                <label>Pesticide Cost (₹)</label>

                <input
                    type="number"
                    name="pesticide_cost"
                    step="0.01"
                    min="0"
                    placeholder="Enter pesticide cost"
                    required
                >

            </div>


            <!-- Labour Cost -->
            <div class="form-group">

                <label>Labour Cost (₹)</label>

                <input
                    type="number"
                    name="labour_cost"
                    step="0.01"
                    min="0"
                    placeholder="Enter labour cost"
                    required
                >

            </div>


            <!-- Irrigation Cost -->
            <div class="form-group">

                <label>Irrigation Cost (₹)</label>

                <input
                    type="number"
                    name="irrigation_cost"
                    step="0.01"
                    min="0"
                    placeholder="Enter irrigation cost"
                    required
                >

            </div>


            <!-- Other Cost -->
            <div class="form-group">

                <label>Other Cost (₹)</label>

                <input
                    type="number"
                    name="other_cost"
                    step="0.01"
                    min="0"
                    placeholder="Enter other cost"
                    required
                >

            </div>


            <!-- Expected Yield -->
            <div class="form-group">

                <label>Expected Yield (kg)</label>

                <input
                    type="number"
                    name="expected_yield"
                    step="0.01"
                    min="0"
                    placeholder="Example: 4000"
                    required
                >

            </div>


            <!-- Market Price -->
            <div class="form-group">

                <label>Market Price per kg (₹)</label>

                <input
                    type="number"
                    name="market_price"
                    step="0.01"
                    min="0"
                    placeholder="Example: 30"
                    required
                >

            </div>

        </div>


        <button type="submit">
            Calculate Profit
        </button>

    </form>

</div>

</body>

</html>