<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Posts/index</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <h1>Hello From Posts index page</h1>
     <h1>Posts</h1>
        <ul>
            <?php foreach($posts as $post): ?>
            <h2><?php echo $post['title'] ;?></h2>
            <p><?php echo $post['content'] ;?></p>
            <?php endforeach ?>
        </ul>

        
    </body>
</html>