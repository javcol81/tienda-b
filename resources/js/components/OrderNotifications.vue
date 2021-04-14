<template>
<li class="nav-item dropdown">
    <a class="nav-link" data-toggle="dropdown" href="#">
      <i class="fas fa-bell"></i>
      <span class="badge badge-danger" v-if="Notifications.length > 0">{{Notifications.length}}</span>
      <span class="caret"></span>
    </a>
    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
      <li v-for="Notification in Notifications">
        <a :href="Notification.url" class="dropdown-item">
          <i class="fas fa-envelope mr-2"></i> {{Notification.description}}
          <span class="ml-3 pull-right text-muted text-sm">
            <timeago :datetime="Notification.time" :auto-update="60"></timeago>
          </span>
        </a>
      </li>
  
      <div class="dropdown-divider"></div>
  
    
  
    
  
      <li>
        <div class="text-center">
          <a href="#" class="dropdown-item dropdown-footer" v-if="Notifications.length > 0">
            <strong>Ver todas las notificaciones</strong>
            <i class="fa fa-angle-right"></i>
          </a>
          <div v-else>No hay notificaciones></div>
        </div>
      </li>
    </ul>
  </li>
</template>

<script>
import VueTimeago from 'vue-timeago'

Vue.use(VueTimeago, {
  name: 'Timeago', // Component name, `Timeago` by default
  locale: 'es', // Default locale
  // We use `date-fns` under the hood
  // So you can use all locales from it
  locales: {
    'es': require('date-fns/locale/es'),
    ja: require('date-fns/locale/ja')
  }
})

export default{
  
  

  props: ['user_id'],

  data(){
   return{

    Notifications:[]
     
   }

  },

    mounted(){

       //window.Echo.channel('pizza-tracker.' + this.order_id)
       window.Echo.channel('pizza-tracker')
     .listen('OrderStatusChangedEvent', (order) =>
     {
       if(this.user_id == order.user_id){
       this.Notifications.unshift({

         description: 'Orden ID: ' + order.id + 'Actualizado',
         url: '/order/' + order.id,
         time: new Date()

       })
         document.getElementById("noty_audio").play()
      }
     });
    },
};
</script>