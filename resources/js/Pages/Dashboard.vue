<template>
    <Admin>
       <div></div>
    </Admin>
</template>

<script>
import Admin from "./Layout/Admin";
export default {
    name: 'Dashboard',
    components: {Admin},
    props: {
        data: Object,
    },
}
</script>
