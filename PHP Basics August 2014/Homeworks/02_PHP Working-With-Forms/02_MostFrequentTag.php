<?php
$mostFreqTag = "";
if (isset($_POST['tags'])) {
    $listOfTags = [];
    $tags = $_POST['tags'];
    $arrOfTags = explode(", ", $tags);
    $result = "";
    foreach ($arrOfTags as $key) {
        if (!isset($listOfTags[$key])) {
            $listOfTags[$key] = 1;
        } else{
            $listOfTags[$key]++;
        }
    }
    arsort($listOfTags);
    foreach ($listOfTags as $key => $value) {
        $result .= "$key : $value times" . "<br />";
    }

    //get most frequent tag :)
    foreach ($listOfTags as $key => $value) {
        $mostFreqTag = $key;
        break;
    }




}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Most Frequent Tag</title>
</head>
<body>
    <p>Enter Tags: </p>
    <form action="" method="post">
        <input name="tags" style="background: #FAFFBD" type="text"/>
        <input type="submit"/>
    </form>
    <p>
        <?php
            if (isset($result)) {
                echo $result;
            }
        ?>
    </p>
    <p>
        Most Frequent Tag is: <?= $mostFreqTag; ?>
    </p>
</body>
</html>





