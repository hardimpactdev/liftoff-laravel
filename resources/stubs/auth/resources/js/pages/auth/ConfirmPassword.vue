<script setup lang="ts">
import { ConfirmPasswordPage, type ConfirmPasswordForm } from "@hardimpactdev/craft-ui";

const form = useForm<ConfirmPasswordForm>({
    password: "",
});

const handleSubmit = (data: ConfirmPasswordForm) => {
    form.password = data.password;

    form.submit("/user/confirm-password", {
        onFinish: () => form.reset(),
    });
};
</script>

<template>
    <Head title="Confirm password" />
    <ConfirmPasswordPage
        :errors="form.errors"
        :processing="form.processing"
        @submit="handleSubmit"
    />
</template>
