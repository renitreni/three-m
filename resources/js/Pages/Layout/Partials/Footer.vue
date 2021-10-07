<template>
    <div>
        <footer class="footer">
            <div class="container-fluid">
                <div class="row text-muted">
                    <div class="col-6 text-start">
                        <p class="mb-0">
                            <a href="index.html" class="text-muted"><strong>{{ footer.app_name }}</strong></a>
                            &copy;
                            Laravel v (PHP v)
                        </p>
                    </div>
                    <div class="col-6 text-end">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="text-muted" href="#">Support</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-muted" href="#">Help Center</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-muted" href="#">Privacy</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-muted" href="#">Terms</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</template>

<script>
    export default {
        name: "Footer",
        data() {
            return {
                footer: {}
            }
        },
        methods: {
            getDefaults() {
                var $this = this;
                axios.post('/admin/footer', {})
                    .then(function (value) {
                        $this.footer = value.data;
                    });
            }
        }, mounted() {
            this.getDefaults();
        },
    }
</script>

<style scoped>

</style>
