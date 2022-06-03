<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Docker site</title>
    <link rel="stylesheet" href="./css/style.css" />
  </head>
  <body>
    <div id="root"></div>
    <div>
      <?php
        echo "PHP string: 'Welcome to PHP " . phpversion() . "'";

        $dsn = "mysql:dbname=DockerDB;host=mysql";
        $pdo = new PDO(
          $dsn,
          "user",
          "userpass"
        );
        $query = $pdo->query("SELECT VERSION()");
        $row = $query->fetch();
      ?>
    </div>
    <div>
      <?php
        preg_match('/^[\.\d]+/',$row[0],$matches);
        $version = $matches[0];
        echo "MySQL string: 'Welcome to MySQL " . $version . "'";
      ?>
    </div>
    <script src="bundle.js"></script>
  </body>
</html>
