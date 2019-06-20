<?php
/**
 * Created by IntelliJ IDEA.
 * User: nayana
 * Date: 6/17/2019
 * Time: 2:54 PM
 */?>
<!DOCTYPE html>
<html>
<style>
    input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
</style>
<body>
<!--<form action="second.php" method="post" id="form" style="background-color: deepskyblue"></form>-->



<div>
    <form action="second.php" method="post" id="form">
        <label for="cid">customer id</label>
        <input type="text" id="cid" name="customerid" placeholder="C000">

        <label for="customer name"> customermName</label>
        <input type="text" id="name" name="customername" placeholder="Your  name..">

        <label for="address">address</label>
        <input type="text" id="address" name="address" placeholder="Your address..">


        <label for="telephone">Telephone</label>
        <input type="text" id="tel" name="telephone" placeholder="Your telephone..">

        <label for=" salary">salary</label>
        <input type="text" id=" salary" name="salary" placeholder="Your salary..">

        </select>

        <input type="submit" value="Submit" id="btnadd" form="form">
    </form>
</div>
<script src="js/jquery-3.4.1.min.js"></script>


<script>

    //Validation for Phone Number
    if (
        $("#btnadd").click(function () {
            var value = $("#tel").val();
            var regEx = /^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/;
            var result = regEx.test(value);
            if (!result) {
                alert(" Telephone Number is Invalid");
            }
        })) ;
    //Validation for Name
    if (
        $("#btnadd").click(function () {
            var value = $("#name").val();
            var regEx = /^[a-zA-Z]*$/;
            var result = regEx.test(value);
            if (!result) {
                alert("Name Is Invalide..Please Input Only Letters");
            }
        })
    ) ;
    //validation for salary
    if (
        $("#btnadd").click(function () {
            var value = $("#salary").val().length>2;
            var regEx = /^\d{1,6}\.\d{1,6}$/;
            var result = regEx.test(value);
            if (!result) {
                alert("Please input Salary Like : 0000.00");
            }
        })
    ) ;
    $("#btnadd").click(function () {
        var cid=$("#cid").val();
        var regEx ="/C-\d{3}/";
        var result=regEx.test(cid);
        if (!result) {
            alert("ID is Invalid")
        }
    });
    $("#cid").keyup(function () {
        if($("#cid").val().length>4){
            alert("id Is Invalide..Please Input Only Letters")
        }
    })

    //Validation For Customer ID

    //Validate Empty Space
</script>
</body>
</html>
