<script setup>
import { Link } from "@inertiajs/vue3";
const props = defineProps({ people: Array });
console.log(props)
</script>

<template>
    <h1>Welcome</h1>
    <p v-for="person in props.people">
        {{ person.name }}
    </p>

    <Link href="person/create">Adicionar nova pessoa</Link>

</template>