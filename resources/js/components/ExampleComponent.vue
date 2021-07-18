<template>
    <div class="hidden">
        <slot></slot>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
