<template>
    <div>
        <template v-if="!service">
            <ul>
                <li v-for="service in services">{{ service.name }} <a href="#" @click.prevent="selectService(service)">Alege</a></li>
            </ul>
        </template>
        <template v-else>
            <p><a href="#" @click.prevent="service = null">< Inapoi</a></p>
            <p>{{ service.name }}</p>
            <p>Data de inceput <datepicker @selected="dateSelected"></datepicker></p>
        </template>
    </div>
</template>

<script>
    import Datepicker from 'vuejs-datepicker';

    export default {
        name: 'add-recurrent-service',
        components: { Datepicker },
        data() {
            return {
                services: null,
                service: null
            }
        },
        mounted() {
            axios.get('/recurrent-services')
                .then((res) => {
                    this.services = res.data.recurrentServices;
                })
                .catch((err) => {
                    alert('Nu se poate prelua lista de servicii.');
                });
        },
        methods: {
            selectService (service) {
                this.service = service;
            },
            dateSelected (date) {
                alert(date);
            }
        }
    }
</script>
