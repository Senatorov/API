<template>
    <div class="row mt-5">
        <div class="row">
            <button type="button" class="btn btn-outline-primary float-lg-start col-2" v-on:click="allEmployees()">All Employees</button>
        </div>
            <div v-if="'length' in this.employees">
                <div class="row mt-2" v-if="employees.length != 0">
                    <h2 class="text-center">All Employees</h2>

                    <ul class="list-group mt-3">
                        <li class="list-group-item" data-bs-toggle="modal" data-bs-target="#exampleModal" v-for="(employee, index) in employees">
                            <b>#{{ index + 1 }}</b> {{ employee.name }} <i class="bi bi-file-earmark-person-fill float-end"></i>
                        </li>
                    </ul>
                </div>
                <div class="row mt-2" v-else>
                    <h2 class="text-danger text-center">There are no employees in the database yet</h2>
                </div>
            </div>

        </div>
</template>

<script>
export default {
    data: () => ({
        employees: {}
    }),
    methods: {
        allEmployees: function () {
            this.axios.get('api/employee/',  {
                headers: {
                    "Content-type": "application/json",
                }
            }).then(res => {
                this.employees = res.data.data;
            });
        },
    },
}
</script>

<style scoped>
b {
    margin-right: 30px;
}
.list-group-item {
    cursor: pointer;
}

li:hover{
    color: #FFFFFF;
    background-color: #212529;
}

</style>
