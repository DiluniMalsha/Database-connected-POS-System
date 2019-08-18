<?php
/**
 * Created by IntelliJ IDEA.
 * User: HP
 * Date: 6/12/2019
 * Time: 10:35 AM
 */
?>

<?php
include 'common/head.php';
?>

    <title>Pos System/Item/Add new Item</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"  style="font-size: 25px">
        <img src="images/POS.png" width="75px">
        POS SYSTEM
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Customer-View.php">Customer</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="Item-View.php">Item <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Order-View.php">Order</a>
            </li>
        </ul>
    </div>
</nav>

<a href="Item-View.php">
    <button type="button" class="btn btn-outline-secondary" style="margin: 10px">
        <i class="fas fa-arrow-circle-left"></i>
        View Items
    </button>
</a>

<label class="btn-primary" style="padding: 5px;border: 2px solid white; width: 100%">NEW ITEM</label>

<form style="margin: 1%;width: 98%" id="formItem" method="post">
    <div class="form-group row">
        <label for="inputCode" class="col-sm-2 col-form-label">Item Code</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputCode" placeholder="I001" name="code">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputName" class="col-sm-2 col-form-label">Item Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputName" placeholder="Item Name" name="name">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPrice" class="col-sm-2 col-form-label">Price</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPrice" placeholder="Rs.1000.00" name="price">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputAddedDate" class="col-sm-2 col-form-label">Added Date</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputAddedDate" placeholder="2019/01/01" name="date">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputTotalQuantity" class="col-sm-2 col-form-label">Total Quantity</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputTotalQuantity" placeholder="100" name="total">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputSold" class="col-sm-2 col-form-label">Sold</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputSold" placeholder="00" name="sold">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputReturned" class="col-sm-2 col-form-label">Returned</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputReturned" placeholder="00" name="returned">
        </div>
    </div>
</form>

<div style="margin-left: 80%" id="buttens">
    <button type="button" class="btn btn-outline-primary" id="btnSaveItem">Save</button>
    <button type="button" class="btn btn-outline-warning">Clear</button>
</div>
<script>
    $("#btnSaveItem").click(
        function () {
            $("#formItem").attr("action","save-item.php");
            $("#formItem").submit();
        }
    );
</script>
<?php
include 'common/script.php';
?>