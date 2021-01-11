<!-- get or post both can be used for sending data -->
<form method="post">
    <input type="text" name="yourname" value="" />
    <button type="submit">Submit</button>
</form>

<?php
// We can accept the name with this code
if (isset($_REQUEST['yourname'])) {
    $yourname = $_REQUEST['yourname'];

    echo "Your name is $yourname";
}