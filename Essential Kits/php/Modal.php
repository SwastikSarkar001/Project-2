<?php
    if(isset($_SESSION['user'])) {
?>
<div id="modal">
    <?php
        $q="select * from students where Card_No='".$_SESSION['user']."'";
        $result = mysqli_fetch_assoc(mysqli_query($conn,$q));
        $cardno = $result['Card_No'];
        $name = $result['Name'];
        $course = $result['Course'];
        $year = $result['Year'];
        $roll = $result['Roll'];
        $number = $result['Number'];
        $group = $result['Group'];
        $date = $result['Date'];
    ?>
    <div id="modal-shade">
        <div id="modal-overflow">
            <div id="modal-content">
                <div class="close-btn"><div class="closeicon">&times;</div></div>
                <h3 id="modal-heading">My Account</h3>
                <div id="modal-details">
                    <div id="mycard-heading" class="modal-details-heading">Library Card</div>
                    <div class="mycard">
                        <div class="mycard-college">
                            <h3 class="mycard-college-name">The Calcutta Technical School</h3>
                            <div class="mycard-college-address">
                                <p>110, S.N. Banerjee Road,</p>
                                <p>Kolkata - 700 011</p>
                            </div>
                        </div>
                        <div class="mycard-mydetails">
                            <img src="../Essential Kits/pic/dummy-profile-pic.jpg" class="mycard-mydetails-photo">
                            <div class="mycard-mydetails-details">
                                <div class="mycard-mydetails-details-field">
                                    <div class="mycard-mydetails-details-fieldname">Card Number:</div>
                                    <div class="mycard-mydetails-details-fieldvalue"><?php echo $cardno; ?></div>
                                </div>
                                <div class="mycard-mydetails-details-field">
                                    <div class="mycard-mydetails-details-fieldname">Name:</div>
                                    <div class="mycard-mydetails-details-fieldvalue"><?php echo $name; ?></div>
                                </div>
                                <div>
                                    <div class="mycard-mydetails-details-field">
                                        <div class="mycard-mydetails-details-fieldname">Roll:</div>
                                        <div class="mycard-mydetails-details-fieldvalue"><?php echo $roll; ?></div>
                                    </div>
                                    <div class="mycard-mydetails-details-field">
                                        <div class="mycard-mydetails-details-fieldname">No.:</div>
                                        <div class="mycard-mydetails-details-fieldvalue"><?php echo $number; ?></div>
                                    </div>
                                </div>
                                <div class="mycard-mydetails-details-field">
                                    <div class="mycard-mydetails-details-fieldname">Course:</div>
                                    <div class="mycard-mydetails-details-fieldvalue">
                                        <?php
                                            if($course == "DCST")
                                            echo "Computer Science and Technology";
                                            elseif($course == "DCE")
                                            echo "Civil Engineering";
                                            elseif($course == "DME")
                                            echo "Mechanical Engineering";
                                            elseif($course == "DEE")
                                            echo "Electrical Engineering";
                                        ?>
                                    </div>
                                </div>
                                <div class="mycard-mydetails-details-field">
                                    <div class="mycard-mydetails-details-fieldname">Year:</div>
                                    <div class="mycard-mydetails-details-fieldvalue">
                                        <?php
                                            if($year == 1)
                                            echo "1st";
                                            elseif($year == 2)
                                            echo "2nd";
                                            elseif($year == 3)
                                            echo "3rd";
                                        ?>
                                    </div>
                                </div>  
                                <div class="mycard-mydetails-details-field">
                                    <div class="mycard-mydetails-details-fieldname">Group:</div>
                                    <div class="mycard-mydetails-details-fieldvalue"><?php echo $group; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        $q="select Card_No,Name from students where `Group`='".$_SESSION['group']."' and not Card_No='".$_SESSION['user']."'";
                        $teamquery=mysqli_query($conn,$q);
                        $teamrows=mysqli_num_rows($teamquery);
                    ?>
                    <div id="team-heading" class="modal-details-heading">Other Groupmates(<?php echo $teamrows; ?>)</div>
                    <div class="mygroupmates">
                        <?php
                            if($teamrows==0) {
                        ?>
                            <div id="nogroupmates">You currently have no other groupmates!</div>
                        <?php
                            }
                            else {
                        ?>
                            <div id="groupgrid">
                                <div id="leftarrow" class="arrow"><div class="fa-solid fa-angle-up left"></div></div>
                                <div id="groupgrid-content" style="--x:<?php echo $teamrows; ?>;">
                        <?php
                                while($team=mysqli_fetch_array($teamquery)) {
                        ?>
                                    <div class="groupgrid-content-member">
                                        <div class="groupgrid-content-member-image"><img src="../Essential Kits/pic/dummy-profile-pic.jpg"></div>
                                        <div class="groupgrid-content-member-cardno"><?php echo $team['Card_No'] ?></div>
                                        <h3 class="groupgrid-content-member-name"><?php echo $team['Name'] ?></h3>
                                        <a href="" class="groupgrid-content-member-link">Click to see details</a>
                                    </div>
                        <?php
                                }
                        ?>
                                </div>
                                <div id="rightarrow" class="arrow"><div class="fa-solid fa-angle-up right"></div></div>  
                            </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    }
?>