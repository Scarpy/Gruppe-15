<?php
require 'core/database/db.php';

if(isset($_GET['avstand'])){
    $avstand = $_GET['avstand'];
    
    $sql = "SELECT * FROM utesteder WHERE avstand <= $avstand";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "  ".$row["id"]."  ".$row["avstand"]."  ".$row["pris"]."<br>";
        }
    }
    else {
        echo "0 results";
    }
    
    /*
    try {
        $sql = "SELECT * FROM utesteder WHERE avstand < $avstand";
        $stmt = $database->prepare($sql);
        $stmt->excute();
        $result 
    }
    */
}


?>
<?php
    require 'core/init.php';
    echo Init::header();
?>

<body>
<?php 
    
    
    
?>

<?php
	require 'core/init.php';
    echo Init::footer();
