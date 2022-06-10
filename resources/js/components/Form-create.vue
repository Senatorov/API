<template>
    <form>
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
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <!-- </age> -->

        <!-- <role> -->
        <legend class="col-form-label">Radios</legend>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">1</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">2</label>
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
            <input type="file" class="form-control-file" id="exampleFormControlFile">
        </div>
        <!-- </photo> -->
    </form>
</template>

<script>
export default {
    name: "Form-create"
}
</script>

<style scoped>

</style>
