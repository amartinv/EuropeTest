<template>
  <div class="container m-auto sm:w-1/2">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading title m-b-md">Home</div>

          <div class="panel-body">
            <img class="m-auto" src="images/homeDog.jpg" alt="Dog" />
            <p class="pt-5 mx-5">
              This application is a demo app made with Laravel 5.3 and Vuejs,
              Vue-router for SPA
            </p>
            <br />
            <p class="pt-5 mx-5 mb-5">
              Features:<br />
              - You can add Dogs with a form with these parameters (Name, Breed,
              Size, Weight, Hair color, Hair length, photo).<br />
              - When you add the dog it redirects you to the list of all
              animals.<br />
              - You can see all the dogs and their data in a table format<br />
              - You can delete entries in animal list<br />
              - You can edit animal entries<br />
              - Forms have validation <br />
              - The page is responsive <br />
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>
