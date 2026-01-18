<script setup lang="ts">
import { LoginPage, type LoginForm } from "@hardimpactdev/craft-vue";

defineProps<{
    status?: string;
    canResetPassword: boolean;
    canRegister: boolean;
}>();

const form = useForm<LoginForm>({
    email: "",
    password: "",
    remember: false,
});

const handleSubmit = (data: LoginForm) => {
    form.email = data.email;
    form.password = data.password;
    form.remember = data.remember;

    form.submit("/login", {
        onFinish: () => form.reset("password"),
    });
};
</script>

<template>
    <Head title="Log in" />
    <LoginPage
        :status="status"
        :can-reset-password="canResetPassword"
        :can-register="canRegister"
        :errors="form.errors"
        :processing="form.processing"
        @submit="handleSubmit"
    />
</template>
