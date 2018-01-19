<template>
  <div id="app" class="app">
    <auth-layout v-if="isAuth"></auth-layout>
    <div class="basix-container" v-else>
        <Sidebar :navItems="nav"/>
        <div id="right-panel" class="right-panel">
          <BasixHeader/>
          <div class="content">
            <transition enter-active-class="animated fadeIn">
              <router-view></router-view>
            </transition>
          </div>
        </div>
    </div>
  </div>
</template>


<script>
  import nav from './nav'
  import { Header as BasixHeader, Sidebar  } from './components/'
  import AuthLayout from './layouts/AuthLayout.vue';

  export default {
    data (){
      return{
        nav: nav.items
      }
    },
    components: {
      AuthLayout,
      BasixHeader,
      Sidebar
    },
    computed: {
      name(){
        return this.$route.name
      },
      list() {
        return this.$route.matched
      },
      isAuth () {
        return this.$route.path.match('auth')
      }
    }
  }
</script>


<style lang="scss">
  @import "./assets/bootstrap/bootstrap";

  $fa-font-path: "../node_modules/font-awesome/fonts" !default;
  @import "~font-awesome/scss/font-awesome";
  @import "./assets/style";
</style>

