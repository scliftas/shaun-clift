<template>
    <b-navbar toggleable sticky>
        <b-navbar-brand href="#">
            <span id="title">Shaun Clift</span>
            <br/>
            <span id="subtitle">Web Developer</span>
        </b-navbar-brand>

        <b-navbar-toggle target="nav_dropdown_collapse"></b-navbar-toggle>

        <b-collapse is-nav id="nav_dropdown_collapse">
            
            <b-navbar-nav class="ml-auto">
                <b-nav-item href="#">About</b-nav-item>
                <b-nav-item href="#">Skills</b-nav-item>
                <b-nav-item href="#">Experience</b-nav-item>
                <b-nav-item href="#">Contact</b-nav-item>
            </b-navbar-nav>

        </b-collapse>
    </b-navbar>
</template>

<style>
.navbar {
    position: absolute;
    width: 99%;
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

@media (min-width: 768px) {
    .navbar {
        background-color: transparent;
    }
}
</style>