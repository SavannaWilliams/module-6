<!DOCTYPE html>
<html lang="en">
<?php
    include 'head.php';
?>
<body>
<div class="wrapper">
    <?php
        include 'header.php';
    ?>

    <main>

        <h2 class="recipe-submission-header">Add a Recipe to Our Cookbook!</h2>
        <form action="submit-recipe.php" method="POST" class="recipe-submission-form">
            <input type="text" placeholder="Title" id="title" name="title">
            <input type="text" placeholder="Author" id="author" name="author">
            <textarea name="description" id="description" placeholder="Short description"></textarea>
            <textarea name="ingredients" id="ingredients" placeholder="Ingredients"></textarea>
            <textarea name="directions" id="directions" placeholder="Directions"></textarea>
            <input type="submit" class="button" id="submit" value="Submit">
        </form>
    </main>
</div>

    <?php
        include 'footer.php';
        include 'scripts.php';
    ?>

</body>
</html>