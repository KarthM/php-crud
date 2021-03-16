<?php
function inputElement($icon,$placeholder,$name,$value){
    $ele="
         <div class=\"input-group mb-3\">
                    <span class=\"input-group-text bg-warning\">$icon</span>
                    <input type=\"text\" name='$name' value='$value' autocomplete=\"off\" class=\"form-control\" placeholder='$placeholder' aria-label=\"Username\">


                </div>";

    echo $ele;
}
function buttonElement($id, $style, $text, $name, $attr)
{
    $btn = " <button name='$name'id='$id' class='$style' '$attr'>$text</button>";
    echo $btn;
}
?>