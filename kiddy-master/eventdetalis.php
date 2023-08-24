<?php
include('../database.php');

              // Process form data
                                if (isset( $_POST["bttn"])) {

                                    $comment = $_POST["comment"];
                                    $name = $_POST["name"];

                                    
                                    $sql = "INSERT INTO testimonial (name, comentes ) VALUES ( '$name','$comment')";

                                    if (mysqli_query($conn, $sql)) { 
                                        // echo "<h1>New Record Inserted successfully!</h1><br>";
                                        header('Location: ./index.php');
                                        exit();
                                    } else {
                                        echo "Error: " . $stmt->error;
                                    }
                                }



              ?>
