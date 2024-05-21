<form action="" method="post">
    <input type="number" placeholder="Enter Your Marks" name="marks">
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

<?php



// echo "<pre>";
// print_r($_REQUEST);
// echo "</pre>";

if (isset($_REQUEST['submit'])) {
    $x = $_REQUEST['marks'];

    if ($x >= 0 && $x <= 33) {
        echo "you are Fail in Maths Subject";
    } else if ($x >= 34 && $x <= 60) {
        echo "You passing with second class";
    } else if ($x >= 61 && $x <= 80) {
        echo "You passing with First class";
    } else if ($x >= 81 && $x <= 100) {
        echo "You passing with Distinction You are a Rising Star";
    } else {
        echo "Please Valid Enter Number";
    }
}




?>