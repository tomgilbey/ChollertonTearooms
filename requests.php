<!doctype html>
<html lang="en">
<head>
    <title>View requests</title>
    <?php include_once("nav.php")?>
    <main>
    
        <?php
            include 'database_conn.php';
                echo "<!--Above code includes the php file that establishes connection with DB-->\n";
    
            $sql= "SELECT forename, surname, postalAddress, mobileTelNo, email, sendMethod, catDesc FROM CT_expressedInterest join CT_category on CT_expressedInterest.catID = CT_category.catID ORDER BY surname";
                echo "<!--Above code creates php variable, value is a sql query to return the required values from the table expressedInterest with category getting joined. The catID of each tables are matched to match the category IDs. Ordered by surname-->\n";
    
            $queryResult = $dbConn->query($sql);
                echo "<!--Above code uses variable from php file that establishes connection to DB and runs the query against the DB. Stores result in variable.-->\n";
            if($queryResult === false){
                echo "<p>Query failed: ".$dbConn->error."</p>\n</body>\n</html>";
           exit;
                echo "<!--Above code checks if the query failed, if it did, the reason is outputted.-->\n";
            }
            else {
                echo "<div class='resultsScroll'>\n";
                echo "<table class='requestTable' >\n";
                echo "<thead>\n<tr>\n";
                echo "<th>Forename</th>\n"; 
                echo "<th>Surname</th>\n";
                echo "<th>Mobile Number</th>\n"; 
                echo "<th>Email</th>\n";
                echo "<th>Send Method</th>\n";
                echo "<th>Category</th>\n";
                echo "</tr>\n</thead>\n";
                echo "<tbody>\n";
                    echo "<!--Above code creates a div which contains a table with headings of values from table. The CSS makes the table in a box which stays the same size on mobile so you can scroll.-->\n";
                
                while($rowObj = $queryResult->fetch_object()){

                    echo "<tr>\n";
                    echo "<td>{$rowObj->forename}</td>\n"; 
                    echo "<td>{$rowObj->surname}</td>\n";
                    echo "<td>{$rowObj->mobileTelNo}</td>\n"; 
                    echo "<td>{$rowObj->email}</td>\n";
                    echo "<td>{$rowObj->sendMethod}</td>\n";
                    echo "<td>{$rowObj->catDesc}</td>\n";
                    echo"</tr>\n";
                        echo "<!--Above code outputs every row of data gathered from the query into the table.-->\n";
                    

         }
                echo "</tbody>\n";
                echo "</table>\n";
                echo "</div>\n";

            }
      $queryResult->close();
      $dbConn->close();
            echo "<!--Above code unassigns the variable which contains result of query and then closes connection to DB.-->\n";


        ?>
</main>
    
<aside>
    <h1>Please don't hesitate to contact us if you would like any further information.</h1>
    <a class= "asideLink" href="info.php">Click here to fill out a form to contact us.</a>
</aside>
    <!--Above code links to info page for if the user wishes to contact the company.-->
    
    
    
    
    <?php include_once("footer.php")?>