const { createApp } = Vue ;

createApp({
  data() {
    return {
        apiUrl : './server.php', 
        discs:[],
    }
  }, 
  methods: {
getDiscs() {
        axios.get(this.apiUrl)
        .then((response) =>{
            this.discs = response.data ;
        })
    }
  },
  created() {
    this.getDiscs(); 
  },
}).mount('#app');