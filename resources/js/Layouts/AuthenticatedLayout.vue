<script setup></script>

<template>
    <div class="grid min-h-screen grid-cols-12 grid-rows-12 bg-neutral-100">
        <!-- Top header spanning across all columns -->
        <div class="col-span-12 row-span-1 bg-red-400"></div>

        <!-- Left sidebar spanning from row 3 to row 12 (10 rows) -->
        <div class="col-span-2 row-span-11 bg-blue-400"></div>

        <!-- Main content area spanning from row 3 to row 12 (10 rows) -->
        <main class="col-span-10 row-span-11 bg-green-400"></main>
    </div>
</template>
