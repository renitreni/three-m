<template>
    <Admin>
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3">Reservations</h1>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            Reservations Data Table
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 mt-3">
                                    <table id="reservations-table" class="table table-hover"
                                           style="width: 100%"></table>
                                </div>
                            </div>
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
    props: {data: Object},
}
</script>
