<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>

        <h1>Hello From Home View</h1>
        <p> Hello <?php echo htmlspecialchars($name); ?>!</p>
        <ul> 
            <?php foreach($colours as $colour): ?>
            <li><?php echo htmlspecialchars($colour); ?></li>
                
          <?php endforeach ; ?>
        </ul>
        
    </body>
</html>