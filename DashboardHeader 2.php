<?php
require 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>DMS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script type="text/javascript">
        window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
    axisX: {
        valueFormatString: "DD MMM YYYY"
    },
    axisY: {
        title: "Number Of Deficiencies",
    },
    legend: {
        cursor: "pointer",
        verticalAlign: "top",
        horizontalAlign: "center",
        dockInsidePlotArea: true,
        itemclick: toogleDataSeries
    },
    data: [{
        type:"line",
        axisYType: "primary",
        name: "No Of Deficiencies Initiated",
        showInLegend: true,
        markerSize: 0,
        dataPoints: [       
            { x: new Date(<?php echo date('Y',strtotime("-60 days"));?>,<?php echo date('m',strtotime("-60 days"));?>,<?php echo date('d',strtotime("-60 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-30 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-59 days"));?>,<?php echo date('m',strtotime("-59 days"));?>,<?php echo date('d',strtotime("-59 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-29 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-58 days"));?>,<?php echo date('m',strtotime("-58 days"));?>,<?php echo date('d',strtotime("-58 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-28 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-57 days"));?>,<?php echo date('m',strtotime("-57 days"));?>,<?php echo date('d',strtotime("-57 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-27 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-56 days"));?>,<?php echo date('m',strtotime("-56 days"));?>,<?php echo date('d',strtotime("-56 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-26 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-55 days"));?>,<?php echo date('m',strtotime("-55 days"));?>,<?php echo date('d',strtotime("-55 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-25 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-54 days"));?>,<?php echo date('m',strtotime("-54 days"));?>,<?php echo date('d',strtotime("-54 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-24 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-53 days"));?>,<?php echo date('m',strtotime("-53 days"));?>,<?php echo date('d',strtotime("-53 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-23 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-52 days"));?>,<?php echo date('m',strtotime("-52 days"));?>,<?php echo date('d',strtotime("-52 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-22 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-51 days"));?>,<?php echo date('m',strtotime("-51 days"));?>,<?php echo date('d',strtotime("-51 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-21 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-50 days"));?>,<?php echo date('m',strtotime("-50 days"));?>,<?php echo date('d',strtotime("-50 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-20 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-49 days"));?>,<?php echo date('m',strtotime("-49 days"));?>,<?php echo date('d',strtotime("-49 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-19 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-48 days"));?>,<?php echo date('m',strtotime("-48 days"));?>,<?php echo date('d',strtotime("-48 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-18 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-47 days"));?>,<?php echo date('m',strtotime("-47 days"));?>,<?php echo date('d',strtotime("-47 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-17 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-46 days"));?>,<?php echo date('m',strtotime("-46 days"));?>,<?php echo date('d',strtotime("-46 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-16 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-45 days"));?>,<?php echo date('m',strtotime("-45 days"));?>,<?php echo date('d',strtotime("-45 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-15 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-44 days"));?>,<?php echo date('m',strtotime("-44 days"));?>,<?php echo date('d',strtotime("-44 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-14 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-43 days"));?>,<?php echo date('m',strtotime("-43 days"));?>,<?php echo date('d',strtotime("-43 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-13 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-42 days"));?>,<?php echo date('m',strtotime("-42 days"));?>,<?php echo date('d',strtotime("-42 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-12 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-41 days"));?>,<?php echo date('m',strtotime("-41 days"));?>,<?php echo date('d',strtotime("-41 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-11 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-40 days"));?>,<?php echo date('m',strtotime("-40 days"));?>,<?php echo date('d',strtotime("-40 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-10 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-39 days"));?>,<?php echo date('m',strtotime("-39 days"));?>,<?php echo date('d',strtotime("-39 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-9 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-38 days"));?>,<?php echo date('m',strtotime("-38 days"));?>,<?php echo date('d',strtotime("-38 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-8 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-37 days"));?>,<?php echo date('m',strtotime("-37 days"));?>,<?php echo date('d',strtotime("-37 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-7 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-36 days"));?>,<?php echo date('m',strtotime("-36 days"));?>,<?php echo date('d',strtotime("-36 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-6 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-35 days"));?>,<?php echo date('m',strtotime("-35 days"));?>,<?php echo date('d',strtotime("-35 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-5 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-34 days"));?>,<?php echo date('m',strtotime("-34 days"));?>,<?php echo date('d',strtotime("-34 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-4 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-33 days"));?>,<?php echo date('m',strtotime("-33 days"));?>,<?php echo date('d',strtotime("-33 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-3 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-32 days"));?>,<?php echo date('m',strtotime("-32 days"));?>,<?php echo date('d',strtotime("-32 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-2 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-31 days"));?>,<?php echo date('m',strtotime("-31 days"));?>,<?php echo date('d',strtotime("-31 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-1 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-30 days"));?>,<?php echo date('m',strtotime("-30 days"));?>,<?php echo date('d',strtotime("-30 days"));?>), y: <?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-0 days"))."'"));?> }
        ]
    },
    {
        type: "line",
        axisYType: "primary",
        name: "No Of Cleared Deficiencies",
        showInLegend: true,
        markerSize: 0,
        dataPoints: [
            { x: new Date(<?php echo date('Y',strtotime("-60 days"));?>,<?php echo date('m',strtotime("-60 days"));?>,<?php echo date('d',strtotime("-60 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-30 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-59 days"));?>,<?php echo date('m',strtotime("-59 days"));?>,<?php echo date('d',strtotime("-59 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-29 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-58 days"));?>,<?php echo date('m',strtotime("-58 days"));?>,<?php echo date('d',strtotime("-58 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-28 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-57 days"));?>,<?php echo date('m',strtotime("-57 days"));?>,<?php echo date('d',strtotime("-57 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-27 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-56 days"));?>,<?php echo date('m',strtotime("-56 days"));?>,<?php echo date('d',strtotime("-56 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-26 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-55 days"));?>,<?php echo date('m',strtotime("-55 days"));?>,<?php echo date('d',strtotime("-55 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-25 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-54 days"));?>,<?php echo date('m',strtotime("-54 days"));?>,<?php echo date('d',strtotime("-54 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-24 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-53 days"));?>,<?php echo date('m',strtotime("-53 days"));?>,<?php echo date('d',strtotime("-53 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-23 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-52 days"));?>,<?php echo date('m',strtotime("-52 days"));?>,<?php echo date('d',strtotime("-52 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-22 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-51 days"));?>,<?php echo date('m',strtotime("-51 days"));?>,<?php echo date('d',strtotime("-51 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-21 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-50 days"));?>,<?php echo date('m',strtotime("-50 days"));?>,<?php echo date('d',strtotime("-50 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-20 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-49 days"));?>,<?php echo date('m',strtotime("-49 days"));?>,<?php echo date('d',strtotime("-49 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-19 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-48 days"));?>,<?php echo date('m',strtotime("-48 days"));?>,<?php echo date('d',strtotime("-48 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-18 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-47 days"));?>,<?php echo date('m',strtotime("-47 days"));?>,<?php echo date('d',strtotime("-47 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-17 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-46 days"));?>,<?php echo date('m',strtotime("-46 days"));?>,<?php echo date('d',strtotime("-46 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-16 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-45 days"));?>,<?php echo date('m',strtotime("-45 days"));?>,<?php echo date('d',strtotime("-45 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-15 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-44 days"));?>,<?php echo date('m',strtotime("-44 days"));?>,<?php echo date('d',strtotime("-44 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-14 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-43 days"));?>,<?php echo date('m',strtotime("-43 days"));?>,<?php echo date('d',strtotime("-43 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-13 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-42 days"));?>,<?php echo date('m',strtotime("-42 days"));?>,<?php echo date('d',strtotime("-42 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-12 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-41 days"));?>,<?php echo date('m',strtotime("-41 days"));?>,<?php echo date('d',strtotime("-41 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-11 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-40 days"));?>,<?php echo date('m',strtotime("-40 days"));?>,<?php echo date('d',strtotime("-40 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-10 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-39 days"));?>,<?php echo date('m',strtotime("-39 days"));?>,<?php echo date('d',strtotime("-39 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-9 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-38 days"));?>,<?php echo date('m',strtotime("-38 days"));?>,<?php echo date('d',strtotime("-38 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-8 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-37 days"));?>,<?php echo date('m',strtotime("-37 days"));?>,<?php echo date('d',strtotime("-37 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-7 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-36 days"));?>,<?php echo date('m',strtotime("-36 days"));?>,<?php echo date('d',strtotime("-36 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-6 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-35 days"));?>,<?php echo date('m',strtotime("-35 days"));?>,<?php echo date('d',strtotime("-35 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-5 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-34 days"));?>,<?php echo date('m',strtotime("-34 days"));?>,<?php echo date('d',strtotime("-34 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-4 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-33 days"));?>,<?php echo date('m',strtotime("-33 days"));?>,<?php echo date('d',strtotime("-33 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-3 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-32 days"));?>,<?php echo date('m',strtotime("-32 days"));?>,<?php echo date('d',strtotime("-32 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-2 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-31 days"));?>,<?php echo date('m',strtotime("-31 days"));?>,<?php echo date('d',strtotime("-31 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-1 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-30 days"));?>,<?php echo date('m',strtotime("-30 days"));?>,<?php echo date('d',strtotime("-30 days"));?>), y: <?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-0 days"))."'"));?>}
        ]
    }]
});
chart.render();

function toogleDataSeries(e){
    if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
        e.dataSeries.visible = false;
    } else{
        e.dataSeries.visible = true;
    }
    chart.render();
}

}
</script>
    <style type="text/css">
        #mySidenav {
            position: absolute;
            left: -270px;
            transition: 0.3s; 
            padding: 15px; 
            width: 300px;
            text-decoration: none; 
            font-size: 20px; 
            border-radius: 0 5px 5px 0; 
        }

        #mySidenav:hover {
            left: 0;
            z-index: 100;
        }
        .content{
            margin-left: 5%;
        }
        .menu2:hover{
            background-color: red;
        }
        .menu{
            background-color: #FF8C00;
        }
        .search{
            background-color: #FF4500;
            border: #FF4500;
        }
        .search:hover{
            background-color: red; 
            border: red;
        }
        .hovered:hover{
            color:red;
        }
    </style>
</head>
<?php require 'top.php'?>
<body style="background-color: #fed8b1;">
    <div class="container-fluid">
        <div class="row">
            <div id="mySidenav"><?php require 'Sidebar.php'?></div>
            <div class="content container row">
                <div class="row p-2">&nbsp;&emsp;</div>