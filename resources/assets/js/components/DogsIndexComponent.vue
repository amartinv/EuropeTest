<template>
  <div class="container m-auto">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading title m-b-md">Dogs</div>

          <div class="panel-body">
            <table
              class="
                w-full
                text-center
                bg-white
                shadow-md
                rounded
                px-8
                pt-6
                pb-8
                mb-4
              "
            >
              <thead class="table-fixed">
                <tr class="border-b-2">
                  <th class="">Photo</th>
                  <th class="">Name</th>
                  <th class="">Breed</th>
                  <th class="">Age</th>
                  <th class="">Color</th>
                  <th class="">Hair type</th>
                  <th class="">Weight</th>
                  <th class="">Size</th>
                  <th class="">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr class="border-b-2" v-for="dog in dogs" :key="dog.id">
                  <td class="">
                    <img
                      class="h-32 w-32 m-auto"
                      :src="'/storage/dogs/' + dog.id + '.jpg?rnd=' + cacheKey"
                    />
                  </td>
                  <td class="">
                    {{ dog.name }}
                  </td>
                  <td class="">
                    {{ dog.breed }}
                  </td>
                  <td class="">
                    {{ dog.age }}
                  </td>
                  <td class="">
                    {{ dog.color }}
                  </td>

                  <td class="">
                    <div v-if="dog.hair == 1">Long</div>
                    <div v-if="dog.hair == 2">Medium</div>
                    <div v-if="dog.hair == 3">Short</div>
                  </td>
                  <td class="">{{ dog.weight }}Kg</td>
                  <td class="">
                    <div v-if="dog.size == 1">Big</div>
                    <div v-if="dog.size == 2">Medium</div>
                    <div v-if="dog.size == 3">Small</div>
                  </td>
                  <td class="">
                    <form
                      class="inline"
                      @submit.prevent="
                        confirmDelete(
                          'Are you sure you want to delete this entry?',
                          dog.id
                        )
                      "
                    >
                      <button
                        type="submit"
                        class="
                          fa
                          rounded-full
                          p-2
                          my-1
                          bg-red-500
                          text-white
                          transition-colors
                          duration-200
                          transform
                          hover:bg-red-800
                        "
                      >
                        <i class="fas fa-trash"></i>
                      </button>
                    </form>
                    <div>
                      <router-link
                        :to="'/dogs/' + dog.id + '/edit'"
                        class="
                          fa
                          rounded-full
                          p-2
                          my-1
                          bg-green-500
                          text-white
                          transition-colors
                          duration-200
                          transform
                          hover:bg-green-800
                        "
                        ><i class="fas fa-edit"></i
                      ></router-link>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
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
      dogs: [],
      cacheKey: +new Date(),
    };
  },
  created() {
    this.interval = setInterval(() => {
      this.cacheKey = +new Date();
    }, 60 * 1000);
  },
  mounted() {
    this.getDogs();
  },
  methods: {
    confirmDelete(message, id) {
      if (confirm(message)) {
        axios.delete("/dogs/" + id).then((response) => {
          this.getDogs();
        });
      }
    },
    getDogs() {
      axios.get("/dogs").then((response) => {
        this.dogs = response.data;
      });
    },
  },
};
</script>
