import React from 'react'
import { MantineProvider } from '@mantine/core';
import { createRoot } from 'react-dom/client';
import {createInertiaApp} from '@inertiajs/inertia-react';

const container = document.getElementById('app');
const root = createRoot(container);

createInertiaApp({
    resolve: name => import(`./Pages/${name}/Index.jsx`),
    setup({el, App, props}) {
        root.render( <MantineProvider withGlobalStyles withNormalizeCSS>
            <App {...props} />
        </MantineProvider>);
    },
})
