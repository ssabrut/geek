<script setup>
import { Link } from '@inertiajs/inertia-vue3';

defineProps({
  canLogin: Boolean,
  canRegister: Boolean,
})
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Viga&display=swap');

.logo {
  font-family: 'Viga', sans-serif;
  letter-spacing: .25rem;
}
</style>

<template>
  <nav class="bg-gray-900 text-white">
    <div class="container mx-auto">
      <div class="flex justify-between py-3">
        <p>Customer Support</p>
        <div v-if="canLogin" class="hidden sm:block">
          <Link v-if="$page.props.auth.user" :href="route('dashboard')" class="">Dashboard</Link>
          <template v-else>
            <Link :href="route('login')" class="font-semibold">Log in</Link>
            <Link v-if="canRegister" :href="route('register')" class="ml-8 font-semibold">Register</Link>
          </template>
        </div>
      </div>
    </div>
  </nav>
  <nav class="py-6">
    <div class="container mx-auto">
      <div class="flex justify-between items-center">
        <div class="flex items-center">
          <Link class="text-3xl font-semibold logo mr-12" :href="route('welcome')">Geek</Link>
          <p class="mr-8">Categories</p>
          <p>Authors</p>
        </div>
        <div class="flex items-center border border-gray-900 rounded px-4">
          <Link as="button" type="button">
          <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
            className="w-5 h-5">
            <path fillRule="evenodd"
              d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
              clipRule="evenodd" />
          </svg>
          </Link>
          <input class="border-0 focus:border-0 focus:ring-0 text-sm" type="text" placeholder="Search any books..." />
        </div>
      </div>
    </div>
  </nav>
</template>