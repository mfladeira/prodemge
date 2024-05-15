<template>
    <v-card class="mx-auto mt-5" max-width="600" elevation="0">
        <form @submit.prevent="submit">
            <v-text-field v-model="form.cep" label="Cep" @focusout="getCep"></v-text-field>
            <v-text-field v-model="form.street" label="Logradouro"></v-text-field>
            <v-text-field v-model="form.state" label="Estado"></v-text-field>
            <v-text-field v-model="form.neighborhood" label="Bairro"></v-text-field>
            <v-text-field v-model="form.city" label="Cidade"></v-text-field>
            <v-text-field v-model="form.type" label="Tipo de endereço"></v-text-field>
            <v-text-field v-model="form.number" label="Número"></v-text-field>
            <div class="text-center">
                <v-btn class="mx-auto" variant="tonal" type="submit">
                    Adicionar
                </v-btn>
            </div>
        </form>
    </v-card>
</template>

<script setup>
import axios from 'axios';
import { useForm } from "@inertiajs/vue3";

const form = useForm({
    cep: "",
    street: "",
    state: "",
    neighborhood: "",
    city: "",
    type: "",
    complement: "",
    number: "",
});

function getCep(event) {
    if(!event.target.value) return;
    axios.get(`https://viacep.com.br/ws/${event.target.value}/json/`).then(response => {
        form.street = response.data.logradouro
        form.state = response.data.uf
        form.neighborhood = response.data.bairro
        form.city = response.data.localidade
    })
}

const submit = () => {
    // form.post("/address");
};
</script>