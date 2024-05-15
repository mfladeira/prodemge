<template>
    <form @submit.prevent="submit">
        <label for="cep">Digite seu cep</label>
        <input type="text" id="cep" v-model="form.cep" @focusout="getCep" />

        <label for="street">Logradouro</label>
        <input type="text" id="street" v-model="form.street" disabled />

        <label for="state">Estado</label>
        <input type="text" id="state" v-model="form.state" disabled />

        <label for="neighborhood">Bairro</label>
        <input type="text" id="neighborhood" v-model="form.neighborhood" disabled />

        <label for="city">Cidade</label>
        <input type="text" id="city" v-model="form.city" disabled />

        <label for="type">Tipo de endereço</label>
        <input type="text" id="type" v-model="form.type"  />
        
        <label for="number">Número</label>
        <input type="text" id="number" v-model="form.number"  />

        <button type="submit">Adicionar</button>
    </form>
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

function getCep() {
    axios.get('https://viacep.com.br/ws/25685080/json/').then(response => {
        form.street = response.data.logradouro
        form.state = response.data.uf
        form.neighborhood = response.data.bairro
        form.city = response.data.localidade
    })
}

const submit = () => {
    form.post("/person");
};
</script>