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
                  <th class="w-1/5">Photo</th>
                  <th class="w-1/5">Name</th>
                  <th class="w-1/5">Breed</th>
                  <th class="w-1/5">Color</th>
                  <th class="w-1/5">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr class="border-b-2" v-for="dog in dogs" :key="dog.id">
                  <td class="">
                    <img
                      class="h-32 w-32 m-auto"
                      :src="'/storage/dogs/' + dog.id + '.jpg'"
                    />
                  </td>
                  <td class="">
                    {{ dog.name }}
                  </td>
                  <td class="">
                    {{ dog.breed }}
                  </td>
                  <td class="">
                    {{ dog.color }}
                  </td>
                  <td class=""></td>
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
    };
  },
  mounted() {
    axios.get("/dogs").then((response) => {
      this.dogs = response.data;
    });
  },
};
</script>
