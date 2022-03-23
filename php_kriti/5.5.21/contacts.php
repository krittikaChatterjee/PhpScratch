<!DOCTYPE html>
<html>
<head>
        <?php include('assert/plugins.php'); ?>
        <title>Welcome</title>
</head>
<body>

           <?php include('assert/header.php'); ?>

           <?php include("assert/menu.php"); ?>
        
        <main class="row">
                  <div class="col-lg-6 border-right">
                          <!--Google Map will appear here -->
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3685.053667478234!2d88.33999141479138!3d22.5396622851997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02773fe291de33%3A0x6e7b66863150f953!2sIPGME%26R%20and%20SSKM%20Hospital%20Kolkata%20(%20PG%20Hospital%20)!5e0!3m2!1sen!2sin!4v1620203446016!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                  </div>
                  <div class="col-lg-6">
                        <iframe width="600" height="450" src="https://www.youtube.com/embed/g3adVyBz8Hc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>

        </main>

           <?php include("assert/footer.php"); ?>   

</body>
</html>