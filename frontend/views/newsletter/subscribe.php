<h1>Форма обратной связи</h1>
<form method="post">
    <p>Email:</p>
    <input type="text" name="email">
    <br>
    <br>
    <input type="submit" value="submit">
</form>
<?php
    if($model->hasErrors()){
        echo '<pre>';
        print_r($model->getErrors());
    }
    
    /*if(Yii::$app->session->hasFlash('subscribeStatus')){
        echo Yii::$app->session->getFlash('subscribeStatus');
    }*/
?>