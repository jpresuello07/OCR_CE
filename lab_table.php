<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>CE-Online Class Record</title>
    
    <link type="text/css" href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link type="text/css" href="css/stylesheet.css" rel="stylesheet">

    <link type="text/css" href="css/sidebar.css" rel="stylesheet">
    <link type="text/css" href="css/table.css" rel="stylesheet">


</head>

<body>
<!--     <table border="1" id="mtable">
    <thead><tr>
        <td>Item</td>
        <td>Red</td>
        <td>Green</td>
    </tr></thead>
    <tbody><tr>
        <td>Some Item</td>
        <td><input type="checkbox"/></td>
        <td><input type="checkbox"/></td>
    </tr></tbody>
</table><br/><br/>

<input id="row" placeholder="Enter Item Name" value="AS1"/><button id="irow">Insert Row</button><br/><br/>
<input id="col" placeholder="Enter Heading" value="AS2"/><button id="icol">Insert Column</button> -->

	<!-- HEADER -->
    <div class="container-fluid" id = "header-wrapper">
        <div class = "container">
            <div class="row">
                <div class = "col-lg-12 col-md-12" id = "header-details">
                    <img alt="Brand" id = "header-logo"src="resources/img/logoce.png"> 
                    <img alt="Brand" id = "header-logo"src="resources/img/logocpe.png">
                    <span><b>College of Engineering</b> | Online Class Record </span>     
                </div> 
            </div>  
        </div>  <!-- container -->  
    </div> <!-- container-fluid -->
     

    <!-- NAVBAR -->
     <div class = "container-fluid" id = "navbar-wrapper">
        <div class = "container" >
            <div class = "row">

                 <ul class = " nav pull-left" id= "navbar-maintabs">
                    <li><a href = "#">ARCHIVES</a></li>
                    <li><a href = "#">CALENDAR</a></li>
                    <li><a href = "#">SETTINGS</a></li>
                    <li><a href = "#">HOME</a></li>
                </ul>
                <ul class = " nav pull-right" id = "navbar-subtabs">
                    <li><a href = "#"><i class="fa fa-sign-out" id = "navbar-subtabs-logo"></i>Logout</a></li>
                </ul>
            </div>    
        </div> <!-- container -->
    </div> <!-- container-fluid -->

    <!--SIDEBAR & CONTENT-->
    <div class="container-fluid" id="main-content-wrapper">
        <div class="row" id="main-col-wrapper">
            <div class="container"id="sidebar-wrapper">
                <div class="sidebar-nav">
                    <ul class="accordion">
                        <div id="sidebar-menu">
                            <i class="icon-class-record"></i><span>Record</span>
                        </div>
                        <li id="sidebar-subMenu" class="accordion-section">
                            <a class="accordion-section-title hideOverflow" href="#accordion-1">Computer Networks<span class="arrow-left"></span></a>
                            <div id="accordion-1" class="accordion-section-content">
                                <div id="sidebar-item"><a>BSCpE 5-1<span class="arrow-left"></span></a></div>
                                <div id="sidebar-item"><a>BSCpE 5-2<span class="arrow-left"></span></a></div>
                                <div id="sidebar-item"><a>BSCpE 5-3<span class="arrow-left"></span></a></div>
                            </div>
                        </li>
                        <li id="sidebar-subMenu" class="accordion-section">
                            <a class="accordion-section-title hideOverflow" href="#accordion-2">Software Engineering<span class="arrow-left"></span></a>
                            <div id="accordion-2" class="accordion-section-content">
                                <div id="sidebar-item"><a>BSCpE 5-1<span class="arrow-left"></span></a></div>
                                <div id="sidebar-item"><a>BSCpE 5-3<span class="arrow-left"></span></a></div>
                                <div id="sidebar-item"><a>BSCpE 5-5<span class="arrow-left"></span></a></div>
                            </div>
                        </li>
                    </ul>
                    <ul>
                        <div id="sidebar-menu" class="toggle-sidebar">
                            <i class="icon-modules"></i><span>Modules</span>
                        </div>
                       
                        <li id="sidebar-subMenu" class="accordion-section">
                            <a class="module-item  hideOverflow">CLass Record<span class="arrow-left"></span></a>    
                        </li>
                        <li id="sidebar-subMenu" class="accordion-section">
                            <a class="module-item  hideOverflow">Final Grading Sheet<span class="arrow-left"></span></a>                          
                        </li>
                    </ul>
                </div>
            </div>

        <!-- TEMPORARY-DELETABLE-CONTENT -->
        <div class = "container" id = "TEMPORARY">
            <div class="row">
                <h2>BSCPE 5-1</h2>
                <hr>
                <h4><span>OBJECT ORIENTED PROGRAMMING</span></h4>
            </div>
            <div class="row">
                <h2>LABORATORY</h2>
                
            </div>
    <div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="container-fluid">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="table-wrapper">
            <input type="hidden"></input>
                <tr>
                    <tr>
                        <th colspan="2" id="table-blank"></th>
                        <th colspan="11" id="table-midterm" class="text-center">Midterms</th>
                        <th colspan="11" id="table-finals" class="text-center">Finals</th>                  
                    </tr>
                    <tr>
                        <th class="text-center" id="table-student">Student Number</th>
                        <th class="text-center" id="table-name">Name</th>
                  
                        <th colspan="3" class="text-center" id="table-lab1">LABORATORY EXERCISE/MACHINE PROBLEMS(45%)<a class="btn" id="table-lab1-button"><acronym title="ADD COLUMN"><i class="fa fa-plus-circle"></i></a><a class="btn" id="table-lab1-button-del"><acronym title="DELETE COLUMN"><i class="fa fa-minus-circle"></i></acronym></a></th>
                        <th colspan="3" class="text-center" id="table-prac1">PRACTICAL EXAM(25%)<a class="btn" id="table-prac1-button"><acronym title="ADD"><i class="fa fa-plus-circle"></i></acronym></a><a class="btn" id="table-prac1-button-del"><acronym title="DELETE COLUMN"><i class="fa fa-minus-circle"></i></acronym></a></th>
                        <th colspan="3" class="text-center" id="table-proj1">PROJECT(30%)<a class="btn" id="table-proj1-button"><acronym title="ADD"><i class="fa fa-plus-circle"></i></acronym></a><a class="btn" id="table-proj1-button-del"><acronym title="DELETE COLUMN"><i class="fa fa-minus-circle"></i></acronym></a></th>
                        <th colspan="2" class="text-center" id='border-bold'>MIDTERM GRADE</th>

                        <th colspan="3" class="text-center" id="table-lab2">LABORATORY EXERCISE/MACHINE PROBLEMS(45%)<a class="btn" id="table-lab2-button"><acronym title="ADD"><i class="fa fa-plus-circle"></i></acronym></a><a class="btn" id="table-lab2-button-del"><acronym title="DELETE COLUMN"><i class="fa fa-minus-circle"></i></acronym></a></th>
                        <th colspan="3" class="text-center" id="table-prac2">PRACTICAL EXAM(25%)<a class="btn" id="table-prac2-button"><acronym title="ADD"><i class="fa fa-plus-circle"></i></acronym></a><a class="btn" id="table-prac2-button-del"><acronym title="DELETE COLUMN"><i class="fa fa-minus-circle"></i></acronym></a></th>
                        <th colspan="3" class="text-center" id="table-proj2">PROJECT(30%)<a class="btn" id="table-proj2-button"><acronym title="ADD"><i class="fa fa-plus-circle"></i></acronym></a><a class="btn" id="table-proj2-button-del"><acronym title="DELETE COLUMN"><i class="fa fa-minus-circle"></i></acronym></a></th>
                        <th colspan="2" class="text-center">FINAL GRADE</th>
                    </tr>   
                    <tr id="table-module">
                        <th colspan="2" id="table-blank2"></th>
                        <th class="text-center">Lab 1</th>
                        <th class="text-center" id="table-lab1-total">Total</th>
                        <th class="text-center">45%</th>
                        <th class="text-center">Practical 1</th>
                        <th class="text-center" id="table-prac1-total">Total</th>
                        <th class="text-center">25%</th>
                        <th class="text-center">Project 1</th>
                        <th class="text-center" id="table-proj1-total">Total</th>
                        <th class="text-center">30%</th>
                        <th class="text-center">100%</th>
                        <th id='border-bold' class="text-center">Rating</th>

                        <th class="text-center">Lab 1</th>
                        <th class="text-center" id="table-lab2-total">Total</th>
                        <th class="text-center">45%</th>
                        <th class="text-center">Practical 1</th>
                        <th class="text-center" id="table-prac2-total">Total</th>
                        <th class="text-center">25%</th>
                        <th class="text-center">Project 1</th>
                        <th class="text-center" id="table-proj2-total">Total</th>
                        <th class="text-center">30%</th>
                        <th class="text-center">100%</th>
                        <th class="text-center">Rating</th>
                    </tr>
                    <tr id="table-items-wrapper" class='fixed-width'>
                        <td colspan="2" class="text-right" id="table-items">Number of Items</td>
                        <td contenteditable='true'></td>
                        <td contenteditable='false' id="table-items-lab1"></td>
                        <td contenteditable='false'></td>
                        <td contenteditable='true'></td>
                        <td contenteditable='false' id="table-items-prac1"></td>
                        <td contenteditable='false'></td>
                        <td contenteditable='true'></td>
                        <td contenteditable='false' id="table-items-proj1"></td>
                        <td contenteditable='false'></td>
                        <td contenteditable='false'></td>
                        <td id='border-bold' contenteditable='false'></td>

                        <td contenteditable='true'></td>
                        <td contenteditable='false' id="table-items-lab2"></td>
                        <td contenteditable='false'></td>
                        <td contenteditable='true'></td>
                        <td contenteditable='false' id="table-items-prac2"></td>
                        <td contenteditable='false'></td>
                        <td contenteditable='true'></td>
                        <td contenteditable='false' id="table-items-proj2"></td>
                        <td contenteditable='false'></td>
                        <td contenteditable='false'></td>
                        <td contenteditable='false'></td>
                    </tr>
                    <tr id="table-data-wrapper"> 

                        <?php
                        for ($a = 0; $a<10; $a++) 
                        {
                            echo "<tr>";  
                            echo "<input type='hidden' name='id[]' value='".$a."'/>"; 
                            echo "<td id='border-left'>2011-00090-MN-0</td>";
                            echo "<td id='border-bold'>J.C. Flores</td>";
                            echo "<td contenteditable='true' name='score[]'></td>";
                            echo "<td contenteditable='false' id='table-name-lab1'></td>";
                            echo "<td contenteditable='false'></td>";
                            echo "<td contenteditable='true'></td>";
                            echo "<td contenteditable='false' id='table-name-prac1'></td>";
                            echo "<td contenteditable='false'></td>";
                            echo "<td contenteditable='true'></td>";
                            echo "<td contenteditable='false' id='table-name-proj1'></td>";
                            echo "<td contenteditable='false'></td>";
                            echo "<td contenteditable='false'></td>";
                            echo "<td  id='border-bold' contenteditable='false'></td>";
                            echo "<td contenteditable='false'></td>";

                            echo "<td contenteditable='true' name='score[]'></td>";
                            echo "<td contenteditable='false' id='table-name-lab2'></td>";
                            echo "<td contenteditable='false'></td>";
                            echo "<td contenteditable='true'></td>";
                            echo "<td contenteditable='false' id='table-name-prac2'></td>";
                            echo "<td contenteditable='false'></td>";
                            echo "<td contenteditable='true'></td>";
                            echo "<td contenteditable='false' id='table-name-proj2'></td>";
                            echo "<td contenteditable='false'></td>";
                            echo "<td contenteditable='false'></td>";
                          
                            
                            echo "</tr>"; 
                        }
                        ?>
                    </tr>

                </tr>
            </table>
        </div>
    </div>    
</div>
</div>
	<button type="button" onclick="alert('Hello world!')" id="save-button" name="save-button">Save</button>
 </div>
    </div>

    <!-- FOOTER -->
     <div class = "container-fluid" id = "footer-wrapper">
        <div class = "container">
            <div class="row">
                <div class="col-lg-6 col-md-6" id = "footer-details">      
                    <img alt="Brand" id = "header-logo"src="resources/img/logoce.png"> 
                    <img alt="Brand" id = "header-logo"src="resources/img/logocpe.png">
                    <span><b>College of Engineering</b> | Online Class Record </span>      
                    <p><i class="fa fa-copyright"></i>All Rights Reserved</p>
                </div>
                <div class = "col-lg-5 col-md-5 pull-right" id = "footer-form">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Comments and Queries">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class = "fa fa-envelope"></i></button>
                        </span>
                    </div>
                </div>
            </div>
        </div> <!-- container -->
    </div> <!-- container-fluid -->

<script type="text/javascript" src="plugins/bootstrap/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/jquery-1.11.3.js"></script>
<script type="text/javascript" src="js/sidebar.js"></script>
<script type="text/javascript" src="js/table.js"></script>
<script type="text/javascript" src="js/button.js"></script>
<script type="text/javascript" src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="plugins/bootstrap/js/script.js"></script>

</body>