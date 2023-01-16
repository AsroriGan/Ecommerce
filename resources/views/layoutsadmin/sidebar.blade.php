<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"><span>Main</span></li>
                <li class="active">
                    <a href="index.html"><i data-feather="home"></i> <span>Dashboard</span></a>
                </li>
                <li>
                    <a {{ Route::is('/sliderr') ? 'class=active' : '' }} href="/sliderr"><i data-feather="users"></i>
                        <span>Slider</span></a>
<<<<<<< HEAD
=======
                </li>
>>>>>>> c6725062b3c31e0f8f316bacc39624c21d306e5d
                <li class="active">
                    <a href="/merek"><i data-feather="home"></i> <span>Merk</span></a>
                </li>
                <li class="submenu {{ Route::is('kategori', 'subkategori', 'sub_subkategori') ? 'active' : '' }}">
                    <a href="#"><i data-feather="clipboard"></i> <span> Kategori</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a {{ Route::is('kategori') ? 'class=active' : '' }} href="/kategori">Kategori</a></li>
                        <li><a {{ Route::is('subkategori') ? 'class=active' : '' }} href="/subkategori">Sub Kategori</a></li>
                        <li><a {{ Route::is('sub_subkategori') ? 'class=active' : '' }} href="/sub_subkategori">Sub->SubKategori</a></li>
                    </ul>
                </li>
                <li
                    class="submenu {{ Route::is('datawilayahprovinsi', 'datawilayahkabupaten', 'datawilayahkecamatan') ? 'active' : '' }}">
                    <a href="#"><i data-feather="clipboard"></i> <span>Data wilayah</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a {{ Route::is('datawilayahprovinsi') ? 'class=active' : '' }}
                                href="/datawilayahprovinsi">Provinsi</a></li>
                        <li><a {{ Route::is('datawilayahkabupaten') ? 'class=active' : '' }}
                                href="/datawilayahkabupaten">Kota / Kabupaten</a></li>
                        <li><a {{ Route::is('datawilayahkecamatan') ? 'class=active' : '' }}
                                href="/datawilayahkecamatan">Kecamatan</a></li>
                    </ul>
                </li>
                <li class="{{Route::is('produkadmin','addproduk','view_produk') ? 'active' : ''}}">
                    <a href="/produkadmin"><i data-feather="credit-card"></i> <span>Produk</span></a>
                </li>
                <li>
                    <a {{ Route::is('/sliderr') ? 'class=active' : '' }} href="/sliderr"><i data-feather="users"></i> <span>Slider</span></a>
                </li>
                <li>
                    <a href="estimates.html"><i data-feather="file-text"></i> <span>Estimates</span></a>
                </li>
                <li>
                    <a href="/promosi"><i data-feather="credit-card"></i> <span>Tambah Promo</span></a>
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
