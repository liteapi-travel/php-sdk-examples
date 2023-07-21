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
$result = $searchInstance->getFullRates($hotel_ids, $checkin, $checkout, $currency, $guest_nationality, $adults);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Full Rates availability</title>
    <link rel="stylesheet" href="../style/styles.css">
</head>

<body>
    <h2>Full Rates availability</h2>
    <table>
        <tr>
            <th>hotelId</th>
            <th>currency</th>
            <th>roomTypes</th>
        </tr>
        <?php foreach ($result['data'] as $item): ?>
            <tr>
                <td>
                    <?php echo $item->hotelId; ?>
                </td>
                <td>
                    <?php if (isset($item->currency)): ?>
                        <?php echo $item->currency; ?>
                    <?php else: ?>
                        USD
                    <?php endif; ?>
                </td>
                <td>
                    <?php foreach ($item->roomTypes as $room): ?>
                        <?php echo "---------room Type Id-------------",$room->roomTypeId;?><br>
                        <?php echo "supplier: ", $room->supplier;?>
                        <?php echo "supplier Id: ", $room->supplierId; ?><br>
                        <?php foreach ($room->rates as $rate): ?>
                            <?php echo " -rate Id: ", $rate->rateId; ?><br>
                            <?php echo " -name: ", $rate->name; ?><br>
                            <?php echo " -board Name: ", $rate->boardName; ?><br>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>