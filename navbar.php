<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- UGAWall and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?php
      session_start();
      if(isset($_SESSION['id'])) {
          echo "<a class=\"pull-left\" href=\"index.php\"><img src=\"UGAWALL_Logo.png\" alt=\"UGA Wall Logo\" style=\"height:52px\"></img></a>";
      }
      else {
          echo "<a class=\"pull-left\" href=\"landingPage.html\"><img src=\"UGAWALL_Logo.png\" alt=\"UGA Wall Logo\" style=\"height:52px\"></img></a>";
      }
      ?>
    </div>
    <?php
        if(isset($_SESSION['id'])) {
            echo "<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">";
              echo "<form class=\"navbar-form navbar-left\" role=\"search\">";
                echo "<div class=\"form-group\">";
                  echo "<input type=\"text\" class=\"form-control\" placeholder=\"Search\">";
                echo "</div>";
                echo "<button type=\"submit\" class=\"btn btn-default\">Submit</button>";
              echo "</form>";
              echo "<ul class=\"nav navbar-nav navbar-right\">";
                echo "<li><p style=\"color:white;position:relative;padding:15px 15px;\">Hello, {$_SESSION['user']}!</p></li>";
                echo "<li><a href=\"logout.php\">Logout</a></li>";
              echo "</ul>";
            echo "</div>";
            echo "</div>";
        }
        else {
            echo "<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">";
              echo "<form class=\"navbar-form navbar-left\" role=\"search\">";
                echo "<div class=\"form-group\">";
                  echo "<input type=\"text\" class=\"form-control\" placeholder=\"Search\">";
                echo "</div>";
                echo "<button type=\"submit\" class=\"btn btn-default\">Submit</button>";
              echo "</form>";
              echo "<ul class=\"nav navbar-nav navbar-right\">";
                echo "<li><a href=\"login.php\">Login</a></li>";
                echo "<li><a href=\"register.php\">Register</a></li>";
              echo "</ul>";
            echo "</div>";
            echo "</div>";
        }
    ?>
</nav>