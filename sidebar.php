<!--=======Sidebar=======-->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="./adminPanel.php">
                <i class="bi bi-grid" style="color: #293A6C;"></i>
                <span style="color: #293A6C;">Admmin Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#"
                style="color: #293A6C;">
                <i class="bi bi-menu-button-wide"></i><span>Registries</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="./viewRegistries.php">
                        <i class="bi bi-circle"></i><span>View Registries</span>
                    </a>
                </li>
                <li>
                    <a href="./addRegistries.php">
                        <i class="bi bi-circle"></i><span>Add Registries</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->






        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gem"></i><span>Hostels</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="./addHostels.php">
                        <i class="bi bi-circle"></i><span>Add Hostels</span>
                    </a>
                </li>
                <li>
                    <a href="./viewHostels.php">
                        <i class="bi bi-circle"></i><span>View Hostels</span>
                    </a>
                </li>
            </ul>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icons-navs" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gem"></i><span>Bible Study Class</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="icons-navs" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="./viewbs_class.php">
                        <i class="bi bi-circle"></i><span>View Bible study classes</span>
                    </a>
                </li>
            </ul>
        </li>



    </ul>

</aside><!-- End Sidebar-->