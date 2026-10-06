import { createApp } from 'vue';
import ExampleComponent from './components/ExampleComponent.vue';

const app = createApp({});

app.component('example-component', ExampleComponent);

const root = document.getElementById('app');

if (root) {
    app.mount(root);
}
