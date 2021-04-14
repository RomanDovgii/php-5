<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №5</title>
    <link rel="stylesheet" href="css/style.css">
    <?php
        include 'utils/variables.php';
        include 'utils/utils.php';
        include 'blocks/controls.php';
        include 'blocks/table.php';
        include 'blocks/layout.php';

        initializeNumbers();
        clickHandle();

        if (!$_GET['selected_layout']) {
            $selectedTableType = 'table';
        } else {
            $selectedTableType = $_GET['selected_layout'];
        }
    ?>
</head>
<body>
    <header class="header">
        <?php
            createLayoutControls($layoutControls, 'header');
        ?>
    </header>
    
    <main class="main">
        <aside class="aside">
            <?php
                createControls($numberControls, 'aside')
            ?>
        </aside>
        <?php
            $selectedNumber = (!$_GET['selected_number']) ? 'all' : $_GET['selected_number'];
            $selectedLayout = $_GET['selected_layout'];
            createTable($_GET['selected_layout'], $selectedNumber);
        ?>
    </main>
    <footer class="footer">

        <p>Тип верстки: <?= $selectedTableType?></p>
        <p><?= ($_GET['selected_number'] === '0') ? 'Отображена полная верстка' : 'Отображена одна колонка'?></p>
        <p><?= date("M j Y G:i:s");?></p>
    </footer>
</body>
</html>