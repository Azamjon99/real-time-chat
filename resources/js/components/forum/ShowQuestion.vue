<template>
<v-card>
    <v-card-title>
        <div>
            <div class="div headline">
                {{data.title}}
            </div>
        </div>
    </v-card-title>
</v-card>
</template>
<script>
export default {
 props: ['data']
}
</script>
