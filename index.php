<?php require 'calculate.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Age Calculator</title>
    <link rel="stylesheet" href="style.css" />
    <script src="https://kit.fontawesome.com/defbdbe434.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <h1>Let's Find Out Your Age!</h1>

        <form action="" method="post">
            <div class="input-group">
                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob" value="<?php echo htmlspecialchars($dob); ?>" required />
            </div>

            <div class="input-group">
                <label for="current-date">Current Date</label>
                <input type="date" id="current-date" name="current_date"
                    value="<?php echo htmlspecialchars($current_date); ?>" required />
            </div>

            <div class="buttons">
                <button type="submit">
                    <i class="fa-solid fa-calculator"></i> Calculate
                </button>
                <button type="reset" onclick="window.location.href='index.php';">
                    <i class="fas fa-recycle"></i> Reset
                </button>
            </div>
        </form>

        <?php if (!empty($error)) : ?>
        <p style="color: red;"><?php echo $error; ?></p>
        <?php endif; ?>

        <div class="years">
            <div>
                <strong><?php echo $years; ?></strong> Years
            </div>
            <div>
                <strong><?php echo $months; ?></strong> Months
            </div>
            <div>
                <strong><?php echo $days; ?></strong> Days
            </div>
        </div>
    </div>
</body>

</html>