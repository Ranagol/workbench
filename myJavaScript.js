console.log('JavaScript was activated');

new Vue({
    el: '#app',

    data: {
      text: 'random text',
    },

    methods: {
      returnHello(){
	    console.log('hello from vue');
	},
    }
  });
