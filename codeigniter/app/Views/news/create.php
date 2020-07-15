

<h2><?= esc($title); ?></h2>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<?= \Config\Services::validation()->listErrors(); ?>

<form action="/news/create" method="post">
    <?= csrf_field() ?>

    <label for="title">Title</label>
    <input type="input" name="title" /><br />

    <label for="body">Text</label><br/>
    <textarea class="ml-5" name="body"></textarea><br />

    <input class="btn btn-success ml-4" type="submit" name="submit" value="Create news item" />

</form>