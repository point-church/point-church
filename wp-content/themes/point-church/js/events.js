var EventLanding = Vue.component('events-display', {
    template: `
        <div class="events">
            <template v-if="featuredEvents">
                <h2>Featured Events</h2>
                <div 
                v-for="(event, i) in featuredEvents" class="event">
                    <h3><a :href="event.url">{{ event.title }}</a></h3>
                </div>
            </template>
            <template v-if="events">
                <h2>Upcoming Events</h2>
                <form>
                <select>
                    <option>All Church</option>
                    <option v-for="church in churches">{{ church.name }}</option>
                </select>
                <span class="buttons">
                <button v-on:click="filter()" class="button xsmall">Filter</button>
                </span>
                </form>
                <div 
                v-for="(event, i) in events" class="event">
                    <h3><router-link :to="'/news/' + i">{{ event.event_name }}</router-link></h3>
                    <p class="date">{{ event.date }}</p>
                    <p class="time">{{ event.start_time }} - {{ event.end_time }}</p>
                    <p class="group">{{ event.group_name }}</p>
                </div>
            </template>
        </div>
    `,
    data: () => {
        return({
            events: events,
            featuredEvents: featuredEvents,
            churches: churches,
        });
    }
});
 
var EventDetail =  Vue.component('events-detail', {
    props: ['id'],
    template: `
        <div class="events">
            <h2>This is events detail</h2>
            <div class="event">
                <h3>{{ event.event_name }}</h3>
                <p class="date">{{ event.date }}</p>
                <p class="time">{{ event.start_time }}</p>
                <p class="group">{{ event.group_name }}</p>
                <div v-html="event.event_description"></div>
            </div>
        </div>
    `,
    computed: {
        event: (comp) => {
            return this.events[comp.id]
        }
    }
});

var NotFound =  Vue.component('not-found', {
    template: `
        <div class="events">
            <h2>404 Component</h2>
        </div>
    `,
    data: () => {
        return({
            events: events
        })
    }
});

const routes = [
    { path: '/news', component: EventLanding },
    { path: '/news/:id', component: EventDetail, props: true },
];

const router = new VueRouter({
    routes,
    mode: 'history'
});

var app = new Vue({
    el: '#events-app',
    router
});