<template>
    <div class="container">
        <div class="row">
            <div class="col-md-3" v-for="value in bikes" :key="bikes.id">
                <div class="card card-default">
                    <div class="card-header"><h3>{{value.brand}}</h3></div>
                    <div class="card-body">                                             
                        <h5>{{value.model}}</h5>
                        <p>{{value.price}}</p>                                    
                        <ul>
                        <li class="items"><a v-bind:href="'/showbikes/'+ value.id">select bike</a></li>
                        </ul>
                        <br/>
                    </div>
                </div>                
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mx-auto">
                <br/>
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li v-bind:class="[{disabled: !pagination.prev_page_url}]" class="page-item"><a class="page-link" href="#" @click="fetchBikes(pagination.prev_page_url)">Previous</a></li>

                        <li class="page-item disabled"><a class="page-link text-dark" href="#">Page {{ pagination.current_page }} of {{ pagination.last_page }}</a></li>
                    
                        <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item"><a class="page-link" href="#" @click="fetchBikes(pagination.next_page_url)">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                bikes:[],
                bike:{
                    id:'',
                    brand:'',
                    model:'',
                    price:'',    
                },
                bikes_id:[],
                pagination:{},
                edit:false      
            }
        },  
        created(){
            this.fetchBikes();
        },   
        methods:{
            fetchBikes(page_url) {
                var fetchdata = this;
                page_url = page_url || 'api/bikesData';
                fetch(page_url)
                .then(function(response) {
                    if (response.status >= 200 && response.status < 300){
                        return Promise.resolve(response.json());                        
                    }else{
                        return Promise.reject(new Error(response.statusText));                       
                    }
                })
                .then(function(response) {
                    fetchdata.bikes = response.data;
                    fetchdata.makePagination(response.meta, response.links);
                    
                })
                .catch(function(error) {
                    return console.log('request failed', error);
                });
            },
            makePagination(meta, links) {
                var pagination = {
                    current_page: meta.current_page,
                    last_page: meta.last_page,
                    next_page_url: links.next,
                    prev_page_url: links.prev
                };
                this.pagination = pagination;
            }
        },   
        mounted(){
            console.log('Component mounted.')
        }
    }
</script>
