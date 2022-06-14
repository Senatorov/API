<template>
  <div class="row mt-3">
    <form id="form">
        <!-- <csrf> -->
        <input type="hidden" name="_token" :value="getCsrf()">
        <!-- </csrf> -->

        <!-- <name> -->
        <div class="form-group mt-1">
            <label for="formGroupExampleInput">Name</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name" v-model="employee.name">
        </div>
        <!-- </email> -->

        <!-- <email> -->
        <div class="form-group mt-1">
            <label for="formGroupExampleInput2">Email</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Email" v-model="employee.email">
        </div>
        <!-- </email> -->

        <!-- <age> -->
        <div class="form-group mt-1">
            <label for="exampleFormControlSelect">Select Age Employee</label>
            <select class="form-control" id="exampleFormControlSelect" v-model="employee.age">
                <option selected="selected" disabled="disabled">select age</option>
                <option v-for="age in getAge()">{{ age }}</option>
            </select>
        </div>
        <!-- </age> -->

        <!-- <role> -->
        <legend class="col-form-label">Position</legend>
        <div class="form-check form-check-inline" v-for="(position, id) in positions">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" :id="id" :value="id" v-model="employee.role">
            <label class="form-check-label" :for="id">{{ position }}</label>
        </div>
        <!-- </role> -->

        <!-- <salary> -->
        <div class="form-group">
            <label for="formGroupExampleInput3">Salary</label>
            <input type="text" class="form-control" id="formGroupExampleInput3" placeholder="Salary" v-model="employee.salary">
        </div>
        <!-- </salary> -->

        <!-- <photo> -->
        <div class="form-group mt-1">
            <label class="col-12" for="exampleFormControlFile">Photo Employee</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile" accept="image/*" @change="uploadPhoto">
        </div>
        <!-- </photo> -->

        <button class="btn btn-primary mt-3 float-end col-md-2" type="submit" name="photo" @click.prevent="storeEmployee">Create</button>
    </form>
  </div>
</template>

<script>
export default {
    data: () => ({
        positions: {
            1: 'Boss',
            2: 'Manager',
            3: 'Proger'
        },
        employee: {},
    }),
    methods: {
        getAge: function() {
            return new Array(87).fill(14).map((n, i) => n + i);
        },
        getCsrf: function () {
            return document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        },
        uploadPhoto: function (e) {
            // console.log(e.target.files[0]);
            let photo = e.target.files[0];
            this.employee.photo = photo;
        },
        storeEmployee: function () {
            let data = new FormData();
            data.append('name', this.employee.name);
            data.append('email', this.employee.email);
            data.append('age', this.employee.age);
            data.append('role', this.employee.role);
            data.append('salary', this.employee.salary);
            data.append('photo', this.employee.photo);


            this.axios.post('api/employee/create', data,  {
                headers: {
                    "Content-type": "application/json",
                }
            }).then(res => {
                console.log(res);
            });
        },
    }
}
</script>

<style scoped>

</style>
