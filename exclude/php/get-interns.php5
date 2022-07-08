<?php
header("Content-Type: text/plain");

include_once("helpers.php5");

for ($currentYear = 2003; $currentYear <= 2022; $currentYear++){
  $query = <<<END
    SELECT
      Student.ShortName
    , Schools.SchoolName
    , Positions.Year
    , CONCAT(
      Mentor.Fname
      , " "
      , Mentor.Lname
    ) AS MentorName
    , Positions.Projects
    FROM Positions
    LEFT JOIN Person AS Student ON Student.Id = Positions.PersonId
    LEFT JOIN Schools ON Schools.Id = Positions.SchoolId
    LEFT JOIN Person AS Mentor ON Mentor.Id = Positions.MentorId
    WHERE Title = "intern"
    AND Year = $currentYear
END;

  $results = $mainDbConn->query($query);
  echo "FILE::$currentYear.yml\n";

  while ($result = $results->fetch_assoc()) {
    echo <<<END
- short-name: "$result[ShortName]"
  school-name: "$result[SchoolName]"
  mentor-name: "$result[MentorName]"
  projects: "$result[Projects]"

END;
  }
}
?>

