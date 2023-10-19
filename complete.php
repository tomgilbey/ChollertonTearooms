<!doctype html>
<html lang="en">
<head>
    <title>Submitted!</title>
    <?php include_once("nav.php")?>
        <main>
        <?php
            include 'database_conn.php';
            $_fname = isset($_POST['firstName']) ? $_POST['firstName']  : null;
            $_sname = isset($_POST['surname']) ? $_POST['surname']  : null;
            $_address = isset($_POST['address']) ? $_POST['address']  : null;
            $_number = isset($_POST['number']) ? $_POST['number']  : null;
            $_email = isset($_POST['email']) ? $_POST['email']  : null;
            $_category = isset($_POST['category']) ? $_POST['category']  : null;;
            $_contact = isset($_POST['contact']) ? $_POST['contact']  : null;
    
            echo'<!- Above code is used to set the values sent by the form to each variable and then if nothing was sent, set it to null.--->\n';
    
            $_fname = $dbConn->real_escape_string($_fname);
            $_sname = $dbConn->real_escape_string($_sname);
            $_address = $dbConn->real_escape_string($_address);
            $_number = $dbConn->real_escape_string($_number);
            $_email = $dbConn->real_escape_string($_email);
            $_category = $dbConn->real_escape_string($_category);
            $_contact = $dbConn->real_escape_string($_contact);
            
            echo'<!- Above code uses real escape string function to get rid of any special characters which have been sent via the form, to prevent attacks --->\n';        
            
            $sql="INSERT INTO CT_expressedInterest( forename, surname, postalAddress, mobileTelNo, email, sendMethod, catID) VALUES ('$_fname','$_sname','$_address','$_number','$_email','$_contact','$_category')";
            $submitDB = $dbConn->query($sql);
            
            if($submitDB === false){
                echo "<p>Query failed: ".$dbConn->error."</p>\n</body>\n</html>";
            }
    
             echo'<!- Above code inserts each value into the table in the database.  --->\n'; 
    
            $getCat= "SELECT catDesc FROM CT_category WHERE catID = '$_category'";
            $result = $dbConn->query($getCat);
            $cat = $result->fetch_array()[0];
            if($cat === false){
                echo "<p>Query failed: ".$dbConn->error."</p>\n</body>\n</html>";
            }
            
            echo "<h1>Form successfully uploaded!</h1>\n";
            echo "<p>We aim to contact you as soon as possible.</p>\n";
            
    
            echo "<p>First Name: $_fname</p>\n";
            echo "<p>Surname Name: $_sname</p>\n";
            echo "<p>Address: $_address</p>\n";
            echo "<p>Number: $_number</p>\n";
            echo "<p>Email: $_email</p>\n";
            echo "<p>Category: $cat</p>\n";
            echo "<p>Preferred Contact Method: $_contact</p>\n";
            
            $dbConn->close();
             echo'<!- Above code outputs the users inputted data onto the page for them to see. --->\n'; 
        ?>
        
            <a href="requests.php">Please click here to see your request on our website.</a>
            
        </main>
        <?php include_once("footer.php")?>
    