<template>
    <div>
        <el-menu theme="light" default-active="/" class="el-menu-demo" mode="horizontal"  >
            <el-menu-item :index="item.nav_url"
                          v-for="item in this.$store.state.res.NavBar"
            >{{item.nav_text}}</el-menu-item>
        </el-menu>
    </div>
</template>
<style>

</style>
<script type="text/ecmascript-6">

    export default{
        created(){
        //alert(this.APIConfig.API_NavBar);
        this.$store.dispatch("loadData",{url:this.APIConfig.API_NavBar,key:"NavBar"})
    },
    data(){
        return{

        }
    },
    }
</script>
