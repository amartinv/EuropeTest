<template>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Example Component</div>

          <div class="panel-body">
            <form @submit.prevent="submit">
              <label for="name">Name:</label><br />
              <input
                v-model="fields.name"
                type="text"
                id="name"
                name="name"
              /><br />
              <label for="breed">Breed:</label><br />
              <input
                v-model="fields.breed"
                type="text"
                id="breed"
                name="breed"
              />
              <br />
              <input
                @change="photoUploaded"
                type="file"
                name="photo"
                id="photo"
              />
              <button type="submit">Send</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      fields: {},
      errors: {},
    };
  },
  methods: {
    submit() {
      this.errors = {};

      const formData = new FormData();
      formData.append("name", this.fields.name);
      formData.append("breed", this.fields.breed);
      formData.append("photo", this.fields.photo);

      axios.post("/dogs", formData).then(
        function (result) {
          console.log(result);
        },
        function (error) {
          console.log(error);
        }
      );
    },
    photoUploaded() {
      this.fields.photo = document.querySelector("#photo").files[0];
    },
  },
};
</script>
