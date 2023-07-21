<?php
require_once(__DIR__ . '/../../vendor/autoload.php');
$config = LiteAPI\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'sand_c0155ab8-c683-4f26-8f94-b5e92c5797b9');


$bookInstance = new LiteAPI\Api\BookApi($config);

$rateId = "NRYDCZRZHAZHYMRQGIZS2MJRFUYTK7BSGAZDGLJRGEWTCNT4GF6HYVKTPRDVSWSEJVMVUV2HIUZUOS2OKJKEOWKZKRCU2QSXJVETGRCTJZKEMR2ZGNMFSTKKIRDUSWKEIVGVUUSHIVMVISZXIJJUOQK2IRDU2SSSI5CTGSCZLJGE6TBVJNLEON2DKZFU4NSGJNKTERKQKFMVKQ2NINCFAUK2IRCU6QSUKBJEWVCFKZJVST2KGZCEGTSSLFEEKNCEJVGUEV2HKVNEISKNKJKVAQSVK42FGQSEI5CVURCTJZBFER2BKJKEKT2CKNDFKWKUIVHUUVKHIVMUQWKUKNJUSWSIJBMU2USRI5EVSRCBJVJFERZVGZCEGN2CK5DUKMSUJ5ETEU2KGRJFKNCVKNDUUWKSKRCU2QSTI5AVOVCBJVJE4R2FGNIXYVKTIR6HY7BXGAXDQMD4GIYDEMBNGAZC2MJXPRBE67BRGI4TIMJQPQZA";

$result = $bookInstance->preBook($rateId);

?>
<!DOCTYPE html>
<html>

<head>
    <title>Prebook</title>
    <link rel="stylesheet" href="../style/styles.css">
</head>

<body>
    <h2>Prebook</h2>
    <table>
        <tr>
            <th>prebookId</th>
            <th>hotelId</th>
            <th>currency</th>
            <th>roomTypes</th>
        </tr>
            <tr>
                <td>
                    <?php echo $result['data']->prebookId; ?>
                </td>
                <td>
                    <?php echo $result['data']->hotelId; ?>
                </td>
                <td>
                    <?php if (isset($result['data']->currency)): ?>
                        <?php echo $result['data']->currency; ?>
                    <?php else: ?>
                        USD
                    <?php endif; ?>
                </td>
                <td>
                    <?php foreach ($result['data']->roomTypes as $room): ?>
                        <?php foreach ($room->rates as $rate): ?>
                            <?php echo " -name: ", $rate->name; ?><br>
                            <?php echo " -boardName: ", $rate->boardName; ?><br>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </td>
            </tr>
    </table>
</body>

</html>