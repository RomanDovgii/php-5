<?php
    function createLayoutControl ($arrayOfControls, $parentBlock) {
        foreach ($arrayOfControls as $control) {
            echo '<li class="'.$parentBlock.'__control'.(($_GET['selected_layout'] === $control) ? ' active' : '').'">'.'<a href="/?selected_number='.$_GET['selected_number'].'&selected_layout='.$control.'">'.$control.'</a>'.'</li>';
        }
    };

    function createLayoutControls ($arrayOfControls, $parentBlock) {
        echo '<ul class="'.$parentBlock.'__controls">';
        createLayoutControl($arrayOfControls, $parentBlock);
        echo '</ul>';
    };
?>