<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        I'm an example component!
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    const TOKEN = localStorage.getItem('token');
    export default {
        data(){
            return{
                token: localStorage.getItem('token'),
                loading: false
            }
        },
        methods:{
            fetchIt(){
                console.log('fetched');
                this.loading = true;
            },
        },
        mounted() {
            if (TOKEN){
                console.log('auth');
                this.fetchIt();
            } else {
                console.log('not authenticated');
            }
            // console.log(TOKEN);
            // console.log('Component mounted.');
            // console.log(this.token);
            
        }
    }
</script>
