import React from 'react';
import { createRoot } from 'react-dom/client';
import Menu from './components/Menu';
import data from './data/recipes.json';

const container = document.querySelector('.root');
const root = createRoot(container);
root.render(
  <React.StrictMode>
    <Menu recipes={data} />
  </React.StrictMode>
);
