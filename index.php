<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erilda's Task</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- STEP 1: -->
<div class="container" id="step1">
    <h1>What Is The Best Time To Reach You?</h1>
    <select id="time-select">
        <option value="" disabled selected>Choose Your Time</option>
        <option>8AM CST</option>
        <option>10AM CST</option>
        <option>11AM CST</option>
        <option>12PM CST</option>
        <option>1PM CST</option>
        <option>2PM CST</option>
        <option>3PM CST</option>
        <option>4PM CST</option>
        <option>5PM CST</option>
    </select>
    <p>(All times are in CST)</p>
    <button id="continue-btn" disabled>CONTINUE &#9654;</button>
</div>

<!-- STEP 2: -->
<div class="container" id="step2" style="display:none;">
    <h1>Add your personal details</h1>
    <form id="user-form">

        <input type="text" id="first-name" placeholder="First Name" required><br><br>

        <input type="text" id="last-name" placeholder="Last Name" required><br><br>

        <input type="email" id="email" placeholder="Email" required><br><br>

        <input type="tel" id="phone" placeholder="Phone number" required><br><br>

        <div id='terms-box'>
            <input type="checkbox" id="terms" required>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente delectus rerum obcaecati ab, repudiandae in ducimus praesentium qui totam, provident expedita doloremque incidunt animi explicabo harum fugiat iure aliquid laboriosam!</p>
        </div><br><br>

        <button type="submit">SUBMIT YOUR DETAILS &#9654;</button>
    </form>
</div>

<!-- STEP 3: -->
<div class="container" id="step3" style="display:none;">
    <h1>Summary</h1>
    <p><strong>Selected Time:</strong> <span id="display-time"></span></p>
    <p><strong>First Name:</strong> <span id="display-first-name"></span></p>
    <p><strong>Last Name:</strong> <span id="display-last-name"></span></p>
    <p><strong>Email:</strong> <span id="display-email"></span></p>
    <p><strong>Phone Number:</strong> <span id="display-phone"></span></p>
    <p><strong>Terms and Conditions:</strong> <span id="display-terms"></span></p>
    <button onclick="window.location.reload()">Start Over</button>
</div>


<?php include 'footer.php'; ?>
<script src="script.js"></script>
</body>
</html>