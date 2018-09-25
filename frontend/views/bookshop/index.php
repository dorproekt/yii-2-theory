<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
?>
<h2>Книги</h2>
<a class="btn btn-primary" href="<?php echo Url::to(['bookshop/create'])?>">Добавить книгу</a>
<?php foreach($bookList as $book): ?>
    <h3><?php echo $book->name; ?></h3>
    <p><?php echo $book->getDatePublished(); ?></p>
    <p><?php echo $book->getPublisherName(); ?></p>
    <?php foreach($book->getAuthors() as $author): ?>
    <small><?php echo $author->last_name.' '.$author->first_name; ?></small>
    <?php endforeach; ?>
    <hr>
<?php endforeach; ?>

