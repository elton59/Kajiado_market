<?php
session_start();
error_reporting(0);
?>
<div class="page-wrap">
                <div class="app-sidebar colored">
                    <div class="sidebar-header">
                        <a class="header-brand" href="index.html">
                            <div class="logo-img">
                            </div>
                            <span class="text">KajiadoMarket</span>
                        </a>
                        <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
                        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
                    </div>
                    
                    <div class="sidebar-content">
                        <div class="nav-container">
                            <nav id="main-menu-navigation" class="navigation-main">
                                <div class="nav-item active">
                                    <a href="main.php"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                                </div>

                             
                                <div class="nav-item">
                                    <a href="stalls.php"><i class="ik ik-file-plus"></i><span>Stalls</span></a>
                                </div>
                                 <div class="nav-item">
                                    <a href="taxpayment.php"><i class="ik ik-credit-card"></i><span>tax</span></a>
                                </div>
                                  <div class="nav-item">
                                    <a href="payment.php"><i class="ik ik-dollar-sign"></i><span> stall payment</span></a>
                                </div>
                               
                              
                                 
                               
                            </nav>
                        </div>
                    </div>
                </div>