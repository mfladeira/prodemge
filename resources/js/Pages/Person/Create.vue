<template>
    <v-card class="mx-auto mt-5"  max-width="600" elevation="0">
        <v-card title="Criar nova pessoa" elevation="0"></v-card>
        <form @submit.prevent="submit">
            <v-text-field v-model="form.name" label="Nome"></v-text-field>
            <v-text-field v-model="form.email" label="Email"></v-text-field>
            <v-text-field v-model="form.social_name" label="Nome social"></v-text-field>
            <v-text-field v-model="form.cpf" label="CPF"></v-text-field>
            <v-text-field v-model="form.father_name" label="Nome do pai"></v-text-field>
            <v-text-field v-model="form.mother_name" label="Nome da mãe"></v-text-field>
            <v-text-field v-model="form.cellphone" label="Telefone"></v-text-field>
            <v-text-field  v-model="form.password" label="Senha" type="password"></v-text-field>
            <div class="text-center">
                <v-btn class="mx-auto" variant="tonal" type="submit">Adicionar</v-btn>
            </div>
        </form>
    </v-card class="mx-auto">
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