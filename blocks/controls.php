<?php
    function createControl ($arrayOfControls, $parentBlock) {
        $content = '';
        foreach ($arrayOfControls as $control) {
            $controlNumber = (int)$control;
            $isActive = ((($_GET['selected_number'] === '0') or ($_GET['selected_number'] === '')) and ($controlNumber === 0)) ? 'active' : '';
            $isActive = ($_GET['selected_number'] == $controlNumber) ? 'active' : '';
            $content .= '<li class="'.$parentBlock.'__control">'.'<a class="'.$isActive.'" href="/?selected_number='.$controlNumber.'&selected_layout='.$_GET['selected_layout'].'">'.$control.'</a>'.'</li>';
        }
        return $content;
    };

    function createControls ($arrayOfControls, $parentBlock) {
        echo '<ul class="'.$parentBlock.'__controls">'.createControl($arrayOfControls, $parentBlock).'</ul>';
    };
?>