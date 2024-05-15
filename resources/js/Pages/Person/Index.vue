<script setup>
import { Link } from "@inertiajs/vue3";
import { ref } from 'vue'
const props = defineProps({ people: Array });
const people = ref(props.people);

function filter(event) {
    const searchLowerCase = event.target.value.toLowerCase();
    const filteredPeople = props.people.filter(person => person.name.toLowerCase().startsWith(searchLowerCase));
    people.value = filteredPeople;
}

</script>

<template>
    <v-text-field max-width="1000" class="mx-auto mt-5" label="Digite o nome da pessoa" @input="filter"></v-text-field>

    <v-card class="mx-auto" max-width="1000">
        <v-list>
            <v-list-item v-for="(item, i) in people" :key="i" :value="item" color="primary">
                <Link :href="`/show/${item.id}`">
                    <div>
                        <span class="mr-5" v-text="item.name"></span>
                        <span class="ml-5" v-text="item.email"></span>
                    </div>
                </Link>    
            </v-list-item>
        </v-list>

    </v-card>
    <div class="d-flex mt-5">
        <v-btn class="mx-auto" variant="tonal">
            <Link href="person/create">
            Adicionar nova pessoa
            </Link>
        </v-btn>
    </div>

</template>