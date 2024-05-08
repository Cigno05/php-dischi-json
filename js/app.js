
const { createApp } = Vue

createApp({
    data() {
        return {
            albums: [],
        }
    },
    methods: {
        fetchData() {
            axios
            .get('./server.php').then((response) => {
                // console.log(response.data)
                this.albums = response.data.results
                // console.log(this.albums)
            })
        }
        
    },
    created () {
        this.fetchData();
    },
    
    
}).mount('#app')

































