<template>
    <div class="section-child">
        <div class="vertical-align contact">
            <h6 class="headers">Contact</h6>
            <b-form @submit="onSubmit" name="contact" v-if="show" netlify>
                <div class="left">
                    <b-form-group id="name" label="Name:" label-for="name">
                        <b-form-input id="name" type="text" v-model="form.name" placeholder="Name" required></b-form-input>
                    </b-form-group>

                    <b-form-group id="email" label="Email:" label-for="email">
                        <b-form-input id="email" type="email" v-model="form.email" placeholder="Email" required></b-form-input>
                    </b-form-group>

                    <div data-netlify-recaptcha></div>
                </div>

                <div class="right">
                    <b-form-group id="message" label="Message:" label-for="message">
                        <b-form-textarea id="message" v-model.trim="form.message" placeholder="Message" required no-resize></b-form-textarea>
                    </b-form-group>

                    <b-button type="submit" variant="primary">Send</b-button>
                </div>
            </b-form>
            
        </div>
    </div>
</template>

<script>

export default {
    name: 'contact',

    data () {
        return {
            form: {
                name: '',
                email: '',
                subject: '',
                message: ''
            },
            show: true
        }
    },

    methods: {
        onSubmit (event) {
            event.preventDefault();
        }
    }
}
</script>

<style>
.contact {
    overflow: auto;
}

form {
    margin: 0 auto;
}

label {
    float: left;
}

textarea {
    min-height: 200px;
    height: 200px;
    max-height: 200px;
}

button {
    float: right;
    margin-bottom: 10px;
}

@media (min-width: 768px) {
    form {
        width: 75%;
    }

    .left {
        width: 48%;
        float: left;
    }

    .right {
        width: 48%;
        float: right;
    }

    textarea {
        min-height: 250px;
        height: 250px;
        max-height: 250px;
    }
}
</style>