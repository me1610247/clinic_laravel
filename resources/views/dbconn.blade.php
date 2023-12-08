 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Connection to DB</title>
</head>
<body>
    <div>
        <?php
         use Illuminate\Support\Facades\DB; 
        // connect laravel with mysql
            if(DB::Connection()->getPdo()){
                echo "Successfully connected to DB and DB name is "
                 . DB::connection()->getDatabaseName();
            }
         ?>
    </div>
</body>
</html> 