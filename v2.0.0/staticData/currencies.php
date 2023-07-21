<?php
require_once(__DIR__ . '/../../vendor/autoload.php');
$config = LiteAPI\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'sand_c0155ab8-c683-4f26-8f94-b5e92c5797b9');


$staticDataInstance = new LiteAPI\Api\StaticDataApi($config);

$result = $staticDataInstance->getCurrencies();

?>
<!DOCTYPE html>
<html>

<head>
    <title>Currencies</title>
    <link rel="stylesheet" href="../style/styles.css">
</head>

<body>
    <h2>Currencies</h2>
    <table>
        <tr>
            <th>Code</th>
            <th>Currency</th>
            <th>Countries</th>
        </tr>
        <?php foreach ($result['data'] as $item): ?>
            <tr>
                <td>
                    <?php echo $item->code; ?>
                </td>
                <td>
                    <?php echo $item->currency; ?>
                </td>
                <td>
                    <?php foreach ($item->countries as $country): ?>
                        <?php echo $country , ','; ?>
                    <?php endforeach; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>