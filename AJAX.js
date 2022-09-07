$(document).ready(function (){
    $('a[id^="nav"]').click(function (){
        console.log("debug");
        $.ajax({url: "./index.php?action=categories&categoria_id=" + $(this).attr("value"), success:function (result){
            $("#AJAX").html(result);
            $('a[id^="detallItem"]').click(function (){
               console.log("item desc");
               $.ajax({url: "./index.php?action=categories&item=" + $(this).attr("value"), success:function (result){
                   $('#AJAX').html(result);
                   $("#add-cart").click(function (){
                       console.log("add item cart");
                       console.log($(this).attr("value"));
                       $.ajax({url: "./index.php?action=add&product_id=" + $(this).attr("value"), success:function (result){
                           $('#cart-content').html(result);
                       }});
                   });
               }});
            });
        }});
    });
    $("#profile").click(function (){
        $.ajax({url: "./index.php?action=profile", success:function (result){
            $('#AJAX').html(result);
        }});
    });
    $("#cart").click(function (){
        $.ajax({url: "./index.php?action=cart", success:function (result){
            $('#AJAX').html(result);
        }});
    });
    $("#login").click(function (){
        $.ajax({url: "./index.php?action=login", success:function (result){
            $('#AJAX').html(result);
        }});
    });
    $("#lgn").click(function (){
        $.ajax({url: "./index.php?action=login", success:function (result){
            $('#AJAX').html(result);
        }});
    });
    $("#register").click(function (){
        $.ajax({url: "./index.php?action=register", success:function (result){
            $('#AJAX').html(result);
        }});
    });
    $("#history").click(function (){
        $.ajax({url: "./index.php?action=history", success:function (result){
            $('#AJAX').html(result);
        }});
    });
});