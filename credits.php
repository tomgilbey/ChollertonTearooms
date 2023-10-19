<!doctype html>
<html lang="en">
<head>
    <title>Chollerton Tearooms</title>
    <?php include_once("nav.php")?>
    <main>
    <div>
        <h1>Credits</h1>
            <h2>Student details:</h2>
            <p>Tom Gilbey</p>
            <p>W22002938</p>
            <p>w22002938@northumbria.ac.uk</p>
    </div>
   
    <div>
        <h2>Security considerations</h2>    
        <p>It is important for me to consider the security of the website. This is important for the sake of the customer and me, as the host. The website needs to enforce the following properties: confidentiality, integrity and availability. At the moment, the website only requires basic information from the customers, and so the data held on the database doesn't need to be as secure as it's not information such as addresses, payment information, passwords. If the site was to be updated with these, I would have to ensure the database is secure. If I were to store passwords in the future, I would need to store salted hashed passwords, which would make it more difficult for hackers to steal this data. Online, I found that you should take a random Salt and flip some bits in it, then use the SHA-256 hash of the salt and the password. Then it would flip a different set of bits of the salt and then compute the SHA-256 hash of the result. This would mean I hash a key plus the message, then rehash a permuted version of the key plus the first hash. I also should ensure input validation and sanitisation is used as it is critical in: preventing database (SQL) injection and preventing tampering / injection into later page generation e.g., cross-site request forgery (CSRF). Validation checks if the input meets the criteria and should be done client and server side in order to ensure no one bypasses the client side validation; I use POST to collect the form data after submitting the Find out more form as it doesn't use the website URL to send the details and so the user cannot input any incorrect data through the URL. I then use basic sanitisation to modify the input to ensure it is valid by using the php function: real escape string. This function adds an escape character before potentially dangerous characters in a string passed into the function, this is done to prevent SQL injection attacks which are often performed by using the ' character to append malicious code to an SQL query.</p>

        <p>Another security issue that could arise is the use of HTTP over HTTPS. HTTPS uses TLS (SSL) in order to encrypt any HTTP requests and responses. I should redirect HTTP to HTTPS or even reject HTTP in order to keep the website secure. Another potential security risk I should consider is where the servers are, for example they should be on a secure site so people cannot compromise them. I should also consider encryption at rest and in transit. Encryption of entire databases, or even certain tables and columns should be used in order to keep data secure. I should also consider the encryption of removable media or computer hard drives in case the server is compromised. Multibyte encoding has been used in the past to bypass input validation functions and carry out cross site scripting and SQL injection attacks. So I would need to ensure this isn't possible on the website. In order to ensure the website can stay up constantly, I could use backups so the data stored is safe. There are also DDoS attacks which are possible and need to be considered. This is a Distributed Denial of Service attack, where the server is flooded with internet traffic. This may prevent users from accessing the website. I should conduct a risk assesment for this and find out the must vulnerable segments of the website to lessen the damage.</p>
    </div>
        
        
     <!- Above code is my security recommendations paragraphs. ->   
        
    </main>
    <aside>
        <div>
            <h1>Acknowledgements</h1>
            <h3>Some of my graphics were found online, here I will cite them in alphabetic order (based on author's surname):</h3>
            <ul>
                <li>
                    <h4>Tearoom Image</h4>
                    <p>donterase (Username) (2015) Cafe Restaurant Fancy, Pixabay. Available at: https://pixabay.com/photos/cafe-restaurant-fancy-style-789635/ (Accessed: April 19, 2023).</p>
                    <img src="tearooms.jpg" alt="Image of our tearoom facilities.">
                </li>
                
                <li>
                    <p>Ducklin, P. (2022) Serious security: How to store your users' passwords safely, Naked Security. Paul Ducklin. Available at: https://nakedsecurity.sophos.com/2013/11/20/serious-security-how-to-store-your-users-passwords-safely/ (Accessed: April 26, 2023). </p>
                </li>
                
                <li>
                    <h4>Lato Font</h4>
                    <p>Dziedzic, Ł. (2010) “Lato.” https://fonts.google.com/specimen/Lato: Google Fonts. </p>
                </li>
                
                <li>
                    <p>Fortinet (no date) What is a ddos attack? ddos meaning, definition & types, Fortinet. Available at: https://www.fortinet.com/resources/cyberglossary/ddos-attack#:~:text=DDoS%20Attack%20Meaning,connected%20online%20services%20and%20sites. (Accessed: April 26, 2023). </p>
                </li>
                <li>
                    <h4>Logo</h4>
                    <p>I created my own logo on a website.</p>
                    <p>Gilbey, T. (2023) Logo for Chollerton Tearooms. Created Using FreeLogoDesign, FreeLogoDesign. Available at: https://www.freelogodesign.org/ (Accessed: March 20, 2023).</p>
                    <img src="chollertontearoomslogo.png" alt="Chollerton Tearooms Logo">
                    </li>
                
                <li>
                    <h4>Village Store Image</h4>
                    <p>kasjanf (Username) (2019) Girl Shop Souvenirs, Pixaby. Available at: https://pixabay.com/photos/girl-shop-souvenirs-woman-shelf-4181395 (Accessed: April 19, 2023).</p>
                    <img src="store.jpg" alt="Image of our village store.">
                </li>
                
                <li>
                    <h4>Post Office Image</h4>
                    <p>Museums of History New South Wales (2023) a black and white photo of a bar in a building photo, Unsplash. Available at: https://unsplash.com/photos/aymzmBAJGJM (Accessed: April 19, 2023).</p>
                    <img src="postoffice.jpg" alt="Image of our post office.">
                </li>
                
                
                <li>
                
                <p>OWASP (no date) WSTG - stable, WSTG - Stable | OWASP Foundation. Available at: https://owasp.org/www-project-web-security-testing-guide/stable/6-Appendix/D-Encoded_Injection (Accessed: April 26, 2023). </p>
                </li>
                <li>
                    <h4>BNB Image</h4>
                    <p>PublicDomainArchive (Username) (2014) Bedroom Sleeping Room Bed, Pixabay. Available at: https://pixabay.com/photos/bedroom-sleeping-room-bed-furniture-349698/ (Accessed: April 19, 2023).</p>
                    <img src="bnb.jpg" alt="Image of one of the Bed & Breakfast Rooms.">
                </li>
                
                <li>
                    <h4>Venue Image</h4>
                    <p>Savage, A. (2017) white table with white table clothes lot photo, Unsplash. Available at: https://unsplash.com/photos/zNsSwsuyP3A (Accessed: April 19, 2023).</p>
                    <img src="venue.jpg" alt="Image of our function room decorated for a wedding.">
                </li>
                
                <li>
                    <h4>Craft Shop Image</h4>
                    <p>Ybema, J. (2020) brown wooden shelf with assorted ornaments photo, Unsplash. Available at: https://unsplash.com/photos/DbQQvcWxYXA (Accessed: April 19, 2023).</p>
                    <img src="craft.jpg" alt="Image of our craft shop.">
                </li>
                
                <!-Above code is my acknowledgements where i have used Harvard referencing.->
            </ul>    
        </div>
    </aside>

    <?php include_once("footer.php")?>
   