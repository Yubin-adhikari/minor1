<?php
include 'db_conn.php';
?>

</body>
</html>

<form action="bookinghandler.php" method="post">

<br>
<h1> DEPARTMENT</h1>
<h3>CARDIO</h3><input type="radio" name="department" value="cardiologist" required><br>
<H3>PHYSICIAN</H3><input type="radio" name="department" value="physician" required><br>

<br>

<label for="appointment_time"><h1>Select appointment time:</h1></label>
<input type="time" id="appointment_time" name="appointment_time" min="09:00" max="18:00" required>
<br>
<label for="appointment_date"><h1>Select appointment date:</h1></label>
<input type="date" id="appointment_date" name="appointment_date" min="2024-04-22" required>



<input type="submit" name="search" value="search doctors" />
</form>