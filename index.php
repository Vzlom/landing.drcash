<!DOCTYPE html>
<html lang="en">
<head>
<title>Landing</title>
<meta charset="UTF-8">
</head>
<body> 
<form class="orderForm">
    <input type="text" name="name" maxlength="30">
    <input type="text" name="phone" required minlength="10" maxlength="20">
    <button type="submit">Order</button>
</form>
<!-- DrCash -->
<script type="text/javascript">function orderSuccess(a){console.log(a['conversions'] ? a['conversions'] : '');window.location="./thanks.php"+enURL(a['conversions'][0] ? a['conversions'][0] : '');} function orderError(a){console.log(a)} window.onload = function() { order(); autotid('http://b.tracking.drcash.me/?offer_id=8&url_id=384&aff_id=1002'); metrica(location.search.replace("?","&") + '&host=' + location.host + location.pathname); } </script>
<script src="http://b.cdn.drcash.me/built/assets/js/b.sf.min.js"></script>
<!-- /DrCash -->   
</body>
</html>

