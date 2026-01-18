<script setup lang="ts">
import { ForgotPasswordPage, type ForgotPasswordForm } from "@hardimpactdev/craft-ui";

defineProps<{
    status?: string;
}>();

const form = useForm<ForgotPasswordForm>({
    email: "",
});

const handleSubmit = (data: ForgotPasswordForm) => {
    form.email = data.email;

    form.submit("/forgot-password", {
        onFinish: () => form.reset("email"),
    });
};
</script>

<template>
    <Head title="Forgot password" />
    <ForgotPasswordPage
        :status="status"
        :errors="form.errors"
        :processing="form.processing"
        @submit="handleSubmit"
    />
</template>
