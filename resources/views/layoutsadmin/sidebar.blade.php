<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"><span>Main</span></li>
                <li class="active">
                    <a href="index.html"><i data-feather="home"></i> <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="customers.html"><i data-feather="users"></i> <span>Customers</span></a>
                </li>
                <li>
                    <a href="estimates.html"><i data-feather="file-text"></i> <span>Estimates</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i data-feather="clipboard"></i> <span> Kategori</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="/kategori">Kategori</a></li>
                        <li><a href="invoice-grid.html">Sub Kategori</a></li>
                        <li><a href="invoice-grid-two.html">Sub->SubKategori</a></li>
                    </ul>
                </li>
                <li class="submenu {{ Route::is('datawilayahprovinsi') ? 'active' : '' }}">
                    <a href="#"><i data-feather="clipboard"></i> <span>Data wilayah</span> <span
                            class="menu-arrow"></span></a>
                    <ul class="{{ Route::is('datawilayahprovinsi') ? 'd-block' : '' }}">
                        <li {{ Route::is('datawilayahprovinsi') ? 'active' : '' }}><a href="/datawilayahprovinsi">Provinsi</a></li>
                        <li><a href="invoice-grid.html">Kota / Kabupaten</a></li>
                        <li><a href="invoice-grid-two.html">Kecamatan</a></li>
                    </ul>
                </li>
                <li>
                    <a href="payments.html"><i data-feather="credit-card"></i> <span>Payments</span></a>
                </li>
                <li class="menu-title"><span>Pesanan</span></li>
                <li>
                    <a href="expenses.html"><i data-feather="package"></i> <span>Expenses</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i data-feather="pie-chart"></i> <span> Reports</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="sales-report.html">Sales Report</a></li>
                        <li><a href="expenses-report.html">Expenses Report</a></li>
                        <li><a href="profit-loss-report.html">Profit & Loss Report</a></li>
                        <li><a href="taxs-report.html">Taxs Report</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i data-feather="grid"></i> <span> Blogs</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="blog.html">All Blogs</a></li>
                        <li><a href="add-blog.html">Add Blog</a></li>
                        <li><a href="edit-blog.html">Edit Blog</a></li>
                        <li><a href="blog-categories.html">Categories</a></li>
                    </ul>
                </li>
                <li>
                    <a href="settings.html"><i data-feather="settings"></i> <span>Settings</span></a>
                </li>

            </ul>
        </div>
    </div>
</div>
