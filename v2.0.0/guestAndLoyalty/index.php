<?php
require_once(__DIR__ . '/../../vendor/autoload.php');
$config = LiteAPI\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'sand_c0155ab8-c683-4f26-8f94-b5e92c5797b9');


$guestAndLoyaltyInstance = new LiteAPI\Api\GuestAndLoyaltyApi($config);

$email = "johndoe@nlite.ml";
$result = $guestAndLoyaltyInstance->getGuestsIds($email);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Guest and loyalty</title>
    <link rel="stylesheet" href="../style/styles.css">
</head>

<body>
    <h2>Guest and loyalty</h2>
    <table>
        <tr>
            <th>GuestId</th>
        </tr>
        <?php foreach ($result['data'] as $item): ?>
            <tr>
                <td>
                    <?php echo $item->guestId; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>