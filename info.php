<!doctype html>
<html lang="en">
<head>
    <title>Contact Us</title>
    <?php include_once("nav.php")?>
    <main>
    
   <h2>Fill out this form in order to get in contact with us!</h2>
        <p>Fields marked * are mandatory.</p>
        <form id="userDetails" action="complete.php" method="post">
            <! - Action complete.php means that when the form is submitted, it will redirect to the file and then post means the data isnt sent via the url -->
            <fieldset>
                <legend>Personal Details:</legend>
                <div class="newRequest">
                <label for="firstName">First Name: *</label>
                <input type="text" name="firstName" placeholder="First Name" maxlength="25" required id="firstName" accesskey="n">
                
                <label for="surname">Surname: *</label>
                <input type="text" name="surname" placeholder="Surname" maxlength="25" required id="surname" accesskey="s">
                
                <label for="address">Postal Address:</label>
                <input type="text" name="address" placeholder="Address" maxlength="50" id="address" accesskey="a">
                
                <label for="number">Mobile Phone Number:</label>
                <input type="text" name="number" placeholder="Number starting with 0." maxlength="15" id="number" accesskey="p">
                
                <label for="email">Email Address:</label>
                <input type="email" name="email" placeholder="Email" maxlength="50" id="email" accesskey="e">
                </div>
            </fieldset>
            
            <fieldset>
                <legend>Further Information:</legend>
                <div class="newRequest">
                <label for="category">Chosen Interest: *</label>
                <select name="category" id="category" required accesskey="c">
                    <option value="" selected disabled hidden>Choose here</option>
                
                <?php
                    include 'database_conn.php';
                    $sql= "SELECT catDesc, catID FROM CT_category";
                    $queryResult = $dbConn->query($sql);

                    if($queryResult === false){
                        echo "<p>Query failed: ".$dbConn->error."</p>\n</body>\n</html>";
                exit;
                    }
                else{
                    while($rowObj = $queryResult->fetch_object()){
                    echo "<option value='{$rowObj->catID}' id='{$rowObj->catID}'>{$rowObj->catDesc}</option>\n";
                    }
                }
                ?>
            </select>
                <label for="contact">Your preferred method of contact: *</label>
                <select name="contact" id="contact" required accesskey="l">
                    <option value="" selected disabled hidden>Choose here</option>
                    <option value="post">Post</option>
                    <option value="emailMe">Email</option>
                </select>
                </div>
           </fieldset>
            <! - Above code is used to output the form onto webpage. The PHP code is used to fetch the category name and id via query from the database to output to the user -->
            <div class="newRequest">
            <input type="submit" value="Submit" class="submit">
            </div>
            
            
        </form>
    
        
    </main>
        
        
        
        
<?php include_once("footer.php")?>

