<?php
    $arr = [
        'bio1' => [
                'name' => 'john',
                'email' => 'john@gmail.com',
                'phone' => [
                        "019238833",
                        "234234344",
                        "234455345"
                ]
        ],
        'bio2' => [
            'name' => 'john',
            'email' => 'john@gmail.com',
            'phone' => [
                "019238833",
                "234234344"
            ]
        ],
        'bio3' => [
            'name' => 'john',
            'email' => 'john@gmail.com',
            'phone' => "019238833"
        ],
        'bio4' => [
            'name' => 'john',
            'email' => 'john@gmail.com'
        ]
      ];
?>

<!DOCTYPE html>
<html>
      <head>
        <title>PHP Array</title>
      </head>
      <body>
        <table border="1">
            <thead>
                <tr>
                    <td>Serial</td>
                    <td>Name</td>
                    <td>E-mail address</td>
                    <td>Phone</td>
                </tr>
            </thead>
            <tbody>
<?php
    $i = 0;
    foreach($arr as $key => $value){
        echo "<tr>";
        echo "<td>" . ++$i . "</td>";
        echo "<td>" . $value['name'] . "</td>";
        echo "<td>" . $value['email'] . "</td>";
        if(array_key_exists("phone", $value)){
            echo "<td>";
            if(is_array($value['phone']) == TRUE){
                foreach($value['phone'] as $phone_key => $phone_value){
                    echo $phone_value;
                    echo "<br>";
                }
            }else{
                echo $value['phone'];
                echo "<br>";
            }
            echo "</td>";
        }else {
            echo "<td>Not available!</td>";
        }
        echo "</tr>";
      }
?>
            </tbody>
        </table>
      </body>
</html>