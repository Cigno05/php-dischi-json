
const { createApp } = Vue

createApp({
    data() {
        return {
            albums: [],
            // prova: 'si vede in html',
        }

    },
    methods: {
        fetchData() {
            axios
            .get('./server.php').then((response) => {
                // console.log(response.data)
                this.albums = response.data
                // console.log(this.albums)
            })
        }
        
    },
    created () {
        this.fetchData();
    },
    
    
}).mount('#app')

































