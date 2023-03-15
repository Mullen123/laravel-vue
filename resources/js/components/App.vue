<template>
    <!--Begin main div -->
    <div>
    <!--Pasamos el proosp al componente hijo ejemplo :ruta = "ruta"-->
        <!--Nabar-->
        <Navbar :ruta ="ruta"></Navbar>
        <!--Aside-->
        <Sidebar :ruta ="ruta"></Sidebar>
        <!-- Content Wrapper. Contains page content -->
        <div  class="content-wrapper">
        <transition>
              <router-view></router-view>
        </transition>
        </div>
   
    </div>
    <!--End main div -->
</template>

<script>
//importación del componente hijo

import Navbar from "./plantilla/Navbar";
import Sidebar from "./plantilla/Sidebar";


export default {
  /*variable que almacena la informaciín de la ruta*/
  props:['ruta'],
    components: {
        Navbar,
        Sidebar,
    
    },
};
</script>
