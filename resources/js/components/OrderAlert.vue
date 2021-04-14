<template>
<alert v-model="showAlert" placement="top-right" duration="6000" type="success" width="400px" dismissable>
  <span class="icon-ok-circled alert-icon-float-left"></span>
  <strong>Orden Actualizada</strong>
  <p>Orden ID:{{ order_id }} Ha sido actualizada!</p>
</alert>
</template>

<script>
import { alert } from 'vue-strap';
export default{
    components: {
    alert,
  },

  props: ['user_id'],

  data(){
   return{

     showAlert: false,
     order_id: ''
     
   }

  },

    mounted(){

       //window.Echo.channel('pizza-tracker.' + this.order_id)
       window.Echo.channel('pizza-tracker')
     .listen('OrderStatusChangedEvent', (order) =>
     {
       if(this.user_id == order.user_id){


       
       this.showAlert= true
       this.order_id= order.id
      
       }
     });
    },
};
</script>