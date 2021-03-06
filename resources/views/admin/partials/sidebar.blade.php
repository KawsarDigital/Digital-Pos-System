<div class="app-main">
    <div class="app-sidebar-wrapper">
        <div class="app-sidebar sidebar-shadow">
            <div class="app-header__logo">
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="KeroUI Admin Template"
                    class="logo-src"></a>
                <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
            <div class="scrollbar-sidebar scrollbar-container">
                <div class="app-sidebar__inner">
                    <ul class="vertical-nav-menu">
                        <li class="app-sidebar__heading">Menu</li>
                        <li class="mm-{{ request()->segment(1) == 'dashboard' ? 'active' : '' }}">
                            <a href="{{ route('dashboard') }}">
                                <i class="metismenu-icon pe-7s-rocket"></i>
                                Dashboards
                                {{-- <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i> --}}
                            </a>
                        </li>
                        <li class="mm-{{ request()->segment(1) == 'pos' ? 'active' : '' }}">
                            <a href="{{ route('pos.index') }}">
                                <i class="metismenu-icon pe-7s-rocket"></i>
                                POS
                                {{-- <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i> --}}
                            </a>
                        </li>
                        <li class="mm-{{ request()->segment(1) == 'group' ? 'active' : '' }}">
                            <a href="{{ route('group.index') }}">
                                <i class="metismenu-icon pe-7s-graph2">
                                </i>
                                Types
                            </a>
                        </li>
                        <li class="mm-{{ request()->segment(1) == 'category' ? 'active' : '' }}">
                            <a href="{{ route('category.index') }}">
                                <i class="metismenu-icon pe-7s-graph2">
                                </i>
                                Categories
                            </a>
                        </li>
                        <li class="mm-{{ request()->segment(1) == 'brand' ? 'active' : '' }}">
                            <a href="{{ route('brand.index') }}">
                                <i class="metismenu-icon pe-7s-graph2">
                                </i>
                                Brands
                            </a>
                        </li>
                        <li class="mm-{{ request()->segment(1) == 'product' ? 'active' : '' }}">
                            <a href="{{ route('product.index') }}">
                                <i class="metismenu-icon pe-7s-graph2">
                                </i>
                                Products
                            </a>
                        </li>
                        <li class="mm-{{ request()->segment(1) == 'userGroup' ? 'active' : '' }}">
                            <a href="#">
                                <i class="metismenu-icon pe-7s-browser"></i>
                                People
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li class="mm-{{ request()->segment(1) == 'userGroup' ? 'active' : '' }}">
                                    <a href="{{ route('userGroup.index') }}">
                                        <i class="metismenu-icon"></i>
                                        User Group
                                    </a>
                                </li>
                                <li class="mm-{{ request()->segment(1) == 'userList' ? 'active' : '' }}">
                                    <a href="{{ route('userList.index') }}">
                                        <i class="metismenu-icon">
                                        </i>User List
                                    </a>
                                </li>
                                <li class="mm-{{ request()->segment(1) == 'customer' ? 'active' : '' }}">
                                    <a href="{{ route('customer.index') }}">
                                        <i class="metismenu-icon">
                                        </i>Customer List
                                    </a>
                                </li>
                                <li class="mm-{{ request()->segment(1) == 'supplier' ? 'active' : '' }}">
                                    <a href="{{ route('supplier.index') }}">
                                        <i class="metismenu-icon">
                                        </i>Supplier List
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{-- <li>
                            <a href="#">
                                <i class="metismenu-icon pe-7s-plugin"></i>
                                Applications
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="apps-mailbox.html">
                                        <i class="metismenu-icon">
                                        </i>Mailbox
                                    </a>
                                </li>
                                <li>
                                    <a href="apps-chat.html">
                                        <i class="metismenu-icon">
                                        </i>Chat
                                    </a>
                                </li>
                                <li>
                                    <a href="apps-faq-section.html">
                                        <i class="metismenu-icon">
                                        </i>FAQ Section
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="app-sidebar__heading">UI Components</li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon pe-7s-diamond"></i>
                                Elements
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon"></i>
                                        Buttons
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="elements-buttons-standard.html">
                                                <i class="metismenu-icon">
                                                </i>Standard
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elements-buttons-pills.html">
                                                <i class="metismenu-icon">
                                                </i>Pills
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elements-buttons-square.html">
                                                <i class="metismenu-icon">
                                                </i>Square
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elements-buttons-shadow.html">
                                                <i class="metismenu-icon">
                                                </i>Shadow
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elements-buttons-icons.html">
                                                <i class="metismenu-icon">
                                                </i>With Icons
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="elements-dropdowns.html">
                                        <i class="metismenu-icon">
                                        </i>Dropdowns
                                    </a>
                                </li>
                                <li>
                                    <a href="elements-icons.html">
                                        <i class="metismenu-icon">
                                        </i>Icons
                                    </a>
                                </li>
                                <li>
                                    <a href="elements-badges-labels.html">
                                        <i class="metismenu-icon">
                                        </i>Badges
                                    </a>
                                </li>
                                <li>
                                    <a href="elements-cards.html">
                                        <i class="metismenu-icon">
                                        </i>Cards
                                    </a>
                                </li>
                                <li>
                                    <a href="elements-loaders.html">
                                        <i class="metismenu-icon">
                                        </i>Loading Indicators
                                    </a>
                                </li>
                                <li>
                                    <a href="elements-list-group.html">
                                        <i class="metismenu-icon">
                                        </i>List Groups
                                    </a>
                                </li>
                                <li>
                                    <a href="elements-navigation.html">
                                        <i class="metismenu-icon">
                                        </i>Navigation Menus
                                    </a>
                                </li>
                                <li>
                                    <a href="elements-timelines.html">
                                        <i class="metismenu-icon">
                                        </i>Timeline
                                    </a>
                                </li>
                                <li>
                                    <a href="elements-utilities.html">
                                        <i class="metismenu-icon">
                                        </i>Utilities
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon pe-7s-car"></i>
                                Components
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="components-tabs.html">
                                        <i class="metismenu-icon">
                                        </i>Tabs
                                    </a>
                                </li>
                                <li>
                                    <a href="components-accordions.html">
                                        <i class="metismenu-icon">
                                        </i>Accordions
                                    </a>
                                </li>
                                <li>
                                    <a href="components-notifications.html">
                                        <i class="metismenu-icon">
                                        </i>Notifications
                                    </a>
                                </li>
                                <li>
                                    <a href="components-modals.html">
                                        <i class="metismenu-icon">
                                        </i>Modals
                                    </a>
                                </li>
                                <li>
                                    <a href="components-loading-blocks.html">
                                        <i class="metismenu-icon">
                                        </i>Loading Blockers
                                    </a>
                                </li>
                                <li>
                                    <a href="components-progress-bar.html">
                                        <i class="metismenu-icon">
                                        </i>Progress Bar
                                    </a>
                                </li>
                                <li>
                                    <a href="components-tooltips-popovers.html">
                                        <i class="metismenu-icon">
                                        </i>Tooltips &amp; Popovers
                                    </a>
                                </li>
                                <li>
                                    <a href="components-carousel.html">
                                        <i class="metismenu-icon">
                                        </i>Carousel
                                    </a>
                                </li>
                                <li>
                                    <a href="components-calendar.html">
                                        <i class="metismenu-icon">
                                        </i>Calendar
                                    </a>
                                </li>
                                <li>
                                    <a href="components-pagination.html">
                                        <i class="metismenu-icon">
                                        </i>Pagination
                                    </a>
                                </li>
                                <li>
                                    <a href="components-count-up.html">
                                        <i class="metismenu-icon">
                                        </i>Count Up
                                    </a>
                                </li>
                                <li>
                                    <a href="components-scrollable-elements.html">
                                        <i class="metismenu-icon">
                                        </i>Scrollable
                                    </a>
                                </li>
                                <li>
                                    <a href="components-tree-view.html">
                                        <i class="metismenu-icon">
                                        </i>Tree View
                                    </a>
                                </li>
                                <li>
                                    <a href="components-maps.html">
                                        <i class="metismenu-icon">
                                        </i>Maps
                                    </a>
                                </li>
                                <li>
                                    <a href="components-ratings.html">
                                        <i class="metismenu-icon">
                                        </i>Ratings
                                    </a>
                                </li>
                                <li>
                                    <a href="components-image-crop.html">
                                        <i class="metismenu-icon">
                                        </i>Image Crop
                                    </a>
                                </li>
                                <li>
                                    <a href="components-guided-tours.html">
                                        <i class="metismenu-icon">
                                        </i>Guided Tours
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon pe-7s-display2"></i>
                                Tables
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="tables-data-tables.html">
                                        <i class="metismenu-icon">
                                        </i>Data Tables
                                    </a>
                                </li>
                                <li>
                                    <a href="tables-regular.html">
                                        <i class="metismenu-icon">
                                        </i>Regular Tables
                                    </a>
                                </li>
                                <li>
                                    <a href="tables-grid.html">
                                        <i class="metismenu-icon">
                                        </i>Grid Tables
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="app-sidebar__heading">Dashboard Widgets</li>
                        <li>
                            <a href="widgets-chart-boxes.html">
                                <i class="metismenu-icon pe-7s-graph">
                                </i>Chart Boxes 1
                            </a>
                        </li>
                        <li>
                            <a href="widgets-chart-boxes-2.html">
                                <i class="metismenu-icon pe-7s-way">
                                </i>Chart Boxes 2
                            </a>
                        </li>
                        <li>
                            <a href="widgets-chart-boxes-3.html">
                                <i class="metismenu-icon pe-7s-ball">
                                </i>Chart Boxes 3
                            </a>
                        </li>
                        <li>
                            <a href="widgets-profile-boxes.html">
                                <i class="metismenu-icon pe-7s-id">
                                </i>Profile Boxes
                            </a>
                        </li>
                        <li class="app-sidebar__heading">Forms</li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon pe-7s-light"></i>
                                Elements
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="forms-controls.html">
                                        <i class="metismenu-icon">
                                        </i>Controls
                                    </a>
                                </li>
                                <li>
                                    <a href="forms-layouts.html">
                                        <i class="metismenu-icon">
                                        </i>Layouts
                                    </a>
                                </li>
                                <li>
                                    <a href="forms-validation.html">
                                        <i class="metismenu-icon">
                                        </i>Validation
                                    </a>
                                </li>
                                <li>
                                    <a href="forms-wizard.html">
                                        <i class="metismenu-icon">
                                        </i>Wizard
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon pe-7s-joy"></i>
                                Widgets
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="forms-datepicker.html">
                                        <i class="metismenu-icon">
                                        </i>Datepicker
                                    </a>
                                </li>
                                <li>
                                    <a href="forms-range-slider.html">
                                        <i class="metismenu-icon">
                                        </i>Range Slider
                                    </a>
                                </li>
                                <li>
                                    <a href="forms-input-selects.html">
                                        <i class="metismenu-icon">
                                        </i>Input Selects
                                    </a>
                                </li>
                                <li>
                                    <a href="forms-toggle-switch.html">
                                        <i class="metismenu-icon">
                                        </i>Toggle Switch
                                    </a>
                                </li>
                                <li>
                                    <a href="forms-wysiwyg-editor.html">
                                        <i class="metismenu-icon">
                                        </i>WYSIWYG Editor
                                    </a>
                                </li>
                                <li>
                                    <a href="forms-input-mask.html">
                                        <i class="metismenu-icon">
                                        </i>Input Mask
                                    </a>
                                </li>
                                <li>
                                    <a href="forms-clipboard.html">
                                        <i class="metismenu-icon">
                                        </i>Clipboard
                                    </a>
                                </li>
                                <li>
                                    <a href="forms-textarea-autosize.html">
                                        <i class="metismenu-icon">
                                        </i>Textarea Autosize
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="app-sidebar__heading">Charts</li>
                        <li>
                            <a href="charts-chartjs.html">
                                <i class="metismenu-icon pe-7s-graph2">
                                </i>ChartJS
                            </a>
                        </li>
                        <li>
                            <a href="charts-apexcharts.html">
                                <i class="metismenu-icon pe-7s-graph">
                                </i>Apex Charts
                            </a>
                        </li>
                        <li>
                            <a href="charts-sparklines.html">
                                <i class="metismenu-icon pe-7s-graph1">
                                </i>Chart Sparklines
                            </a>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
