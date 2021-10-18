<template>
    <Admin>
        <div>
            <div class="container-fluid p-0">
                <h1 class="h3 mb-3">Services</h1>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                Services Data Table
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <button class="btn btn-primary" @click="showForm">Add User</button>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <table id="services-table" class="table table-hover"
                                               style="width: 100%"></table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Services Form Modal -->
            <div id="services-modal" class="modal fade" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Services Modal</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="d-flex flex-column">
                                <div class="mb-3">
                                    <label>Name</label>
                                    <input class="form-control" v-model="overview.name">
                                </div>
                                <div class="mb-3">
                                    <label>Price</label>
                                    <input type="number" class="form-control" v-model="overview.price">
                                </div>
                                <div class="d-flex flex-row mb-3 align-items-center">
                                    <div class="flex-grow-1">
                                        <label>Promo</label>
                                        <input type="number" class="form-control" v-model="overview.promo_price">
                                    </div>
                                    <div class="pt-4 ps-4">
                                        <div class="form-check form-switch">
                                            <input v-model="overview.is_promo" class="form-check-input" type="checkbox"
                                                   id="flexSwitchCheckDefault">
                                            <label class="form-check-label" for="flexSwitchCheckDefault">Is
                                                Promo</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label>Description</label>
                                    <textarea class="form-control" v-model="overview.desc"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger me-auto text-white" @click="destroy"
                                    data-bs-dismiss="modal">Delete
                            </button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" @click="save" data-bs-dismiss="modal">Save
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Admin>
</template>

<script>
import Admin from "./Layout/Admin";

export default {
    components: {Admin},
    props: {
        data: Object,
    },
    methods: {
        showForm() {
            this.services_modal.show();
            this.overview = {
                'name': '',
                'desc': '',
                'price': 0,
                'promo_price': 0,
                'is_promo': false,
            };
        },
        save() {
            let $this = this;
            axios.post($this.data.services_store_link, $this.overview).then(function () {
                alertify.success('Success!');
                $this.dt.draw();
            });
        },
        destroy() {
            let $this = this;
            axios.post($this.data.services_destroy_link, $this.overview).then(function () {
                alertify.success('Success!');
                $this.dt.draw();
            });
        }
    },
    data() {
        return {
            dt: null,
            services_modal: null,
            overview: {},
        }
    },
    mounted() {
        var $this = this;

        $this.services_modal = new bootstrap.Modal(document.getElementById('services-modal'), {
            keyboard: false
        });

        $this.dt = $('#services-table').DataTable({
            serverSide: true,
            ajax: {
                url: $this.data.services_table_link,
                type: 'POST'
            },
            "order": [[0, "desc"]],
            "columns": [
                {"data": "name", "title": "Service Name"},
                {"data": "price", "title": "Price"},
                {"data": "promo_price", "title": "Promo Price"},
                {"data": "is_promo", "title": "is Promo"},
            ],
            drawCallback: function (settings) {
                $('.btn-edit').on('click', function () {
                    $this.user_edit_modal.show();
                    $this.overview = $this.dt.row($(this).parent().parent()).data();
                });
                $('#services-table tbody tr').on('click', function () {
                    $this.services_modal.show();
                    $this.overview = $this.dt.row($(this)).data();
                });
            }
        });
    }
}
</script>
