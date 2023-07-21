<?php
require_once(__DIR__ . '/../../vendor/autoload.php');
$config = LiteAPI\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'sand_c0155ab8-c683-4f26-8f94-b5e92c5797b9');


$staticDataInstance = new LiteAPI\Api\StaticDataApi($config);

$country_code = "SG";
$city_name = "Singapore";
$offset = 0;
$limit = 1000;
$longitude = -115.16988;
$latitude = 36.12510; 
$distance = 1000; 
// $result = $staticDataInstance->getHotels($country_code, $city_name, $offset, $limit, $longitude, $latitude, $distance);
$result = $staticDataInstance->getHotels($country_code, $city_name);


?>
<!DOCTYPE html>
<html>

<head>
    <title>Hotels</title>
    <link rel="stylesheet" href="../style/styles.css">
</head>

<body>
    <h2>Hotels</h2>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>currency</th>
            <th>country</th>
            <th>city</th>
            <th>latitude</th>
            <th>longitude</th>
            <th>address</th>
            <th>zip</th>
            <th>main_photo</th>
            <th>stars</th>
        </tr>
        <?php foreach ($result['data'] as $item): ?>
            <tr>
                <td>
                    <?php echo $item->id; ?>
                </td>
                <td>
                    <?php echo $item->name; ?>
                </td>
                <td>
                    <?php echo $item->currency; ?>
                </td>
                <td>
                    <?php echo $item->currency; ?>
                </td>
                <td>
                    <?php echo $item->city; ?>
                </td>
                <td>
                    <?php echo $item->latitude; ?>
                </td>
                <td>
                    <?php echo $item->longitude; ?>
                </td>
                <td>
                    <?php echo $item->address; ?>
                </td>
                <td>
                    <?php echo $item->zip; ?>
                </td>
                <td>
                    <?php echo $item->main_photo; ?>
                </td>
                <td>
                    <?php echo $item->stars; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>