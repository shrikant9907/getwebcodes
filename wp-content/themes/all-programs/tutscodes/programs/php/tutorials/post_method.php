<form method="post">
    <input type="text" name="yourname" value="" />
    <button type="submit">Submit</button>
</form>

<?php
// We can accept the name with this code
if (isset($_POST['yourname'])) {
    $yourname = $_POST['yourname'];

    echo "Your name is $yourname";
}