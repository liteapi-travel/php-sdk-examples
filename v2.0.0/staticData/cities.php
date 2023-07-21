<?php
require_once(__DIR__ . '/../../vendor/autoload.php');
$config = LiteAPI\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'sand_c0155ab8-c683-4f26-8f94-b5e92c5797b9');


$staticDataInstance = new LiteAPI\Api\StaticDataApi($config);

$country_code = "US";
$result = $staticDataInstance->getCities($country_code);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Cities</title>
    <link rel="stylesheet" href="../style/styles.css">
</head>

<body>
    <h2>Cities</h2>
    <table>
        <tr>
            <th>City</th>
        </tr>
        <?php foreach ($result['data'] as $item): ?>
            <tr>
                <td>
                    <?php echo $item->city; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>