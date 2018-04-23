<template>
    <div class="section-child">

        <div class="vertical-align">
            <h3 class="headers">About</h3>
            <b-container id="about-content" fluid>
                <b-row>
                    <b-col id="about-image" md="12" lg="6">
                        <img class="vertical-align img-fluid" src="http://www.skywardimaging.com/wp-content/uploads/2015/11/default-user-image.png">
                    </b-col>

                    <b-col id="about-text" md="12" lg="6">
                        <p>
                            Bacon ipsum dolor amet beef pork cupim chicken. Beef corned beef t-bone porchetta kevin bacon. Drumstick bresaola meatloaf swine t-bone short ribs hamburger. Picanha venison andouille, kielbasa biltong ball tip kevin strip steak jerky beef pork belly short ribs bresaola ham hock sirloin. Biltong tongue landjaeger brisket, strip steak shank rump bresaola alcatra short loin salami ribeye. Alcatra bacon pork loin, tenderloin tri-tip shank pork drumstick.
                        </p>
                        <p>
                            Shank beef buffalo spare ribs turkey kevin ball tip capicola. Short loin capicola bacon ham hock pig prosciutto strip steak venison drumstick rump ball tip tail leberkas tongue meatloaf. Sausage filet mignon jerky cow swine, short ribs alcatra spare ribs fatback pork pancetta pork belly pork loin shoulder tenderloin. Short ribs pork belly rump doner, short loin bacon salami cow ball tip porchetta beef ribs strip steak t-bone sirloin flank.
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
        max-height: 30vw !important;
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