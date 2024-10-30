<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                
                <li class="mt-3 mb-2 <?php if($PAGE=='dashboard') echo 'active'; ?>"><a href="dashboard.php"><i class="la la-home"></i><span class="menu-title" data-i18n="Dashboard"> Dashboard</span></a>
                </li>
               
                
                <?php
                if($_SESSION['role_value']==1){
                
                ?>
                <li class="nav-item <?php if($PAGE=='branch') echo 'active'; ?>"><a href="branch-list.php"><i class="la la-building"></i><span class="menu-title" data-i18n="Company">Collectors</span></a>
                </li>
                <?php } ?>
                <?php
                if(($_SESSION['role_value']==1)){
                
                ?>
                <li class="nav-item <?php if($PAGE=='user') echo 'active'; ?>"><a href="user-list.php"><i class="la la-users"></i><span class="menu-title" data-i18n="Company">Users</span></a>
                </li>
                <?php } ?>
                <?php
                if($_SESSION['role_value']==1){
                
                ?>
                <li class="nav-item <?php if($PAGE=='finance') echo 'active'; ?>"><a href="finance.php"><i class="la la-building"></i><span class="menu-title" data-i18n="Company">Finance</span></a>
                </li>
                <?php } ?>
                <?php
                if(($_SESSION['role_value']==1) || ($_SESSION['role_value']==2)){
                
                ?>
                <li class="nav-item <?php if($PAGE=='transaction') echo 'active'; ?>"><a href="transaction-list.php"><i class="la la-users"></i><span class="menu-title" data-i18n="Company">Donation</span></a>
                </li>
                <?php } ?>
                
                <?php
                if(($_SESSION['role_value']==1)){
                
                ?>
                <li class="nav-item <?php if($PAGE=='applyReceipt') echo 'active'; ?>"><a href="applyreceipt.php"><i class="la la-users"></i><span class="menu-title" data-i18n="Company">Apply Receipt</span></a>
                </li>
                <?php } ?>
                <?php
                if(($_SESSION['role_value']==1)){
                
                ?>
                <li class="nav-item <?php if($PAGE=='transactionForTitle') echo 'active'; ?>"><a href="transaction-for-title.php"><i class="la la-users"></i><span class="menu-title" data-i18n="Company">Transaction For Title</span></a>
                </li>
                <?php } ?>
                <?php 
               
                    $sqll = $obj->select_all_where('login_data','where login_id="'.$_SESSION['user_login_id'].'"');
                foreach($sqll as $valuee){
                    $role=$valuee['login_role_value'];
                }

                if($role==1){

                }else{
                    $sql = $obj->select_all_where('users','where login_data_id="'.$_SESSION['user_login_id'].'"');
                    foreach($sql as $valuess){
                        $permission=$valuess['permission'];
                    }
                    $exp_per = explode(',',$permission);

                }
               

                
                
                ?>
                <?php
          
        if($role==3){
            if (in_array('Campaign/Project',$exp_per)===true){
            ?>
                <li class="nav-item <?php if($PAGE=='event') echo 'active'; ?>"><a href="event-list.php"><i class="la la-star-half-full"></i><span class="menu-title" data-i18n="Company">Event / Project </span></a>
                </li>
                <?php 
            }  
        }else if($role==1){
                ?>
                <li class="nav-item <?php if($PAGE=='event') echo 'active'; ?>"><a href="event-list.php"><i class="la la-star-half-full"></i><span class="menu-title" data-i18n="Company">Event / Project </span></a>
                </li>
                <?php
            }else if($role==2){
                ?>
                <li class="nav-item <?php if($PAGE=='event') echo 'active'; ?>"><a href="event-list.php"><i class="la la-star-half-full"></i><span class="menu-title" data-i18n="Company">Event / Project </span></a>
                </li>
                <?php
            }
            
            

        if($role==3){
            if (in_array('members',$exp_per)===true){
            ?>
                <li class=" nav-item <?php if($PAGE=='members') echo 'active'; ?>"><a href="members-list.php"><i class="la la-star-half-full"></i><span class="menu-title" data-i18n="Company">Members </span></a>
                </li>
                <?php 
            }  
        }
        else if($role==1){
                ?>
                <li class=" nav-item <?php if($PAGE=='members') echo 'active'; ?>"><a href="members-list.php"><i class="la la-star-half-full"></i><span class="menu-title" data-i18n="Company">Members </span></a>
                </li>
                <?php
            }else if($role==2){
                ?>
                <li class=" nav-item <?php if($PAGE=='members') echo 'active'; ?>"><a href="members-list.php"><i class="la la-star-half-full"></i><span class="menu-title" data-i18n="Company">Members </span></a>
                </li>
                <?php
            }
            
            ?>
               
               
           
           
               
               
                <li><a class=" nav-item" href="logout.php"><i class="ft-power"></i><span data-i18n="Invoice Template">Logout </span></a>
                </li>
                
</ul>