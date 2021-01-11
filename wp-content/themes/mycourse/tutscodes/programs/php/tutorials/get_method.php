<form method="get">
    <input type="text" name="yourname" value="" />
    <button type="submit">Submit</button>
</form>

<?php
// We can accept the name from the query string
if (isset($_GET['yourname'])) {
    $yourname = $_GET['yourname'];

    echo "Your name is $yourname";
}