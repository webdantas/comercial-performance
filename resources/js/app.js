import './bootstrap';

import { createApp } from 'vue';

import CaoUsuariosIndex from './components/CaoUsuariosIndex.vue';
import CaoUsuarioCreate from './components/CaoUsuarioCreate.vue';
import CaoUsuarioShow from './components/CaoUsuarioShow.vue';
import CaoUsuarioEdit from './components/CaoUsuarioEdit.vue';

const app = createApp({});

app.component('cao-usuarios-index', CaoUsuariosIndex);
app.component('cao-usuario-create', CaoUsuarioCreate);
app.component('cao-usuario-show', CaoUsuarioShow);
app.component('cao-usuario-edit', CaoUsuarioEdit);

app.mount('#app');
