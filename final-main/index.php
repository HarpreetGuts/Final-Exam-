
<?php require_once './includes/header.php'?>


<h1>Home Page </h1>

<div class="container">
<form method="post" action="/final/php/receive.php">
    <input type="text" name="string" class="form-control" id="text" placeholder="Enter your Text">
    <button id="btn">Submit</button>
    </form>
    <a href="/final/php/showAll.php">Show All records</a>
</div>