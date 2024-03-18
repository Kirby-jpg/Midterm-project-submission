<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Tickets</title>
    <link rel="stylesheet" href="styles3.css">
</head>
<body>
    <header>
        <h1>Welcome to Barcelona FC Ticketing System</h1>
    </header>
    
    <main>
        <section class="match-schedule">
            <h2>Match Schedule</h2>
            <!-- Match schedule table can be added here -->
            <p>Next Match: Barcelona vs. Real Madrid - Date: XX/XX/XXXX</p>
        </section>
        
        <section class="seat-availability">
            <h2>Seat Availability</h2>
            <!-- Seat availability grid or selection options can be added here -->
            <p>Select your preferred seats:</p>
            <button class="button">View Available Seats</button>
        </section>
        
        <section class="payment-info">
            <h2>Enter Payment Info</h2>
            <!-- Payment information form can be added here -->
            <form action="#">
                <label for="cardNumber">Card Number:</label><br>
                <input type="text" id="cardNumber" name="cardNumber"><br>
                <label for="expirationDate">Expiration Date:</label><br>
                <input type="text" id="expirationDate" name="expirationDate"><br>
                <label for="cvv">CVV:</label><br>
                <input type="text" id="cvv" name="cvv"><br>
                <input type="submit" value="Submit Payment">
            </form>
        </section>
        
        <section class="save-payment-info">
            <h2>Save Payment Info</h2>
            <!-- Option to save payment information can be added here -->
            <p>Would you like to save your payment information for future purchases?</p>
            <button class="button">Save Payment Info</button>
        </section>
    </main>
    
    <footer>&copy; 2024 Barcelona FC. All rights reserved.</footer>
</body>
</html>
