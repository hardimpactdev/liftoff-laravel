<script setup lang="ts">
import { VerifyEmailPage } from "@hardimpactdev/craft-vue";

defineProps<{
    status?: string;
}>();

const form = useForm({});

const handleResend = () => {
    form.submit("/email/verification-notification");
};

const handleLogout = () => {
    form.submit("/logout");
};
</script>

<template>
    <Head title="Email verification" />
    <VerifyEmailPage
        :status="status"
        :processing="form.processing"
        @resend="handleResend"
        @logout="handleLogout"
    />
</template>
