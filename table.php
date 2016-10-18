<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>PHP-table练习</title>
</head>
<body>
<?
$product_name1 = "产品1";
$product_name2 = "产品2";
$product_name3 = "产品3";
$product_name4 = "产品4";

$product_date1 = "23/11/2013";
$product_date2 = "10/11/2013";
$product_date3 = "20/10/2013";
$product_date4 = "20/10/2013";

$product_status1 = "待发货";
$product_status2 = "发货中";
$product_status3 = "待确认";
$product_status4 = "已退货";

echo "<table border='2' width='700px'>
    <caption>产品表</caption>
    <tr>
        <th>产品</th>
        <th>付款日期</th>
        <th>状态</th>
    </tr>
    <tr>
        <td>$product_name1</td>
        <td>$product_date1</td>
        <td>$product_status1</td>
    </tr>
    <tr>
        <td>$product_name2</td>
        <td>$product_date2</td>
        <td>$product_status2</td>
    </tr>
    <tr>
        <td>$product_name3</td>
        <td>$product_date3</td>
        <td>$product_status3</td>
    </tr>
    <tr>
        <td>$product_name4</td>
        <td>$product_date4</td>
        <td>$product_status4</td>
    </tr>
</table>";
?>
</body>
</html>