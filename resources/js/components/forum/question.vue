<template>
  <v-card class="mx-auto">
<router-link :to="data.path">
      <v-card-title>{{data.title}}</v-card-title>

</router-link>

    <v-card-subtitle class="pb-0">
{{data.ceated_at}}

</v-card-subtitle>

    <v-card-text class="text--primary">

      <div>{{data.body}}</div>
    </v-card-text>

  </v-card>
</template>
<script>

export default
{
   props:['data']
}
</script>
