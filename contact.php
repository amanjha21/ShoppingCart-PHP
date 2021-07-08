<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/header.css">
</head>
<body>
    <?php require_once ("php/header.php"); ?>
    <div class="container">
        <h1>Connect With Us</h1>
        <br>
        <br>
        <p>We would love to respond to your queries and help <br>you succed. Feel free to get in touch with us.</p>

        <div class="contact-box">
            <div class="contact-left">
                <h3>Send your request</h3>
                <form>
                    <div class="input-row">
                        <div class="input-group">
                            <label>Name</label>
                            <input type="text" placeholder="XYZ">

                        </div>
                        <div class="input-group">
                            <label>Phone</label>
                            <input type="text" placeholder="+91 **********" >


                        </div>
                    </div>
                    <div class="input-row">
                        <div class="input-group">
                            <label>Email-id</label>
                            <input type="email" placeholder="XYZ14@gmail.com">

                        </div>
                        <div class="input-group">
                            <label>Subject</label>
                            <input type="text" placeholder="Product demo" >
                            

                        </div>
                    </div>
                    <label>Feedback</label>
                    <textarea  rows="5" placeholder="Drop your message here"></textarea>
                    <button class="send-button" type="submit">Send</button>
                </form>


            </div>
            <div class="contact-right">
                <h3>Reach Us</h3>
                <table>
                    <tr>
                        
                        <td>Email-id</td>
                        <td>contactus@mykart.com</td>
                    
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>+91 8459434694</td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>594, Ground floor, Ville parle <br>
                        Adarsh road, Mumbai 431001
                    </td>
                    </tr>
                    
                </table>

            </div>
        </div>
    </div>
</body>
</html>