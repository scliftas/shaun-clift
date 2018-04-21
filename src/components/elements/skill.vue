<template>
    <b-col class="text-center skill" cols="4">
        <b-img class="vertical-align skill-image" :src="require('@/assets/skills/' + skill + '.svg')"/>
    </b-col>
</template>

<script>
export default {
    name: 'skill',

    props: ['skill']
}
</script>

<style>

.skill {
    padding: 2vw;
    padding-top: 4vw;
    padding-bottom: 4vw;
}

.skill-image {
    width: 50px;
    height: auto;
}

@media (min-width: 768px) {
    .skill {
        padding: 2vw;
    }
    .skill-image {
        width: 100px;
    }
}

@media (min-width: 992px) {    
    .skill-image {
        width: 130px;
    }
}
</style>