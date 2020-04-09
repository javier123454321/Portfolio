<footer class="footer_area section_gap">
    <div class="container">
        <div class="row footer_inner justify-content-center">
            <div class="col-lg-6 text-center">
                    <div class="title">
                        <h3>Drop Me a Line:</h3> <br>
                    </div>
                    <div id="contact" class="contact_form">
                        <form action="contact.php" method="post">
                            Name: <br><input type="text" name="name"><br>
                            Email: <br><input type="text" name="email" required><br>
                            Message: <br><input type="textarea" wrap="hard" name="message"><br>
                            <input type="submit" value="Submit" name="contact-me">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php 
require(__DIR__."/../imports/scripts.php");
?>
    </body>
</html>