<template>
    <div class="section-child">

        <div class="vertical-align">
            <h3 class="headers">About</h3>
            <b-container id="about-content" fluid>
                <b-row>
                    <b-col id="about-image" md="12" lg="6">
                        <img class="vertical-align img-fluid" :src="require('@/assets/head.png')">
                    </b-col>

                    <b-col id="about-text" md="12" lg="6">
                        <p>
                            I am a full-stack web developer currently based in Birmingham, United Kingdom. I have significant experience developing websites on both small and large scales from scratch, both with clients and as part of an established team. With extensive knowledge of both front-end and back-end technologies, I can see a project through from start to finish.
                        </p>
                        <p>
                            My experience with doing freelance work for my own clients has allowed me to work closely with them to fully understand their needs and goals, and provide a solution that satisfies them. Meanwhile, working in agencies has made me accustomed to working as part of a team in a fast-paced and ever-changing environment.
                        </p>
                        <p>
                            If you would like to get in touch or hear more, be sure to contact me!
                        </p>
                    </b-col>
                </b-row>
            </b-container>
        </div>
    </div>
</template>

<style>
#about-text {
    font-size: 1.5vw;
    text-align: left;
}

@media (max-width: 1199.98px) {
    #about-image {
        display: table;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    #about-image > img {
        max-height: 30vw;
        width: auto;
        top: 0;
        transform: translateY(0);
    }
}

@media (max-width: 991.98px) {
    #about-text {
        font-size: 1.75vw;
    }
}

@media (max-width: 767.98px) {
    #about-text {
        font-size: 2.4vw;
    }
}

@media (max-width: 575.98px) {
    #about-text {
        font-size: 2.8vw;
    }
}
</style>