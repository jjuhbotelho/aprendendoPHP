<?php require('Partials/head.php'); ?>

<?php foreach ($users as $user) : ?>
    <li><?= $user->name; ?></li>
<?php endforeach; ?>


    <h1>Submit Your Name</h1>

    <form method="POST" action="/names">

        <input name="name"/>
        <button type="submit">Submit</button>

    </form>


<?php require('Partials/footer.php'); ?>