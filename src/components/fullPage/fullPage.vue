<template>
    <div id="fullpage">
        <slot></slot>
    </div>
</template>

<script>
    export default {
        name: 'fullPage'
    }
</script>

<style>
    html,
    body,
    #app,
    #fullpage {
        height: 100%;
        overflow: auto;
    }
</style>