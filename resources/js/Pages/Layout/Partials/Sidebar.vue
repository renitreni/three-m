<template>
    <div>
        <transition name="fade">
            <nav id="sidebar" class="sidebar" v-if="sidebar_collapse">
                <div class="sidebar-content js-simplebar">
                    <inertia-link class="sidebar-brand" style="text-decoration: unset;" v-if="sidebar.home"
                                  v-bind:href="sidebar.home">
                        <span class="align-middle">{{ sidebar.appname }}</span>
                    </inertia-link>

                    <ul class="sidebar-nav">
                        <li class="sidebar-header">
                            Components
                        </li>

                        <li class="sidebar-item" v-if="sidebar.home"
                            :class="{'active': isUrl(sidebar.home)}">
                            <inertia-link class="sidebar-link" v-bind:href="sidebar.home">
                                <i class="fas fa-chart-area"></i> <span class="align-middle">Dashboard</span>
                            </inertia-link>
                        </li>
                        <!-- Manage Users-->
                        <li class="sidebar-item"
                            v-if="isUrl(sidebar.roles) || isUrl(sidebar.users)"
                            :class="{'active': isUrl(sidebar.roles) || isUrl(sidebar.users)}">
                            <a href="#manageusers" data-bs-toggle="collapse" role="button" aria-expanded="false"
                               aria-controls="collapseExample"
                               class="sidebar-link"
                            >
                                <i class="fas fa-users-cog"></i> <span class="align-middle">Manage Users</span>
                            </a>
                            <ul id="manageusers" class="sidebar-dropdown list-unstyled collapse"
                                :class="{'show': isUrl(sidebar.roles) || isUrl(sidebar.users)}">
                                <li class="sidebar-item" v-if="sidebar.roles"
                                    :class="{'active': isUrl(sidebar.roles)}">
                                    <inertia-link class="sidebar-link" v-bind:href="sidebar.roles">Roles
                                    </inertia-link>
                                </li>
                                <li class="sidebar-item" v-if="sidebar.users"
                                    :class="{'active': isUrl(sidebar.users)}">
                                    <inertia-link class="sidebar-link" v-bind:href="sidebar.users">Users
                                    </inertia-link>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </transition>
    </div>
</template>

<script>
    export default {
        name: "Sidebar",
        props: ['sidebar_collapse'],
        data() {
            return {
                sidebar: {}
            }
        }, methods: {
            getDefaults() {
                var $this = this;
                axios.post('/admin/sidebar', {})
                    .then(function (value) {
                        $this.sidebar = value.data;
                    });
            },
            isUrl(url) {
                return window.location.href === url;
            }
        },
        mounted() {
            this.getDefaults();
        }
    }
</script>

<style scoped>

</style>
