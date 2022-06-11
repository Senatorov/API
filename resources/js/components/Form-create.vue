<template>
    <form>
        <!-- <csrf> -->
        <input type="hidden" name="_token" :value="getCsrf()">
        <!-- </csrf> -->

        <!-- <name> -->
        <div class="form-group mt-1">
            <label for="formGroupExampleInput">Name</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name">
        </div>
        <!-- </email> -->

        <!-- <email> -->
        <div class="form-group mt-1">
            <label for="formGroupExampleInput2">Email</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Email">
        </div>
        <!-- </email> -->

        <!-- <age> -->
        <div class="form-group mt-1">
            <label for="exampleFormControlSelect">Select Age Employee</label>
            <select class="form-control" id="exampleFormControlSelect">
                <option v-for="age in getAge()">{{ age }}</option>
            </select>
        </div>
        <!-- </age> -->

        <!-- <role> -->
        <legend class="col-form-label">Position</legend>
        <div class="form-check form-check-inline" v-for="(position, id) in positions">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" :id="id" value="option1">
            <label class="form-check-label" :for="id">{{ position }}</label>
        </div>
        <!-- </role> -->

        <!-- <salary> -->
        <div class="form-group">
            <label for="formGroupExampleInput3">Salary</label>
            <input type="text" class="form-control" id="formGroupExampleInput3" placeholder="Salary">
        </div>
        <!-- </salary> -->

        <!-- <photo> -->
        <div class="form-group mt-1">
            <label class="col-12" for="exampleFormControlFile">Photo Employee</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile" accept="image/*">
        </div>
        <!-- </photo> -->
    </form>
</template>

<script>
import axios from 'axios'

export default {
    data: () => ({
        positions: {
            1: 'Boss',
            2: 'Manager',
            3: 'Proger'
        },
    }),
    methods: {
        getAge: function() {
            return new Array(87).fill(14).map((n, i) => n + i);
        },
        getCsrf: function () {
            return document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        },
        storeEmployee: function () {
            let uri = 'http://localhost:8000/api/employee/create';

            this.axios.post();
        },
    }
}
</script>

<style scoped>

</style>
