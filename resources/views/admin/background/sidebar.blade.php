<?php
?>
<html>


<head>

    <title>adminhome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/brands.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/brands.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css"
        integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"
        integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous">
    </script>
</head>


<style>
.left {

    display: inline-block;
    white-space: nowrap;
    width: 65px;
    height: 800px;

}

.left:hover {
    width: 265px;

}

.item:hover {
    background-color: rgb(125, 128, 134);
    width: 253px;
}

.left .fas {
    margin: 15px;
    width: 20px;
    font-size: 15px;
    vertical-align: middle !important;

}

.item {
    overflow: hidden;
    color: #fff;
    padding-top: 15px;
    padding-bottom: 15px;

}

.left a,
.dropdown {
    padding-left: 15px;
    padding-bottom: 10px;
    color: white;

}

.left a:hover,
.dropdown:hover {
    text-decoration: none;
    color: rgba(41, 42, 43, 0.938);
    margin-bottom: 10px;

}

.left ul,
.left li {
    list-style: none;
    padding-top: 10px;
    margin: 0px;
    line-height: 15px;
    cursor: pointer;

}
</style>
</head>

<body>


    <div class="left bg-dark">


        <div class="item active">
            <i class="fas fa-fw fa-user-alt"><a href="#customerSubmenu" data-toggle="collapse" aria-expanded="false">
                    Customer</a>

                <ul class="collapse" id="customerSubmenu">
                    <li>
                        <a href="newcustomer">New Customer</a>
                    </li>
                    <li>
                        <a href="viewcustomer">View Customer</a>
                    </li>
                </ul>
            </i>
        </div>

        <div class="item">
            <i class="fas fa-fw fa-tasks"><a href="#employeeSubmenu" data-toggle="collapse" aria-expanded="fales"
                    class="dropdown"> Event</a>

                <ul class="sub-menu collapse" id="employeeSubmenu">
                    <li>
                        <a href="newevent.php">New Event</a>
                    </li>
                    <li>
                        <a href="viewevent.php">View Event</a>
                    </li>
                </ul>
            </i>
        </div>

        <div class="item">
            <i class="fas fa-fw fa-id-card-alt"><a href="#empSubmenu" data-toggle="collapse" aria-expanded="fales"
                    class="dropdown"> Employee</a>

                <ul class="sub-menu collapse" id="empSubmenu">
                    <li>
                        <a href="newemployee.php">New Employee</a>
                    </li>
                    <li>
                        <a href="viewemployee.php">View Employee</a>
                    </li>
                </ul>
            </i>
        </div>

        <div class="item">
            <i class="fas fa-fw fa-sliders-h"><a href="#teamSubmenu" data-toggle="collapse" aria-expanded="fales"
                    class="dropdown"> Team</a>

                <ul class="sub-menu collapse" id="teamSubmenu">
                    <li>
                        <a href="manageteam.php">Manage Team</a>
                    </li>
                </ul>
            </i>
        </div>

        <div class="item">
            <i class="fas fa-fw fa-envelope"><a href="#noticeSubmenu" data-toggle="collapse" aria-expanded="fales"
                    class="dropdown"> Notice</a>

                <ul class="sub-menu collapse" id="noticeSubmenu">
                    <li>
                        <a href="newnotice.php">New Notice</a>
                    </li>
                    <li>
                        <a href="viewnotice.php">View Notice</a>
                    </li>
                </ul>
            </i>
        </div>

        <div class="item">
            <i class="fas fa-fw fa-address-card"><a href="#usersSubmenu" data-toggle="collapse" aria-expanded="fales"
                    class="dropdown"> Users</a>

                <ul class="sub-menu collapse" id="usersSubmenu">
                    <li>
                        <a href="changeuserlevel.php">Change User Level</a>
                    </li>
                    <li>
                        <a href="changepassword.php">Change Password</a>
                    </li>
                </ul>
            </i>
        </div>

        <div class="item">
            <i class="fas fa-fw fa-columns"><a href="#reportsSubmenu" data-toggle="collapse" aria-expanded="fales"
                    class="dropdown"> Reports</a>

                <ul class="sub-menu collapse" id="reportsSubmenu">
                    <li>
                        <a href="eventreport.php">Event Reports</a>
                    </li>
                    <li>
                        <a href="employeeeventreport.php">Employee Event Reports</a>
                    </li>
                </ul>
            </i>
        </div>
    </div>

</body>

</html>