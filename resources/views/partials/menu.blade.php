<div class="sidebar">
    <nav class="sidebar-nav ps ps--active-y">

        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route("admin.home") }}" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link  nav-dropdown-toggle">
                    <i class="fas fa-users nav-icon">

                    </i>
                    {{ trans('global.userManagement.title') }}
                </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                            <i class="fas fa-unlock-alt nav-icon">

                            </i>
                            {{ trans('global.permission.title') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                            <i class="fas fa-briefcase nav-icon">

                            </i>
                            {{ trans('global.role.title') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                            <i class="fas fa-user nav-icon">

                            </i>
                            {{ trans('global.user.title') }}
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="{{ route("admin.warga.index") }}" class="nav-link {{ request()->is('admin/warga') || request()->is('admin/warga/*') ? 'active' : '' }}">
                    <i class="fas fa-cogs nav-icon">

                    </i>
                    {{ trans('global.warga.title') }}
                </a>
            </li>


            <li class="nav-item">
                <a href="{{ route("admin.keuangan.index") }}" class="nav-link {{ request()->is('admin/keuangan') || request()->is('admin/keuangan/*') ? 'active' : '' }}">
                    <i class="fas fa-cogs nav-icon">

                    </i>
                    {{ trans('global.keuangan.title') }}
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route("admin.event.index") }}" class="nav-link {{ request()->is('admin/event') || request()->is('admin/event/*') ? 'active' : '' }}">
                    <i class="fas fa-cogs nav-icon">

                    </i>
                    {{ trans('global.event.title') }}
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route("admin.insidental.index") }}" class="nav-link {{ request()->is('admin/insidental') || request()->is('admin/insidental/*') ? 'active' : '' }}">
                    <i class="fas fa-cogs nav-icon">

                    </i>
                    {{ trans('global.insidental.title') }}
                </a>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link  nav-dropdown-toggle">
                    <i class="fas fa-users nav-icon">

                    </i>
                    Master Data
                </a>
                <ul class="nav-dropdown-items">

                    <li class="nav-item">
                        <a href="{{ route("admin.rt.index") }}" class="nav-link {{ request()->is('admin/rt') || request()->is('admin/rt/*') ? 'active' : '' }}">
                            <i class="fas fa-cogs nav-icon">

                            </i>
                            {{ trans('global.rt.title') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("admin.rw.index") }}" class="nav-link {{ request()->is('admin/rw') || request()->is('admin/rw/*') ? 'active' : '' }}">
                            <i class="fas fa-cogs nav-icon">

                            </i>
                            {{ trans('global.rw.title') }}
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route("admin.kelurahan.index") }}" class="nav-link {{ request()->is('admin/kelurahan') || request()->is('admin/kelurahan/*') ? 'active' : '' }}">
                            <i class="fas fa-cogs nav-icon">

                            </i>
                            {{ trans('global.kelurahan.title') }}
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route("admin.master_alamat.index") }}" class="nav-link {{ request()->is('admin/master_alamat') || request()->is('admin/master_alamat/*') ? 'active' : '' }}">
                            <i class="fas fa-cogs nav-icon">

                            </i>
                            {{ trans('global.master_alamat.title') }}
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route("admin.master_agama.index") }}" class="nav-link {{ request()->is('admin/master_agama') || request()->is('admin/master_agama/*') ? 'active' : '' }}">
                            <i class="fas fa-cogs nav-icon">

                            </i>
                            {{ trans('global.master_agama.title') }}
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route("admin.master_pekerjaan.index") }}" class="nav-link {{ request()->is('admin/master_pekerjaan') || request()->is('admin/master_pekerjaan/*') ? 'active' : '' }}">
                            <i class="fas fa-cogs nav-icon">

                            </i>
                            {{ trans('global.master_pekerjaan.title') }}
                        </a>
                    </li>



                    <li class="nav-item">
                        <a href="{{ route("admin.master_gaji.index") }}" class="nav-link {{ request()->is('admin/master_gaji') || request()->is('admin/master_gaji/*') ? 'active' : '' }}">
                            <i class="fas fa-cogs nav-icon">

                            </i>
                            {{ trans('global.master_gaji.title') }}
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route("admin.pendidikan.index") }}" class="nav-link {{ request()->is('admin/pendidikan') || request()->is('admin/pendidikan/*') ? 'active' : '' }}">
                            <i class="fas fa-cogs nav-icon">

                            </i>
                            {{ trans('global.pendidikan.title') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("admin.sekolah.index") }}" class="nav-link {{ request()->is('admin/sekolah') || request()->is('admin/sekolah/*') ? 'active' : '' }}">
                            <i class="fas fa-cogs nav-icon">

                            </i>
                            {{ trans('global.sekolah.title') }}
                        </a>
                    </li>


                    <li class="nav-item">
                        <a href="{{ route("admin.wilayah.index") }}" class="nav-link {{ request()->is('admin/wilayah') || request()->is('admin/wilayah/*') ? 'active' : '' }}">
                            <i class="fas fa-cogs nav-icon">

                            </i>
                            {{ trans('global.wilayah.title') }}
                        </a>
                    </li>


                    <li class="nav-item">
                        <a href="{{ route("admin.history_warga.index") }}" class="nav-link {{ request()->is('admin/history_warga') || request()->is('admin/history_warga/*') ? 'active' : '' }}">
                            <i class="fas fa-cogs nav-icon">

                            </i>
                            {{ trans('global.history_warga.title') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("admin.keuangan_category.index") }}" class="nav-link {{ request()->is('admin/keuangan_category') || request()->is('admin/keuangan_category/*') ? 'active' : '' }}">
                            <i class="fas fa-cogs nav-icon">

                            </i>
                            {{ trans('global.keuangan_category.title') }}
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route("admin.event_category.index") }}" class="nav-link {{ request()->is('admin/event_category') || request()->is('admin/event_category/*') ? 'active' : '' }}">
                            <i class="fas fa-cogs nav-icon">

                            </i>
                            {{ trans('global.event_category.title') }}
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route("admin.insidental_category.index") }}" class="nav-link {{ request()->is('admin/insidental_category') || request()->is('admin/insidental_category/*') ? 'active' : '' }}">
                            <i class="fas fa-cogs nav-icon">

                            </i>
                            {{ trans('global.insidental_category.title') }}
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route("admin.history_category.index") }}" class="nav-link {{ request()->is('admin/history_category') || request()->is('admin/history_category/*') ? 'active' : '' }}">
                            <i class="fas fa-cogs nav-icon">

                            </i>
                            {{ trans('global.history_category.title') }}
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route("admin.sdm_category.index") }}" class="nav-link {{ request()->is('admin/sdm_category') || request()->is('admin/sdm_category/*') ? 'active' : '' }}">
                            <i class="fas fa-cogs nav-icon">

                            </i>
                            {{ trans('global.sdm_category.title') }}
                        </a>
                    </li>
                </ul>
            </li>

            <!-- <li class="nav-item">
                <a href="{{ route("admin.products.index") }}" class="nav-link {{ request()->is('admin/products') || request()->is('admin/products/*') ? 'active' : '' }}">
                    <i class="fas fa-cogs nav-icon">

                    </i>
                    {{ trans('global.product.title') }}
                </a>
            </li> -->

            <li class="nav-item nav-dropdown">
                <a class="nav-link  nav-dropdown-toggle">
                    <i class="fas fa-users nav-icon">

                    </i>
                    Setting
                </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                            <i class="fas fa-unlock-alt nav-icon">

                            </i>
                            {{ trans('global.permission.title') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                            <i class="fas fa-briefcase nav-icon">

                            </i>
                            {{ trans('global.role.title') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                            <i class="fas fa-user nav-icon">

                            </i>
                            {{ trans('global.user.title') }}
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link  nav-dropdown-toggle">
                    <i class="fas fa-users nav-icon">
                    </i>
                    Laporan
                    <!-- {{ trans('global.userManagement.title') }} -->
                </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a href="{{ route("admin.report_data_masyarakat_km.index") }}" class="nav-link {{ request()->is('admin/report_data_masyarakat_km') || request()->is('admin/report_data_masyarakat_km/*') ? 'active' : '' }}">
                            <i class="fas fa-unlock-alt nav-icon">

                            </i>
                            Report DMKM
                            <!-- {{ trans('global.permission.title') }} -->
                        </a>
                    </li>


                </ul>
            </li>


            <li class="nav-item">
                 <a href="{{ route("admin.logout.index") }}" class="nav-link {{ request()->is('admin/logout') || request()->is('admin/logout/*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>

        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 869px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 415px;"></div>
        </div>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>