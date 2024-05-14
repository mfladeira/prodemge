<template>
    <form @submit.prevent="submit">
        <label for="name">Nome</label>
        <input type="text" id="name" v-model="form.name" />

        <label for="email">Email</label>
        <input type="text" id="email" v-model="form.email" />

        <label for="social_name">Nome social</label>
        <input type="text" id="social_name" v-model="form.social_name" />

        <label for="cpf">Cpf</label>
        <input type="text" id="cpf" v-model="form.cpf" />

        <label for="father_name">Nome do pai</label>
        <input type="text" id="father_name" v-model="form.father_name" />

        <label for="mother_name">Nome da mãe</label>
        <input type="text" id="mother_name" v-model="form.mother_name" />

        <label for="cellphone">Telefone</label>
        <input type="text" id="cellphone" v-model="form.cellphone" />

        <label for="password">Senha</label>
        <input type="text" id="password" v-model="form.password" />

        <button type="submit">Adicionar</button>

    </form>
</template>

<script setup>
import { useForm } from "@inertiajs/vue3";
const form = useForm({
    name: "",
    email: "",
    social_name: "",
    cpf: "",
    father_name: "",
    mother_name: "",
    cellphone: "",
    password: ""
});

const submit = () => {
    form.post("/person");
};
</script>