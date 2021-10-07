<template>
    <Admin>
        <div>
            Hi!
        </div>
    </Admin>
</template>

<script>
    import Admin from "./Layout/Admin";
    export default {
        components: {Admin},
        props: {
            user: Object,
            app_name: String
        },
    }
</script>
