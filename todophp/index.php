<!DOCTYPE html>

<html lang="hu">

<head>
    <meta charset="utf-8">
    <title>Todo List</title>
    <link rel="stylesheet" href="src/css/style.css">
</head>

<body>
    <h1>Hello World</h1>

    <header>
        <h1>Todo List</h1>
    </header>

    <section class="container">
        <section class="card-group">
        <?php
            require 'src/database/dbmethods.php';

            $todoitems = getTodoItems(connect());

            foreach($todoitems as $todoitem){
                echo "<div class=\"card\">";
                
                echo "<div class=\"card-header\">";
                echo "<h2>" . $todoitem->getName() . "</h2>";
                echo "</div> <hr class=\"card-element-separator\"/>";

                echo "<div class=\"card-body\">";
                echo "<p>" . $todoitem->getDescription() . "</p>";
                echo "</div> <hr class=\"card-element-separator\"/>";

                echo "<div class=\"card-footer\">";
                echo "<p>Status: <br/>" . $todoitem->getStatus() . "</p>";
                echo "<p>Created: <br/>" . $todoitem->getCreatedAt() . "</p>";
                echo "<p>Last Update: <br/>" . $todoitem->getUpdatedAt() . "</p>";
                echo "</div>";

                echo "</div>";
            }
        ?>
        </section>
    </section>

    <footer>

    </footer>
</body>

</html>