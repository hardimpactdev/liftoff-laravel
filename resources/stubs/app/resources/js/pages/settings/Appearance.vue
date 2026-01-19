<script setup lang="ts">
import {
    HeadingSmall,
    AppearanceTabs,
    AppSidebarLayout,
    SettingsLayout,
    useAppNavigation,
} from "@hardimpactdev/craft-ui";
import { type BreadcrumbItem } from "@/types";

const appNav = useAppNavigation();

const breadcrumbItems: BreadcrumbItem[] = [
    {
        title: "Appearance settings",
        href: "/settings/appearance",
    },
];
</script>

<template>
    <AppSidebarLayout :breadcrumbs="breadcrumbItems" v-bind="appNav">
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
