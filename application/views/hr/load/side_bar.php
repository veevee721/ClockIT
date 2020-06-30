<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i> Dashboard</a>
                    
                  </li>
                  <li><a><i class="fa fa-briefcase"></i> Position <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>hr/position">Add Position</a></li>
                      <li><a href="<?php echo base_url(); ?>hr/archived_position">Archived Position</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-group"></i> Employee <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>hr/employee">Add Employee</a></li>
                      <li><a href="<?php echo base_url(); ?>hr/archived_employee">Archived Office</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-file"></i> Leave <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>hr/leave">Leave Request</a></li>
                      <li><a href="<?php echo base_url(); ?>hr/archived_leave">Archived Leaved Request</a></li>
                    </ul>
                  </li>
                  <?php 
                    if($this->session->userdata('role') == 2){
                  ?>
                  <li><a href="<?php echo base_url(); ?>hr/members"><i class="fa fa-group"></i> Members</a>
                    <?php 
                    }
                    ?>
                  </li>
                  
              </div>
              

            </div>
            <!-- /sidebar menu -->