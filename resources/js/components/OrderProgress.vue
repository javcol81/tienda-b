<template>
<div>   
<div class="progress">
  <progressbar :now="Progress" type="primary" striped></progressbar>
</div>
  	<div class="order-status">
		<strong>Estado del pedido:</strong> {{ StatusNew }}
	</div>
</div> 
</template>

<script>
import { progressbar } from 'vue-strap';
export default{
    components: {
    progressbar,
  },

  props: ['status', 'initial', 'order_id'],

  data(){
   return{

       StatusNew: this.status,
       Progress: this.initial
   }

  },

    mounted(){

       window.Echo.channel('pizza-tracker.' + this.order_id)
     .listen('OrderStatusChangedEvent', (order) =>
     {

        this.StatusNew = order.status_name
        this.Progress = order.status_percent
     });
    },
};
</script>