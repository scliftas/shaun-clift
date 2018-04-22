<template>
    <div class="section-child">
        <div class="vertical-align">
            <h4 class="headers">Skills</h4>
            <b-container id="skills-content" fluid>
                <b-row>
                    <skill v-for="(skill) in skills" :key="skill" :skill="skill"/>
                </b-row>
            </b-container>
        </div>
    </div>
</template>

<script>
import skill from '../elements/skill.vue'

export default {
    name: 'skills',

    components: {
        skill
    },

    data () {
        return {
            skills: ['php', 'laravel', 'codeigniter', 'javascript', 'vue', 'jquery', 'mysql', 'vagrant', 'ansible']
        }
    }
}
</script>