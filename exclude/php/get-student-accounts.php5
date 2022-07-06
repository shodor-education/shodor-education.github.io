<?php
header("Content-Type: text/plain");

include_once("helpers.php5");

$query = <<<END
SELECT Fname, Lname, ShortName
FROM Person
ORDER BY Lname
END;

$results = $mainDbConn->query($query);

while ($result = $results->fetch_assoc()) {
  echo <<<END
- first-name: "$result[Fname]"
  last-name: "$result[Lname]"
  short-name: "$result[ShortName]"

END;
}
?>

