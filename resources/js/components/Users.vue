<template>

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>
                <ul>
                     <li v-for="brush in brushes">{{brush.started_at}}</li>
                </ul>
                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
                
            </div>
           

</template>


<script>
import axios from 'axios';

    export default {
         data () {
            return {
                 brushes: [],
                 tooth_brush_id: ''
             }
         },

        methods : {
            getBrushes () {
                axios.get("api/index")
                .then((response) => 
                this.brushes = response.data.brushes
                )
            }
        },
        computed: {
            cBrushes: function () {
                return this.brushes;
            }
        },
        mounted() {
            console.log('Component mounted.')
            this.getBrushes();
        }
    }
</script>

<style scoped>

</style>
