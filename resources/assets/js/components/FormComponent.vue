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

      fetch("/dogs", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
          "X-CSRF-TOKEN": window.CSRF_TOKEN,
          "X-Requested-With": "XMLHttpRequest",
        },
        body: JSON.stringify(this.fields),
      }).then((res) => res);
    },
  },
};
</script>
