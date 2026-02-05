<?php
include 'db.php';

$query = $_GET['q'];  
$title = $_GET['title']; 

$result = $conn->query($query);
?>

<h2><?php echo $title; ?> Output</h2>

<table border="1" cellpadding="8">
<?php
if ($result) {
    echo "<tr>";
    while ($field = $result->fetch_field()) {
        echo "<th>{$field->name}</th>";
    }
    echo "</tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }
} else {
    echo "<tr><td>No result</td></tr>";
}
?>
</table>
