<template>
    <div>
        <Head :title="title" />

        <jet-banner />

                 <!-- Page Loader -->
          
            <!-- #END# Page Loader -->
            <!-- Overlay For Sidebars -->
            <div class="overlay"></div>
            <!-- #END# Overlay For Sidebars -->
            <!-- Search Bar -->
            <div class="search-bar">
                <div class="search-icon">
                    <i class="material-icons">search</i>
                </div>
                <input type="text" placeholder="START TYPING...">
                <div class="close-search">
                    <i class="material-icons">close</i>
                </div>
            </div>
            <!-- #END# Search Bar -->
            <!-- Top Bar -->
            <nav   v-bind:class=" { 'navbarOpen': show }" class="navbar" style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
       background-color: #abe9cd;
background-image: linear-gradient(315deg, #abe9cd 0%, #3eadcf 74%);">
                <div class="container-fluid">
                    <div class="navbar-header" >
                        <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                        <a href="javascript:void(0);" class="bars"></a>
                        <a class="navbar-brand" href="javascript:;"> 
                              <!-- <img src="../../assets/images/logo.png" style="width:40px;height:40px;" alt=""> -->
                            Universal Technology Corporation</a>
                    </div>
                    <div  class="collapse navbar-collapse" id="navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Call Search -->
                            <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                            <!-- #END# Call Search -->
                            <!-- Notifications -->
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                    <i class="material-icons">notifications</i>
                                    <span class="label-count">7</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">NOTIFICATIONS</li>
                                    <li class="body">
                                        <ul class="menu">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="icon-circle bg-light-green">
                                                        <i class="material-icons">person_add</i>
                                                    </div>
                                                    <div class="menu-info">
                                                        <h4>12 new members joined</h4>
                                                        <p>
                                                            <i class="material-icons">access_time</i> 14 mins ago
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="icon-circle bg-cyan">
                                                        <i class="material-icons">add_shopping_cart</i>
                                                    </div>
                                                    <div class="menu-info">
                                                        <h4>4 sales made</h4>
                                                        <p>
                                                            <i class="material-icons">access_time</i> 22 mins ago
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="icon-circle bg-red">
                                                        <i class="material-icons">delete_forever</i>
                                                    </div>
                                                    <div class="menu-info">
                                                        <h4><b>Nancy Doe</b> deleted account</h4>
                                                        <p>
                                                            <i class="material-icons">access_time</i> 3 hours ago
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="icon-circle bg-orange">
                                                        <i class="material-icons">mode_edit</i>
                                                    </div>
                                                    <div class="menu-info">
                                                        <h4><b>Nancy</b> changed name</h4>
                                                        <p>
                                                            <i class="material-icons">access_time</i> 2 hours ago
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="icon-circle bg-blue-grey">
                                                        <i class="material-icons">comment</i>
                                                    </div>
                                                    <div class="menu-info">
                                                        <h4><b>John</b> commented your post</h4>
                                                        <p>
                                                            <i class="material-icons">access_time</i> 4 hours ago
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="icon-circle bg-light-green">
                                                        <i class="material-icons">cached</i>
                                                    </div>
                                                    <div class="menu-info">
                                                        <h4><b>John</b> updated status</h4>
                                                        <p>
                                                            <i class="material-icons">access_time</i> 3 hours ago
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="icon-circle bg-purple">
                                                        <i class="material-icons">settings</i>
                                                    </div>
                                                    <div class="menu-info">
                                                        <h4>Settings updated</h4>
                                                        <p>
                                                            <i class="material-icons">access_time</i> Yesterday
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href="javascript:void(0);">View All Notifications</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- #END# Notifications -->
                            <!-- Tasks -->
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                    <i class="material-icons">flag</i>
                                    <span class="label-count">9</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">TASKS</li>
                                    <li class="body">
                                        <ul class="menu tasks">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <h4>
                                                        Footer display issue
                                                        <small>32%</small>
                                                    </h4>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 32%">
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <h4>
                                                        Make new buttons
                                                        <small>45%</small>
                                                    </h4>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <h4>
                                                        Create new dashboard
                                                        <small>54%</small>
                                                    </h4>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 54%">
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <h4>
                                                        Solve transition issue
                                                        <small>65%</small>
                                                    </h4>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <h4>
                                                        Answer GitHub questions
                                                        <small>92%</small>
                                                    </h4>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 92%">
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href="javascript:void(0);">View All Tasks</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- #END# Tasks -->
                            <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- #Top Bar -->
            <section>
                <!-- Left Sidebar -->
                <aside id="leftsidebar" class="sidebar" >
                    <!-- User Info -->
                    <div class="user-info" >
                        <div class="image">
                            <img src="../../assets/images/user.png" width="48" height="48" alt="User" />
                        </div>
                        <div class="info-container">
                            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ $page.props.user.name }}</div>
                            <div class="email">{{ $page.props.user.email }}</div>
                            <div class="btn-group user-helper-dropdown">
                                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                                <ul class="dropdown-menu pull-right">
                                    <li><jet-responsive-nav-link :href="route('profile.show')" :active="route().current('profile.show')"><i class="material-icons">person</i>Profile</jet-responsive-nav-link></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                                    <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                                    <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="javascript:void(0);">
                                          <form method="POST" @submit.prevent="logout">
                                            <jet-responsive-nav-link as="button"> 
                                                 <i class="material-icons">input</i>Sign Out
                                            </jet-responsive-nav-link>
                                        </form>
                                        
                                        </a></li>
                                      
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- #User Info -->
                    <!-- Menu -->
                    <div class="menu"  >
                        <ul class="list">
                            <li class="header">MAIN NAVIGATION</li>
                            <li>
                                <jet-responsive-nav-link :href="route('dashboard')" :active="route().current('dashboard')">
                                    <i class="material-icons">home</i>
                                    <span>Home</span>
                                </jet-responsive-nav-link>
                            </li>
                            <li>
                                 <jet-responsive-nav-link :href="route('purchase')" :active="route().current('purchase')">
                                    <i class="material-icons">store</i>
                                    <span>Pupchase</span>
                                </jet-responsive-nav-link>
                            </li>

                             <li>
                                 <jet-responsive-nav-link :href="route('products')" :active="route().current('products')">
                                    <i class="material-icons">event</i>
                                    <span>Products</span>
                                </jet-responsive-nav-link>
                            </li>

                              <li>
                                 <jet-responsive-nav-link :href="route('suppliers')" :active="route().current('suppliers')">
                                    <i class="material-icons">perm_contact_calendar</i>
                                    <span>Suppliers</span>
                                </jet-responsive-nav-link>
                            </li>
                         
                        </ul>
                    </div>
                    <!-- #Menu -->
                    <!-- Footer -->
                    <div class="legal">
                        <div class="copyright">
                            Developed By: <a href="javascript:void(0);">Universal Technology Cor.</a>.
                        </div>
                        
                    </div>
                    <!-- #Footer -->
                </aside>
                <!-- #END# Left Sidebar -->
                <!-- Right Sidebar -->
                <aside id="rightsidebar" class="right-sidebar">
                    <ul class="nav nav-tabs tab-nav-right" role="tablist">
                        <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                        <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                            <ul class="demo-choose-skin">
                                <li data-theme="red" class="active">
                                    <div class="red"></div>
                                    <span>Red</span>
                                </li>
                                <li data-theme="pink">
                                    <div class="pink"></div>
                                    <span>Pink</span>
                                </li>
                                <li data-theme="purple">
                                    <div class="purple"></div>
                                    <span>Purple</span>
                                </li>
                                <li data-theme="deep-purple">
                                    <div class="deep-purple"></div>
                                    <span>Deep Purple</span>
                                </li>
                                <li data-theme="indigo">
                                    <div class="indigo"></div>
                                    <span>Indigo</span>
                                </li>
                                <li data-theme="blue">
                                    <div class="blue"></div>
                                    <span>Blue</span>
                                </li>
                                <li data-theme="light-blue">
                                    <div class="light-blue"></div>
                                    <span>Light Blue</span>
                                </li>
                                <li data-theme="cyan">
                                    <div class="cyan"></div>
                                    <span>Cyan</span>
                                </li>
                                <li data-theme="teal">
                                    <div class="teal"></div>
                                    <span>Teal</span>
                                </li>
                                <li data-theme="green">
                                    <div class="green"></div>
                                    <span>Green</span>
                                </li>
                                <li data-theme="light-green">
                                    <div class="light-green"></div>
                                    <span>Light Green</span>
                                </li>
                                <li data-theme="lime">
                                    <div class="lime"></div>
                                    <span>Lime</span>
                                </li>
                                <li data-theme="yellow">
                                    <div class="yellow"></div>
                                    <span>Yellow</span>
                                </li>
                                <li data-theme="amber">
                                    <div class="amber"></div>
                                    <span>Amber</span>
                                </li>
                                <li data-theme="orange">
                                    <div class="orange"></div>
                                    <span>Orange</span>
                                </li>
                                <li data-theme="deep-orange">
                                    <div class="deep-orange"></div>
                                    <span>Deep Orange</span>
                                </li>
                                <li data-theme="brown">
                                    <div class="brown"></div>
                                    <span>Brown</span>
                                </li>
                                <li data-theme="grey">
                                    <div class="grey"></div>
                                    <span>Grey</span>
                                </li>
                                <li data-theme="blue-grey">
                                    <div class="blue-grey"></div>
                                    <span>Blue Grey</span>
                                </li>
                                <li data-theme="black">
                                    <div class="black"></div>
                                    <span>Black</span>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="settings">
                            <div class="demo-settings">
                                <p>GENERAL SETTINGS</p>
                                <ul class="setting-list">
                                    <li>
                                        <span>Report Panel Usage</span>
                                        <div class="switch">
                                            <label><input type="checkbox" checked><span class="lever"></span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <span>Email Redirect</span>
                                        <div class="switch">
                                            <label><input type="checkbox"><span class="lever"></span></label>
                                        </div>
                                    </li>
                                </ul>
                                <p>SYSTEM SETTINGS</p>
                                <ul class="setting-list">
                                    <li>
                                        <span>Notifications</span>
                                        <div class="switch">
                                            <label><input type="checkbox" checked><span class="lever"></span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <span>Auto Updates</span>
                                        <div class="switch">
                                            <label><input type="checkbox" checked><span class="lever"></span></label>
                                        </div>
                                    </li>
                                </ul>
                                <p>ACCOUNT SETTINGS</p>
                                <ul class="setting-list">
                                    <li>
                                        <span>Offline</span>
                                        <div class="switch">
                                            <label><input type="checkbox"><span class="lever"></span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <span>Location Permission</span>
                                        <div class="switch">
                                            <label><input type="checkbox" checked><span class="lever"></span></label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </aside>
                <!-- #END# Right Sidebar -->
            </section>

            <!-- Page Heading -->
            <!-- <header class="bg-white shadow" v-if="$slots.header">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header"></slot>
                </div>
            </header> -->

            <!-- Page Content -->
             <section class="content">
                <slot></slot>
             </section>
     
    </div>
</template>

<script>
 require('jquery');


    import { defineComponent } from 'vue'
    import JetApplicationMark from '@/Jetstream/ApplicationMark.vue'
    import JetBanner from '@/Jetstream/Banner.vue'
    import JetDropdown from '@/Jetstream/Dropdown.vue'
    import JetDropdownLink from '@/Jetstream/DropdownLink.vue'
    import JetNavLink from '@/Jetstream/NavLink.vue'
    import JetResponsiveNavLink from '@/Jetstream/ResponsiveNavLink.vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';
    export default defineComponent({
        props: {
            title: String,
        },

        components: {
            Head,
            JetApplicationMark,
            JetBanner,
            JetDropdown,
            JetDropdownLink,
            JetNavLink,
            JetResponsiveNavLink,
            Link,
        },

        data() {
            return {
                showingNavigationDropdown: false,
                 show: true
            }
        },

        methods: {
            switchToTeam(team) {
                this.$inertia.put(route('current-team.update'), {
                    'team_id': team.id
                }, {
                    preserveState: false
                })
            },

            toggleNavbar() {
      this.show = !this.show
    },

            logout() {
                this.$inertia.post(route('logout'));
            },
        }
    })
</script>
<style>

</style>