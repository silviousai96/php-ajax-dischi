var app = new Vue(
    {
        el: '#root',
        data: {
            cds: []
        },
        
        methods: {
                                
        },
        
        mounted() {
            
            axios
            .get('http://localhost:8888/php-ajax-dischi/vue-php/server.php')
            .then((response) => {
                console.log(response);

                this.cds = response.data;
            });
            
        }
    }
);