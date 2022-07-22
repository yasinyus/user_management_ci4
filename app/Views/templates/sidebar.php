<div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" data-key="t-menu">Menu</li>

                            <li>
                                <a href="<?= base_url('dashboard') ?>">
                                    <i data-feather="home"></i>
                                    <span data-key="t-dashboard">Dashboard</span>
                                </a>
                            </li>

                            <?php if (session()->level_id == 1) : ?>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="users"></i>
                                    <span data-key="t-authentication">User Management</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="<?= base_url('user') ?>" data-key="t-login">List data user</a></li>
                                </ul>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="<?= base_url('user/create') ?>" data-key="t-login">Add User</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="grid"></i>
                                    <span data-key="t-authentication">User Group</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="<?= base_url('user_group') ?>" data-key="t-login">List user group</a></li>
                                </ul>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="<?= base_url('user_group/create') ?>" data-key="t-login">Add User</a></li>
                                </ul>
                            </li>
                            <?php endif; ?>




                      




                        </ul>

                        <div class="card sidebar-alert border-0 text-center mx-4 mb-0 mt-5">
                            <div class="card-body">
                                <img src="<?= base_url();?>/assets/images/giftbox.png" alt="">
                                <div class="mt-4">
                                    <h5 class="alertcard-title font-size-16">Unlimited Access</h5>
                                    <p class="font-size-13">Upgrade your plan from a Free trial, to select ‘Business Plan’.</p>
                                    <a href="#!" class="btn btn-primary mt-2">Upgrade Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>