<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h3>{{ title }}</h3></div>

                    <div class="card-body">
                        <p class="bg-danger p-2 text-white" v-once>{{ greeting }} (v-once)</p>
                        <p class="badge-success p-2 text-white" style="white-space: pre-line">{{ greeting }} (data() v-model)</p>
                        <label class="w-100">Text Modification Here:
                            <textarea v-model="greeting" class="w-100"></textarea>
                        </label>
                    </div>

                    <div class="card-header"><h3>{{ vfor }}</h3></div>

                    <div class="card-body">
                        <label class="w-100">Ordered List Here:
                            <ol>
                                <li v-for="foodType in foodTypes">{{ foodType.name | capitalize | kittyfy }}</li>
                            </ol>
                        </label>
                        <div id="errors" class="mb-3 text-danger" v-for="error in errors">{{ error.error }}</div>
                        <label class="w-100">
                            <input v-model="newFoodType" v-on:keydown.enter="addFoodType">
                            <button v-on:click.prevent.stop="addFoodType">+ ADD</button>
                        </label>
                    </div>

                    <div class="card-body">
                        <CatListComponent />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import CatListComponent from "./CatListComponent";

    export default {
        components: {CatListComponent},
        mounted() {
            console.log('Component mounted.')
        },

        data() {
            return {
                title: "Welcome to the binding (v-model, v-once)",
                vfor: "Using v-for in VUE",
                greeting: "Hello Theo, how may I help you today?",
                errors: [],
                foodTypes:[
                    { name: 'Pizza' },
                    { name: 'Hot Dogs' },
                    { name: 'Hamburger' },
                    { name: 'Tortilla' }
                ],

                newFoodType: '',
            }
        },

        methods: {
            addFoodType: function() {
                if(this.newFoodType.length > 2) {
                    this.foodTypes.push({name: this.newFoodType});
                    this.newFoodType = '';
                } else {
                    if(this.newFoodType.length > 0) {
                        this.errors.push({error: this.newFoodType + ' unaccepted to be added!'});
                    } else {
                        this.errors.push({error: 'New food type cannot be empty!'});
                    }
                }
            },
        },

        filters: {
            capitalize: function(value) {
                return value.toUpperCase();
            },

            kittyfy: function(value) {
                return '(' + value + ')';
            },
        },

        component:['CatListComponent'],
    }
</script>
