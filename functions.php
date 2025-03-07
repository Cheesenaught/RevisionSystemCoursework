<?php
function showRequest($classData){
    echo(
        '<div class="list-item-container">' . 
        '<div class="bold-container">' . $classData['ClassName'] . '</div>' . 
        '<button onclick=\'("' . $classData['RequestID'] . '")\'>--></button>' . 
        '</div>'
    );
}

function Redirect()
?>