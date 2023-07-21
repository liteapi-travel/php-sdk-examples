<?php
require_once(__DIR__ . '/../../vendor/autoload.php');
$config = LiteAPI\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'sand_c0155ab8-c683-4f26-8f94-b5e92c5797b9');


$searchInstance = new LiteAPI\Api\SearchApi($config);

$hotel_ids = "lp3803c,lp1f982,lp19b70,lp19e75";
$checkin = "2023-11-15";
$checkout = "2023-11-16";
$currency = "USD";
$guest_nationality = "US";
$adults = 1;
//Optional values
$children = "12,9";
$guest_id = "testtraveler1";
$result = $searchInstance->getMinimumRates($hotel_ids, $checkin, $checkout, $currency, $guest_nationality, $adults);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Minimum Rates availability</title>
    <link rel="stylesheet" href="../style/styles.css">
</head>

<body>
    <h2>Minimum Rates availability</h2>
    <table>
        <tr>
            <th>hotelId</th>
            <th>currency</th>
            <th>price</th>
            <th>supplierId</th>
            <th>supplier</th>
        </tr>
        <?php foreach ($result['data'] as $item): ?>
            <tr>
                <td>
                    <?php echo $item->hotelId; ?>
                </td>
                <td>
                    <?php echo $item->currency; ?>
                </td>
                <td>
                    <?php echo $item->price; ?>
                </td>
                <td>
                    <?php echo $item->supplierId; ?>
                </td>
                <td>
                    <?php echo $item->supplier; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>