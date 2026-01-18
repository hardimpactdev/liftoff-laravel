<script setup lang="ts">
import { ResetPasswordPage, type ResetPasswordForm } from "@hardimpactdev/craft-ui";

const props = defineProps<{
    token: string;
    email: string;
}>();

const form = useForm<ResetPasswordForm>({
    token: props.token,
    email: props.email,
    password: "",
    password_confirmation: "",
});

const handleSubmit = (data: ResetPasswordForm) => {
    form.password = data.password;
    form.password_confirmation = data.password_confirmation;

    form.submit("/reset-password", {
        onFinish: () => form.reset("password", "password_confirmation"),
    });
};
</script>

<template>
    <Head title="Reset password" />
    <ResetPasswordPage
        :email="email"
        :errors="form.errors"
        :processing="form.processing"
        @submit="handleSubmit"
    />
</template>
