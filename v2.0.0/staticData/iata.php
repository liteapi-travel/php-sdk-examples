<?php
require_once(__DIR__ . '/../../vendor/autoload.php');
$config = LiteAPI\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'sand_c0155ab8-c683-4f26-8f94-b5e92c5797b9');


$staticDataInstance = new LiteAPI\Api\StaticDataApi($config);

$result = $staticDataInstance->getIataCodes();
?>
<!DOCTYPE html>
<html>

<head>
    <title>IATA</title>
    <link rel="stylesheet" href="../style/styles.css">
</head>

<body>
    <h2>IATA</h2>
    <table>
        <tr>
            <th>Code</th>
            <th>Name</th>
            <th>Latitude</th>
            <th>Longitude</th>
            <th>Country Code</th>
        </tr>
        <?php foreach ($result['data'] as $item): ?>
            <tr>
                <td>
                    <?php echo $item->code; ?>
                </td>
                <td>
                    <?php echo $item->name; ?>
                </td>
                <td>
                    <?php echo $item->latitude; ?>
                </td>
                <td>
                    <?php echo $item->longitude; ?>
                </td>
                <td>
                    <?php echo $item->countryCode; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>