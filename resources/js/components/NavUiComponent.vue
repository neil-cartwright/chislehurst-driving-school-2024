<template>
    <Disclosure as="nav" class="bg-white shadow" v-slot="{ open }">
        <div class="max-w-site sm:px-6 lg:px-8 px-4 mx-auto">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex items-center flex-shrink-0">
                        <a href="/" class="flex-shrink-0">
                            <i class="fa-solid fa-road text-green-600"></i
                            ><span class="sm:text-xl ml-3">
                                Chislehurst Driving School
                            </span></a
                        >
                    </div>
                    <div class="sm:ml-6 sm:flex hidden">
                        <!-- Current: "border-indigo-500 text-gray-900", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->

                        <a
                            v-if="!auth"
                            href="/prices"
                            class="hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-4 pt-1 text-sm font-medium border-b-2"
                            :class="
                                current == 'prices'
                                    ? 'border-gray-200 font-bold text-gray-900'
                                    : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700'
                            "
                            >Prices</a
                        >
                        <a
                            v-if="!auth"
                            href="/contact"
                            class="hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-4 pt-1 text-sm font-medium border-b-2"
                            :class="
                                current == 'contact'
                                    ? 'border-gray-200 font-bold text-gray-900'
                                    : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700'
                            "
                            >Contact</a
                        >
                        <a
                            v-if="admin"
                            href="/admin"
                            class="hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 border-b-2 border-transparent"
                            >Admin</a
                        >
                    </div>
                </div>
                <div class="sm:ml-6 sm:flex sm:items-center hidden">
                    <!-- Profile dropdown -->
                    <Menu as="div" class="relative ml-3">
                        <div>
                            <MenuButton
                                class="focus:outline-none relative flex text-sm bg-white rounded-full"
                            >
                                <span class="absolute -inset-1.5" />
                                <span class="sr-only">Open user menu</span>
                                <UserIcon
                                    class="block w-6 h-6"
                                    aria-hidden="true"
                                />
                            </MenuButton>
                        </div>
                        <transition
                            enter-active-class="transition duration-200 ease-out"
                            enter-from-class="transform scale-95 opacity-0"
                            enter-to-class="transform scale-100 opacity-100"
                            leave-active-class="transition duration-75 ease-in"
                            leave-from-class="transform scale-100 opacity-100"
                            leave-to-class="transform scale-95 opacity-0"
                        >
                            <MenuItems
                                class="ring-1 ring-black ring-opacity-5 focus:outline-none absolute right-0 z-10 w-48 py-1 mt-2 origin-top-right bg-white rounded-md shadow-lg"
                            >
                                <MenuItem v-slot="{ active }" v-if="auth">
                                    <a
                                        href="/dashboard"
                                        :class="[
                                            active ? 'bg-gray-100' : '',
                                            'block px-4 py-2 text-sm text-gray-700',
                                        ]"
                                        >Dashboard</a
                                    >
                                </MenuItem>

                                <MenuItem v-slot="{ active }" v-if="auth">
                                    <a
                                        href="/logout"
                                        :class="[
                                            active ? 'bg-gray-100' : '',
                                            'block px-4 py-2 text-sm text-gray-700',
                                        ]"
                                        >Sign out</a
                                    >
                                </MenuItem>
                                <MenuItem v-slot="{ active }" v-else>
                                    <a
                                        href="/login"
                                        :class="[
                                            active ? 'bg-gray-100' : '',
                                            'block px-4 py-2 text-sm text-gray-700',
                                        ]"
                                        >Sign in</a
                                    >
                                </MenuItem>
                            </MenuItems>
                        </transition>
                    </Menu>
                </div>
                <div class="sm:hidden flex items-center -mr-2">
                    <!-- Mobile menu button -->
                    <DisclosureButton
                        class="hover:bg-gray-100 hover:text-gray-500 relative inline-flex items-center justify-center p-2 text-gray-400 rounded-md"
                    >
                        <span class="absolute -inset-0.5" />
                        <span class="sr-only">Open main menu</span>
                        <Bars3Icon
                            v-if="!open"
                            class="block w-6 h-6"
                            aria-hidden="true"
                        />
                        <XMarkIcon
                            v-else
                            class="block w-6 h-6"
                            aria-hidden="true"
                        />
                    </DisclosureButton>
                </div>
            </div>
        </div>

        <DisclosurePanel class="sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <!-- Current: "bg-indigo-50 border-indigo-500 text-indigo-700", Default: "border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700" -->
                <DisclosureButton
                    as="a"
                    href="/dashboard"
                    class="bg-indigo-50 block py-2 pl-3 pr-4 text-base font-medium text-indigo-700 border-l-4 border-indigo-500"
                    >Dashboard</DisclosureButton
                >
                <DisclosureButton
                    as="a"
                    href="/prices"
                    class="hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700 block py-2 pl-3 pr-4 text-base font-medium text-gray-500 border-l-4 border-transparent"
                    >Prices</DisclosureButton
                >
            </div>
            <div class="pt-4 pb-3 border-t border-gray-200">
                <DisclosureButton
                    v-if="auth"
                    as="a"
                    href="/logout"
                    class="hover:bg-gray-100 hover:text-gray-800 block px-4 py-2 text-base font-medium text-gray-500"
                    >Sign out</DisclosureButton
                >
                <DisclosureButton
                    v-else
                    as="a"
                    href="/login"
                    class="hover:bg-gray-100 hover:text-gray-800 block px-4 py-2 text-base font-medium text-gray-500"
                    >Sign in</DisclosureButton
                >
            </div>
        </DisclosurePanel>
    </Disclosure>
</template>

<script setup>
import { computed } from "vue";
import {
    Disclosure,
    DisclosureButton,
    DisclosurePanel,
    Menu,
    MenuButton,
    MenuItem,
    MenuItems,
} from "@headlessui/vue";

import { Bars3Icon, XMarkIcon, UserIcon } from "@heroicons/vue/24/outline";

const props = defineProps({
    admin: {
        type: Boolean,
    },
    user: {
        type: Object,
        default: {},
    },
    current: {
        type: String,
    },
});

const auth = computed(() => {
    return Object.keys(props.user).length;
});
</script>
