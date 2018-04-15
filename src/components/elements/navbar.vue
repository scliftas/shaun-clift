<template>
    <b-navbar toggleable sticky>
        <b-navbar-brand href="#">
            <span class="title">Shaun Clift</span>
            <br/>
            <span class="subtitle">Web Developer</span>
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