<?php 
 
// Load the database configuration file 
// Database configuration 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname);

 
// Check connection 
if ($db->connect_error) { 
    die("Connection failed: " . $db->connect_error); 
}
 
// Fetch records from database 
$query = $db->query("SELECT * FROM demo ORDER BY id ASC");
 
if($query->num_rows > 0){ 
    $delimiter = ","; 
    $filename = "aam_2" . date('Y-m-d') . ".csv"; 
     
    // Create a file pointer 
    $f = fopen('php://memory', 'w'); 
     
    // Set column headers 
    $fields = array('id', 'name', 'phone','email','designation','location','interest','linkage' ); 

    fputcsv($f, $fields, $delimiter); 
     
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = $query->fetch_assoc()){ 
               // $status = ($row['name'] == 1)?'Active':'Inactive'; 
                $lineData = array($row['id'], $row['name'], $row['phone'] ,$row['email'], $row['designation'], $row['location'], $row['interest'],
                $row['linkage']); 
                fputcsv($f, $lineData, $delimiter); 
            } 
    
    // $query = $db->query("SELECT * FROM demo ORDER BY id ASC");
    // if($query->num_rows > 0){ 
    //     $delimiter = ","; 
    //     $filename = "aam_2" . date('Y-m-d') . ".csv"; 
         
    //     // Create a file pointer 
    //     $f = fopen('php://memory', 'w'); 
         
    //     // Set column headers 
    //     $fields = array('id', 'name', 'phone','email','designation','location','interest','linkage' ); 
    
    //     fputcsv($f, $fields, $delimiter); 
         
    //     // Output each row of the data, format line as csv and write to file pointer 
    //     while($row = $query->fetch_assoc()){ 
    //        // $status = ($row['name'] == 1)?'Active':'Inactive'; 
    //         $lineData = array($row['id'], $row['name'], $row['phone'] ,$row['email'], $row['designation'], $row['location'], $row['interest'],
    //         $row['linkage']); 
    //         fputcsv($f, $lineData, $delimiter); 
    //     } 
    // }


     
     
    // Move back to beginning of file 
    fseek($f, 0); 
     
    // Set headers to download file rather than displayed 
    header('Content-Type: text/csv'); 
    header('Content-Disposition: attachment; filename="' . $filename . '";'); 
     
    //output all remaining data on a file pointer 
    fpassthru($f); 
} 
exit; 
 
?>