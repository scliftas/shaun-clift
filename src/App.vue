<template>
  <div id="app">
    <fullPage>
      <navbar/>

      <fullSection v-for="(section) in sections" :key="section" :id="section">
        <transition appear>
          <component :is="section"></component>
        </transition>
      </fullSection>

    </fullPage>
  </div>
</template>

<script>
import fullPage from './components/fullPage/fullPage.vue'
import fullSection from './components/fullPage/fullSection.vue'
import navbar from './components/elements/navbar.vue'
import home from './components/sections/home.vue'
import about from './components/sections/about.vue'
import skills from './components/sections/skills.vue'
import experience from './components/sections/experience.vue'
import contact from './components/sections/contact.vue'

export default {
  name: 'app',

  components: {
    fullPage,
    fullSection,
    navbar,
    home,
    about,
    skills,
    experience,
    contact
  },

  data () {
    return {
      sections: ['home', 'about', 'skills', 'experience', 'contact']
    }
  }
}
</script>

<style>

@font-face {
  font-family: 'Raleway';
  src: url('assets/fonts/Raleway-Regular.ttf');
  font-weight: 400;
  font-style: normal;
}

body {
  font-family: 'Raleway';
}

.headers {
  font-size: 2rem;
}

/* animation */
.v-enter-active, .v-leave-active {
  transition: opacity 2s;
}
.v-enter, .v-leave-to {
  opacity: 0;
}

#subtitle, .nav-link:hover, h2 {
    color: #868686;
}

/* sections */
.section {
    text-align: center;
    padding-top: 5em;
    padding-bottom: 5em;
    padding-left: 2.5em;
    padding-right: 2.5em;
}

.section-child {
    height: 100%;
}

.vertical-align {
    position: relative;
    top: 50%;
    transform: translateY(-50%);
}
</style>
