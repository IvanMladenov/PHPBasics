<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="calculateInterest.php" method="post">
            <label>Enter Amount</label>
            <input type="number" name="amount"  required="required"><br>
            <label>USD</label>
            <input type="radio" name="currency" value="USD" required="required">
            <label>EUR</label>
            <input type="radio" name="currency" value="EUR">
            <label>BGN</label>
            <input type="radio" name="currency" value="BGN"><br>
            <label>Compound interest amount</label>
            <input type="number" name="interest-amount" required="required"><br>
            <select name="period" required="required">
                <option value="6">6 months</option>
                <option value="12">1 year</option>
                <option value="24">2 years</option>
                <option value="60">5 years</option>           
            </select>
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>
