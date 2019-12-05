<template>
    <div>
        <div class="main-content">
            <h3>{{ text }}</h3>
        </div>
    </div>
</template>

<script>
    export default {
        name: "App",
        created: {

        },
        data(){
            return {
                text: "Hello",
            }
        },
        components: {

        },
    }
</script>

<style scoped>
    .main-content {
        padding: 20px;
    }
</style>
