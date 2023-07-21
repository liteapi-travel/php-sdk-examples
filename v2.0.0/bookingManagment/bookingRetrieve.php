<?php
    require_once(__DIR__ . '/../../vendor/autoload.php');
    $config = LiteAPI\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'sand_c0155ab8-c683-4f26-8f94-b5e92c5797b9');


    $bookingManagementInstance = new LiteAPI\Api\BookingManagementApi($config);


    $booking_id = "uSQ6Zsc5R";
    $result = $bookingManagementInstance->retrievedBooking($booking_id);

?>
<!DOCTYPE html>
<html>

<head>
    <title>Book</title>
    <link rel="stylesheet" href="../style/styles.css">
</head>

<body>
    <h2>Book</h2>
    <table>
        <tr>
            <th>bookingId</th>
            <th>checkin</th>
            <th>checkout</th>
            <th>status</th>
            <th>hotelId</th>
            <th>hotelName</th>
        </tr>
        <tr>
            <td>
                <?php echo $result['data']->bookingId; ?>
            </td>
            <td>
                <?php echo $result['data']->checkin; ?>
            </td>
            <td>
                <?php echo $result['data']->checkout; ?>
            </td>
            <td>
                <?php echo $result['data']->status; ?>
            </td>
            <td>
                <?php echo $result['data']->hotel->hotelId; ?>
            </td>
            <td>
                <?php echo $result['data']->hotel->name; ?>
            </td>
        </tr>
    </table>
</body>

</html>