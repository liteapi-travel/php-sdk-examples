<?php
    require_once(__DIR__ . '/../../vendor/autoload.php');
    $config = LiteAPI\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'sand_c0155ab8-c683-4f26-8f94-b5e92c5797b9');


    $bookingManagementInstance = new LiteAPI\Api\BookingManagementApi($config);

    $guest_id = "FrT56hfty";
    $result = $bookingManagementInstance->getBookingListByGuestId($guest_id);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Booking List</title>
    <link rel="stylesheet" href="../style/styles.css">
</head>

<body>
    <h2>Booking List</h2>
    <table>
        <tr>
            <th>bookingId</th>
        </tr>
        <tr>
        <?php foreach ($result['data'] as $item): ?>
            <tr>
                <td>
                    <?php echo $item->bookingId; ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tr>
    </table>
</body>

</html>