<script setup>
import { useForm, Link } from "@inertiajs/vue3";
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
const props = defineProps({ person: Object });

console.log(props.person)
if (props.person) {
    form.name = props.person.name
    form.email = props.person.email
    form.social_name = props.person.social_name
    form.cpf = props.person.cpf
    form.father_name = props.person.father_name
    form.mother_name = props.person.mother_name
    form.cellphone = props.person.cellphone
    form.password = props.person.password
}
</script>

<template>
    <v-card class="mx-auto mt-5" max-width="600" elevation="0">
        <v-card v-if="!props?.person" title="Criar nova pessoa" elevation="0"></v-card>
        <v-card v-else title="Visualização" elevation="0"></v-card>
        <form @submit.prevent="submit">
            <v-text-field v-model="form.name" label="Nome" :disabled="props?.person !== undefined"></v-text-field>
            <v-text-field v-model="form.email" label="Email" :disabled="props?.person !== undefined"></v-text-field>
            <v-text-field v-model="form.social_name" label="Nome social"
                :disabled="props?.person !== undefined"></v-text-field>
            <v-text-field v-model="form.cpf" label="CPF" :disabled="props?.person !== undefined"></v-text-field>
            <v-text-field v-model="form.father_name" label="Nome do pai"
                :disabled="props?.person !== undefined"></v-text-field>
            <v-text-field v-model="form.mother_name" label="Nome da mãe"
                :disabled="props?.person !== undefined"></v-text-field>
            <v-text-field v-model="form.cellphone" label="Telefone"
                :disabled="props?.person !== undefined"></v-text-field>
            <v-text-field v-model="form.password" label="Senha" type="password"
                :disabled="props?.person !== undefined"></v-text-field>
            <div class="text-center" v-if="props?.person === undefined">
                <v-btn class="mx-auto" variant="tonal" type="submit">Adicionar</v-btn>
            </div>
            <div class="text-center" v-if="props?.person !== undefined">
                <v-btn class="mx-auto" variant="tonal" type="submit">
                    <Link :href="`/address/create/${props.person.id}`">
                    Adicionar Endereço
                    </Link>
                </v-btn>
            </div>
        </form>
    </v-card class="mx-auto">
</template>
