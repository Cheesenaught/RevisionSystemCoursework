<?php
function showRequest($classData){
    echo(
        '<form action="ClassPage.php">
        <input type="submit" onclick="' . transfer($classData) . '" />
        </form>'
    );
}
?>
<?php
function transfer($ClassData){
    $_SESSION['ClassID'] = $ClassData['ClassID'];
    echo($ClassData['ClassID']);
    /*header('Location: ClassPage.php');*/
    die();
}
?>