<script setup lang="ts">
import { TwoFactorChallengePage, type TwoFactorForm, type TwoFactorRecoveryForm } from "@hardimpactdev/craft-vue";

const form = useForm({
    code: "",
    recovery_code: "",
});

const handleCodeSubmit = (data: TwoFactorForm) => {
    form.code = data.code;
    form.recovery_code = "";

    form.submit("/two-factor-challenge", {
        onError: () => form.reset("code"),
    });
};

const handleRecoverySubmit = (data: TwoFactorRecoveryForm) => {
    form.code = "";
    form.recovery_code = data.recovery_code;

    form.submit("/two-factor-challenge", {
        onError: () => form.reset("recovery_code"),
    });
};
</script>

<template>
    <Head title="Two-Factor Authentication" />
    <TwoFactorChallengePage
        :errors="form.errors"
        :processing="form.processing"
        @submit="handleCodeSubmit"
        @submit:recovery="handleRecoverySubmit"
    />
</template>
