<?php
//include 'config.php';
?>
<?php
function get_cat()
{
    global $connection;
    $query1 = "SELECT id, title FROM categorie WHERE parent_id IS NULL";
    $result1 = mysqli_query($connection, $query1) or die('Error : ' . mysqli_error());
    while ($row1 = mysqli_fetch_array($result1)) {
        echo "<a class='btn btn-secondary dropdown-toggle' id='dropdownMenuLink' data-bs-toggle='dropdown' href='#' role='button' aria-expanded='false'>{$row1['id']}{$row1['title']}</a>";
        echo "<br>";
        get_parent_cat($row1['id']);
    }
}
function get_parent_cat ($id){
 global $connection;
    $query = "SELECT * FROM categorie WHERE parent_id = '$id'";
    $result = mysqli_query($connection, $query) or die('Error : ' . mysqli_error());
    echo "<ul class='dropdown-menu' aria-labelledby='dropdownMenuLink'>";
    while ($row = mysqli_fetch_assoc($result)) {
           echo "<li><a class='dropdown-item' href='#'>{$row['id']}{$row['title']}</a></li>";
    }
    echo "</ul>";
}


?>
