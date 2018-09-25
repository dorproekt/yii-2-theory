<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
?>
<h1>Список авторов</h1>
<a class="btn btn-link" href="<?php echo Url::to('/author/create') ?>">Добавить автора</a>
<table class="table table-condensed">
    <thead>
        <tr>
            <th>ID</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($authorList as $author): ?>
        <tr>
            <td><?php echo $author->id; ?></td>
            <td><?php echo $author->first_name; ?></td>
            <td><?php echo $author->last_name; ?></td>
            <td><a href="<?php echo Url::to(['author/update', 'id' => $author->id])?>" class="btn btn-info btn-sm">Edit</a></td>
            <td><a href="<?php echo Url::to(['author/delete', 'id' => $author->id])?>" class="btn btn-danger btn-sm">Delete</a></td>
        </tr>
    <?php endforeach; ?>  
    </tbody>
</table>