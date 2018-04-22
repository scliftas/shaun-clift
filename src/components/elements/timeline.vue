<template>
    <div class="timeline">
        <b-card v-for="(event) in events" :key="event" 
                border-variant="info" 
                :header="event.header"
                align="center"
                :title="event.title">
                <p class="card-text">{{ event.text }}</p>
        </b-card>
    </div>
</template>

<script>
export default {
    name: 'timeline',

    props: ['events']
}
</script>

<style scoped>

.timeline {
    position: relative;
    margin: 0 auto;
    margin-top: 20px;
    padding: 1em 0;
    list-style-type: none;
    height: 100%;
    overflow: auto;
}

.card {
    width: 85%;
    height: auto;
    float: right;
    margin-bottom: 10px;
}

.timeline:before {
    position: absolute;
    top: 0;
    left: 6%;
    content: ' ';
    display: block;
    width: 6px;
    height: 100%;
    margin-left: -3px;
    background: rgb(80,80,80);
    background: -moz-linear-gradient(top, rgba(80,80,80,0) 0%, rgb(80,80,80) 8%, rgb(80,80,80) 92%, rgba(80,80,80,0) 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(30,87,153,1)), color-stop(100%,rgba(125,185,232,1)));
    background: -webkit-linear-gradient(top, rgba(80,80,80,0) 0%, rgb(80,80,80) 8%, rgb(80,80,80) 92%, rgba(80,80,80,0) 100%);
    background: -o-linear-gradient(top, rgba(80,80,80,0) 0%, rgb(80,80,80) 8%, rgb(80,80,80) 92%, rgba(80,80,80,0) 100%);
    background: -ms-linear-gradient(top, rgba(80,80,80,0) 0%, rgb(80,80,80) 8%, rgb(80,80,80) 92%, rgba(80,80,80,0) 100%);
    background: linear-gradient(to bottom, rgba(80,80,80,0) 0%, rgb(80,80,80) 8%, rgb(80,80,80) 92%, rgba(80,80,80,0) 100%);
    
    z-index: 5;
}

.card::after {
    content: '';
    position: absolute;
    top: 50%;
    bottom: 0;
    transform: translateX(-50%);
    width: 30px;
    height: 30px;
    border-radius: 50%;
    border-style: solid;
    border-width: 5px;
    border-color: #17a2b8;
    background-color: white;
    z-index: 10;
    left: -10.8%;
}

.card-title {
    font-size: 1rem;
}

.card-text {
    font-size: 0.75rem;
}

@media (min-width: 768px) {
    .timeline {
        width: 75%;
    }

    .timeline:before {
        left: 50%;
    }

    .card {
        width: 47%;
    }

    .card:nth-child(even) {
        float: right;
        clear: left;
    }

    .card:nth-child(odd) {
        float: left;
        clear: right;
    }

    .card:nth-child(even)::after {
        left: -2.2vw;
    }

    .card:nth-child(odd)::after {
        left: 106.75%;
    }
}
</style>