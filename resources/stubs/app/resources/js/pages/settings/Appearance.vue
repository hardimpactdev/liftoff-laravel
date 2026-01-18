<script setup lang="ts">
import {
    HeadingSmall,
    AppearanceTabs,
    AppSidebarLayout,
    SettingsLayout,
} from "@hardimpactdev/craft-ui";
import { type BreadcrumbItem } from "@/types";

const breadcrumbItems: BreadcrumbItem[] = [
    {
        title: "Appearance settings",
        href: "/settings/appearance",
    },
];
</script>

<template>
    <AppSidebarLayout :breadcrumbs="breadcrumbItems">
        <Head title="Appearance settings" />

        <SettingsLayout>
            <div class="space-y-6">
                <HeadingSmall
                    title="Appearance settings"
                    description="Update your account's appearance settings"
                />
                <AppearanceTabs />
            </div>
        </SettingsLayout>
    </AppSidebarLayout>
</template>
