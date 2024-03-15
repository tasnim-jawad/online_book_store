<template>
    <Topbar></Topbar>
        <router-view></router-view>
        <!-- <h1>app.vue</h1> -->
    <Sidebar></Sidebar>
</template>
<script >
import Topbar from './components/Topbar.vue';
import Sidebar from './components/SidBar.vue';

export default{
    components:{Topbar,Sidebar},
    created(){
        window.location.hash = "#/dashboard";
    }
}

</script>
<style scoped></style>
