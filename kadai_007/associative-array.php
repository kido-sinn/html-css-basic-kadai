<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>kadai_007</title>
</head>

<body>
   <p>
       <?php
      
       $personal_data = ['name' => 'onion', 'price' => 200, 'weight' => '160'];

       print_r($personal_data);

       $personal_data['price'] = 200;
       $personal_data['weight'] = '160'; 
       ?>
    </p>
</body>

</html>