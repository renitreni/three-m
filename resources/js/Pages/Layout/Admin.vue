<template>
    <div class="wrapper">
        <sidebar v-bind:sidebar_collapse="sidebar_collapse" ></sidebar>
        <div class="main">
            <topbar v-bind:sidebar_collapse="sidebar_collapse" @sideBarToggle="sidebar_collapse = $event"></topbar>
            <main class="content">
                <slot></slot>
            </main>
            <footer></footer>
        </div>
    </div>
</template>

<script>
    import Sidebar from "./Partials/Sidebar";
    import Footer from "./Partials/Footer";
    import Topbar from "./Partials/Topbar";

    export default {
        name: "Admin",
        components: {Topbar, Footer, Sidebar},
        data() {
            return {
                sidebar_collapse: true
            }
        },
        methods: {
        },
        mounted() {
        }
    }
</script>

<style scoped>

</style>
