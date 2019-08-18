<?php
/**
 * Created by IntelliJ IDEA.
 * User: HP
 * Date: 6/12/2019
 * Time: 10:41 AM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Style.css">
    <title>Pos System/Order</title>
    <style>
        #search{
            padding: 10px;
        }
        #add{
            margin-left: 67%;
        }
    </style>
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
            <li class="nav-item">
                <a class="nav-link" href="Item-View.php">Item</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="Order-View.php">Order <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>

<form class="form-inline my-2 my-lg-0" id="search">
    <input class="form-control mr-sm-2" type="search" placeholder="Search Order" aria-label="Search">
    <button class="btn btn-outline-primary  my-2 my-sm-0" type="submit">Search</button>
    <button class="btn btn-outline-dark  my-2 my-sm-0" type="submit" id="add"><a href="Order.php">+ Add New Order</a></button>
</form>

<table class="table table-hover"style="margin: 1%;width: 98%">
    <thead class="thead-light">
    <tr>
        <th scope="col">Order ID</th>
        <th scope="col">Order Date</th>
        <th scope="col">Customer ID</th>
        <th scope="col">Total</th>

    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">Ord-001</th>
        <td>02-04-2019</td>
        <td>C001</td>
        <td>Rs.12000.00</td>
    </tr>
    <tr>
        <th scope="row">Ord-002</th>
        <td>02-04-2019</td>
        <td>C001</td>
        <td>Rs.12000.00</td>
    </tr>
    <tr>
        <th scope="row">Ord-003</th>
        <td>02-04-2019</td>
        <td>C001</td>
        <td>Rs.12000.00</td>
    </tr>
    <tr>
        <th scope="row">Ord-004</th>
        <td>02-04-2019</td>
        <td>C001</td>
        <td>Rs.12000.00</td>
    </tr>
    <tr>
        <th scope="row">Ord-005</th>
        <td>02-04-2019</td>
        <td>C001</td>
        <td>Rs.12000.00</td>
    </tr>
    </tbody>
</table>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
