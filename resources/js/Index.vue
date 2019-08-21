<template>
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- Header Container ================================================== -->
        <header id="header-container" class="fullwidth">
            <Navbar></Navbar>
        </header>
        <div class="clearfix"></div>
        <!-- Header Container / End -->

        <!-- Intro Banner ================================================== -->
        <!-- add class "disable-gradient" to enable consistent background overlay -->

        <!-- Content ================================================== -->
        <!-- Category Boxes -->
            <transition name="fade" mode="out-in">
                <router-view></router-view>
            </transition>
        <!-- Membership Plans / End-->

        <!-- Footer ================================================== -->
            <Footer></Footer>
        <!-- Footer / End -->
    </div>
</template>
<script>
    import Navbar from './components/Navigation/Navbar'
    import Footer from './views/partials/Footer'
    export default {
        data() {
            return {

            }
        },
        components: {
            Navbar, Footer
        }
    }
</script>
