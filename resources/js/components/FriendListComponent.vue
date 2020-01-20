<template>
    <div class="friends">
        <div class="card ">
            <div class="card-header">
                <h4 class="card-category">Список друзей</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table tablesorter " id="">
                        <thead class=" text-primary text-center">
                        <tr>
                            <th><i class="tim-icons icon-camera-18 text-primary" name="avatar"></i></th>
                            <th><i class="tim-icons icon-badge text-primary" name="name"></i></th>
                            <th><i class="tim-icons icon-trophy text-primary" name="done"></i></th>
                        </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr v-for="friend in friends" >
                                <td>{{ friend.id }}</td>
                                <td>{{ friend.name }}</td>
                                <td>{{ friend.tasks.length }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios'

    export default {
        name: "FriendListComponent",
        data() {
            return {
                friends: []
            }
        },
        mounted() {
            this.loadData()
        },
        methods: {
            loadData() {
                axios.get('/get-some-friends').then( response => {
                    console.log(response.data)
                    this.friends = response.data
                });
            }
        }
    }
</script>

<style scoped>

</style>
