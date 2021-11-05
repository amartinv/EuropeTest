<template>
  <div class="container m-auto md:w-1/2">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading title m-b-md">Form</div>

          <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <form @submit.prevent="update">
              <label for="name">Name:</label><br />
              <input
                class="
                  shadow
                  appearance-none
                  border
                  rounded
                  w-full
                  py-2
                  px-3
                  text-gray-700
                  leading-tight
                  focus:outline-none focus:shadow-outline
                  mb-5
                "
                v-model="fields.name"
                type="text"
                id="name"
                name="name"
              /><br />
              <label for="breed">Breed:</label><br />
              <input
                class="
                  shadow
                  appearance-none
                  border
                  rounded
                  w-full
                  py-2
                  px-3
                  text-gray-700
                  leading-tight
                  focus:outline-none focus:shadow-outline
                  mb-5
                "
                v-model="fields.breed"
                type="text"
                id="breed"
                name="breed"
              />
              <br />
              <label for="size">Size:</label><br />
              <select
                class="
                  shadow
                  appearance-none
                  border
                  rounded
                  w-full
                  py-2
                  px-3
                  text-gray-700
                  leading-tight
                  focus:outline-none focus:shadow-outline
                  mb-5
                "
                v-model="fields.size"
                name="size"
                id="size"
              >
                <option value="1">Big</option>
                <option value="2">Medium</option>
                <option value="3">Small</option>
              </select>
              <br />
              <label for="weight">Weight in Kg:</label><br />
              <input
                class="
                  shadow
                  appearance-none
                  border
                  rounded
                  w-full
                  py-2
                  px-3
                  text-gray-700
                  leading-tight
                  focus:outline-none focus:shadow-outline
                  mb-5
                "
                v-model="fields.weight"
                type="number"
                step="any"
                min="0"
                id="weight"
                name="weight"
              />
              <br />
              <label for="color">Hair color:</label><br />
              <input
                class="
                  shadow
                  appearance-none
                  border
                  rounded
                  w-full
                  py-2
                  px-3
                  text-gray-700
                  leading-tight
                  focus:outline-none focus:shadow-outline
                  mb-5
                "
                v-model="fields.color"
                type="text"
                id="color"
                name="color"
              />
              <br />
              <label for="hair">Hair length:</label><br />
              <select
                class="
                  shadow
                  appearance-none
                  border
                  rounded
                  w-full
                  py-2
                  px-3
                  text-gray-700
                  leading-tight
                  focus:outline-none focus:shadow-outline
                  mb-5
                "
                v-model="fields.hair"
                name="hair"
                id="hair"
              >
                <option value="1">Long</option>
                <option value="2">Medium</option>
                <option value="3">Short</option>
              </select>
              <br />
              <input
                @change="photoUploaded"
                type="file"
                name="photo"
                id="photo"
              />
              <br />
              <button
                class="
                  mt-10
                  bg-blue-500
                  hover:bg-blue-700
                  text-white
                  font-bold
                  py-2
                  px-4
                  rounded
                "
                type="submit"
              >
                Update
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    this.retrieveDog(this.$route.params.id);
  },
  data() {
    return {
      fields: {},
      errors: {},
    };
  },
  methods: {
    update() {
      this.errors = {};

      const formData = new FormData();
      formData.append("name", this.fields.name);
      formData.append("breed", this.fields.breed);
      formData.append("size", this.fields.size);
      formData.append("weight", this.fields.weight);
      formData.append("color", this.fields.color);
      formData.append("hair", this.fields.hair);
      formData.append("photo", this.fields.photo);

      axios
        .post("/dogs/" + this.$route.params.id, formData)
        .then((response) => {
          if (response.status == 200) {
            console.log("hola");
            this.$router.push("/dogs");
          }
        });
    },
    photoUploaded() {
      this.fields.photo = document.querySelector("#photo").files[0];
    },
    retrieveDog(id) {
      axios.get("/dogs/" + id + "/edit").then((response) => {
        this.fields = response.data;
      });
    },
  },
};
</script>
