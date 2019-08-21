<template>
    <div id="header">
        <div class="container">
            <!-- Left Side Content -->
            <div class="left-side">
                <!-- Logo -->
                <div id="logo">
                    <a href="/"><img src="/assets/images/logo.png" alt=""></a>
                </div>

                <!-- Main Navigation -->
                    <Header></Header>
                <!-- Main Navigation / End -->
            </div>
            <!-- Left Side Content / End -->

            <!-- Right Side Content / End -->
                <RightSide></RightSide>
            <!-- Right Side Content / End -->
        </div>
    </div>
</template>
<script>
    import Header from './Header.vue'
    import RightSide from './RightSide.vue'
    export default {
        components: {
            Header,RightSide
        }
    }
</script>
