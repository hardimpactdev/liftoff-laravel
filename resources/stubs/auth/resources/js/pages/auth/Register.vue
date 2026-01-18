<script setup lang="ts">
import { RegisterPage, type RegisterForm } from "@hardimpactdev/craft-vue";

const form = useForm<RegisterForm>({
    name: "",
    email: "",
    password: "",
    password_confirmation: "",
});

const handleSubmit = (data: RegisterForm) => {
    form.name = data.name;
    form.email = data.email;
    form.password = data.password;
    form.password_confirmation = data.password_confirmation;

    form.submit("/register", {
        onFinish: () => form.reset("password", "password_confirmation"),
    });
};
</script>

<template>
    <Head title="Register" />
    <RegisterPage
        :errors="form.errors"
        :processing="form.processing"
        @submit="handleSubmit"
    />
</template>
