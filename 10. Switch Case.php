<form action="" method="post">
    <input type="text" placeholder="Enter Your Name" name="name">
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

<?php

if (isset($_REQUEST['submit'])) {
    $x = $_REQUEST['name'];

    switch ($x) {
        case 'Pathik':
            echo "He is a Developer";
            break;
        case 'Salman':
            echo "He is Actor";
            break;
        case 'Deepika':
            echo "She is Actress";
            break;
        case 'Siraj':
            echo "He is Our Indian Team Bowler";
            break;
        case 'Virat':
            echo "He is Our Indian Team Batsman";
            break;

        default:
            echo "Please Valid Name";

            break;
    }
}




?>