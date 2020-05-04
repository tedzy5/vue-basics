<template>
    <div class="jumbotron jumbotron-fluid">
        <div class="jumbotron">

            <div class="list-group" v-if="questions.length">
                <button type="text" class="list-group-item list-group-item-action active">
                    <h3>{{ questions[index]['question'] }}</h3>
                </button>
                <button type="button" class="list-group-item list-group-item-action" @click="selectAnswer(index)" v-for="(answer, index) in answers" :key="index">{{ answer }}</button>
            </div>

            <button class="btn btn-primary">Submit</button>
            <button class="btn btn-success" @click="next">Next</button>
        </div>
    </div>
</template>

<script>
    export default {
        name: "QuestionsComponent",
        components: {

        },
        data() {
            return {
                questions: [],
                index: 0,
                selectedIndex: null,
            }
        },
        mounted: function() {
            //fetch('https://opentdb.com/api.php?amount=10', {
            fetch('http://127.0.0.1:8000/api/questions', {
                method: 'get'
            }).then((response) => {
                //console.log(response.json());
                return response.json();
            }).then((jsonData) => {
                //console.log(jsonData);
                this.questions = jsonData.results;
            });
        },
        props: {

        },
        methods: {
            next() {
                this.index++
            },

            selectAnswer(x) {
                this.selectedIndex = x;
            },
        },
        computed: {
            answers(){
                let answers = [...this.questions[this.index]['incorrect_answers']];
                answers.push(this.questions[this.index]['correct_answer']);
                return answers;
            }
        }
    }
</script>

<style scoped>

</style>
