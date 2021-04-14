<?php
    function initializeNumbers() {
        if (!isset($_GET['store'])) {
            $_GET['store'] = '';
        };

        if (!isset($_GET['selected_number'])) {
            $_GET['store'] .= $_GET['selected_number'];
        };

        if (!isset($_GET['selected_layout'])) {
            $_GET['store'] .= $_GET['selected_layout'];
        };
    };

    function clickHandle() {
        if ($_GET['selected_number'] === 0) {
            $_GET['selected_number'] = '';
        };
    };
?>