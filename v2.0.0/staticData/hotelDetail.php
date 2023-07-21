<?php
require_once(__DIR__ . '/../../vendor/autoload.php');
$config = LiteAPI\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'sand_c0155ab8-c683-4f26-8f94-b5e92c5797b9');


$staticDataInstance = new LiteAPI\Api\StaticDataApi($config);

$hotel_id = "lp24373";
$result = $staticDataInstance->getHotelDetails($hotel_id);
print_r($result['data']->id)

?>
<!DOCTYPE html>
<html>

<head>
    <title>Hotel Details</title>
    <link rel="stylesheet" href="../style/styles.css">
</head>

<body>
    <h2>Hotel Details</h2>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>checkout</th>
            <th>checkin</th>
            <th>currency</th>
            <th>country</th>
            <th>address</th>
            <th>zip</th>
            <th>chainId</th>
            <th>Star Rating</th>
        </tr>
            <tr>
                <td>
                    <?php echo $result['data']->id; ?>
                </td>
                <td>
                    <?php echo $result['data']->name; ?>
                </td>
                <td>
                    <?php echo $result['data']->checkinCheckoutTimes->checkin; ?>
                </td>
                <td>
                    <?php echo $result['data']->checkinCheckoutTimes->checkin; ?>
                </td>
                <td>
                    <?php echo $result['data']->currency; ?>
                </td>
                <td>
                    <?php echo $result['data']->country; ?>
                </td>
                <td>
                    <?php echo $result['data']->address; ?>
                </td>
                <td>
                    <?php echo $result['data']->zip; ?>
                </td>
                <td>
                    <?php echo $result['data']->chainId; ?>
                </td>
                <td>
                    <?php echo $result['data']->starRating; ?>
                </td>
            </tr>
    </table>
</body>

</html>