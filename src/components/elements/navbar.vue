<template>
    <b-navbar toggleable sticky>
        <b-navbar-brand @click="scrollTo('home')">
            <span id="title">Shaun Clift</span>
            <br/>
            <span id="subtitle">Web Developer</span>
        </b-navbar-brand>

        <b-navbar-toggle target="nav_dropdown_collapse"></b-navbar-toggle>

        <b-collapse is-nav id="nav_dropdown_collapse">
            
            <b-navbar-nav class="ml-auto">
                <b-nav-item id="about-link" @click="scrollTo('about')">About</b-nav-item>
                <b-nav-item id="skills-link" @click="scrollTo('skills')">Skills</b-nav-item>
                <b-nav-item id="experience-link" @click="scrollTo('experience')">Experience</b-nav-item>
                <b-nav-item id="contact-link" @click="scrollTo('contact')">Contact</b-nav-item>
            </b-navbar-nav>

        </b-collapse>
    </b-navbar>
</template>

<script>
export default {
    methods: {
        scrollTo (id) {
            document.getElementById(id).scrollIntoView({ behavior: 'smooth' })
        }
    }
}
</script>

<style>
.navbar {
    position: absolute !important;
    width: 98%;
    background-color: white;
}

.navbar-brand {
    line-height: 1.25em;
}

#title {
    font-size: 1.75rem;
}

#subtitle {
    font-size: 1rem;
    letter-spacing: 1.5px;
}
</style>