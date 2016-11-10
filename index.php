<!DOCTYPE html>
<html>
<head>
    <title>My bookings</title>
</head>
<body>
    <h1>My restaurant</h1>
    
    <h2>Book a table</h2>
    
    <!-- This is the booking form -->
    <form method="POST" action="book.php"/>
        <label>Name</label>
        <input type="text" name="NameBox" required/>
        <label>Date</label>
        <input type="date" name="DateBox" required/>
        <label>Time</label>
        <input type="time" name="TimeBox" required/>
        <!-- This allows us to check which type of form was used -->
        <input type="hidden" value="book" name="book"/>
        <input type="submit" value="book"/>
    </form>
    
    <h3>Search for booking</h3>
    
    <!-- This is the booking search -->
    
</body>
</html>
<?php

?>