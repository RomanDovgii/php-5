<?php
    function createColumn($layoutType, $currentNumber, $selectedNumber, $columnNumber) {
        $tag = ($layoutType === 'block') ? 'div' : 'td';
        $openingTag = '<'.$tag.' class="column">';
        $closingTag = '</'.$tag.'>';
        $content = '';

        if ($columnNumber < 9) {
            $firstNumber = '<a href="/?selected_number='.$currentNumber.'&selected_layout='.$_GET['selected_layout'].'">'.$currentNumber.'</a>';
            $secondNumber = '<a href="/?selected_number='.$selectedNumber.'&selected_layout='.$_GET['selected_layout'].'">'.$selectedNumber.'</a>';
            $answer = $currentNumber * $selectedNumber;
            if ($answer <= 9) {
                $answer = '<a href="/?selected_number='.$answer.'&selected_layout='.$_GET['selected_layout'].'">'.$answer.'</a>';
            };
            $expression = $firstNumber.'*'.$secondNumber.'='.$answer;
            $content = $content.$openingTag.$expression.$closingTag;
        } else {
            for ($i=1; $i <= $columnNumber; $i++) {
                $firstNumber = '<a href="/?selected_number='.$currentNumber.'&selected_layout='.$_GET['selected_layout'].'">'.($currentNumber).'</a>';
                $secondNumber = '<a href="/?selected_number='.$i.'&selected_layout='.$_GET['selected_layout'].'">'.$i.'</a>';
                $answer = $currentNumber * $i;
                if ($answer <= 9) {
                    $answer = '<a href="/?selected_number='.$answer.'&selected_layout='.$_GET['selected_layout'].'">'.$answer.'</a>';
                };
                $expression = $firstNumber.'*'.$secondNumber.'='.$answer;
                $content = $content.$openingTag.$expression.$closingTag;
            }
        };        

        return $content;
    };
    
    function createRow($layoutType, $selectedNumber) {
        $tag = ($layoutType === 'block') ? 'div' : 'tr';
        $openingTag = '<'.$tag.' class="row">';
        $closingTag = '</'.$tag.'>';
        $columnNumber = ($selectedNumber === 'all') ? 9 : 1;
        $content = '';

        for ($i=1; $i <= 9; $i++) { 
            $content = $content.$openingTag.createColumn($layoutType, $i, $selectedNumber, $columnNumber).$closingTag;
        };

        return $content;
    };

    function createTable($layoutType, $selectedNumber) {
        $tag = ($layoutType === 'block') ? 'div' : 'table';
        $openingTag = '<'.$tag.' class="table">';
        $closingTag = '</'.$tag.'>';
        $content = createRow($layoutType, $selectedNumber);
        echo $openingTag.$content.$closingTag;
    };
?>