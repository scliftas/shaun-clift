<template>
    <div class="section-child">
        <div class="vertical-align">
            <h5 class="headers">Experience</h5>
            <timeline :events="events"/>
        </div>
    </div>
</template>

<script>
import timeline from '../elements/timeline.vue'

export default {
    name: 'experience',

    components: {
        timeline
    },

    data () {
        return {
            events: [
                {
                    header: "June 2017 - Present",
                    title: "Kaweb",
                    text: "Apprentice Developer",
                    link: "https://kaweb.co.uk"
                },
                {
                    header: "March 2017 - April 2017",
                    title: "The Duke Inn",
                    text: "Freelance Developer",
                    link: "http://dukeinnsutton.co.uk"
                },
                {
                    header: "July 2016 - August 2016",
                    title: "Luke Clift",
                    text: "Freelance Developer",
                    link: "http://lukeclift.co.uk"
                }
            ]
        }
    }
}
</script>